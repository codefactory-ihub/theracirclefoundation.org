<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="lrt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Theracircle Foundation - A charity organization dedicated to making a difference in the world. Join us in our mission to support causes, donate, and make a positive impact.">
  <meta name="keywords" content="charity, NGO, non-profit organization, donation, church, fundraising, social, volunteer, Theracircle Foundation">
  <meta name="author" content="Theracircle Foundation">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Theracircle Foundation">
  <meta property="og:site_name" content="Theracircle Foundation">
  <meta property="og:url" content="https://theracirclefoundation.org">
  <meta property="og:image" content="https://theracirclefoundation.org/logo.png">
  <meta property="og:description" content="Theracircle Foundation - A charity organization dedicated to making a difference in the world. Join us in our mission to support causes, donate, and make a positive impact.">
  <meta name="twitter:title" content="Theracircle Foundation">
  <meta name="twitter:description" content="Theracircle Foundation - A charity organization dedicated to making a difference in the world. Join us in our mission to support causes, donate, and make a positive impact.">
  <meta name="twitter:image" content="https://theracirclefoundation.org/logo.png">
  <meta name="twitter:card" content="summary">

  <title>Theracircle Foundation</title>
  <link rel="icon" type="image/x-icon" sizes="20x20" href="/assets/images/icon/icon.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-5.3.0.min.css">
  <!-- fonts & icon -->
  <link rel="stylesheet" type="text/css" href="/assets/css/remixicon.css">
  <!-- Plugin -->
  <link rel="stylesheet" type="text/css" href="/assets/css/plugin.css">
  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="/assets/css/main-style.css">
  <!-- RTL CSS::When Need RTL Uncomments File -->
  <!-- <link rel="stylesheet" type="text/css" href="/assets/css/rtl.css"> -->
</head>

<body>
  <div class="loading-page" id="preloader-active">
    <div class="counter">
      <p class="text text-capitalize">loading</p>
      <span class="number">0%</span>
      <span class="line"></span>
    </div>
  </div>
  <header>
    <div class="header-area-three">
      <div class="main-header">
        <!-- Top -->
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block">
                <div class="top-menu">
                  <div class="contact-info">
                    <a href="javascript:void(0)" class="pera"> Call Me (+55) -15 02 56<span class="pl-20 pr-20">/</span>Medi.Going@gmail.com </a>
                  </div>
                  <div class="header-social-link">
                    <ul class="listing">
                      <li class="single-list">
                        <a href="javascript:void(0)" class="single"><i class="ri-facebook-fill"></i></a>
                      </li>
                      <li class="single-list">
                        <a href="javascript:void(0)" class="single"><i class="ri-youtube-fill"></i></a>
                      </li>
                      <li class="single-list">
                        <a href="javascript:void(0)" class="single"><i class="ri-instagram-line"></i></a>
                      </li>
                      <li class="single-list">
                        <a href="javascript:void(0)" class="single"><i class="ri-linkedin-fill"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom -->
        <div class="header-bottom header-sticky">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                  <div class="header-left d-flex align-items-center justify-content-between">
                    <div class="logo logo-large light-logo">
                      <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Theracircle Foundation Logo"></a>
                    </div>
                    <!-- Logo Mobile-->
                    <div class="logo logo-mobile light-logo">
                      <a href="index.html"><img src="/assets/images/icon/icon.png" alt="Theracircle Foundation Icon"></a>
                    </div>
                  </div>
                  <div class="search-container">
                    <input type="text" id="searchField" class="search-field" placeholder="Search project...">
                    <button id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i></button>
                  </div>
                  <!-- Main-menu for desktop -->
                  <div class="main-menu d-none d-lg-block">
                    <nav>
                      <ul class="listing" id="navigation">
                        <li class="single-list">
                          <a href="{{route("home")}}" class="single">Home</a>
                        </li>
                        <li class="single-list">
                          <a href="about.html" class="single">About <i class="ri-arrow-down-s-line"></i></a>
                          <ul class="submenu">
                            <li class="single-list"><a href="{{route("home")}}" class="single">Mission Statement</a></li>
                            <li class="single-list"><a href="{{route("home")}}" class="single">Vission Statement</a></li>
                          </ul>
                        </li>
                        <li class="single-list"><a href="donation.html" class="single">Donation</a></li>
                        <li class="single-list"><a href="blog.html" class="single">Project</a></li>
                        <li class="single-list"><a href="blog.html" class="single">Volunteer</a></li>
                        <li class="single-list"><a href="contact-us.html" class="single">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="header-right d-flex align-items-center">
                    <!-- Right button -->
                    <ul class="cart">
                      <li class="cart-list d-lg-inline-block">
                        <a href="donation.html" class="btn-primary-fill text-uppercase">
                          <span class="pera">Donation</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Mobile Menu -->
                <div class="div">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <!-- Hero area S t a r t-->
    <section class="hero-area-three">
      <div class="single-slider hero-padding-three">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
              <div class="hero-caption mb-20">
                <p class="key-title font-700 mb-20">TheraCircle Foundation</p>
                <h1 class="title font-700" data-animation="fadeInUp" data-delay=".0s">Empowering Women, Nurturing Change</h1>
                <p class="pera mx-width-780" data-animation="fadeInUp" data-delay=".2s">TheraCircle Foundation is a global non-profit organization, led by Black women, dedicated to empowering disadvantaged women and girls while fostering a healthier planet</p>
                <div class="d-flex gap-20 flex-wrap align-items-center">
                  <a href="donation.html" class="btn-primary-fill pill-btn" data-animation="fadeInLeft" data-delay=".4s">Donate Now</a>
                  <!-- <div class="d-flex">
                    <div class="multi-image-one">
                      <img src="/assets/images/gallery/testimonial-4.png" alt="image">
                    </div>
                    <div class="multi-image-two">
                      <img src="/assets/images/gallery/testimonial-5.png" alt="image">
                    </div>
                    <div class="multi-image-three">
                      <img src="/assets/images/gallery/testimonial-6.png" alt="image">
                    </div>
                    <div class="multi-image-four">
                      <div class="rounded-badge">
                        <h4 class="count">1M+</h4>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="hero-count-section flex justify-content-between">
                  <div class="hero-count">
                    <h4 class="title">12+</h4>
                    <p class="pera mb-0">
                      Years of <br>
                      Experience
                    </p>

                    <div class="hero-divider"></div>
                  </div>
                  <div class="hero-count">
                    <h4 class="title">140+</h4>
                    <p class="pera mb-0">
                      Thousands <br>
                      volunteers
                    </p>
                  </div>
                  <div class="hero-count">
                    <h4 class="title">500+</h4>
                    <p class="pera mb-0">
                      Worid wide <br>
                      Offices
                    </p>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="d-flex gap-44 justify-content-end">
                <div id="play-video" class="hero-image position-relative d-none d-lg-block">
                  <img src="https://images.unsplash.com/photo-1487546331507-fcf8a5d27ab3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="img" class="w-100 tilt-effect" data-animation="fadeInRight" data-delay="0.2s">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of Hero-->

    <!-- helpful area S t a r t-->
    <section class="helpful-area-three section-padding">
      <div class="container">
        <p class="key-title font-700 mb-20">AREA OF FOCUS</p>

        <div class="row g-24">

          <div id="helpful-area-card" class="col-xl-4 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="helpful-card-icon">
                <i class="ri-exchange-dollar-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Education and Economic Empowerment</h4>
                <p class="caption-para">We believe education is the key to breaking the cycle of poverty. We provide educational opportunities and resources for women, equipping them with the skills and knowledge they need to secure livelihoods and build brighter futures.</p>
                <a href="javascript:void(0)" class="btn btn-outline-success">Volunteer Now <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">01</h4>
              </div>
            </div>
          </div>
          <div id="helpful-area-card" class="col-xl-4 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.0s">
              <div class="helpful-card-icon">
                <i class="ri-hand-heart-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Health & Wellbeing</h4>
                <p class="caption-para">We prioritize the health and well-being of women and girls. We advocate for access to essential healthcare services, including menstrual hygiene management and mental health support.</p>
                <a href="javascript:void(0)" class="btn btn-outline-success">Volunteer Now <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">02</h4>
              </div>
            </div>
          </div>
          <div id="helpful-area-card" class="col-xl-4 col-md-12 col-lg-12">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.2s">
              <div class="helpful-card-icon">
                <i class="ri-cloud-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Sustainability and Climate Action</h4>
                <p class="caption-para">TheraCircle recognizes the interconnectedness of social, environmental, and health issues. We collaborate with academia and stakeholders to support research on climate change, environmental sustainability, and their impact on health and social structures</p>
                <a href="javascript:void(0)" class="btn btn-outline-success">Volunteer Now <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">03</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of helpful-->

    <!-- About us Area S t a r t -->
    <section class="about-area">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 my-auto">
            <!-- Section Tittle -->
            <div class="section-tittle mb-35">
              <span class="sub-tittle text-capitalize font-600">About us</span>
              <h2 class="title font-700 pb-15">We Are Best Treatment For Our Hospita</h2>
              <p class="pera-subtitle mb-15">TheraCircle Foundation is a global non-profit organization, led by Black women, dedicated to empowering disadvantaged women and girls while fostering a healthier planet.</p>
              <p class="pera-subtitle">We understand the unique challenges faced by these communities and strive to create positive change through a holistic approach.</p>
            </div>
            <div class="about-info">
              <div class="row">
                <div class="col-lg-10 mb-20">
                  <div class="d-flex gap-20">
                    <div class="info-icon">
                      <i class="ri-hand-heart-line"></i>
                    </div>
                    <div class="info-content">
                      <h4 class="title">Donation</h4>
                      <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 mb-20">
                  <div class="d-flex gap-20">
                    <div class="info-icon">
                      <i class="ri-user-line"></i>
                    </div>

                    <div class="info-content">
                      <h4 class="title">Volunteer</h4>
                      <p class="pera">Volunteer programs that help children escape poverty providing vocational training.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 mt-10">
                  <a href="about.html" class="btn btn-primary-fill">Donate</a>
                  <a href="about.html" class="btn btn-secondary-fill">Volunteer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="position-relative h-100">
              <div class="play-button">
                <a id="play-video-two" class="video-play-button-two d-none d-lg-block d-none d-lg-block" href="javascript:void(0)">
                  <span></span>
                </a>

                <div id="video-overlay" class="video-overlay">
                  <a class="video-overlay-close">&times;</a>
                </div>
              </div>
              <div>
                <img class="w-100 d-none d-lg-block" src="/assets/images/gallery/about-3.png" alt="image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of About us Area -->

    <!-- Donate S t a r t -->
    <section class="donate-section-two section-padding2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <!-- Section Tittle -->
            <div class="section-tittle text-center mb-50">
              <span class="sub-tittle text-capitalize font-600">We Love To Help Poor</span>
              <h2 class="title font-700">PROJECTS</h2>
            </div>
          </div>
        </div>
        <div class="row gy-24">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.0s">
              <div class="donate-img position-relative">
                <a href="donation-details.html"> <img class="w-100" src="/assets/images/gallery/donate-3.png" alt="img"> </a>
                <div class="donate-badge">
                  <p class="subtitle">Food</p>
                </div>
              </div>
              <div class="donate-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="donate-info-title">
                    <h4 class="title text-capitalize"><a href="donation-details.html">To prove kindness of nation charity isthe simple method.</a></h4>
                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                    <div class="progress custom-progress-two">
                      <div class="progress-bar" style="width: 65%">
                        <div class="percentage">
                          <h4 class="title">65%</h4>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-content-between mt-14 mb-20">
                      <div class="flex gap-20">
                        <div class="charges">
                          <p class="pera">Goals</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                        <div class="charges">
                          <p class="pera">Raised</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                      </div>
                      <div class="forward-btn">
                        <i class="ri-reply-fill"></i>
                      </div>
                    </div>
                    <a href="donate-payment.html" class="btn donate-btn w-100">Donate Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.1s">
              <div class="donate-img position-relative">
                <a href="donation-details.html"> <img class="w-100" src="/assets/images/gallery/donate-4.png" alt="img"> </a>
                <div class="donate-badge">
                  <p class="subtitle">Education</p>
                </div>
              </div>
              <div class="donate-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="donate-info-title">
                    <h4 class="title text-capitalize"><a href="donation-details.html">To prove kindness of nation charity isthe simple method.</a></h4>
                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                    <div class="progress custom-progress-two">
                      <div class="progress-bar" style="width: 70%">
                        <div class="percentage">
                          <h4 class="title">70%</h4>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-content-between mt-14 mb-20">
                      <div class="flex gap-20">
                        <div class="charges">
                          <p class="pera">Goals</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                        <div class="charges">
                          <p class="pera">Raised</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                      </div>
                      <div class="forward-btn">
                        <i class="ri-reply-fill"></i>
                      </div>
                    </div>
                    <a href="donate-payment.html" class="btn donate-btn w-100">Donate Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.2s">
              <div class="donate-img position-relative">
                <a href="donation-details.html"> <img class="w-100" src="/assets/images/gallery/donate-5.png" alt="img"> </a>
                <div class="donate-badge">
                  <p class="subtitle">medical</p>
                </div>

              </div>
              <div class="donate-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="donate-info-title">
                    <h4 class="title text-capitalize"><a href="donation-details.html">To prove kindness of nation charity isthe simple method.</a></h4>
                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                    <div class="progress custom-progress-two">
                      <div class="progress-bar" style="width: 90%">
                        <div class="percentage">
                          <h4 class="title">90%</h4>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-content-between mt-14 mb-20">
                      <div class="flex gap-20">
                        <div class="charges">
                          <p class="pera">Goals</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                        <div class="charges">
                          <p class="pera">Raised</p>
                          <h4 class="title font-500">$15.000</h4>
                        </div>
                      </div>
                      <div class="forward-btn">
                        <i class="ri-reply-fill"></i>
                      </div>
                    </div>
                    <a href="donate-payment.html" class="btn donate-btn w-100">Donate Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of Donate -->
    <!-- Footer S t a r t -->
    <footer>
      <div class="footer-wrapper footer-bg-one">
        <div class="container">
          <div class="footer-menu">
            <div class="col-lg-12">
              <div class="menu-wrapper d-flex align-items-center justify-content-between">
                <div class="header-left d-flex align-items-center justify-content-between">
                  <!-- Logo-->
                  <div class="logo">
                    <a href="index.html"><img src="/assets/images/logo/logo.png" alt="logo"></a>
                  </div>
                </div>
                <!-- Footer-menu -->
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul class="listing" id="navigation2">
                      <li class="single-list"><a href="index.html" class="single active">Home</a></li>
                      <li class="single-list"><a href="/#about" class="single">About</a></li>
                      <li class="single-list"><a href="donation.html" class="single">Donation</a></li>
                      <li class="single-list"><a href="blog.html" class="single">Project</a></li>
                      <li class="single-list"><a href="blog.html" class="single">Volunteer</a></li>
                      <li class="single-list"><a href="contact-us.html" class="single">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- Right button -->
                <ul class="cart">
                  <li class="cart-list"><a href="donate-payment.html" class="donate-btn">Donate</a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="footer-line">
          <div class="footer-imp-link row g-4 justify-content-between">
            <div class="col-xl-4 col-lg-12">
              <div class="footer-link">
                <h4 class="title">Explore Links</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <a class="single" href="/#about">About Company</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="{{route('home')}}">Latest Projects</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="/#about">Our Mission</a>
                  </li>
                </ul>
              </div>
            </div>

            <div id="card" class="col-xl-3 col-lg-5">
              <div class="footer-link">
                <h4 class="title">Get Support</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-mail-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">donation@gmail.com</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-phone-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">(+88) 111-222-333</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-map-pin-2-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">Tropical Cyclone, Volcano</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="footer-link">
                <h4 class="title">Projects</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex gap-20 mb-20 align-items-center">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="/assets/images/gallery/project-1.png" alt="image">
                        </a>
                      </div>

                      <div class="project-info">
                        <p class="project-date">12.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">18 Best Charity Marketing Champions</a></h4>
                      </div>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex gap-20">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="/assets/images/gallery/project-2.png" alt="image">
                        </a>
                      </div>
                      <div class="project-info">
                        <p class="project-date">20.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">Charity starts from home. You Can't Even Help,</a></h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="footer-line">
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p class="pera">Copyright © {{date("Y")}} <a class="text-secondary" href="https://codefactory.com.ng">Codefactory Innovative Hub</a>. All rights reserved.</p>
                    <div class="footer-social-link">
                      <ul class="listing">
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-youtube-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-instagram-line"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-linkedin-fill"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
      <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    <script src="/assets/js/jquery-3.7.0.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="/assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="/assets/js/main.js"></script>
</body>

</html>