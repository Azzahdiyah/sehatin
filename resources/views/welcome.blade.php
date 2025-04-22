<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SEHATIN - Sistem Informasi Manajemen Kesehatan Terintegrasi untuk Dokter dan Pasien</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto: support@websehatin.id"> support@websehatin.id</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>+62 812 3456 7890</span>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="linkedin">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Sehatin</h1>
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li>
                            <a href="#hero" class="active">
                                Beranda
                                <br>
                            </a>
                        </li>
                        <li>
                            <a href="#tentang-kami">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#layanan">Layanan</a>
                        </li>
                        <li>
                            <a href="#fitur">Fitur</a>
                        </li>
                        <li>
                            <a href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                <a class="cta-btn d-none d-sm-block" href="/login">Login</a>
            </div>
        </div>
    </header>
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
            <div class="container position-relative">
                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>SELAMAT DATANG DI WEB SEHATIN</h2>
                    <p>Sistem Informasi Manajemen Kesehatan Terintegrasi untuk Dokter dan Pasien</p>
                </div>
                <!-- End Welcome -->
                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Mengapa Memilih Web Sehatin?</h3>
                            <p>
                                Web Sehatin membantu digitalisasi layanan kesehatan dengan fitur lengkap dan mudah
                                digunakan. Cocok untuk kebutuhan dokter dan pasien agar layanan kesehatan lebih cepat,
                                tepat, dan aman.
                            </p>
                            <div class="text-center">
                                <a href="#tentang-kami" class="more-btn">
                                    <span>Pelajari Lebih Lanjut</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Why Box -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-capsule"></i>
                                        <h4>Manajemen Obat</h4>
                                        <p>Dokter dapat menambahkan, melihat, mengedit, dan menghapus data obat secara
                                            efisien (CRUD).</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-clipboard-check"></i>
                                        <h4>Pemeriksaan Pasien</h4>
                                        <p>Dokter dapat melihat dan memperbarui hasil pemeriksaan pasien secara
                                            terstruktur.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                        <i class="bi bi-person-lines-fill"></i>
                                        <h4>Pendaftaran Periksa</h4>
                                        <p>Pasien dapat membuat permintaan periksa dan memantau riwayat pemeriksaan
                                            secara mandiri.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End  Content-->
            </div>
        </section>
        <!-- /Hero Section -->
        <!-- About Section -->
        <section id="tentang-kami" class="about section">
            <div class="container">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="Tentang Web Sehatin">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Web Sehatin</h3>
                        <p>
                            Web Sehatin adalah Sistem Informasi Manajemen Kesehatan yang dirancang untuk membantu proses
                            pelayanan medis secara digital antara dokter dan pasien. Platform ini menyediakan fitur yang
                            memudahkan dokter dalam mengelola data obat dan hasil pemeriksaan, serta memberikan
                            kemudahan bagi pasien untuk melakukan pendaftaran dan melihat riwayat pemeriksaan.
                        </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>Manajemen Obat oleh Dokter</h5>
                                    <p>Dokter dapat melakukan tambah, ubah, hapus, dan melihat data obat untuk mendukung
                                        proses pengobatan pasien secara akurat.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-pump-medical"></i>
                                <div>
                                    <h5>Pemeriksaan Pasien oleh Dokter</h5>
                                    <p>Dokter dapat melihat dan memperbarui hasil pemeriksaan pasien dengan mudah dan
                                        terorganisir.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-heart-circle-xmark"></i>
                                <div>
                                    <h5>Pengajuan Pemeriksaan oleh Pasien</h5>
                                    <p>Pasien dapat mendaftarkan diri untuk diperiksa dan memantau hasil pemeriksaan
                                        secara online kapan pun dibutuhkan.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->
        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dokter Terdaftar</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-users"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="320" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pasien Aktif</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Obat Tersedia</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-stethoscope"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="210" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pemeriksaan Selesai</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- /Stats Section -->
        <!-- Bagian Layanan -->
        <section id="layanan" class="services section">
            <!-- Judul Bagian -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p>Web Sehatin hadir sebagai solusi digital untuk memudahkan proses pelayanan kesehatan antara dokter
                    dan pasien.</p>
            </div>
            <!-- Akhir Judul Bagian -->
            <div class="container">
                <div class="row gy-4">
                    <!-- Fitur Obat - Dokter -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Manajemen Obat</h3>
                            </a>
                            <p>Dokter dapat menambahkan, mengedit, melihat, dan menghapus data obat untuk kebutuhan
                                pengobatan pasien secara efisien dan terstruktur.</p>
                        </div>
                    </div>
                    <!-- Fitur Pemeriksaan - Dokter -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Data Pemeriksaan</h3>
                            </a>
                            <p>Dokter dapat melihat dan memperbarui hasil pemeriksaan pasien dengan mudah melalui
                                dashboard yang terintegrasi.</p>
                        </div>
                    </div>
                    <!-- Fitur Periksa - Pasien -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Permintaan Pemeriksaan</h3>
                            </a>
                            <p>Pasien dapat melakukan permintaan pemeriksaan dan memantau riwayat kesehatannya secara
                                langsung melalui sistem Web Sehatin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Bagian Layanan -->
        <!-- Fitur Web Sehatin Section -->
        <section id="fitur" class="departments section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Fitur Web Sehatin</h2>
                <p>Web Sehatin menyediakan fitur lengkap untuk mendukung layanan kesehatan antara dokter dan pasien
                    secara digital dan efisien.</p>
            </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#fitur-tab-1">Manajemen
                                    Obat (Dokter)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#fitur-tab-2">Pemeriksaan Pasien
                                    (Dokter)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#fitur-tab-3">Pemeriksaan (Pasien)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <!-- Fitur Obat -->
                            <div class="tab-pane active show" id="fitur-tab-1">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Manajemen Obat (Role Dokter)</h3>
                                        <p class="fst-italic">Dokter dapat mengelola informasi obat yang tersedia dalam
                                            sistem.</p>
                                        <p>Fitur ini mencakup kemampuan untuk menambahkan obat baru, melihat daftar obat
                                            yang tersedia, memperbarui data obat, dan menghapus obat yang tidak
                                            diperlukan. Semua dilakukan secara efisien dan aman melalui dashboard
                                            dokter.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fitur Memeriksa -->
                            <div class="tab-pane" id="fitur-tab-2">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Pemeriksaan Pasien (Role Dokter)</h3>
                                        <p class="fst-italic">Pantau dan edit hasil pemeriksaan pasien secara langsung.
                                        </p>
                                        <p>Dokter dapat melihat data pemeriksaan pasien yang telah dilakukan serta
                                            memperbarui hasil atau catatan medis sesuai kebutuhan. Hal ini membantu
                                            menjaga akurasi dan riwayat medis pasien secara digital.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fitur Periksa -->
                            <div class="tab-pane" id="fitur-tab-3">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Pemeriksaan (Role Pasien)</h3>
                                        <p class="fst-italic">Pasien dapat melakukan pendaftaran pemeriksaan dan
                                            melihat riwayatnya.</p>
                                        <p>Melalui fitur ini, pasien dapat membuat permintaan pemeriksaan secara mandiri
                                            dan melihat catatan hasil pemeriksaan yang telah dilakukan sebelumnya. Semua
                                            proses tercatat dan mudah diakses melalui akun pasien.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Fitur Web Sehatin Section -->
        <!-- Testimoni Section -->
        <section id="testimoni" class="testimoni section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimoni</h2>
                <p>Apa kata mereka tentang pengalaman menggunakan Web Sehatin?</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                    <!-- Testimoni Dokter -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="member-info">
                                <h4>dr. Andi Saputra</h4>
                                <span>Dokter Umum</span>
                                <p>"Web Sehatin sangat membantu saya dalam mengelola data obat dan riwayat pemeriksaan
                                    pasien. Fitur CRUD-nya mempermudah pekerjaan harian saya."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni Dokter -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="member-info">
                                <h4>dr. Lina Maharani</h4>
                                <span>Spesialis Penyakit Dalam</span>
                                <p>"Saya bisa dengan mudah memperbarui hasil pemeriksaan pasien tanpa harus repot
                                    mencatat manual. Sangat efisien!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni Pasien -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Siti Nurhaliza</h4>
                                <span>Pasien</span>
                                <p>"Saya bisa mendaftar pemeriksaan dan melihat riwayat kesehatan saya kapan saja. Web
                                    Sehatin sangat memudahkan!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni Pasien -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Budi Santoso</h4>
                                <span>Pasien</span>
                                <p>"Saya tidak perlu antre lama. Cukup buat permintaan periksa dari rumah dan tinggal
                                    datang sesuai jadwal. Praktis dan cepat!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimoni Section -->
        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Berikut beberapa pertanyaan umum terkait penggunaan sistem Web Sehatin untuk dokter dan pasien.</p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3>Apa itu Web Sehatin?</h3>
                                <div class="faq-content">
                                    <p>Web Sehatin adalah sistem informasi manajemen kesehatan berbasis web yang
                                        dirancang untuk mempermudah proses layanan kesehatan antara dokter dan pasien
                                        secara digital.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Siapa saja yang bisa menggunakan Web Sehatin?</h3>
                                <div class="faq-content">
                                    <p>Web Sehatin dapat digunakan oleh dua role utama: Dokter dan Pasien. Setiap role
                                        memiliki fitur dan akses yang sesuai dengan kebutuhannya.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Fitur apa saja yang tersedia untuk Dokter?</h3>
                                <div class="faq-content">
                                    <p>Dokter dapat melakukan pengelolaan data obat (tambah, edit, hapus), serta membaca
                                        dan memperbarui hasil pemeriksaan pasien dengan mudah melalui dashboard.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Fitur apa saja yang tersedia untuk Pasien?</h3>
                                <div class="faq-content">
                                    <p>Pasien dapat membuat permintaan pemeriksaan dan melihat riwayat pemeriksaan
                                        mereka dengan tampilan yang mudah dipahami.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Apakah data saya aman di Web Sehatin?</h3>
                                <div class="faq-content">
                                    <p>Ya, Web Sehatin menggunakan sistem keamanan dan manajemen data yang dirancang
                                        untuk melindungi informasi pribadi dan medis Anda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Bagaimana cara mulai menggunakan Web Sehatin?</h3>
                                <div class="faq-content">
                                    <p>Anda cukup mendaftar sebagai pengguna (dokter atau pasien), login ke sistem, dan
                                        mulai mengakses fitur sesuai kebutuhan Anda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                        </div>
                    </div>
                    <!-- End Faq Column-->
                </div>
            </div>
        </section>
        <!-- /Faq Section -->
        <!-- Contact Section -->
        <section id="kontak" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi kami untuk informasi lebih lanjut mengenai layanan dan fitur Web Sehatin.</p>
            </div>
            <!-- End Section Title -->
            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sid!2sid!4v1676961268712!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- End Google Maps -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl. Sehat No. 108, Semarang, Jawa Tengah</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telepon</h3>
                                <p>+62 812 3456 7890</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>kontak@websehatin.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>
                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Nama Anda" required="">
                                </div>
                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Anda" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Memuat</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                                    <button type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
    <footer id="footer" class="footer light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Web Sehatin</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Sehat Sentosa No.123</p>
                        <p>Kota Semarang, Jawa Tengah</p>
                        <p class="mt-3">
                            <strong>Telepon:</strong>
                            <span>+62 812 3456 7890</span>
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <span>support@websehatin.id</span>
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li>
                            <a href="#">Beranda</a>
                        </li>
                        <li>
                            <a href="#">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#">Fitur</a>
                        </li>
                        <li>
                            <a href="#">Syarat & Ketentuan</a>
                        </li>
                        <li>
                            <a href="#">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Fitur Sistem</h4>
                    <ul>
                        <li>
                            <a href="#">Manajemen Obat (Dokter)</a>
                        </li>
                        <li>
                            <a href="#">Data Pemeriksaan (Dokter)</a>
                        </li>
                        <li>
                            <a href="#">Permintaan Periksa (Pasien)</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Informasi Lain</h4>
                    <ul>
                        <li>
                            <a href="#">Bantuan</a>
                        </li>
                        <li>
                            <a href="#">Panduan Pengguna</a>
                        </li>
                        <li>
                            <a href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Komunitas</h4>
                    <ul>
                        <li>
                            <a href="#">Artikel Kesehatan</a>
                        </li>
                        <li>
                            <a href="#">Tips Dokter</a>
                        </li>
                        <li>
                            <a href="#">Cerita Pasien</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>
                &copy;
                <strong class="px-1 sitename">Web Sehatin</strong>
                | Hak Cipta Dilindungi Undang-Undang
            </p>
            <div class="credits">
                Dikembangkan oleh
                <a href="#">Tim Web Sehatin</a>
            </div>
        </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
