function addToCartWithToast(productTitle, productPrice, productImage) {
  if (isItemInCart(productTitle)) {
    toastr.error("Item is already in the cart!");
  } else {
    addTocart(productTitle, productPrice, productImage);
    toastr.success("Added to cart!");
  }
  setTimeout(function () {
    toastr.clear();
  }, 1000);
}
function isItemInCart(productTitle) {
  var cartItems = document.getElementsByClassName("cart-item");
  for (var i = 0; i < cartItems.length; i++) {
    var titleElement = cartItems[i].getElementsByClassName("product-title")[0];
    if (titleElement.textContent === productTitle) {
      return true;
    }
  }
  return false;
}
var totalPrice = 0;
function toggleCart() {
  var cartAdded = document.getElementById("cartadded");
  cartAdded.style.display = (cartAdded.style.display === "block" || cartAdded.childNodes.length === 0) ? "none" : "block";
}

function addTocart(productTitle, productPrice, productImage) {
  var cartItems = document.getElementsByClassName("cart-item");
  for (var i = 0; i < cartItems.length; i++) {
    //product cha ki chaina herya 
    var titleElement = cartItems[i].getElementsByClassName("product-title")[0];
    var quantityElement = cartItems[i].getElementsByClassName("quantity")[0];
    //cha  bhane quantity increase
    if (titleElement.textContent === productTitle) {
      var quantity = parseInt(quantityElement.textContent.split(": ")[1]);
      quantity++;
      quantityElement.textContent = " " + quantity;
      totalPrice += parseFloat(productPrice);
      updateTotalPrice();
      return;
    }
  }

  var cartItem = document.createElement("div"); //naya div element banako
  cartItem.classList.add("cart-item"); //CSS class "cart-item" deko  to the cart item div.

  var itemContainer = document.createElement("div"); //div banako to contain the item details
  itemContainer.classList.add("item-container");
  var imageElement = document.createElement("img"); //img element banako
  imageElement.src = productImage;
  itemContainer.appendChild(imageElement);

  var detailsContainer = document.createElement("div"); // Create the details container
  detailsContainer.classList.add("details-container");

  var contentWrapper = document.createElement("div"); // Create the wrapper div
  contentWrapper.classList.add("content-wrapper");
  var titleElement = document.createElement("p"); // title
  titleElement.classList.add("product-title");
  titleElement.textContent = productTitle; // Set the title content
  var priceElement = document.createElement("p"); // price 
  priceElement.classList.add("price");
  priceElement.textContent = productPrice;
  contentWrapper.appendChild(titleElement);
  contentWrapper.appendChild(priceElement);

  detailsContainer.appendChild(contentWrapper);

  var buttonWrapper = document.createElement("div"); // Create the wrapper div
  buttonWrapper.classList.add("button-wrapper");

  var decreaseButton = document.createElement("button"); // decrease button
  decreaseButton.classList.add("decrease-button");
  decreaseButton.textContent = "-"; // Set the text content 
  var quantityElement = document.createElement("p"); //quantity element
  quantityElement.classList.add("quantity");
  quantityElement.textContent = "1"; // initial quantity content
  var increaseButton = document.createElement("button"); //  increase button
  increaseButton.classList.add("increase-button");
  increaseButton.textContent = "+"; // text content 

  buttonWrapper.appendChild(decreaseButton);
  buttonWrapper.appendChild(quantityElement);
  buttonWrapper.appendChild(increaseButton);

  detailsContainer.appendChild(buttonWrapper);

  cartItem.appendChild(itemContainer);
  cartItem.appendChild(imageElement);
  cartItem.appendChild(detailsContainer);

  var quantity = 1;

  function increaseQuantity() {
    quantity++;
    quantityElement.textContent = " " + quantity;
    priceElement.textContent = (parseFloat(productPrice) * quantity).toFixed(2);
    totalPrice += parseFloat(productPrice); // Increase 
    updateTotalPrice(); // Update 
  }
  function decreaseQuantity() {
    if (quantity > 1) {
      quantity--;
      quantityElement.textContent = " " + quantity;
      priceElement.textContent = (parseFloat(productPrice) * quantity).toFixed(2);
      totalPrice -= parseFloat(productPrice); // Decrease 
      updateTotalPrice(); // Update 
    } else {
      // Remove the cart item from the DOM
      cartItem.remove();
      totalPrice -= parseFloat(productPrice); // Decrease 
      updateTotalPrice(); // Update 
    }
  }

  increaseButton.addEventListener("click", increaseQuantity);
  decreaseButton.addEventListener("click", decreaseQuantity);

  // Add the price of the newly added product to the total price
  totalPrice += parseFloat(productPrice);

  document.getElementById("cartadded").appendChild(cartItem);

  updateTotalPrice(); // Update the displayed total price
  document.getElementById("cartadded").appendChild(buyNowButton);
}

function updateTotalPrice() {
  var totalPriceElement = document.getElementById("total-price");
  totalPriceElement.textContent = "Total Price: Rs " + totalPrice.toFixed(2);
  if (totalPrice === 0) {
    buyNowButton.style.display = "none";
    document.getElementById("cartadded").innerHTML = "<h3>Your Cart is Empty.</h3>";
  } else {
    buyNowButton.style.display = "block";
  }
}

var buyNowButton = document.createElement("button");
buyNowButton.classList.add("buy-now-button");
buyNowButton.textContent = "Buy Now";

buyNowButton.addEventListener("click", function () {
  var cartItems = document.getElementsByClassName("cart-item");
  while (cartItems.length > 0) {
    cartItems[0].remove();
  }
  totalPrice = 0;
  updateTotalPrice();
  toggleCart();
  // openESewaLink();
  toastr.success("Thank you for the purchase.");
  setTimeout(function () {
    toastr.clear();
  }, 5000);
  openESewaLink();
});

document.getElementById("cartadded").appendChild(buyNowButton);

function openESewaLink() {
  var eSewaURL = "https://esewa.com.np/#/home"; // Replace with the actual eSewa URL
  window.open(eSewaURL, "_blank"); // Open the eSewa link in a new tab/window
}