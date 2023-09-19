document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', performSearch);
    function performSearch() {
        console.clear();
        const searchTerm = searchInput.value.toLowerCase();
        const items = [
            { title: 'Floral Tops', price: 99, image: 'img/floraltops.webp' },
            { title: 'Basic Everyday Top', price: 150, image: 'img/floraltop2.avif' },
            { title: 'Crop Top', price: 110, image: 'img/floraltop3.avif' },
            { title: 'Casual Off Shoulder', price: 113, image: 'img/floraltop4.avif' },
            { title: 'Casual Sandals', price: 100, image: 'img/shoe1.webp' },
            { title: 'Wedge Shoes', price: 80, image: 'img/shoe4.jpg' },
            { title: 'Korean Slippers', price: 89, image: 'img/shoe3.jpg' },
            { title: 'Lace up High Heels', price: 44, image: 'img/shoe2.jpg' },
            { title: 'Stylish bracelet', price: 34, image: 'img/bracelet.jpg' },
            { title: 'Sterling Silver', price: 50, image: 'img/bracelet2.webp' },
            { title: 'Daisy Crystal Beads', price: 60, image: 'img/bracelet3.jpg' },
            { title: 'Pandora Charms', price: 29, image: 'img/bracelet4.webp' }
        ];
        const filteredItems = items.filter(item =>
            item.title.toLowerCase().includes(searchTerm)
        );
        filteredItems.forEach(item => {
            console.log('Title:', item.title);
            console.log('Price:', item.price);
            console.log('Image:', item.image);
            console.log('------------');
        });
    }
});
