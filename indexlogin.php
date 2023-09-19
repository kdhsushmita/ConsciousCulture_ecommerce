<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\logo.PNG" type="image/x-icon">
    <title>Know Everything About Conscious Culture</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="fontawesome\css\all.min.css"> 
    <link rel="stylesheet" href="fontawesome\css\fontawesome.min.css"> 
    <!-- toaster -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <!-- style -->
     <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\addtocart.css">
    <!-- javascripts -->
    <script src="javascripts/addtocart.js"></script>
    <script src="javascripts/search.js"></script>
</head>
<body>
     <header>
        <div class="header-left">
            <a href="#">ConsciousCart</a>
            <div class="header-left-p">
                <p>
                    <a href="#">Explore</a> <span><b><i>Now</i></b></span>
                </p>
            </div>
        </div>
        <div class="header-center">
            <input id="searchInput" class="header-center-input" type="text" placeholder="Search For Product,Brand and more"><i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="more" >
           <span class="more_lan">More <i class="fa-solid fa-angle-down"></i></span>
              <div class="more_dropdown none">
                <div class="pointer more_pointer"></div>
                <ul class="more_dropdown_list">
                    <li class="login_drop_li"><i class="more_icon fa fa-shopping-basket"></i>&nbsp; Sell On ConsciousCart</li>
                    <li class="login_drop_li"><i class="more_icon fa fa-download"></i>&nbsp; Download App</li>  
                </ul>
            </div> 
        </div>
        <span class="cart_lan" onclick="toggleCart()"> <i class="fa-solid fa-cart-shopping"></i>  CART</span>
        <div id="cartadded">
                <div id="cart"></div>
               <h3 id="total-price"><center> Your Cart is Empty. </center></h3>
        </div>
        <div class="login">
        <a href="indexlogout.php" class="login_btn">Logout</a>
        </div> 
    </header>   
    <div class="banner">
        <div class="slider">
        <img src="img\august 20-23.png" alt="">
            <img src="img\braceletbann.jpg" alt="">  
            <img src="img\img7.png" alt="">  
            <img src="img\img6.png" alt=""> 
            <img src="img\img9.png" alt="">  
            <img src="img\sale.png" alt="">  
            <img src="img\img8.png" alt=""> 
            <img src="img\image3.png" alt=""> 
            <img src="img\img6.png" alt="">
            <img src="img\img5.png" alt=""> 
            <img src="img\img7.png" alt="">  
            <img src="img\img6.png" alt=""> 
            <img src="img\braceletbann.jpg" alt=""> 
        </div>
    </div>
    <section>
        <div class="card">
            <div class="common-heading">
                <div class="common-heading-left">
                    <h1>Summer Essentials</h1> <i class="fa-solid fa-timer"></i>
                </div>
            </div>
            <div class="common-row-col-deals">
                <div class="common-col">
                    <img src="img\floraltops.webp" alt="" class="product-img">
                    <h3 class="product-title">Floral Tops</h3>
                    <h4>Upto 80% off</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 99</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart"  onclick="addToCartWithToast('Floral Tops', '99', 'img/floraltops.webp')"></i>
                </div>
                <div class="common-col">
                    <img src="img\floraltop2.avif" alt="" class="product-img">
                    <h3 class="product-title">Basic Everyday Top</h3>
                    <h4>Starts from Rs 59</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 150</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Basic Everyday Top', ' 59', 'img/floraltop2.avif')"></i>
                </div>
                <div class="common-col">
                    <img src="img\floraltop3.avif" alt="" class="product-img">
                    <h3 class="product-title">Crop Top</h3>
                    <h4>Extra 10% off</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 110</h6>   
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Crop Top', '110', 'img/floraltop3.avif')"></i>
                </div>
                <div class="common-col">
                    <img src="img\floraltop4.avif" alt="" class="product-img">
                    <h3 class="product-title">Casual Off Shoulder</h3>
                    <h4>Min 10% off + extra 15% off*</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 113</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Casual Off Shoulder', '113', 'img/floraltop4.avif')"></i>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="common-heading">
                <div class="common-heading-left">
                    <h1>Sandals,Slippers & Flip-Flops</h1> <i class="fa-solid fa-timer"></i>
                </div>
            </div>
            <div class="common-row-col-deals">
                <div class="common-col">
                    <img src="img\shoe1.webp" alt="" class="product-img">
                    <h3 class="product-title">Casual Sandals</h3>
                    <h4>Upto 80% off</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 100</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Casual Sandals', '100', 'img/shoe1.webp')"></i>
                </div>
                <div class="common-col">
                    <img src="img\shoe4.jpg" alt="" class="product-img">
                    <h3 class="product-title">Wedge Shoes</h3>
                    <h4>Starts from Rs 50</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 80</h6>   
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Wedge Shoes', '80', 'img/shoe4.jpg')"></i> 
                </div>
                <div class="common-col">
                    <img src="img\shoe3.jpg" alt="" class="product-img">
                    <h3 class="product-title">Korean Slippers</h3>
                    <h4>Min 10% off + extra 15% off*</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 89</h6>   
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Korean Slippers', '89', 'img/shoe3.jpg')"></i>
                </div>
                <div class="common-col">
                    <img src="img\shoe2.jpg" alt="" class="product-img">
                    <h3 class="product-title">Lace up High Heels</h3>
                    <h4>Extra 10% off</h4>
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 44</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Lace up High Heels', '44', 'img/shoe2.jpg')"></i>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="common-heading">
                <div class="common-heading-left">
                    <h1>Bracelets</h1> <i class="fa-solid fa-timer"></i>
                </div>
            </div>
            <div class="common-row-col-deals">
                <div class="common-col">
                    <img src="img\bracelet.jpg" alt="" class="product-img">
                    <h3 class="product-title">Stylish bracelet</h3>
                    <h4>Extra 10% off</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 34</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Stylish bracelet', '34', 'img/bracelet.jpg')"></i>
                </div>
                <div class="common-col">
                    <img src="img\bracelet2.webp" alt="" class="product-img">
                    <h3 class="product-title">Sterling Silver</h3>
                    <h4>Min 10% off + extra 15% off*</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 50</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Sterling Silver', '50', 'img/bracelet2.webp')"></i>
                </div>
                <div class="common-col">
                    <img src="img\bracelet3.jpg" alt="" class="product-img">
                    <h3 class="product-title">Daisy Crystal Beads</h3>
                    <h4>Upto 80% off</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 60</h6>   
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Daisy Crystal Beads', '60', 'img/bracelet3.jpg')"></i>
                </div>
                <div class="common-col">
                    <img src="img\bracelet4.webp" alt="" class="product-img">
                    <h3 class="product-title">Pandora Charms</h3>
                    <h4>Starts from Rs 29</h4> 
                    <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 43</h6>
                    <i class="fa-solid fa-bag-shopping" id="add-cart" onclick="addToCartWithToast('Pandora Charms', '43', 'img/bracelet4.webp')"></i>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-row1">
            <div class="footer-col-1">
                <div class="footer-heading">
                    <p>ABOUT</p>
                </div>
                <div class="footer-list">
                    <a href="#">Contact Us</a>
                    <a href="#">About Us</a>
                    <a href="#">Stories</a>
                    <a href="#">Careers</a>
                </div>
            </div>
            <div class="footer-col-2">
                <div class="footer-heading">
                    <p>HELP</p>
                </div>
                <div class="footer-list">
                    <a href="#">Payment</a>
                    <a href="#">Shipping</a>
                    <a href="#">Cancellation & Returns</a>
                    <a href="#">FAQs</a>
                </div>
            </div>
            <div class="footer-col-3">
                <div class="footer-heading">
                    <p>POLICY</p>
                </div>
                <div class="footer-list">
                    <a href="#">Return Policy </a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Security</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
            <div class="footer-col-4">
                <div class="footer-heading">
                    <p>SOCIAL</p>
                </div>
                <div class="footer-list">
                    <a href="https://www.facebook.com" target="_blank">Facebook</a>
                    <a href="https://twitter.com" target="_blank">Twitter</a>
                    <a href="https://www.instagram.com" target="_blank">Instagram</a>
                    <a href="https://www.tiktok.com" target="_blank">Tiktok</a>
                    <a href="https://www.messenger.com" target="_blank">Messenger</a>
                    <a href="https://www.youtube.com" target="_blank">Youtube</a>
                    <a href="https://www.pathao.com" target="_blank">Pathao</a>
                </div>
            </div>
        </div>
        <div class="footer-row2">
                <div class="footer-row2-col">
                    <p><i class="fa-solid fa-bag-shopping"></i>&nbsp; Sell on Conscious Cart</p>
                </div>
                <div class="footer-row2-col">
                    <p><i class="fa-solid fa-rectangle-ad"></i>&nbsp; Advertise</p>
                </div>
                <div class="footer-row2-col">
                    <p><i class="fa-solid fa-gift"></i>&nbsp; Gift Cards</p>
                </div>
                <div class="footer-row2-col">
                    <p><i class="fa-solid fa-circle-question"></i>&nbsp; Help Center</p>
                </div>
                <div class="footer-row2-col">
                    <p>&copy; 2007-2021 ConsciousCart.com</p>
                </div>
                <div class="footer-row2-col">
                    <img src="img\payment.svg" alt="">
                </div>             
        </div>
    </footer>
</body>
</html>