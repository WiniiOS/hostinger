<!--header section start-->
<header id="header" class="header-main">
        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">
                    <!--logo start-->
                    <a class="navbar-brand pt-0" href="index.html">
                        <img sizes="108x25" src="{{ url('assets/img/logo/white.png') }}" alt="logo" />
                    </a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
                        <span id="hamburgerTrigger">
                        <span class="fas fa-bars"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                                <a class="nav-link custom-nav-link " href="{{ route('home') }}" > Accueil </a>
                            </li>
                            <!--home end-->
                            
                            <!--pages start-->
                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">
                                    Pages
                                </a>
                                <!-- Pages - Submenu -->
                                <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="about-us.html">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="offer-single-page.html">
                                            Black Friday Single
                                        </a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="terms-condition.html">
                                            Terms & Condition
                                        </a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="privacy-policy.html">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPricing">
                                            Pricing
                                        </a>
                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-default.html">
                                                    Pricing Default
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-package.html">
                                                    Pricing Packages
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-web-hosting.html">
                                                    Web Hosting Packages
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-windows-hosting.html">
                                                    Windows Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-comparision.html">
                                                    Pricing Comparison
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="pricing-specifications.html">
                                                    Pricing Specifications
                                                    <span class="badge bg-danger ms-auto">New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="vps-pricing.html">
                                                    VPS Pricing
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesBlog" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesBlog">
                                            Blog
                                        </a>
                                        <ul id="navSubmenuPagesBlog" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesBlog" style="min-width: 230px;">
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="blog-grid.html">
                                                    Blog Grid
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="blog-details.html">
                                                    Blog Details
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">
                                            Specialty
                                        </a>
                                        <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="domain-search-result.html">
                                                    Search Result
                                                    <span class="badge bg-success ms-2">New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="cover-page.html">
                                                    Cover Page
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="coming-soon.html">
                                                    Coming Soon
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="thank-you.html">
                                                    Thank You
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="404.html">
                                                    Error 404
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">
                                            Login &amp; Signup
                                        </a>
                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="login.html">
                                                    Login
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="sign-up.html">
                                                    Signup
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link sub-menu-nav-link" href="password-reset.html">
                                                    Recover Account
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!--pages end-->
                            
                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                                    Hosting
                                </a>
                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu main-sub-menu" style="width: 715px;" aria-labelledby="hostingMegaMenu">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="shared-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fas fa-server rounded-circle primary-bg"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                Shared Web Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    Reliable quality Starting at
                                                                    <strong>$2.99</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="vps-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fas fa-box rounded-circle accent-bg"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                VPS Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    Maintain Starting at
                                                                    <strong>$11.99</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="cloud-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fas fa-cloud rounded-circle secondary-bg"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                Cloud Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    Cloud Starting at
                                                                    <strong>$5.99/mo</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="email-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fas fa-envelope rounded-circle twitter-bg"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                Email Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    First Starting at
                                                                    <strong>$0.99/mo</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="windows-vps-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fab fa-windows rounded-circle bg-success"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                Windows VPS Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    Globally Starting at
                                                                    <strong>$9.99/mo</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="menu-item-icon pe-3">
                                                                <i
                                class="fas fa-database rounded-circle dribbble-bg"
                              ></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">
                                Dedicated Server Hosting
                              </span>
                                                                <small class="u-header__promo-text">
                                                                    Conveniently Starting at
                                                                    <strong>$9.99/mo</strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--application hosting start-->
                                    <div class="application-hosting text-white">
                                        <span
                    class="sub-menu-title text-lg-center text-md-center text-white mb-3"
                  >
                    Application For Hosting
                  </span>
                                        <ul class="application-hosting-list">
                                            <li>
                                                <a href="wp-hosting.html">
                                                    <img src="assets/img/icons/wordpress-icon-color.svg" alt="icon" />
                                                    WordPress Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="joomla-hosting.html">
                                                    <img src="assets/img/icons/joomla-icon-color.svg" alt="icon" />
                                                    Joomla Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="magento-hosting.html">
                                                    <img src="assets/img/icons/magento-icon-color.svg" alt="icon" />
                                                    Magento Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="opencart-hosting.html">
                                                    <img src="assets/img/icons/opencart-icon-color.svg" alt="icon" />
                                                    Opencart Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="prestashop-hosting.html">
                                                    <img src="assets/img/icons/prestashop-icon-color.svg" alt="icon" />
                                                    Prestashop Hosting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="drupal-hosting.html">
                                                    <img src="assets/img/icons/drupal-icon-color.svg" alt="icon" />
                                                    Drupal Hosting
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--application hosting end-->
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--hosting end-->
                            <!--domain start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                                    Domain
                                </a>
                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu main-sub-menu" style="width: 660px;" aria-labelledby="domainMegaMenu">
                                    <div class="row g-0">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="menu-item-wrap p-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="domain-checker.html">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-globe me-2 color-primary"></i>
                                                            <span class="u-header__promo-title">
                              Domain Checker
                            </span>
                                                        </div>
                                                        <small class="u-header__promo-text">
                                                            Find the perfect domain for your business
                                                        </small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="domain-transfer.html">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i
                              class="fas fa-exchange-alt me-2 color-accent"
                            ></i>
                                                            <span class="u-header__promo-title">
                              Domain Transfer
                            </span>
                                                        </div>
                                                        <small class="u-header__promo-text">
                                                            Transfer your domain easily
                                                        </small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="domain-registration.html">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i
                              class="fas fa-copyright me-2 instagram-color"
                            ></i>
                                                            <span class="u-header__promo-title">
                              Domain Registration
                            </span>
                                                        </div>
                                                        <small class="u-header__promo-text">
                                                            Register your domain name for lifetime
                                                        </small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 gray-light-bg custom-radius-right">
                                            <div class="menu-item-wrap p-4">
                                                <h6>#1 Web Hosting Company</h6>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1">
                                                        <small>
                                                            <span
                              class="fas fa-check-circle text-success me-2"
                            ></span>
                                                            <strong>Flexible</strong>
                                                            Easy to Use Control Panel
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span
                              class="fas fa-check-circle text-success me-2"
                            ></span>
                                                            <strong>99%</strong>
                                                            Uptime Guarantee
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span
                              class="fas fa-check-circle text-success me-2"
                            ></span>
                                                            <strong>45-Day</strong>
                                                            Money-Back Guarantee
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span
                              class="fas fa-check-circle text-success me-2"
                            ></span>
                                                            <strong>Free SSL</strong>
                                                            Certificate Included
                                                        </small>
                                                    </li>
                                                </ul>
                                                <a class="btn btn-tertiary btn-block mt-3" href="#">
                                                    Learn More
                                                    <span class="fas fa-angle-right ms-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--domain end-->
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="affiliates.html">
                                    Affiliates
                                </a>
                            </li>
                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                                    Company
                                </a>
                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu" style="width: 320px;" aria-labelledby="aboutMegaMenu">
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="contact-us.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact Us</span>
                                                    <small class="u-header__promo-text">
                                                        Face any problem contact with us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="about-us.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">About Us</span>
                                                    <small class="u-header__promo-text">
                                                        We are leading hosting company
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="partners.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">
                                                        We have trusted partners globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Network</span>
                                                    <small class="u-header__promo-text">
                                                        Keep your data save and secure
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="blog-grid.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/blog.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Company Blog</span>
                                                    <small class="u-header__promo-text">
                                                        Industry latest technology news & tips
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                </div>
                                <!--about submenu end-->
                            </li>
                            <!--about end-->
                            <!--button start-->
                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn btn-tertiary animated-btn" href="https://whmcs.themetags.com/index.php?systpl=kohost&carttpl=themetags_cart" target="_blank">
                                    <span class="fa fa-user pe-2"></span>
                                    Client Area
                                </a>
                            </li>
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->

        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1">
            <div class="offcanvas-header border-bottom">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo-color.png" alt="logo" class="img-fluid" />
                </a>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body offcanvas-menu-wrap">
                <!--offcanvas menu list start-->
                <ul class="navbar-nav">
                    <!--home item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Home
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0">
                                <div class="col-12 gray-light-bg">
                                    <div class="menu-item-wrap p-4">
                                        <h6>#1 Web Hosting Company</h6>
                                        <p>
                                            Get your website, web store or application online using our
                                            reliable and fast hosting.
                                        </p>
                                        <ul class="list-unstyled content-feature-list mb-2">
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                Managed cloud
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                Business continuity
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                IT/Cloud consultancy
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                Load and stress testing
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                Managed Kubernetes
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success pe-2"></i>
                                                Managed Multi-datacenter
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row no-gutters p-4">
                                        <div class="col-sm-12">
                                            <span class="sub-menu-title">Home different style</span>
                                            <ul class="home-demo-list">
                                                <li>
                                                    <a href="index.html">
                                                        <i class="far fa-hard-drive me-2"></i>
                                                        Home Default
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-image.html">
                                                        <i class="far fa-file-image me-2"></i>
                                                        Home Image
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-slider.html">
                                                        <i class="far fa-clone me-2"></i>
                                                        Home Content Slider
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-gaming.html">
                                                        <i class="far fa-gem me-2"></i>
                                                        Home Gaming Hosting
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-video.html">
                                                        <i class="far fa-file-video me-2"></i>
                                                        Home Background Video
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-black-friday.html">
                                                        <i class="far fa-lightbulb me-2"></i>
                                                        Home Black Friday Sale
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-black-friday-coming.html">
                                                        <i class="far fa-circle-dot me-2"></i>
                                                        Home Black Friday Coming
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-top-navbar.html">
                                                        <i class="far fa-hard-drive me-2"></i>
                                                        Home Top Navbar
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- Mega Menu Banner -->
                                    <div class="u-header__product-banner">
                                        <div class="u-header__product-banner-content text-center text-white">
                                            <div class="mb-4">
                                                <h5 class="text-white">Get 25% Discount Start Now</h5>
                                                <ul class="list-unstyled list-inline menu-countdown my-4">
                                                    <li class="list-inline-item mb-0">
                                                        <span
                            class="counter-days border border-light fs-sm text-light p-2 rounded fw-medium"
                          ></span>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <span
                            class="counter-hours border border-light fs-sm text-light p-2 rounded fw-medium"
                          ></span>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <span
                            class="counter-minutes border border-light fs-sm text-light p-2 rounded fw-medium"
                          ></span>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <span
                            class="counter-seconds border border-light fs-sm text-light p-2 rounded fw-medium"
                          ></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-tertiary mt-2" href="#">
                                                Get start now
                                                <span class="fas fa-arrow-right ps-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--home item end-->

                    <!--page item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="offer-single-page.html">
                                    Black Friday Single
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="terms-condition.html">
                                    Terms & Condition
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="privacy-policy.html">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Pricing
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="pricing-default.html">
                                            Pricing Default
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pricing-package.html">
                                            Pricing Packages
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pricing-web-hosting.html">
                                            Web Hosting Packages
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pricing-windows-hosting.html">
                                            Windows Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pricing-comparision.html">
                                            Pricing Comparison
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pricing-specifications.html">
                                            Pricing Specifications
                                            <span class="badge bg-danger ms-auto">New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="vps-pricing.html">
                                            VPS Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-details.html">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Specialty
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="domain-search-result.html">
                                            Search Result
                                            <span class="badge bg-success ms-2">New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="cover-page.html">Cover Page</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="coming-soon.html">
                                            Coming Soon
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="thank-you.html">Thank You</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="404.html">Error 404</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Login and Signup
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="sign-up.html">Signup</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="password-reset.html">
                                            Recover Account
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--page item end-->

                    <!--hosting item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Hosting
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="shared-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i
                            class="fas fa-server rounded-circle primary-bg"
                          ></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">
                            Shared Web Hosting
                          </span>
                                                        <small class="u-header__promo-text">
                                                            Reliable quality Starting at
                                                            <strong>$2.99</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="vps-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i class="fas fa-box rounded-circle accent-bg"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">VPS Hosting</span>
                                                        <small class="u-header__promo-text">
                                                            Maintain Starting at
                                                            <strong>$11.99</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="cloud-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i
                            class="fas fa-cloud rounded-circle secondary-bg"
                          ></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">
                            Cloud Hosting
                          </span>
                                                        <small class="u-header__promo-text">
                                                            Cloud Starting at
                                                            <strong>$5.99/mo</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="email-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i
                            class="fas fa-envelope rounded-circle twitter-bg"
                          ></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">
                            Email Hosting
                          </span>
                                                        <small class="u-header__promo-text">
                                                            First Starting at
                                                            <strong>$0.99/mo</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="windows-vps-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i
                            class="fab fa-windows rounded-circle bg-success"
                          ></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">
                            Windows VPS Hosting
                          </span>
                                                        <small class="u-header__promo-text">
                                                            Globally Starting at
                                                            <strong>$9.99/mo</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="menu-item-icon pe-3">
                                                        <i
                            class="fas fa-database rounded-circle dribbble-bg"
                          ></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">
                            Dedicated Server Hosting
                          </span>
                                                        <small class="u-header__promo-text">
                                                            Conveniently Starting at
                                                            <strong>$9.99/mo</strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                    </div>
                                </div>
                            </div>
                            <!--application hosting start-->
                            <div class="application-hosting text-white">
                                <span
                class="sub-menu-title text-lg-center text-md-center text-white mb-3"
              >
                Application For Hosting
              </span>
                                <ul class="application-hosting-list">
                                    <li>
                                        <a href="wp-hosting.html">
                                            <img src="assets/img/icons/wordpress-icon-color.svg" alt="icon" />
                                            WordPress Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="joomla-hosting.html">
                                            <img src="assets/img/icons/joomla-icon-color.svg" alt="icon" />
                                            Joomla Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="magento-hosting.html">
                                            <img src="assets/img/icons/magento-icon-color.svg" alt="icon" />
                                            Magento Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="opencart-hosting.html">
                                            <img src="assets/img/icons/opencart-icon-color.svg" alt="icon" />
                                            Opencart Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="prestashop-hosting.html">
                                            <img src="assets/img/icons/prestashop-icon-color.svg" alt="icon" />
                                            Prestashop Hosting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="drupal-hosting.html">
                                            <img src="assets/img/icons/drupal-icon-color.svg" alt="icon" />
                                            Drupal Hosting
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--application hosting end-->
                        </div>
                    </li>
                    <!--hosting item end-->

                    <!--domain item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Domain
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0">
                                <div class="">
                                    <div class="menu-item-wrap p-3">
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="domain-checker.html">
                                                <div class="d-flex align-items-center pb-1">
                                                    <i class="fas fa-globe me-2 color-primary"></i>
                                                    <span class="u-header__promo-title">
                          Domain Checker
                        </span>
                                                </div>
                                                <small class="u-header__promo-text">
                                                    Find the perfect domain for your business
                                                </small>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="domain-transfer.html">
                                                <div class="d-flex align-items-center pb-1">
                                                    <i class="fas fa-exchange-alt me-2 color-accent"></i>
                                                    <span class="u-header__promo-title">
                          Domain Transfer
                        </span>
                                                </div>
                                                <small class="u-header__promo-text">
                                                    Transfer your domain easily
                                                </small>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="domain-registration.html">
                                                <div class="d-flex align-items-center pb-1">
                                                    <i class="fas fa-copyright me-2 instagram-color"></i>
                                                    <span class="u-header__promo-title">
                          Domain Registration
                        </span>
                                                </div>
                                                <small class="u-header__promo-text">
                                                    Register your domain name for lifetime
                                                </small>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                    </div>
                                </div>
                                <div class="gray-light-bg">
                                    <div class="menu-item-wrap p-4">
                                        <h6>#1 Web Hosting Company</h6>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1">
                                                <small>
                                                    <span
                          class="fas fa-check-circle text-success me-2"
                        ></span>
                                                    <strong>Flexible</strong>
                                                    Easy to Use Control Panel
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span
                          class="fas fa-check-circle text-success me-2"
                        ></span>
                                                    <strong>99%</strong>
                                                    Uptime Guarantee
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span
                          class="fas fa-check-circle text-success me-2"
                        ></span>
                                                    <strong>45-Day</strong>
                                                    Money-Back Guarantee
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span
                          class="fas fa-check-circle text-success me-2"
                        ></span>
                                                    <strong>Free SSL</strong>
                                                    Certificate Included
                                                </small>
                                            </li>
                                        </ul>
                                        <a class="btn btn-tertiary btn-block mt-3" href="#">
                                            Learn More
                                            <span class="fas fa-angle-right ms-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--domain item end-->

                    <!--affiliate item start-->
                    <li class="nav-item">
                        <a class="nav-link" href="affiliates.html">Affiliates</a>
                    </li>
                    <!--affiliate item end-->

                    <!--company item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Company
                        </a>
                        <div class="dropdown-menu">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="contact-us.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact Us</span>
                                                    <small class="u-header__promo-text">
                                                        Face any problem contact with us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="about-us.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">About Us</span>
                                                    <small class="u-header__promo-text">
                                                        We are leading hosting company
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="partners.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">
                                                        We have trusted partners globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Network</span>
                                                    <small class="u-header__promo-text">
                                                        Keep your data save and secure
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="blog-grid.html">
                                            <div class="d-flex align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/blog.svg" alt="SVG" />
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Company Blog</span>
                                                    <small class="u-header__promo-text">
                                                        Industry latest technology news & tips
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--company item end-->

                    <!--button start-->
                    <li class="nav-item header-nav-last-item d-flex align-items-center mt-3">
                        <a class="btn btn-tertiary animated-btn" href="https://whmcs.themetags.com/index.php?systpl=kohost&carttpl=themetags_cart" target="_blank">
                            <span class="fa fa-user pe-2"></span>
                            Client Area
                        </a>
                    </li>
                    <!--button end-->
                </ul>
                <!--offcanvas menu list end-->
            </div>
        </div>
        <!--offcanvas menu end-->
    </header>
    <!--header section end-->