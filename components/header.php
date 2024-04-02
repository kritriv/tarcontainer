<?php include_once 'components/head.php'; ?>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDFHPVNB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <div class="preloader"></div> -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header-area-start -->
    <header id="header-sticky" class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo-area">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo_white.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6 col-6">
                    <div class="menu-area menu-padding">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home</a>
                                    </li>
                                    <li><a href="#" onclick="showMaintenanceAlert()">About Us</a></li>
                                    <li><a href="#" onclick="showMaintenanceAlert()">Services</a>
                                    </li>
                                    <li><a href="#" onclick="showMaintenanceAlert()">Blogs</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="side-menu-icon d-lg-none text-end">
                        <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i
                                class="fal fa-bars"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                    <div class="header-info f-right">
                        <div class="info-item info-item-right">
                            <span>Phone Number</span>
                            <h5><a href="tel:+918448996050">+91 8448996050</a></h5>
                        </div>
                        <div class="info-item">
                            <span>Free Consultancy</span>
                            <h5><a href="mailto:info@tarcontainer.com"><span>info@tarcontainer.com</span></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="sidebar__logo mb-40">
                    <a href="index.php">
                        <img src="assets/img/logo/logo_slide.svg" alt="logo">
                    </a>
                </div>
                <div class="sidebar__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="sidebar__contact mt-30 mb-20">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="sidebar__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="sidebar__contact-text">
                                <a target="_blank" href="https://maps.app.goo.gl/DSD7Ykgihi4BR87h6">D-5, Site–B, UPSIDC
                                    Industrial Area, Surajpur, Greater Noida, Uttar Pradesh 201306</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="sidebar__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="sidebar__contact-text">
                                <a href="tel:+918448996050">+91 8448996050</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="sidebar__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="sidebar__contact-text">
                                <a href="mailto:info@tarcontainer.com"><span>info@tarcontainer.com</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar__social">
                    <ul>
                        <li><a href="www.linkedin.com/company/tarcontainer"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li><a href="www.facebook.com/tarcontainer"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="www.youtube.com/tarcontainer"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="www.instagram.com/tarcontainer"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="www.twitter.com/tarcontainer"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->