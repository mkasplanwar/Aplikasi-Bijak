<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>BIJAK - Bisnis dan Jaringan Konsultasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     <!-- Reset CSS - Import pertama -->
    <link rel="stylesheet" href="src/css/reset.css">

    <!-- Component CSS - Import setelahnya -->
    <link rel="stylesheet" href="src/css/navbar.css">
    <link rel="stylesheet" href="src/css/hero.css">
    <link rel="stylesheet" href="src/css/download.css">
    <link rel="stylesheet" href="src/css/fitur.css">
    <link rel="stylesheet" href="src/css/quote.css">
    <link rel="stylesheet" href="src/css/partners.css">
    <link rel="stylesheet" href="src/css/peringatan.css">
    <link rel="stylesheet" href="src/css/footer.css">

    <!-- Favicon untuk browser -->
    <link rel="icon" type="image/png" sizes="32x32" href="../design/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="../design/favicon/favicon.ico">
    
    <!-- Favicon untuk iOS -->
    <link rel="apple-touch-icon" sizes="180x180" href="../design/favicon/apple.png">
    <link rel="mask-icon" href="../design/favicon/favicon.svg" color="#1687A7">
    
    <!-- Favicon untuk Android -->
    <link rel="manifest" href="manifest.json">
    
    <!-- Meta tags untuk PWA -->
    <meta name="theme-color" content="#1687A7">
    <meta name="msapplication-TileColor" content="#1687A7">
    <meta name="application-name" content="BIJAK">
    <meta name="apple-mobile-web-app-title" content="BIJAK">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="BIJAK - Bisnis dan Jaringan Konsultasi">
    
    <style></style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../design/logo/navbar1.png" alt="BIJAK Logo">
        </div>
    
        <div class="nav-links">
            <div class="mobile-logo">
                <img src="../design/logo/navbar1.png" alt="BIJAK Logo">
            </div>
            
            <a href="#beranda">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#kontak">Hubungi Kami</a>
            <div class="auth-buttons">
                <button class="btn btn-konsultasi">Mulai Konsultasi</button>
            </div>

            <!-- Tambahkan footer text -->
            <div class="mobile-footer">
                <p>Created By M. Kaspul Anwar (230104040212)</p>
                <p>Powered By Antasari Programming Team</p>
            </div>
        </div>
    
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <!-- Pindahkan overlay ke dalam navbar -->
        <div class="overlay"></div>
    </nav>
    <section class="hero-section">
        <div class="bg-elements">
            <div class="bg-circle circle-1"></div>
            <div class="bg-circle circle-2"></div>
            <div class="dots-pattern"></div>
        </div>

        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="fas fa-star"></i>
                        Platform Bisnis Digital #1
                    </div>

                    <h1 class="hero-title">
                        Bijak <span class="highlight">Bersama</span><br> Sukses <span class="highlight">Bersama</span>
                    </h1>

                    <p class="hero-description">
                        Kami hadir untuk mendukung pelaku usaha dengan solusi konsultasi cerdas dan jaringan bisnis yang solid. Bersama BIJAK, raih kesuksesan dan tumbuhkan bisnis Anda dengan bijak.
                    </p>

                    <div class="stats-container">
                        <div class="stat-card">
                            <div class="stat-number">50,000+</div>
                            <div class="stat-label">Usaha Terdaftar</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">5,000+</div>
                            <div class="stat-label">Konsultan</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">38</div>
                            <div class="stat-label">Provinsi di Indonesia</div>
                        </div>
                    </div>

                    <div class="cta-group">
                        <a href="marketplace.html" class="btn btn-primary">
                            <!-- <i class="fas fa-user-plus"></i> -->
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Mulai Konsultasi
                        </a>
                        <a href="tentang.html" class="btn btn-secondary">
                            <i class="fa-solid fa-circle-info"></i>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>

                <div class="hero-image-container">
                    <img src="src/imgs/hero.jpg" 
                         alt="TaniKita Platform" 
                         class="hero-image">
                    
                    <div class="feature-card card-farmer">
                        <div class="feature-icon">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </div>
                        <div>
                            <h4>Jaringan Lebih Luas</h4>
                            <p>Kemitraan Tumbuh 75%</p>
                        </div>
                    </div>

                    <div class="feature-card card-delivery">
                        <div class="feature-icon">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div>
                            <h4>Konsultan Ahli</h4>
                            <p>Seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="order-guide">
         <!-- Background Elements -->
    <div class="guide-bg">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
        <div class="bg-shape shape-3"></div>
        <div class="bg-dots"></div>
    </div>

    <section class="bijak__apps">
        <div class="bijak__pattern"></div>
        <div class="bijak__apps-container">
            <div class="bijak__apps-grid">
                <!-- Business User Section -->
                <div class="bijak__app-section">
                    <span class="bijak__app-tag">Untuk Pelaku Usaha</span>
                    <h2 class="bijak__app-title">Kembangkan Bisnis Anda Bersama BIJAK</h2>
                    <p class="bijak__app-desc">
                        Akses berbagai fitur unggulan untuk mengelola dan mengembangkan Bisnis Anda.
                    </p>
                    <div class="bijak__app-preview">
                        <img src="../design/user-interface/home.svg" alt="BIJAK Business App Interface">
                    </div>
                    <a href="#download" class="bijak__download-btn">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Masuk Sebagai UMKM
                    </a>
                </div>

                <!-- Consultant Section -->
                <div class="bijak__app-section">
                    <span class="bijak__app-tag bijak__app-tag--consultant">Untuk Konsultan</span>
                    <h2 class="bijak__app-title">Jadilah Bagian dari Pertumbuhan UMKM</h2>
                    <p class="bijak__app-desc">
                        Platform khusus untuk memberikan layanan konsultasi berkualitas kepada pelaku UMKM
                    </p>
                    <div class="bijak__app-preview">
                        <img src="../design/user-interface/consultant.svg" alt="BIJAK Consultant App Interface">
                    </div>
                    <a href="#download" class="bijak__download-btn bijak__download-btn--consultant">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Masuk Sebagai Konsultan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bijak__features">
        <div class="bijak__features-container">
            <!-- Stats Header -->
            <div class="bijak__stats-header">
                <div class="bijak__stats-quote">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="bijak__stats-text">
                        Sekitar <span class="highlight">98,4% UMKM</span> di Indonesia mengalami kegagalan dalam lima tahun pertama usaha mereka. Kurangnya keterampilan manajerial yang memadai dapat menjadi penghalang bagi UMKM untuk merencanakan dan mengelola bisnis dengan baik.
                    </p>
                </div>
            </div>
    
            <!-- Features Grid -->
            <div class="bijak__features-grid">
                <!-- Smart Analytics Card -->
                <div class="bijak__feature-card">
                    <div class="bijak__feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="bijak__feature-content">
                        <h3 class="bijak__feature-title">Smart Analytics</h3>
                        <div class="bijak__feature-badge">Business Health Check</div>
                        <ul class="bijak__feature-list">
                            <li><i class="fas fa-check-circle"></i> Real-time business monitoring</li>
                            <li><i class="fas fa-check-circle"></i> Analisis keuangan otomatis</li>
                            <li><i class="fas fa-check-circle"></i> Prediksi & peringatan dini</li>
                            <li><i class="fas fa-check-circle"></i> Dashboard interaktif</li>
                        </ul>
                    </div>
                </div>
    
                <!-- Expert Connect Card -->
                <div class="bijak__feature-card featured">
                    <div class="bijak__feature-icon">
                        <i class="fas fa-users-gear"></i>
                    </div>
                    <div class="bijak__feature-content">
                        <h3 class="bijak__feature-title">Expert Connect</h3>
                        <div class="bijak__feature-badge">Konsultasi 24/7</div>
                        <ul class="bijak__feature-list">
                            <li><i class="fas fa-check-circle"></i> Akses ke konsultan profesional</li>
                            <li><i class="fas fa-check-circle"></i> Konsultasi on-demand</li>
                            <li><i class="fas fa-check-circle"></i> Smart matchmaking system</li>
                            <li><i class="fas fa-check-circle"></i> Sesi virtual fleksibel</li>
                        </ul>
                    </div>
                </div>
    
                <!-- Learning Hub Card -->
                <div class="bijak__feature-card">
                    <div class="bijak__feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="bijak__feature-content">
                        <h3 class="bijak__feature-title">Learning Hub</h3>
                        <div class="bijak__feature-badge">Pembelajaran Terstruktur</div>
                        <ul class="bijak__feature-list">
                            <li><i class="fas fa-check-circle"></i> Konten edukasi premium</li>
                            <li><i class="fas fa-check-circle"></i> Video tutorials & webinar</li>
                            <li><i class="fas fa-check-circle"></i> Studi kasus sukses</li>
                            <li><i class="fas fa-check-circle"></i> Learning path personal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section class="bijak__quote">
        <!-- Animated Mesh Background -->
        <div class="bijak__mesh-bg"></div>
        
        <div class="bijak__quote-container">
            <!-- Main Content Card -->
            <div class="bijak__content-card">
                <!-- Left Column - Author -->
                <div class="bijak__content-left">
                    <div class="bijak__author-profile">
                        <div class="bijak__author-image">
                            <img src="src/imgs/nadiem.jpg" alt="Nadiem Makarim">
                            <div class="bijak__image-backdrop"></div>
                        </div>
                        <div class="bijak__author-info">
                            <h3>Nadiem Anwar Makarim</h3>
                            <p>Menteri Pendidikan dan Kebudayaan RI</p>
                        </div>
                    </div>
                </div>
    
                <!-- Right Column - Quote -->
                <div class="bijak__content-right">
                    <!-- Badge -->
                    <div class="bijak__badge">
                        <svg width="16" height="16" viewBox="0 0 16 16" class="bijak__badge-icon">
                            <circle cx="8" cy="8" r="3" fill="currentColor"/>
                            <path d="M8 1v1M8 14v1M1 8h1M14 8h1M3 3l.7.7M12.3 12.3l.7.7M12.3 3l-.7.7M3 12.3l-.7.7" 
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span>Insight UMKM</span>
                    </div>
    
                    <!-- Quote Text -->
                    <div class="bijak__quote-text">
                        <div class="bijak__text-wrapper">
                            <span class="bijak__highlight-word">UMKM</span> 
                            <span class="bijak__text-content">
                                memainkan peran penting dalam menjaga keberagaman ekonomi, mendorong perkembangan sektor informal, dan memperkuat perekonomian lokal
                            </span>
                        </div>
                    </div>
    
                    <!-- Decorative Elements -->
                    <div class="bijak__decorative-shapes">
                        <div class="bijak__shape shape-1"></div>
                        <div class="bijak__shape shape-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="partners">
        <div class="partner-container">
            <div class="partners-header">
                <h2>Partner <span>Kami</span> </h2>
                <p>Berkolaborasi dengan berbagai institusi terpercaya</p>
            </div>
    
            <div class="partners-grid">
                <!-- Banking Partners -->
                <div class="partner-category banking">
                    <div class="category-label">Sektor Bank & Fintech</div>
                    <div class="logo-group">
                        <div class="partner-logo" >
                            <img src="src/imgs/bri.png" alt="Bank BRI">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/bca.png" alt="Bank BCA">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/bni.png" alt="Bank BNI">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/gopay.png" alt="gopay">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/qris.png" alt="qris">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/jago.png" alt="bank Jago">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/bibit.png" alt="bibit">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/mandiri.png" alt="Mandiri">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/bitcoin.png" alt="Bitcoin">
                        </div>
                    </div>
                </div>
                <div class="partner-category payment">
                    <div class="category-label">Sektor Teknologi & Industri</div>
                    <div class="logo-group">
                        <div class="partner-logo" >
                            <img src="src/imgs/telkomsel.png" alt="Telkomsel">
                        </div>
                        
                        <div class="partner-logo" >
                            <img src="src/imgs/traveloka.png" alt="Traveloka">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/tanikita.png" alt="TaniKita">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/bukitasam.png" alt="Bukit Asam">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/gojek.png" alt="Gojek">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/adaro.png" alt="Adaro">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/mekari.png" alt="Mekari">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/tokopedia.png" alt="Gojek">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/microstrategy.png" alt="Microstrategy">
                        </div>
                    </div>
                </div>
    
                <!-- StarupTech Partners -->
                <div class="partner-category logistics">
                    <div class="category-label">Sektor Retail & Konsumen</div>
                    <div class="logo-group">
                        <div class="partner-logo" >
                            <img src="src/imgs/alfamart.png" alt="Alfamart">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/indomaret.png" alt="Indomaret">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/unilever.png" alt="Unilever">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/nestle.png" alt="Nestle">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/hm.jpeg" alt="h&m">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/starbuck.png" alt="Starbuck">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/mcdonald.png" alt="McDonald">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/informa.png" alt="Informa">
                        </div>
                        <div class="partner-logo" >
                            <img src="src/imgs/kfc.png" alt="KFC">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="partners-stats">
                <div class="stat-item">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">Partner Aktif</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">38</span>
                    <span class="stat-label">Provinsi</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10M+</span>
                    <span class="stat-label">Transaksi</span>
                </div>
            </div>
        </div>
    </section>
    <section class="bijak__disclaimer">
        <div class="bijak__disclaimer-container">
            <!-- Floating Elements -->
            <div class="bijak__disclaimer-shapes">
                <div class="bijak__shape bijak__shape--1"></div>
                <div class="bijak__shape bijak__shape--2"></div>
                <div class="bijak__shape bijak__shape--3"></div>
            </div>
    
            <!-- Main Content -->
            <div class="bijak__disclaimer-content">
                <div class="bijak__disclaimer-header">
                    <div class="bijak__header-wrapper">
                        <div class="bijak__disclaimer-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="12" cy="16" r="1" fill="currentColor"/>
                            </svg>
                        </div>
                        <span class="bijak__disclaimer-badge">Disclaimer</span>
                    </div>
                </div>
    
                <div class="bijak__disclaimer-body">
                    <h2 class="bijak__disclaimer-title">Informasi Penting</h2>
                    <div class="bijak__disclaimer-text">
                        <p>BIJAK merupakan sebuah projek mata kuliah:</p>
                        <ul class="bijak__disclaimer-list">
                            <li>Rekayasa Perangkat Lunak</li>
                            <li>Manajemen Proyek Teknologi Informasi</li>
                        </ul>
                        <p class="bijak__disclaimer-highlight">BIJAK BELUM BEROPERASI SECARA KOMERSIL</p>
                        <p class="bijak__disclaimer-note"><STrong>Apa yang tertera hanya bagian dari desain semata bukan dengan tujuan tertentu</STrong></p>
                    </div>
                </div>
    
                <div class="bijak__disclaimer-footer">
                    <span class="bijak__disclaimer-date">Last Updated: January 06, 2025 <br><br>M. Kaspul Anwar (230104040212)</span>
                </div>
            </div>
        </div>
    </section>
    
    
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Brand Section -->
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="../design/logo/navbar1.png" alt="BIJAK Logo">
                        <p class="brand-description">BIJAK adalah platform konsultasi bisnis yang mempertemukan pelaku UMKM dengan konsultan bisnis.</p>
                        <p class="footer-motto">"Bijak Bersama, Sukses Bersama"</p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Home</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>About Us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Disclaimer</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Syarat dan Ketentuan</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jl. kelayan raya, Block B, South District 525436</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@bijak.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon - Fri: 9:00 AM - 5:00 PM</span>
                        </li>
                    </ul>
                </div>

                <!-- Download App Section -->
                <div class="footer-section">
                    <h3>Download Our App</h3>
                    <p class="app-description">Get our mobile app for a seamless experience</p>
                    <div class="store-buttons">
                        <a href="#" class="store-button">
                            <i class="fab fa-google-play"></i>
                            <div class="store-text">
                                <span class="small-text">GET IT ON</span>
                                <span class="big-text">Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="store-button">
                            <i class="fab fa-apple"></i>
                            <div class="store-text">
                                <span class="small-text">GET IT ON</span>
                                <span class="big-text">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan kode HTML ini sebelum footer-bottom -->
            <div class="partner-section">
                <h3>Our Technology Partner</h3>
                <div class="powered-wrapper">
                    <div class="powered-content">
                        <div class="powered-logo">
                            <img src="../design/logo/apt.png" alt="APT Logo">
                        </div>
                        <div class="powered-text">
                            <span class="powered-label">Proudly Powered By</span>
                            <span class="powered-name">Antasari Programming Team</span>
                        </div>
                    </div>
                    
                    <div class="creator-info">
                        <i class="fas fa-code-branch"></i>
                        <div class="creator-text">
                            <span class="creator-label">Developed with ❤️ by</span>
                            <span class="creator-name">M. Kaspul Anwar 230104040212</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
           <!-- Ganti bagian Footer Bottom dengan yang baru -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 BIJAK. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="src/js/navbar.js"></script>
    <script src="src/js/quote.js"></script>
    <script src="src/js/partner.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

    AOS.init({
        duration: 800,
        once: true
    });
    </script>
</body>
</html>