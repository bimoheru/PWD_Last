let slideIndex = 1;
        showSlides(slideIndex);

        // Fungsi untuk maju/mundur slide
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Fungsi utama untuk menampilkan slide
        function showSlides(n) {
            const slides = document.getElementById('carouselSlide');
            const totalSlides = slides.children.length;

            // Handle looping (kembali ke awal atau akhir)
            if (n > totalSlides) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = totalSlides;
            }

            // Hitung seberapa jauh harus digeser
            const offset = (slideIndex - 1) * 100;

            // Terapkan pergeseran menggunakan properti CSS transform
            slides.style.transform = `translateX(-${offset}%)`;
        }
        