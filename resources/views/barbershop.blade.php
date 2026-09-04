<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GENTLEMAN BARBERSHOP</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #0d0d0d;
            color: #fff;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(13, 13, 13, .94);
            border-bottom: 1px solid #222;
        }

        .logo {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .logo span {
            color: #c59d5f;
        }

        nav ul {
            display: flex;
            gap: 35px;
            list-style: none;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: .3s;
        }

        nav a:hover {
            color: #c59d5f;
        }

        .nav-button {
            padding: 12px 20px;
            border: 1px solid #c59d5f;
            color: #c59d5f !important;
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 7% 70px;
            background:
                linear-gradient(90deg, rgba(0,0,0,.9), rgba(0,0,0,.45)),
                url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1800&q=85')
                center/cover;
        }

        .hero-content {
            max-width: 700px;
        }

        .small-title {
            color: #c59d5f;
            letter-spacing: 4px;
            font-size: 14px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(48px, 7vw, 88px);
            line-height: 1;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #c59d5f;
        }

        .hero p {
            color: #ccc;
            line-height: 1.8;
            max-width: 580px;
            margin-bottom: 35px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 15px 28px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: .3s;
        }

        .btn-primary {
            background: #c59d5f;
            color: #111;
        }

        .btn-primary:hover {
            background: #e0b975;
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 1px solid #fff;
            color: #fff;
        }

        .btn-outline:hover {
            border-color: #c59d5f;
            color: #c59d5f;
        }

        /* GENERAL */
        section {
            padding: 100px 7%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-title small {
            color: #c59d5f;
            letter-spacing: 3px;
            font-weight: 700;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 45px;
            margin-top: 10px;
        }

        .section-title p {
            color: #999;
            margin-top: 15px;
        }

        /* SERVICES */
        .services {
            background: #121212;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            padding: 35px;
            background: #1a1a1a;
            border: 1px solid #292929;
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
            border-color: #c59d5f;
        }

        .service-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #999;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .price {
            color: #c59d5f;
            font-size: 20px;
            font-weight: 700;
        }

        /* ABOUT */
        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .about-image {
            height: 500px;
            background:
                url('https://images.unsplash.com/photo-1622288432450-277d0fef5ed6?auto=format&fit=crop&w=1000&q=85')
                center/cover;
        }

        .about-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: 45px;
            margin: 12px 0 25px;
        }

        .about-text p {
            color: #aaa;
            line-height: 1.9;
            margin-bottom: 18px;
        }

        .gold-line {
            width: 70px;
            height: 3px;
            background: #c59d5f;
        }

        /* BARBERS */
        .barbers {
            background: #121212;
        }

        .barber-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .barber {
            background: #1a1a1a;
            text-align: center;
            padding-bottom: 25px;
        }

        .barber img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .barber h3 {
            margin-top: 20px;
        }

        .barber p {
            color: #c59d5f;
            font-size: 13px;
            margin-top: 8px;
        }

        /* GALLERY */
        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .gallery img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            filter: grayscale(20%);
            transition: .3s;
        }

        .gallery img:hover {
            filter: grayscale(0);
            transform: scale(1.02);
        }

        /* BOOKING */
        .booking {
            background: #c59d5f;
            color: #111;
            text-align: center;
        }

        .booking h2 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            margin-bottom: 15px;
        }

        .booking p {
            margin-bottom: 30px;
        }

        .booking .btn {
            background: #111;
            color: #fff;
        }

        /* FOOTER */
        footer {
            padding: 60px 7% 25px;
            background: #080808;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            padding-bottom: 40px;
            border-bottom: 1px solid #222;
        }

        footer h3 {
            margin-bottom: 18px;
        }

        footer p,
        footer li {
            color: #888;
            line-height: 1.9;
            font-size: 14px;
        }

        footer ul {
            list-style: none;
        }

        .copyright {
            text-align: center;
            color: #666;
            padding-top: 25px;
            font-size: 13px;
        }

        /* MOBILE */
        @media (max-width: 900px) {
            nav ul {
                display: none;
            }

            .service-grid,
            .barber-grid {
                grid-template-columns: 1fr 1fr;
            }

            .about {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 600px) {
            nav {
                padding: 18px 5%;
            }

            .hero {
                padding: 120px 5% 60px;
            }

            section {
                padding: 70px 5%;
            }

            .service-grid,
            .barber-grid,
            .gallery {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 350px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 52px;
            }

            .section-title h2 {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">GENTLEMAN<span>.</span></div>

    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Layanan</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#barbers">Barber</a></li>
        <li><a href="#gallery">Galeri</a></li>
    </ul>

    <a href="#booking" class="nav-button">BOOKING</a>
</nav>


<!-- HERO -->
<section class="hero" id="home">

    <div class="hero-content">

        <div class="small-title">
            PREMIUM BARBERSHOP
        </div>

        <h1>
            Your Style.<br>
            Your <span>Identity.</span>
        </h1>

        <p>
            Tampil lebih percaya diri dengan potongan rambut
            terbaik dari barber profesional kami.
            Nikmati pengalaman grooming premium dalam suasana
            yang nyaman dan maskulin.
        </p>

        <div class="buttons">
            <a href="#booking" class="btn btn-primary">
                BOOKING SEKARANG
            </a>

            <a href="#services" class="btn btn-outline">
                LIHAT LAYANAN
            </a>
        </div>

    </div>

</section>


<!-- SERVICES -->
<section class="services" id="services">

    <div class="section-title">
        <small>OUR SERVICES</small>
        <h2>Layanan Kami</h2>
        <p>Pilihan layanan terbaik untuk penampilan maksimal.</p>
    </div>

    <div class="service-grid">

        <div class="service-card">
            <div class="service-icon">✂️</div>
            <h3>Classic Haircut</h3>
            <p>
                Potongan klasik dengan teknik profesional
                yang cocok untuk berbagai bentuk wajah.
            </p>
            <div class="price">Rp 45.000</div>
        </div>

        <div class="service-card">
            <div class="service-icon">💈</div>
            <h3>Premium Haircut</h3>
            <p>
                Haircut premium lengkap dengan konsultasi
                gaya dan finishing terbaik.
            </p>
            <div class="price">Rp 65.000</div>
        </div>

        <div class="service-card">
            <div class="service-icon">🪒</div>
            <h3>Haircut & Shave</h3>
            <p>
                Kombinasi haircut dan traditional hot towel
                shave untuk pengalaman grooming maksimal.
            </p>
            <div class="price">Rp 85.000</div>
        </div>

        <div class="service-card">
            <div class="service-icon">🔥</div>
            <h3>Beard Styling</h3>
            <p>
                Rapikan dan bentuk janggut agar terlihat
                lebih rapi, tegas dan maskulin.
            </p>
            <div class="price">Rp 35.000</div>
        </div>

        <div class="service-card">
            <div class="service-icon">💆</div>
            <h3>Hair Wash</h3>
            <p>
                Keramas dan scalp massage untuk membuat
                kepala lebih rileks.
            </p>
            <div class="price">Rp 25.000</div>
        </div>

        <div class="service-card">
            <div class="service-icon">👑</div>
            <h3>Gentleman Package</h3>
            <p>
                Paket lengkap haircut, shave, hair wash
                dan styling.
            </p>
            <div class="price">Rp 120.000</div>
        </div>

    </div>

</section>


<!-- ABOUT -->
<section class="about" id="about">

    <div class="about-image"></div>

    <div class="about-text">

        <div class="gold-line"></div>

        <h2>More Than Just<br>A Haircut.</h2>

        <p>
            Gentleman Barbershop hadir untuk memberikan
            pengalaman grooming yang berbeda.
        </p>

        <p>
            Kami percaya bahwa rambut bukan hanya tentang
            penampilan, tetapi juga bagian dari identitas
            dan kepercayaan diri setiap pria.
        </p>

        <p>
            Dengan barber berpengalaman, produk berkualitas,
            dan suasana premium, kami siap membantu Anda
            menemukan style terbaik.
        </p>

        <a href="#booking" class="btn btn-primary">
            BUAT JANJI
        </a>

    </div>

</section>


<!-- BARBERS -->
<section class="barbers" id="barbers">

    <div class="section-title">
        <small>OUR BARBERS</small>
        <h2>Meet The Team</h2>
        <p>Barber profesional untuk style terbaik Anda.</p>
    </div>

    <div class="barber-grid">

        <div class="barber">
            <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=800&q=85">
            <h3>Rizky</h3>
            <p>MASTER BARBER</p>
        </div>

        <div class="barber">
            <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=800&q=85">
            <h3>Andi</h3>
            <p>SENIOR BARBER</p>
        </div>

        <div class="barber">
            <img src="https://images.unsplash.com/photo-1593702295094-aea8c7e90f71?auto=format&fit=crop&w=800&q=85">
            <h3>Fajar</h3>
            <p>BARBER</p>
        </div>

    </div>

</section>


<!-- GALLERY -->
<section id="gallery">

    <div class="section-title">
        <small>OUR WORK</small>
        <h2>Style Gallery</h2>
        <p>Beberapa hasil karya barber kami.</p>
    </div>

    <div class="gallery">

        <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=800&q=85">

        <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=800&q=85">

        <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=800&q=85">

        <img src="https://images.unsplash.com/photo-1622288432450-277d0fef5ed6?auto=format&fit=crop&w=800&q=85">

    </div>

</section>


<!-- BOOKING -->
<section class="booking" id="booking">

    <h2>Ready For A Fresh Look?</h2>

    <p>
        Booking sekarang dan dapatkan pengalaman grooming terbaik.
    </p>

    <a
        href="https://wa.me/6281234567890?text=Halo%20Gentleman%20Barbershop,%20saya%20ingin%20booking."
        class="btn"
        target="_blank"
    >
        BOOKING VIA WHATSAPP
    </a>

</section>


<!-- FOOTER -->
<footer>

    <div class="footer-grid">

        <div>
            <h3>GENTLEMAN.</h3>
            <p>
                Premium barbershop untuk pria yang ingin
                tampil percaya diri dan stylish.
            </p>
        </div>

        <div>
            <h3>CONTACT</h3>

            <ul>
                <li>📍 Jl. Sudirman No. 123</li>
                <li>📞 0812-3456-7890</li>
                <li>✉️ hello@gentleman.com</li>
            </ul>
        </div>

        <div>
            <h3>OPENING HOURS</h3>

            <ul>
                <li>Senin - Jumat: 10.00 - 21.00</li>
                <li>Sabtu - Minggu: 09.00 - 22.00</li>
            </ul>
        </div>

    </div>

    <div class="copyright">
        © 2026 Gentleman Barbershop. All Rights Reserved.
    </div>

</footer>

</body>
</html>
