<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smk Pemuda Juara</title>

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== SCROLL REVEAL ===============-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Custom Style Css -->
    @vite(['resources/css/style.css', 'resources/js/main.js'])
<body>
    <!--========== HEADER ==========-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="logo">
                Smk Pemuda Juara
            </a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                        <ul class="dropdown-menu">
                            <li><a href="">Data Pegawai</a></li>
                            <li><a href="">Event</a></li>
                            <li><a href="">Galerry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                <div class="nav-close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav-btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>
                <div class="nav-toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home-container container grid">
                <img class="home-img" src="{{ asset('img/undraw_online_learning_re_qw08.svg') }}" alt="Echeveria agavoides" />

                <div class="text-content">
                    <h1 class="title">Smk Pemuda<br>Juara</h1>
                    <p class="description">
                        Temukan Bakatmu dan Berkembang Bersama Komunitas Sekolah, Pendidikan Berkualitas yang
                        Menginspirasi
                        di Setiap Langkah, Menjadikan Masa Depan yang Gemilang melalui Pendidikan Berkualitas
                    </p>
                    <a class="button btn-flex" href="{{ route('login') }}">
                        Daftar <i class="ri-arrow-right-down-line btn-icon"></i>
                    </a>
                </div>
                <div class="home-social">
                    <span class="social-fl">Follow Us</span>
                    <div class="social-links">
                        <a href="" class="social-link"
                            target="_blank"><i class="ri-facebook-fill"></i></a>
                        <a href=""
                            class="social-link" target="_blank"><i class="ri-instagram-line"></i></a>
                        <a href="" class="social-link" target="_blank"><i
                                class="ri-twitter-line"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--========== ABOUT ==========-->
        <section class="about section container" id="about">
            <div class="about-container grid">
                <img src="{{ asset('img/undraw_design_inspiration_re_tftx.svg') }}" alt="tentang plantshop" class="about-img" />

                <div class="about-data">
                    <h2 class="section-title about-title">Visi</h2>

                    <p class="about-desc">
                        Kami memiliki tekad untuk melahirkan generasi siswa yang tidak hanya siap menghadapi tantangan
                        di dalam negeri, tetapi juga menjadi pemimpin global.
                    </p>

                    <h2 class="section-title about-title">Misi</h2>

                    <div class="about-detail">
                        <p class="detail-desc">
                            <i class="ri-checkbox-fill detail-icon"></i>
                            memberikan pendidikan berkualitas tinggi kepada setiap siswa
                        </p>
                        <p class="detail-desc">
                            <i class="ri-checkbox-fill detail-icon"></i>
                            membantu siswa mengembangkan nilai-nilai seperti integritas, disiplin, rasa tanggung jawab,
                            kepedulian, dan kepemimpinan.
                        </p>
                        <p class="detail-desc">
                            <i class="ri-checkbox-fill detail-icon"></i>
                            kami mempersiapkan siswa kami untuk menghadapi tantangan masa depan
                        </p>
                        <p class="detail-desc">
                            <i class="ri-checkbox-fill detail-icon"></i>
                            membangun kehidupan beragama yang kokoh melalui pendidikan
                        </p>
                    </div>

                    <a class="btn-link btn-flex" href="#">
                        Daftar Sekarang <i class="ri-arrow-left-up-line btn-icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--========== jurusan ==========-->
        <section class="steps section container">
            <div class="steps-bg">
                <h2 class="section-title-center steps-title">Smk Pemuda Juara <br> Jurusan</h2>
                <div class="steps-container grid">
                    <div class="steps-card">
                        <div class="card-numb">
                            <img src="{{ asset('img/undraw_progressive_app_m-9-ms.svg') }}" alt="">
                        </div>
                        <h3 class="card-title">Teknik Komputer dan informasi</h3>
                        <p class="card-desc">
                            Jurusan Teknik Komputer dan Informatika: Menggali Potensi di Era Teknologi
                        </p>
                    </div>
                    <div class="steps-card">
                        <div class="card-numb">
                            <img src="{{ asset('img/undraw_camera_re_cnp4.svg') }}" alt="">
                        </div>
                        <h3 class="card-title">Desain Kmonikasi Visual</h3>
                        <p class="card-desc">
                            Desain Komunikasi Visual: Mengubah Konsep menjadi Karya Visual yang Mengesankan
                        </p>
                    </div>
                    <div class="steps-card">
                        <div class="card-numb">
                            <img src="{{ asset('img/undraw_automobile_repair_ywci.svg') }}" alt="">
                        </div>
                        <h3 class="card-title">Teknik Kendaraan Ringan</h3>
                        <p class="card-desc">
                            Jurusan Teknik Kendaraan Ringan: Mengasah Keterampilanmu di Industri Mobilitas
                        </p>
                    </div>
                    <div class="steps-card">
                        <div class="card-numb">
                            <img src="{{ asset('img/undraw_maintenance_re_59vn.svg') }}" alt="">
                        </div>
                        <h3 class="card-title">Teknik Permesinan</h3>
                        <p class="card-desc">
                            Penuhi Kreativitasmu dengan Jurusan Teknik Permesinan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="product section container" id="">
            <div class="product-container grid"></div>
        </section>

        <!--========== QUESTIONS ==========-->
        <section class="questions section" id="faqs">
            <h2 class="section-title-center questions-title">Keuntungan Sekolah <br> Smk Pemuda Juara</h2>
            <div class="questions-container container grid">
                <div class="questions-group">
                </div>
            </div>
        </section>
        <!--========== CONTACT ==========-->
        <section class="contact section container" id="contact">
            <div class="contact-container grid">
                <div class="contact-box">
                    <h2 class="section-title">
                        Jika ada pertanyaan <br> hubungi kami
                    </h2>

                    <div class="contact-data">
                        <div class="contact-info">
                            <h3 class="contact-subtitle">hub jika ada pertanyaan</h3>
                            <span class="contact-desc">
                                <i class="ri-phone-line contact-icon"></i>
                                (0354) 684971
                            </span>
                        </div>
                        <div class="contact-info">
                            <h3 class="contact-subtitle">Atau bisa email kami</h3>
                            <span class="contact-desc">
                                <i class="ri-mail-line contact-icon"></i>
                                SmkPemudaJuara@yahoo.com
                            </span>
                        </div>
                    </div>
                </div>
                <form action="" class="contact-form">
                    <div class="contact-inputs">
                        <div class="contact-content">
                            <input type="email" placeholder=" " class="contact-input" required>
                            <label for="" class="contact-label">Email</label>
                        </div>

                        <div class="contact-content">
                            <input type="text" placeholder=" " class="contact-input">
                            <label for="" class="contact-label">Subject</label>
                        </div>

                        <div class="contact-content contact-area">
                            <textarea name="message" placeholder=" " class="contact-input"></textarea>
                            <label for="" class="contact-label">Message</label>
                        </div>
                    </div>

                    <button class="button btn-flex">
                        Send Message
                        <i class="ri-arrow-right-up-line btn-icon"></i>
                    </button>
                </form>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section">
        <div class="copyBox">
            <p class="ft">
                &copy; 2023 <span><a href="https://www.instagram.com/takasuree/">TakaSuree</a></span> All Rights
                Reserved
            </p>
        </div>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup-icon"></i>
    </a>
    <!-- Project -->
    <script type="module" src="main.js"></script>
</body>

</html>
