<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungan Akrab</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h1>Hubungan Akrab</h1>
    </header>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <main>
        <div class="carousel-container">
            <img class="carousel-slide active" src="index1.jpg" alt="Slide 1">
            <img class="carousel-slide" src="index2.jpg" alt="Slide 2">
            <img class="carousel-slide" src="index3.jpg" alt="Slide 3">
            <!-- Add more images as needed -->
        </div>
        <section>
            <h2>Tentang Kami</h2>
            <p>Selamat datang di situs web yang didedikasikan untuk membangun hubungan pelanggan yang kuat! Di sini, Anda akan menemukan sumber daya berharga untuk membantu bisnis Anda berkembang dengan berfokus pada kepuasan pelanggan.</p>
        </section>
        <section>
            <h2>Layanan</h2>
            <p>Hubungan Akrab menyediakan berbagai layanan untuk membantu Anda dalam meningkatkan penjualan, membangun loyalitas brand, dan memastikan kesuksesan bisnis Anda jangka panjang. Mulailah jelajahi situs web kami hari ini dan temukan bagaimana Anda dapat membawa hubungan pelanggan Anda ke tingkat yang lebih tinggi!.</p>
        </section>
        <section>
            <h2>Kontak</h2>
            <p>Silakan hubungi kami melalui email di <a href="@hubunganakrab.com">hubunganakrab.com</a> atau melalui telepon di 123-456-7890.</p>
        </section>
    </main>
    <footer>
        <p>Hak Cipta &copy; 2024 Hubungan Akrab</p>
    </footer>

    <script>
        // Menambahkan fungsi klik pada elemen header
        const header = document.querySelector('header');
        header.addEventListener('click', function () {
            alert('Anda mengklik header!');
        });
    </script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.querySelectorAll('.carousel-slide');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>
