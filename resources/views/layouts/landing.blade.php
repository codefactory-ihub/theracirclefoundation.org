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

    <title>Theracircle Foundation - {{$title}}</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="/assets/images/logo/icon.png">

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
    @livewireStyles
    <script>
        <?php $loaded = false; ?>
        document.addEventListener("DOMContentLoaded", function(event) {
            <?php $loaded = true; ?>
        });
    </script>
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
                                        <a wire:navigate href="tel:+2349012245699" class="pera"> Call Me (+234) -901 224 5699<span class="pl-20 pr-20">/</span>info@theracirclefoundation.org</a>
                                    </div>
                                    <div class="header-social-link">
                                        <ul class="listing">
                                            <li class="single-list">
                                                <a wire:navigate href="javascript:void(0)" class="single"><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate href="javascript:void(0)" class="single"><i class="ri-youtube-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate href="javascript:void(0)" class="single"><i class="ri-instagram-line"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate href="javascript:void(0)" class="single"><i class="ri-linkedin-fill"></i></a>
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
                                            <a wire:navigate href="{{route("home")}}"><img src="/assets/images/logo/logo.png" alt="Theracircle Foundation Logo"></a>
                                        </div>
                                        <!-- Logo Mobile-->
                                        <div class="logo logo-mobile light-logo">
                                            <a wire:navigate href="{{route("home")}}"><img src="/assets/images/logo/logo.png" alt="Theracircle Foundation Icon"></a>
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
                                                    <a wire:navigate href="{{route("home")}}" class="single {{request()->routeIs('home') ? 'active': ''}}">Home<i class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list"><a wire:navigate href="{{route("home")}}" class="single">Home</a></li>
                                                        <li class="single-list"><a wire:navigate href="{{route("home")}}#about" class="single">About</a></li>
                                                        <li class="single-list"><a wire:navigate href="{{route("home")}}#about" class="single">Words From Our Founder</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-list"><a wire:navigate href="{{route("projects")}}" class="single {{request()->routeIs('projects') ? 'active': ''}}">Project</a></li>
                                                <li class="single-list"><a wire:navigate href="{{route("volunteer")}}" class="single {{request()->routeIs('volunteer') ? 'active': ''}}">Volunteer</a></li>
                                                <li class="single-list"><a wire:navigate href="{{route("request-report")}}" class="single {{request()->routeIs('request-report') ? 'active': ''}}">Reports</a></li>
                                                <!-- <li class="single-list"><a wire:navigate href="{{route("contact")}}" class="single {{request()->routeIs('contact') ? 'active': ''}}">Contact</a></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right d-flex align-items-center">
                                        <!-- Right button -->
                                        <ul class="cart">
                                            <li class="cart-list d-lg-inline-block">
                                                <a wire:navigate href="{{route("donate")}}" class="btn-primary-fill text-uppercase">
                                                    <span class="pera">Donate</span>
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
    {{ $slot }}
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
                                    <a wire:navigate href="{{route("home")}}"><img src="/assets/images/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <!-- Footer-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation2">
                                        <li class="single-list"><a wire:navigate href="{{route("home")}}" class="single {{request()->routeIs('home') ? 'active': ''}}">Home</a></li>
                                        <li class="single-list"><a wire:navigate href="{{route("donate")}}" class="single {{request()->routeIs('donate') ? 'active': ''}}">Donate</a></li>
                                        <li class="single-list"><a wire:navigate href="{{route("projects")}}" class="single {{request()->routeIs('projects') ? 'active': ''}}">Project</a></li>
                                        <li class="single-list"><a wire:navigate href="{{route("volunteer")}}" class="single {{request()->routeIs('volunteer') ? 'active': ''}}">Volunteer</a></li>
                                        <!-- <li class="single-list"><a wire:navigate href="{{route("contact")}}" class="single {{request()->routeIs('contact') ? 'active': ''}}">Contact</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- Right button -->
                            <ul class="cart">
                                <li class="cart-list"><a wire:navigate href="{{route("donate")}}" class="donate-btn">Donate</a></li>
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
                                    <a class="single" href="/#about">About NGO</a>
                                </li>
                                <li class="single-list">
                                    <a wire:navigate class="single" href="{{route('projects')}}">Latest Projects</a>
                                </li>
                                <li class="single-list">
                                    <a wire:navigate class="single" href="/#about">Our Mission</a>
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
                                        <a wire:navigate class="single" href="mailto:info@theracirclefoundation.org">info@theracirclefoundation.org</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <a wire:navigate class="single" href="tel:+2349012245699">(+234) -901 224 5699</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-map-pin-2-fill"></i>
                                        </div>
                                        <a wire:navigate class="single" href="javascript:void(0)">Lagos, Nigeria</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Projects</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <div class="d-flex gap-20 mb-20 align-items-center">
                                        <div class="project-img">
                                            <a wire:navigate href="{{route("donate")}}">
                                                <img src="/assets/images/gallery/project-1.png" alt="image">
                                            </a>
                                        </div>

                                        <div class="project-info">
                                            <p class="project-date">12.Oct.2023</p>
                                            <h4 class="project-title"><a wire:navigate href="{{route("donate")}}">18 Best Charity Marketing Champions</a></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex gap-20">
                                        <div class="project-img">
                                            <a wire:navigate href="{{route("donate")}}">
                                                <img src="/assets/images/gallery/project-2.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="project-info">
                                            <p class="project-date">20.Oct.2023</p>
                                            <h4 class="project-title"><a wire:navigate href="{{route("donate")}}">Charity starts from home. You Can't Even Help,</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
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
                                    <p class="pera">Copyright © {{date("Y")}} <a wire:navigate class="text-secondary" href="https://theracirclefoundation.org">TheraCircle Foundation</a>. All rights reserved.</p>

                                    <div class="footer-social-link">
                                        <ul class="listing">
                                            <li class="single-list">
                                                <a wire:navigate class="single" href=""><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate class="single" href=""><i class="ri-youtube-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate class="single" href=""><i class="ri-instagram-line"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a wire:navigate class="single" href=""><i class="ri-linkedin-fill"></i></a>
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
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        document.addEventListener('livewire:initialized', function() {
            Livewire.hook('component.init', ({
                component,
                cleanup
            }) => {
                $('#preloader-active').delay(200).fadeOut(1);
                $('body').delay(1).css({
                    'overflow': 'visible'
                });
                var counter = 0;
                var c = 0;
                var i = setInterval(function() {
                    $(".loading-page .counter .number").html(c + "%");
                    $(".loading-page .counter .line").css("width", c + "%");

                    counter++;
                    c++;
                    if (counter == 101) {
                        clearInterval(i);
                    }
                }, 10);
            })
            Livewire.on('notification', function(payload) {
                let [message, title, type] = payload;

                if (type == "success")
                    toastr.success(message, title)
                else if (type == "danger")
                    toastr.error(message, title)
                else
                    toastr.info(message, title)
            });
        });
    </script>
</body>

</html>