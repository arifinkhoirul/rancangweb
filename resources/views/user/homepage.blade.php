<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Rancang Web</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('image/logo/logo-rancangweb-ico.ico') }}" rel="icon">
    <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href=" {{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * css Name: Landio
  * Template URL: https://bootstrapmade.com/landio-bootstrap-landing-page-template/
  * Updated: Sep 06 2025 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D65NP3ZE5F"></script>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('image/logo/logo-rancangweb.jpg') }}" alt="" class="img-fluid w-10"
                    style="max-height: 40px;">
            </a>


            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#about">Get Started</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">

                    <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="200">
                        <div class="hero-content text-center">
                            <div class="hero-badge" data-aos="fade-down" data-aos-delay="300">
                                <i class="bi bi-star-fill"></i>
                                <span>Solusi Digital untuk Kebutuhan Anda</span>
                            </div>
                            <h1 class="hero-title" data-aos="fade-up" data-aos-delay="400">Tingkatkan Kredibilitas Lewat
                                Website Modern dan Responsif</h1>
                            <p class="hero-description" data-aos="fade-up" data-aos-delay="500">Di Rancang Web, kami
                                membantu Anda memiliki landing page dan sistem admin yang dirancang dinamis, cepat,
                                serta mudah disesuaikan dengan identitas dan tujuan Anda.</p>

                            <div class="hero-actions" data-aos="fade-up" data-aos-delay="600">
                                <a href="#about" class="btn-primary">Konsultasi Sekarang</a>
                                <a href="#portfolio" class="btn-outline">Portfolio Kami</a>
                            </div>

                            <div class="hero-metrics" data-aos="fade-up" data-aos-delay="700">
                                <div class="metric-item">
                                    <div class="metric-icon">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div class="metric-content">
                                        @if ($dataMainCardYear)
                                            <span class="metric-number">{{ $dataMainCardYear->number }}</span>
                                            <span class="metric-label">{{ $dataMainCardYear->title }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="metric-item">
                                    <div class="metric-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="metric-content">
                                        @if ($dataMainCardClient)
                                            <span class="metric-number">{{ $dataMainCardClient->number }}</span>
                                            <span class="metric-label">{{ $dataMainCardClient->title }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="metric-item">
                                    <div class="metric-icon">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                    <div class="metric-content">
                                        @if ($dataMainCardClient)
                                            <span class="metric-number">{{ $dataMainCardPositive->number }}%</span>
                                            <span class="metric-label">{{ $dataMainCardPositive->title }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center gy-5">

                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="image-section">
                            <div class="primary-image">
                                <img src="{{ asset('image/about/about-14.webp') }}"
                                    alt="Corporate office environment" class="img-fluid">
                                <div class="experience-badge">
                                    <div class="badge-content">
                                        <span class="years">3+</span>
                                        <span class="text">Years of Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="image-grid">
                                <img src="{{ asset('image/about/about-3.webp') }}" alt="Professional workspace"
                                    class="img-fluid grid-img">
                                <img src="{{ asset('image/about/about-7.webp') }}" alt="Team collaboration"
                                    class="img-fluid grid-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                        <div class="content-section">
                            <div class="section-intro">
                                <div class="company-badge">WHO WE ARE</div>
                                <h2>Merancang Website yang Tepat untuk Setiap Kebutuhan</h2>
                                <p class="intro-text">Rancang Web hadir untuk membantu siapa pun yang ingin punya
                                    website fungsional dan mudah dikelola.
                                    Kami percaya bahwa tampilan yang baik dan sistem yang rapi bisa membantu Anda lebih
                                    percaya diri di dunia digital.</p>
                            </div>

                            <div class="achievement-list">
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="achievement-content">
                                        <h4>Innovative Web Solutions</h4>
                                        <p>Kami menghadirkan solusi digital modern untuk membantu bisnis anda tampil
                                            profesional di dunia onine.</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="achievement-content">
                                        <h4>Dedicated Development Team</h4>
                                        <p>Tim kami berpengalaman di Laravel, Boostrap, Tailwind dan teknologi modern
                                            lainnya untuk membangun website cepat, aman dan elegan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="action-section">
                                <a href="#contact" class="btn btn-primary">
                                    <i class="bi bi-envelope-fill me-2"></i> Hubungi Kami
                                </a>
                                {{-- <div class="contact-info">
                                    <span class="contact-label">Hubungi kami langsung:</span>
                                    <strong class="phone-number">+1 (555) 234-5678</strong>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="metrics-section" data-aos="fade-up" data-aos-delay="400">
  <div class="row text-center">
   <div class="col-lg-3 col-md-6">
   <div class="metric-card">
    <div class="metric-value">480+</div>
    <div class="metric-label">Successful Projects</div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="metric-card">
    <div class="metric-value">99.8%</div>
    <div class="metric-label">Customer Satisfaction</div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="metric-card">
    <div class="metric-value">65+</div>
    <div class="metric-label">Team Members</div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="metric-card">
    <div class="metric-value">24/7</div>
    <div class="metric-label">Customer Support</div>
   </div>
   </div>
  </div>
  </div> -->

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Kami bantu wujudkan website yang cepat, menarik, dan mudah dikelola.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="services-grid">
                    <div class="row g-4">

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="featured-service-card">
                                <div class="service-badge">Most Popular</div>
                                <div class="service-icon-large">
                                    <i class="bi bi-rocket-takeoff"></i>
                                </div>
                                <h3>Website Landing Page + Admin</h3>
                                <p>Website dinamis dengan halaman admin yang memudahkan Anda mengelola konten.
                                    Cocok untuk personal, brand, atau usaha yang ingin tampil profesional.</p>
                                <div class="feature-highlights">
                                    <div class="highlight-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Tampilan modern dan responsif</span>
                                    </div>
                                    <div class="highlight-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Sistem admin mudah digunakan</span>
                                    </div>
                                    <div class="highlight-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Mudah dikembangkan sesuai kebutuhan</span>
                                    </div>
                                </div>
                                <a href="service-details.html" class="btn-primary">Get Started Free</a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="service-card service-paid">
                                        <div class="service-tag">Berbayar</div>
                                        <div class="service-icon">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <h4>Maintenance & Update</h4>
                                        <p>Kami bantu menjaga dan mengembangkan website Anda agar tetap stabil, cepat,
                                            dan sesuai kebutuhan.
                                            Mulai dari pembaruan kecil sampai penambahan halaman atau fitur baru.
                                        </p>
                                        <a href="service-details.html" class="service-link">
                                            <span>Learn More</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                                    <div class="service-card service-free">
                                        <div class="service-tag">Gratis</div>
                                        <div class="service-icon">
                                            <i class="bi bi-chat-dots-fill"></i>
                                        </div>
                                        <h4>Customer Service</h4>
                                        <p>Kami siap membantu kapan pun Anda butuh bantuan terkait website Anda.
                                            Mulai dari update konten, konsultasi teknis, hingga panduan penggunaan
                                            dengan cara yang mudah dipahami.
                                        </p>
                                        <a href="service-details.html" class="service-link">
                                            <span>Learn More</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>


                                <!-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="service-card">
     <div class="service-icon">
     <i class="bi bi-people"></i>
     </div>
     <h4>Team Collaboration</h4>
     <p>Seamless collaboration tools that bring your team together regardless of location.</p>
     <a href="service-details.html" class="service-link">
     <span>Learn More</span>
     <i class="bi bi-arrow-right"></i>
     </a>
    </div>
    </div> -->

                                <!-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
    <div class="service-card">
     <div class="service-icon">
     <i class="bi bi-cloud-arrow-up"></i>
     </div>
     <h4>Cloud Integration</h4>
     <p>Flexible cloud solutions that scale with your business needs and requirements.</p>
     <a href="service-details.html" class="service-link">
     <span>Learn More</span>
     <i class="bi bi-arrow-right"></i>
     </a>
    </div>
    </div> -->

                            </div>
                        </div>

                    </div>
                </div>

                <!-- <div class="services-tabs mt-5">
  <ul class="nav nav-pills justify-content-center mb-5" id="services-tabs" role="tablist">
   <li class="nav-item" role="presentation">
   <button class="nav-link active" id="services-development-tab" data-bs-toggle="pill" data-bs-target="#services-development" type="button" role="tab">Development</button>
   </li>
   <li class="nav-item" role="presentation">
   <button class="nav-link" id="services-marketing-tab" data-bs-toggle="pill" data-bs-target="#services-marketing" type="button" role="tab">Marketing</button>
   </li>
   <li class="nav-item" role="presentation">
   <button class="nav-link" id="services-support-tab" data-bs-toggle="pill" data-bs-target="#services-support" type="button" role="tab">Support</button>
   </li>
  </ul>

  <div class="tab-content" id="services-tabs-content">

   <div class="tab-pane fade show active" id="services-development" role="tabpanel">
   <div class="row g-4">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-laptop"></i>
     </div>
     <h5>Web Development</h5>
     <p>Modern, responsive websites built with cutting-edge technologies for optimal performance.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-phone"></i>
     </div>
     <h5>Mobile Apps</h5>
     <p>Native and cross-platform mobile applications that deliver exceptional user experiences.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-server"></i>
     </div>
     <h5>API Development</h5>
     <p>Robust and scalable APIs that power your applications and enable seamless integrations.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
   </div>
   </div>

   <div class="tab-pane fade" id="services-marketing" role="tabpanel">
   <div class="row g-4">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-megaphone"></i>
     </div>
     <h5>Digital Campaigns</h5>
     <p>Strategic digital marketing campaigns that reach your target audience effectively.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-search"></i>
     </div>
     <h5>SEO Optimization</h5>
     <p>Comprehensive SEO strategies to improve your search engine rankings and visibility.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-share"></i>
     </div>
     <h5>Social Media</h5>
     <p>Engaging social media strategies that build brand awareness and drive customer engagement.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
   </div>
   </div>

   <div class="tab-pane fade" id="services-support" role="tabpanel">
   <div class="row g-4">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-headset"></i>
     </div>
     <h5>24/7 Support</h5>
     <p>Round-the-clock technical support to ensure your systems run smoothly at all times.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-tools"></i>
     </div>
     <h5>System Maintenance</h5>
     <p>Regular maintenance and updates to keep your systems secure and performing optimally.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
    <div class="tab-service-card">
     <div class="service-icon">
     <i class="bi bi-person-check"></i>
     </div>
     <h5>Training</h5>
     <p>Comprehensive training programs to help your team master our tools and platforms.</p>
     <a href="service-details.html" class="tab-service-link">View Details</a>
    </div>
    </div>
   </div>
   </div>

  </div>
  </div> -->

            </div>

        </section><!-- /Services Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>Fitur unggulan untuk membuat website Anda menarik dan mudah digunakan.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                        <div class="features-content">
                            <h2>Kenapa Memilih Kami?</h2>
                            <p class="lead">Kami fokus menghadirkan website yang tidak hanya terlihat menarik, tapi
                                juga berfungsi optimal dan mudah dikembangkan. Dengan pengalaman dan perhatian pada
                                detail, setiap proyek kami dirancang untuk memberi hasil terbaik bagi Anda.</p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="features-image">
                            <img src="{{ asset('image/features/features-4.webp') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>

                </div>

                <div class="features-grid" data-aos="fade-up" data-aos-delay="400">

                    <div class="feature-item" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Custom Website Dev</h4>
                            <p>Kami membangun dengan desain yang sesuai dengan kebutuhan bisnis Anda</p>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="feature-item" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Responsice & Fast</h4>
                            <p>Webiste yang kami buat dioptimalkan agar tampil sempura di semua perangkat (dekstop,
                                tablet, dan mobile).</p>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="feature-item" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="feature-content">
                            <h4>SEO Ready</h4>
                            <p>Kami menerapkan praktik SEO dasar agar website Anda mudah ditemukan di Google dan menarik
                                lebih banyak pengunjung.</p>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                        <div class="feature-icon">
                            <i class="bi bi-layout-sidebar"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Easy to Manage</h4>
                            <p>Website dilengkapi dengan dashboard admin yang intuitif, meudahkan Anda dalam mengelola
                                konten tanpa harus paham coding.</p>
                        </div>
                    </div><!-- End Feature Item -->

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Features 2 Section -->
        <section id="features-2" class="features-2 section">

            <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="features-list row gy-4">
  <div class="col-md-6">
   <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
   <div class="feature-icon">
    <i class="bi bi-cpu"></i>
   </div>
   <div class="feature-content">
    <h4>AI-Powered Automation</h4>
    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    <div class="feature-tags">
    <span>Smart</span>
    <span>Automated</span>
    </div>
   </div>
   </div>
  </div>

  <div class="col-md-6">
   <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
   <div class="feature-icon">
    <i class="bi bi-cloud-check"></i>
   </div>
   <div class="feature-content">
    <h4>Cloud Integration</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus.</p>
    <div class="feature-tags">
    <span>Scalable</span>
    <span>Reliable</span>
    </div>
   </div>
   </div>
  </div>

  <div class="col-md-6">
   <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
   <div class="feature-icon">
    <i class="bi bi-people"></i>
   </div>
   <div class="feature-content">
    <h4>Team Collaboration</h4>
    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
    <div class="feature-tags">
    <span>Collaborative</span>
    <span>Efficient</span>
    </div>
   </div>
   </div>
  </div>

  <div class="col-md-6">
   <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
   <div class="feature-icon">
    <i class="bi bi-bar-chart"></i>
   </div>
   <div class="feature-content">
    <h4>Advanced Analytics</h4>
    <p>Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
    <div class="feature-tags">
    <span>Insights</span>
    <span>Data-driven</span>
    </div>
   </div>
   </div>
  </div>
  </div>

  <div class="cta-section" data-aos="fade-up" data-aos-delay="500">
  <a href="#" class="btn-primary">Get Started Today</a>
  <a href="#" class="btn-secondary">View Demo</a>
  </div>
 </div> -->

        </section><!-- /Features 2 Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Apa kata mereka yang sudah menggunakan layanan kami.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Swiper container -->
                <div class="testimonials-slider-wrapper">
                    <div class="swiper testimonials-carousel">
                        <div class="swiper-wrapper">

                            @forelse ($testimonials as $testimonial)
                                <!-- Card 2 -->
                                <div class="swiper-slide testimonial-card featured" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="featured-badge">
                                        <i class="bi bi-award-fill"></i>
                                        <span>Top Review</span>
                                    </div>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <blockquote>
                                        {{ $testimonial->message }}
                                    </blockquote>
                                    <div class="user-profile">
                                        <div class="avatar">
                                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="User"
                                                class="img-fluid">
                                        </div>
                                        <div class="user-info">
                                            <h4>{{ $testimonial->individual_name }}</h4>
                                            <span class="title">CEO &amp; Founder</span>
                                            <div class="company">DataDrive Solutions</div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div>
                                    <p>dta masih kosong</p>
                                </div>
                            @endforelse

                            <!-- Tombol navigasi pakai Remix Icons -->
                            <div class="swiper-button-prev custom-arrow">

                            </div>
                            <div class="swiper-button-next custom-arrow">

                            </div>


                        </div>
                    </div>







                </div>

        </section><!-- /Testimonials Section -->

        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>portfolio</h2>
                <p>Beberapa proyek inspiratif yang telah kami selesaikan.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    {{-- ? card 1 --}}
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <!-- Tambahkan data-bs-toggle dan data-bs-target -->
                        <div class="card shadow-sm border-0 overflow-hidden"
                            style="padding: 0; border-radius: 12px; transition: all 0.3s ease; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <img src="{{ asset('image/portfolio/mc1.jpg') }}" class="card-img-top" alt="..."
                                style="height: 220px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Karang Taruna</h5>
                                <p class="card-text text-muted"
                                    style="
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            min-height: 60px;
                        ">
                                    Website Karang Taruna Online adalah platform yang menjadi pusat informasi dan
                                    komunikasi bagi generasi muda di wilayah Ujung Harapan. Di sini, pengunjung bisa
                                    melihat data remaja, informasi pengurus, agenda kegiatan, serta dokumentasi acara
                                    sosial dan budaya. Website ini bertujuan untuk memudahkan partisipasi pemuda dalam
                                    kegiatan komunitas, mempererat silaturahmi antarwarga, dan menampilkan berbagai
                                    kegiatan kreatif dan positif bagi masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ? card 2 --}}
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <!-- Tambahkan data-bs-toggle dan data-bs-target -->
                        <div class="card shadow-sm border-0 overflow-hidden"
                            style="padding: 0; border-radius: 12px; transition: all 0.3s ease; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <img src="{{ asset('image/about/about-3.webp') }}" class="card-img-top" alt="..."
                                style="height: 220px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">Karang Taruna</h5>
                                <p class="card-text text-muted"
                                    style="
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            min-height: 60px;
                        ">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card’s content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ? modal card 1 --}}
                <div class="modal fade" id="portfolioModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 ">
                            <div class="modal-body position-relative">
                                <button type="button" class="btn-close position-absolute top-0 end-0"
                                    style="margin: 11px" data-bs-dismiss="modal" aria-label="Close"></button>
                                <img src="{{ asset('image/portfolio/mc1.jpg') }}" class="img-fluid rounded mb-3"
                                    alt="...">
                                <h4 class="fw-bold mb-2 fs-2">Karang Taruna</h4>
                                <p class="text-muted"> Website Karang Taruna Online adalah platform yang menjadi pusat
                                    informasi dan komunikasi bagi generasi muda di wilayah Ujung Harapan. Di sini,
                                    pengunjung bisa melihat data remaja, informasi pengurus, agenda kegiatan, serta
                                    dokumentasi acara sosial dan budaya. Website ini bertujuan untuk memudahkan
                                    partisipasi pemuda dalam kegiatan komunitas, mempererat silaturahmi antarwarga, dan
                                    menampilkan berbagai kegiatan kreatif dan positif bagi masyarakat.</p>
                                <p class="mt-3 fw-medium">
                                    Visit Link:
                                    <a href="https://karangtaruna.online/" target="_blank"
                                        class="fw-light link-underline link-underline-opacity-0 link-underline-opacity-100-hover text-primary">
                                        karangtaruna.online
                                    </a>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

                {{-- ? modal card --}}
                <div class="modal fade" id="portfolioModal2" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 ">
                            <div class="modal-body position-relative">
                                <button type="button" class="btn-close position-absolute top-0 end-0"
                                    style="margin: 11px" data-bs-dismiss="modal" aria-label="Close"></button>
                                <img src="{{ asset('image/about/about-3.webp') }}" class="img-fluid rounded mb-3"
                                    alt="...">
                                <h4 class="fw-bold mb-2 fs-2">Karang Taruna</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                    quo ipsum reprehenderit sed quos totam. Amet, suscipit ratione sequi fugiat
                                    provident officia, placeat doloremque asperiores velit nobis tempore ipsam!
                                    Assumenda obcaecati, adipisci enim sit fuga voluptatem deleniti</p>
                                <p class="mt-3 fw-medium">
                                    Visit Link:
                                    <a href="https://karangtaruna.online/" target="_blank"
                                        class="fw-light link-underline link-underline-opacity-0 link-underline-opacity-100-hover text-primary">
                                        karangtaruna.online
                                    </a>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section><!-- /portfolio Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Pilih paket unggulan yang sesuai dengan kebutuhan Anda.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <!-- Basic Plan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-card">
                            <div class="plan-header">
                                <div class="plan-icon">
                                    <i class="bi bi-box"></i>
                                </div>
                                <h3>Starter</h3>
                                <p>Cocok untuk mulai membuat website dengan fitur dasar yang simpel dan cepat</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price">
                                    <span class="currency">Rp</span>
                                    <span class="amount">1jt</span>
                                    <!-- <span class="period">/month</span> -->
                                </div>
                            </div>
                            <div class="plan-features">
                                <ul>
                                    @if ($dataPriceStarter)
                                        @foreach ($dataPriceStarter->features as $dataStarter)
                                            @if ($dataStarter->status === 'check')
                                                <li><i class="bi bi-check-circle-fill"></i>
                                                    {{ $dataStarter->feature }}
                                                </li>
                                            @else
                                                <li class="disabled"><i class="bi bi-x-circle-fill"></i>
                                                    {{ $dataStarter->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="plan-cta">
                                <a href="#" class="btn-plan">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div><!-- End Basic Plan -->

                    <!-- Professional Plan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-card popular">
                            <div class="popular-tag">Most Popular</div>
                            <div class="plan-header">
                                <div class="plan-icon">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                                <h3>Professional</h3>
                                <p>Untuk yang ingin website lebih lengkap, interaktif, dan siap berkembang</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price">
                                    <span class="currency">Rp</span>
                                    <span class="amount">2jt</span>
                                    <!-- <span class="period">/month</span> -->
                                </div>
                            </div>
                            <div class="plan-features">
                                <ul>
                                    @if ($dataPriceProfesional)
                                        @foreach ($dataPriceProfesional->features as $dataProfesional)
                                            @if ($dataProfesional->status === 'check')
                                                <li><i class="bi bi-check-circle-fill"></i>
                                                    {{ $dataProfesional->feature }}
                                                </li>
                                            @else
                                                <li class="disabled"><i class="bi bi-x-circle-fill"></i>
                                                    {{ $dataProfesional->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="plan-cta">
                                <a href="#" class="btn-plan">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div><!-- End Professional Plan -->

                    <!-- Enterprise Plan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-card">
                            <div class="plan-header">
                                <div class="plan-icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <h3>Enterprise</h3>
                                <p>Solusi lengkap dengan fitur lanjutan dan dukungan ekstra untuk website maksimal</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price">
                                    <span class="currency">Rp</span>
                                    <span class="amount">3jt</span>
                                    <!-- <span class="period">/month</span> -->
                                </div>
                            </div>
                            <div class="plan-features">
                                <ul>
                                    @if ($dataPriceEnterprice)
                                        @foreach ($dataPriceEnterprice->features as $dataEnterprice)
                                            @if ($dataEnterprice->status === 'check')
                                                <li><i class="bi bi-check-circle-fill"></i>
                                                    {{ $dataEnterprice->feature }}
                                                </li>
                                            @else
                                                <li class="disabled"><i class="bi bi-x-circle-fill"></i>
                                                    {{ $dataEnterprice->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="plan-cta">
                                <a href="#" class="btn-plan">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div><!-- End Enterprise Plan -->
                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <!-- Judul Kiri -->
                    <div class="col-lg-5 col-md-12 mb-4">
                        <h2 class="faq-title">FREQUENTLY<br>ASKED<br>QUESTIONS</h2>
                    </div>

                    <!-- FAQ Item Kanan -->
                    <div class="col-lg-7 col-md-12">
                        <div class="faq-container">

                            @forelse ($questions as $question)
                                <!-- FAQ Item -->
                                <div class="faq-item">
                                    <div class="question-wrapper">
                                        <h3 class="question">{{ $question->question }}</h3>
                                        <div class="arrow-wrapper">
                                            <i class="bi bi-plus-lg"></i>
                                        </div>
                                    </div>
                                    <div class="answer">
                                        <p>{{ $question->answer }}</p>
                                    </div>
                                </div>
                            @empty
                                <div
                                    class="flex flex-col items-center justify-center py-16 text-center bg-gray-50 dark:bg-gray-900 rounded-xl shadow-inner">
                                    <img src="{{ asset('image/services/question.svg') }}" width="300" height="300" alt="Empty"
                                        class="w-40 mb-6 opacity-80">
                                    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-2">Belum Ada
                                        Data Testimonial</h3>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm">Tambahkan testimonial baru
                                        untuk mengisi bagian ini.</p>
                                </div>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Ada yang ingin ditanyakan? Kontak tim kami sekarang.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="contact-info-panel">
                            <div class="panel-content">
                                <div class="info-header">
                                    <h2>Ready to Connect?</h2>
                                    <p>Punya ide atau pertanyaan? Yuk, ngobrol sama tim Rancang Web! Kami siap bantu,
                                        kasih saran, dan pastikan semua kebutuhan website kamu terpenuhi dengan mudah.
                                    </p>
                                </div>

                                <div class="info-grid">
                                    <div class="info-card" data-aos="slide-up" data-aos-delay="250">
                                        <div class="card-icon">
                                            <i class="bi bi-house-door"></i>
                                        </div>
                                        <div class="card-content">
                                            <h4>Visit Our Office</h4>
                                            <p>Bekasi City, Indonesia</p>
                                        </div>
                                    </div>

                                    <div class="info-card" data-aos="slide-up" data-aos-delay="300">
                                        <div class="card-icon">
                                            <i class="bi bi-chat-dots"></i>
                                        </div>
                                        <div class="card-content">
                                            <h4>Send Us a Message</h4>
                                            <p>rancangweb@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="info-card" data-aos="slide-up" data-aos-delay="350">
                                        <div class="card-icon">
                                            <i class="bi bi-headset"></i>
                                        </div>
                                        <div class="card-content">
                                            <h4>Call Us Directly</h4>
                                            <p>+1 (555) 432-1098</p>
                                        </div>
                                    </div>

                                    {{-- <div class="info-card" data-aos="slide-up" data-aos-delay="400">
                                        <div class="card-icon">
                                            <i class="bi bi-calendar3"></i>
                                        </div>
                                        <div class="card-content">
                                            <h4>Business Hours</h4>
                                            <p>Mon-Fri: 8AM-7PM<br>Weekends: By Appointment</p>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="social-section" data-aos="fade-in" data-aos-delay="450">
                                    <h5>Follow Our Journey</h5>
                                    <div class="social-icons">
                                        <a href="#" class="social-icon">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                        <a href="https://www.instagram.com/rancang_web/" class="social-icon">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="slide-left" data-aos-delay="300">
                        <div class="contact-form-wrapper">
                            <div class="form-header">
                                <h3>Hubungi Kami!</h3>
                                <div class="header-line"></div>
                            </div>

                            <form action="forms/contact.php" method="post" class="php-email-form modern-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="fullName"
                                        placeholder="Full Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="emailAddress"
                                        placeholder="Email Address" required="">
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" id="phoneNumber"
                                        placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="emailSubject"
                                        placeholder="Subject" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="messageContent" rows="6"
                                        placeholder="Your message goes here..." required=""></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <button type="submit" class="submit-btn">
                                    <span class="btn-text">Kirim Pesan</span>
                                    <span class="btn-icon">
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative bg-light pt-4 pt-md-5 ">

        <div class="container">

            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <!-- Brand Section -->
                    <div class="col-lg-5 col-md-12">
                        <div class="brand-section pe-lg-5">
                            <a href="/"
                                class="logo d-flex align-items-center mb-3 justify-content-center justify-content-lg-start">
                                <img src="{{ asset('image/logo/logo-rancang web.png') }}" alt="Rancang Web Logo"
                                    class="img-fluid" style="max-height: 45px;">
                            </a>

                            <p class="brand-description text-muted" style="font-size: 0.95rem;">
                                Rancang Web menghadirkan solusi pembuatan landing page dinamis dengan desain responsif
                                dan fitur admin terintegrasi.
                            </p>
                        </div>
                    </div>

                    <!-- Navigation Section -->
                    <div class="col-lg-7 col-md-12">
                        <div class="footer-nav-wrapper">
                            <div class="row gy-4">

                                <div class="col-6 col-md-4">
                                    <div class="nav-column">
                                        <h6 class="fw-bold text-dark mb-3 centering">Services</h6>
                                        <nav class="footer-nav d-flex flex-column gap-2">
                                            <a href="#" class="footer-link">Maintenance</a>
                                            <a href="#" class="footer-link">Consultation</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="nav-column">
                                        <h6 class="fw-bold text-dark mb-3 centering">Company</h6>
                                        <nav class="footer-nav d-flex flex-column gap-2">
                                            <a href="#about" class="footer-link">About Us</a>
                                            <a href="#portfolio" class="footer-link">Portfolio</a>
                                            <a href="#services" class="footer-link">Services</a>
                                            <a href="#features" class="footer-link">Features</a>
                                            <a href="#" class="footer-link">Contact</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="nav-column">
                                        <h6 class="fw-bold text-dark mb-3 centering">Follow Us</h6>
                                        <div class="d-flex gap-3">
                                            <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-tiktok"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom border-top">
            <div class="container">
                <div class="row gy-2 align-items-center text-center text-lg-start">

                    <div class="col-lg-12">
                        <p class="mb-0 small text-muted text-center">
                            © <span class="fw-semibold text-dark">Rancang Web</span> 2025. All rights reserved.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </footer>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('template/php-email-form/validate.js') }} "></script>
    <script src="{{ asset('template/aos/aos.js') }} "></script>
    <script src="{{ asset('template/swiper/swiper-bundle.min.js') }} "></script>


    {{-- ? swiper --}}
    @vite('resources/js/app.js')

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }} "></script>

</body>

</html>
