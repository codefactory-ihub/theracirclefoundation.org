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
                        <li class="single-list"><a href="blog.html" class="single">Reports</a></li>
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
                <p class="key-title font-700 mb-20">Go For Help</p>
                <h1 class="title font-700" data-animation="fadeInUp" data-delay=".0s">Small Effort Make Big Change</h1>
                <p class="pera mx-width-780" data-animation="fadeInUp" data-delay=".2s">Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <div class="d-flex gap-20 flex-wrap align-items-center">
                  <a href="donation.html" class="btn-primary-fill pill-btn" data-animation="fadeInLeft" data-delay=".4s">Donate Now</a>
                  <div class="d-flex">
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
                  </div>
                </div>
                <div class="hero-count-section flex justify-content-between">
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
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="d-flex gap-44 justify-content-end">
                <div id="play-video" class="hero-image position-relative d-none d-lg-block">
                  <img src="/assets/images/hero/hero-6.png" alt="img" class="w-100 tilt-effect" data-animation="fadeInRight" data-delay="0.2s">
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
        <div class="row g-24">
          <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.0s">
              <div class="helpful-card-icon">
                <i class="ri-hand-coin-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Medical & Blood</h4>
                <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                <a href="javascript:void(0)" class="imp-link">Read More <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">01</h4>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="helpful-card-icon">
                <i class="ri-24-hours-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Social Service</h4>
                <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                <a href="javascript:void(0)" class="imp-link">Read More <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">02</h4>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.2s">
              <div class="helpful-card-icon">
                <i class="ri-exchange-dollar-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Send a Charitable</h4>
                <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                <a href="javascript:void(0)" class="imp-link">Read More <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">03</h4>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="helpful-card wow fadeInUp" data-wow-delay="0.3s">
              <div class="helpful-card-icon">
                <i class="ri-book-open-line"></i>
              </div>
              <div class="helpful-card-caption">
                <h4 class="caption-title">Education</h4>
                <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                <a href="javascript:void(0)" class="imp-link">Read More <i class="ri-arrow-right-up-line"></i></a>
              </div>
              <div class="number-watermark">
                <h4 class="number">04</h4>
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
              <p class="pera-subtitle mb-15">When deciding which charity to donate to, it's important to do your e search and find one that aligns with your values and interests. Look for charities that are transparent preventable diseases,</p>
              <p class="pera-subtitle">When deciding which charity to donate to, it's important to do your e search and find one that aligns with your values and interests. Look for charities that are transparent preventable diseases,</p>
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
                      <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 mt-10">
                  <a href="about.html" class="btn btn-primary-fill">Read More</a>
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
              <h2 class="title font-700">Help & Donate Us Now</h2>
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

    <!-- Event S t a r t -->
    <div class="our-event-three">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 mx-auto">
            <!-- Section Tittle -->
            <div class="section-tittle text-center mb-45">
              <h2 class="title font-700">Upcoming Events</h2>
              <p class="pera">When deciding which charity to donate to, it's important to do your research and find one that aligns with your values and interests.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider center-slider-active">
        <!-- Single -->
        <div class="clip event-image-overlay ml-15 mr-15">
          <a href="event-details.html"><img class="main-img" src="/assets/images/gallery/event-6.png" alt="image"></a>
          <div class="brush-bg">
            <img src="/assets/images/gallery/brush.png" alt="image">
          </div>
          <div class="overlay-text">
            <h4 class="title"><a href="event-details.html">Your donation, no matter how big or small, can make.</a></h4>
            <div class="highlight">
              <p class="pera">Leadership, Pro Event</p>
            </div>
          </div>
        </div>
        <!-- Single -->
        <div class="clip event-image-overlay ml-15 mr-15">
          <a href="event-details.html"> <img class="main-img" src="/assets/images/gallery/event-6.png" alt="image"></a>
          <div class="brush-bg">
            <img src="/assets/images/gallery/brush.png" alt="image">
          </div>
          <div class="overlay-text">
            <h4 class="title"><a href="event-details.html">Your donation, no matter how big or small, can make.</a></h4>
            <div class="highlight">
              <p class="pera">Leadership, Pro Event</p>
            </div>
          </div>
        </div>
        <!-- Single -->
        <div class="clip event-image-overlay ml-15 mr-15">
          <a href="#"><img class="main-img" src="/assets/images/gallery/event-6.png" alt="image"></a>
          <div class="brush-bg">
            <img src="/assets/images/gallery/brush.png" alt="image">
          </div>
          <div class="overlay-text">
            <h4 class="title"><a href="event-details.html">Your donation, no matter how big or small, can make.</a></h4>
            <div class="highlight">
              <p class="pera">Leadership, Pro Event</p>
            </div>
          </div>
        </div>
        <!-- Single -->
        <div class="clip event-image-overlay ml-15 mr-15">
          <a href="event-details.html"><img class="main-img" src="/assets/images/gallery/event-6.png" alt="image"></a>
          <div class="brush-bg">
            <img src="/assets/images/gallery/brush.png" alt="image">
          </div>
          <div class="overlay-text">
            <h4 class="title"><a href="event-details.html">Your donation, no matter how big or small, can make.</a></h4>
            <div class="highlight">
              <p class="pera">Leadership, Pro Event</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End-of Event -->

    <!-- Testimonial S t a r t-->
    <section class="testimonial-section-three section-padding">
      <div class="container">
        <div class="row gy-24 align-items-center">
          <div class="col-xl-4">
            <!-- Section Tittle -->
            <div class="section-tittle">
              <span class="sub-tittle text-capitalize font-600">Testimonials</span>
              <h2 class="title font-700">That's very glad to get People Review</h2>
              <p class="pera">If you're interested in donating your Money, it's important to discussyour wishes. These questions are used to provoke thought and discussion. They can be used to challenge the other person's assumptions.</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-9">
            <div class="position-relative">
              <div class="testimonial-slider-three-active flex">
                <div class="quote-with-img">
                  <div class="testimonial-images">
                    <img class="w-100" src="/assets/images/gallery/testimonial.png" alt="image">
                  </div>
                </div>
                <div class="testimonial-images">
                  <img class="w-100" src="/assets/images/gallery/testimonial.png" alt="image">
                </div>
                <div class="testimonial-images">
                  <img class="w-100" src="/assets/images/gallery/testimonial.png" alt="image">
                </div>
              </div>
              <div class="position-card d-none d-lg-block">
                <div class="single-testimonial-three">
                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                  </div>
                  <div class="position-relative">
                    <p class="pera"><i>These questions are used to provoke thought and discussion. They can be used to challenge the other person's assumptions, such as "Do you really think that's true?"</i></p>
                  </div>
                  <div class="client-info">
                    <div class="client-image">
                      <img src="/assets/images/gallery/testimonial-4.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h3 class="home">Robart Jonson</h3>
                      <p class="location">Manager</p>
                    </div>
                  </div>
                  <div class="position-absolute quote">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="45" viewBox="0 0 62 45" fill="none">
                      <path d="M20.6667 0.75H10.3333C7.59277 0.75 4.96445 1.83869 3.02657 3.77657C1.08869 5.71445 0 8.34277 0 11.0833L0 21.4167C0 22.787 0.544345 24.1011 1.51328 25.0701C2.48222 26.039 3.79639 26.5834 5.16667 26.5834H20.4342C19.8212 30.1911 17.9528 33.4661 15.1591 35.8297C12.3654 38.1932 8.8261 39.4933 5.16667 39.5001C4.48153 39.5001 3.82445 39.7722 3.33998 40.2567C2.85551 40.7412 2.58334 41.3983 2.58334 42.0834C2.58334 42.7685 2.85551 43.4256 3.33998 43.9101C3.82445 44.3946 4.48153 44.6667 5.16667 44.6667C10.6459 44.6606 15.899 42.4812 19.7734 38.6068C23.6479 34.7324 25.8272 29.4793 25.8334 24V5.91667C25.8334 4.54639 25.289 3.23222 24.3201 2.26328C23.3511 1.29434 22.037 0.75 20.6667 0.75Z" fill="#EDEDEF" />
                      <path d="M56.8334 0.75H46.5001C43.7595 0.75 41.1312 1.83869 39.1933 3.77657C37.2554 5.71445 36.1667 8.34277 36.1667 11.0833V21.4167C36.1667 22.787 36.7111 24.1011 37.68 25.0701C38.649 26.039 39.9631 26.5834 41.3334 26.5834H56.6009C55.988 30.1911 54.1196 33.4661 51.3258 35.8297C48.5321 38.1932 44.9929 39.4933 41.3334 39.5001C40.6483 39.5001 39.9912 39.7722 39.5067 40.2567C39.0223 40.7412 38.7501 41.3983 38.7501 42.0834C38.7501 42.7685 39.0223 43.4256 39.5067 43.9101C39.9912 44.3946 40.6483 44.6667 41.3334 44.6667C46.8127 44.6606 52.0658 42.4812 55.9402 38.6068C59.8146 34.7324 61.994 29.4793 62.0001 24V5.91667C62.0001 4.54639 61.4558 3.23222 60.4868 2.26328C59.5179 1.29434 58.2037 0.75 56.8334 0.75Z" fill="#EDEDEF" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of Testimonial -->

    <!-- Blog S t a r t -->
    <section class="blog-section-three bottom-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <!-- Section Tittle -->
            <div class="section-tittle text-center mb-50">
              <span class="sub-tittle text-capitalize font-600">Blog</span>
              <h2 class="title font-700">Our Blog & Feeds</h2>
            </div>
          </div>
        </div>
        <div class="row gy-24">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.0s">
              <div class="blog-img">
                <a href="blog-details.html">
                  <img src="/assets/images/gallery/blog-7.png" class="img-fluid w-100" alt="img">
                </a>
                <div class="brush-bg">
                  <img src="/assets/images/gallery/brush.png" alt="image">
                </div>
              </div>
              <div class="blog-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="blog-info-title">
                    <div class="flex gap-16 mb-15 align-items-center">
                      <div class="user flex gap-10 align-items-center">
                        <i class="ri-user-line"></i>
                        <p class="info">By: admin</p>
                      </div>
                      <div class="donate flex gap-10 align-items-center">
                        <i class="ri-chat-3-line"></i>
                        <p class="info">Donation</p>
                      </div>
                    </div>
                    <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                    <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                  </div>
                </div>
              </div>
              <div class="button-section"><a href="blog-details.html" class="read-btn">Read More</a></div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.1s">
              <div class="blog-img position-relative">
                <a href="blog-details.html"> <img src="/assets/images/gallery/blog-8.png" class="img-fluid w-100" alt="img"> </a>
                <div class="brush-bg">
                  <img src="/assets/images/gallery/brush.png" alt="image">
                </div>
              </div>
              <div class="blog-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="blog-info-title">
                    <div class="flex gap-16 mb-15 align-items-center">
                      <div class="user flex gap-10 align-items-center">
                        <i class="ri-user-line"></i>
                        <p class="info">By: admin</p>
                      </div>
                      <div class="donate flex gap-10 align-items-center">
                        <i class="ri-chat-3-line"></i>
                        <p class="info">Donation</p>
                      </div>
                    </div>
                    <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                    <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                  </div>
                </div>
              </div>
              <div class="button-section"><a href="blog-details.html" class="read-btn">Read More</a></div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.2s">
              <div class="blog-img position-relative">
                <a href="blog-details.html"> <img src="/assets/images/gallery/blog-9.png" class="img-fluid w-100" alt="img"> </a>
                <div class="brush-bg">
                  <img src="/assets/images/gallery/brush.png" alt="image">
                </div>
              </div>
              <div class="blog-info">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="blog-info-title">
                    <div class="flex gap-16 mb-15 align-items-center">
                      <div class="user flex gap-10 align-items-center">
                        <i class="ri-user-line"></i>
                        <p class="info">By: admin</p>
                      </div>
                      <div class="donate flex gap-10 align-items-center">
                        <i class="ri-chat-3-line"></i>
                        <p class="info">Donation</p>
                      </div>
                    </div>
                    <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                    <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                  </div>
                </div>
              </div>
              <div class="button-section"><a href="blog-details.html" class="read-btn">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End-of Blog -->

    <!-- Gallery S t a r t -->
    <div class="gallery-area">
      <div class="gallery-slider d-flex">
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-1.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-2.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-3.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-4.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-2.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-3.png" alt="img">
        </div>
        <div class="gallery-img">
          <img src="/assets/images/gallery/gallery-1.png" alt="img">
        </div>
      </div>
    </div>
    <!-- End-of Gallery -->
  </main>
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
                    <li class="single-list"><a href="donation.html" class="single">Donation</a></li>
                    <li class="single-list"><a href="about.html" class="single">About</a></li>
                    <li class="single-list"><a href="blog.html" class="single">Blog</a></li>
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
          <div class="col-xl-2 col-lg-6">
            <div class="footer-link">
              <h4 class="title">Explore Links</h4>
              <ul class="imp-link">
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">About Company</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Latest Projects</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Latest Blog</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Our Testimonials</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Our Mission</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6">
            <div class="footer-link">
              <h4 class="title">Get Support</h4>
              <ul class="imp-link">
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">About</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">How it Works</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Knowledge Hub</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Success Stories</a>
                </li>
                <li class="single-list">
                  <a class="single" href="javascript:void(0)">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-5">
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
                  <p class="pera">Copyright © 2023 initTheme. All rights reserved.</p>
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