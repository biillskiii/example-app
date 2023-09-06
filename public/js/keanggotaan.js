document.addEventListener("DOMContentLoaded", function () {
    // Function to show photos of the selected category
    function showPhotos(category) {
        const photos = document.querySelectorAll(".img-container");
        photos.forEach(function (photo) {
            if (photo.dataset.category === category || category === "All") {
                photo.style.display = "block";
            } else {
                photo.style.display = "none";
            }
        });
    }

    // Add click event listeners to list items
    const listItems = document.querySelectorAll(".list-divisi ul li");
    listItems.forEach(function (item) {
        item.addEventListener("click", function (event) {
            event.preventDefault();
            const selectedCategory = item.dataset.category; // Use the 'data-category' attribute value
            showPhotos(selectedCategory);
        });
    });
    // // Mendapatkan elemen ikon panah
    // const arrowIcon = document.querySelector(".fas");

    // // Mendapatkan elemen dropdown menu
    // const dropdownMenu = document.querySelector(".list-divisi .menu");

    // // Variabel untuk melacak status dropdown
    // let isDropdownVisible = false;

    // // Fungsi untuk mengubah status dropdown dan mengatur tampilan CSS
    // function toggleDropdown() {
    //     if (isDropdownVisible) {
    //         dropdownMenu.style.display = "none";
    //     } else {
    //         dropdownMenu.style.display = "block";
    //     }
    //     isDropdownVisible = !isDropdownVisible;
    // }

    // // Menambahkan event listener ke ikon panah
    // arrowIcon.addEventListener("click", toggleDropdown);

    // // Inisialisasi status dropdown saat halaman dimuat
    // window.addEventListener("load", function () {
    //     dropdownMenu.style.display = "none";
    // });

});
