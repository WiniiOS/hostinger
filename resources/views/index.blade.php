<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Hebergement & noms de domaine</title>

    <!--build:css-->
    <link id="theme-style" href="{{ url('assets/css/main.css') }}" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{ url('assets/img/logo/blue.png') }}" alt="logo" class="img-fluid" />
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->

    <!-- header & navbar  -->
    @include('partials.header')
    <!--  -->

    <div class="main">

        <!--hero section start-->
        <section class="ptb-100 overflow-hidden primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="hero-slider-content text-white py-5">
                            <div class="headline mb-4">
                                <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span class="fw-bold">Rémise 30%
                                </span> Premier abonnement annuel</p>
                            </div>
                            <h1 class="text-white">Lancez votre site web !</h1>
                            <p class="lead">Hébergement web pas cher, performant avec cPanel et nom de domaine gratuit !</p>

                            <div class="action-btns mt-4">
                                <a href="#" class="btn btn-tertiary btn-lg">Commencez maintenant </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="img-wrap">
                            <img src="assets/img/hero-home.svg" alt="hosting" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--hero section end-->

        <!--domain search promo start-->
        <section class="position-relative zindex-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8 col-12">
                        <div class="domain-search-wrap border gray-light-bg">
                            <h4 class="text-center">Looking For Domain Name?</h4>
                            <form action="domain-search-result.php" method="GET" class="domain-search-form my-4">
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="yourdomainname.com" />
                                <div class="select-group">
                                    <select name="domainType" class="form-control">
                                        <option value="com" selected>.com</option>
                                        <option value="net">.net</option>
                                        <option value="io">.io</option>
                                        <option value="info">.info</option>
                                        <option value="store">.store</option>
                                        <option value="store">.org</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search pe-1"></i> Search
                                    </button>
                                </div>
                            </form>
                            <div class="domain-list-wrap text-center">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/com.png" alt="com" width="70" class="img-fluid"> <span>$8.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/online.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/net.png" alt="com" width="70" class="img-fluid"> <span>$4.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/org.png" alt="com" width="70" class="img-fluid"> <span>$2.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/store.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search promo end-->

        <!--promo section start-->
        <section class="promo-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>We Provide You World Class Best Hosting Features For You</h2>
                            <p>
                                Uniquely repurpose strategic core competencies with progressive
                                content. Assertively transition ethical imperatives and
                                collaborative manufactured products.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-cubes icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Fully functional</h5>
                                    <p class="mb-0">
                                        Phosfluorescently target bleeding sources through viral methodsp
                                        progressively expedite empowered progressively expedite
                                        empowered.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-headset icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>24/7 Live Chat</h5>
                                    <p class="mb-0">
                                        Enthusiastically productivate interactive interfaces after
                                        energistically scale client-centered catalysts scale
                                        client-centered catalysts.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-lock icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Secure Data</h5>
                                    <p class="mb-0">
                                        Synergistically architect virtual content solutions.
                                        Monotonectally communicate cooperative solutions implement user-centric portals .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                            <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly architect front-end methods
                                maintain multidisciplinary process proactively streamline mission-critical information via quality imperatives. </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-tertiary"> Get start now </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/cta-new.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--services section start-->
        <section class="ptb-100 service-section-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Tools And Services For Optimize Website Building</h2>
                            <p>
                                Uniquely repurpose strategic core competencies with progressive
                                content. Assertively transition ethical imperatives and
                                collaborative manufactured products.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4>
                                    <span class="h5 text-uppercase">Easy & First</span>
                                    <br />
              Website Building
                                </h4>
                                <span class="fas fa-code fa-3x color-primary"></span>
                            </div>
                            <p>
                                Globally fashion client-focused synergy for accurate synergy.
                                Quickly network cost effective ideas rather than standardized
                                leadership. Interactively syndicate alternative opportunities via
                                ubiquitous systems.
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-3">View more details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4>
                                    <span class="h5 text-uppercase">Suitable For All Users</span>
                                    <br />
              Managed WordPress
                                </h4>
                                <span class="fab fa-wordpress fa-3x color-primary"></span>
                            </div>
                            `
                            <p>
                                Globally fashion client-focused synergy for accurate synergy.
                                Quickly network cost effective ideas rather than standardized
                                leadership. Interactively syndicate alternative opportunities via
                                ubiquitous systems.
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-3">View more details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4>
                                    <span class="h5 text-uppercase">Commitment To</span>
                                    <br />
              Dedicated Support
                                </h4>
                                <span class="fas fa-headset fa-3x color-primary"></span>
                            </div>
                            <p>
                                Globally fashion client-focused synergy for accurate synergy.
                                Quickly network cost effective ideas rather than standardized
                                leadership. Interactively syndicate alternative opportunities via
                                ubiquitous systems.
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-3">View more details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4>
                                    <span class="h5 text-uppercase">Easy & Smooth</span>
                                    <br />
              Website Transfer
                                </h4>
                                <span class="fas fa-paper-plane fa-3x color-primary"></span>
                            </div>
                            <p>
                                Globally fashion client-focused synergy for accurate synergy.
                                Quickly network cost effective ideas rather than standardized
                                leadership. Interactively syndicate alternative opportunities via
                                ubiquitous systems.
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-3">View more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end-->

        <!--pricing section start-->
        <section class="pricing-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-4">
                            <h2>Our Flexible Pricing Plan</h2>
                            <p>
                                Professional hosting at an affordable price. Distinctively
                                recaptiualize principle-centered core competencies through
                                client-centered core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/dadicate-web-hosting.svg" width="60" alt="hosing" />
                            </div>
                            <h4 class="package-title h5">Web Hosting</h4>
                            <p class="mb-4">For small business</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$8.99 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/vps-hosting.svg" width="60" alt="hosing" />
                            </div>
                            <h4 class="package-title h5">VPS Hosting</h4>
                            <p class="mb-4">For medium business</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$8.99 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/cloud-hosting.svg" width="60" alt="hosing" />
                            </div>
                            <h4 class="package-title h5">Cloud Hosting</h4>
                            <p class="mb-4">Large and enterprise business</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$8.99 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <h5 class="mb-1">
                                <span class="fas fa-headset color-primary me-3"></span>We're Here
                                to Help You
                            </h5>
                            <p>
                                Have some questions? <a href="contact-us.html">Chat with us now</a>, or
                                <a href="contact-us.html">send us an email</a> to get in touch.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->

        <!--features section start-->
        <div class="feature-section ptb-100 ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-5">
                        <div class="feature-content-wrap">
                            <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                            <p>Compellingly customize maintainable results with client-based applications. Dynamically fabricate B2C intellectual capital paradigms. Authoritatively strategize customer directed web-readiness vis-a-vis an expanded array of relationships. </p>
                            <p>Globally synergize team driven testing procedures through end-to-end e-commerce. Uniquely grow backward-compatible deliverables whereas diverse customer service. Credibly communicate vertical synergy without top-line services. </p>
                            <a href="about-us.html" class="read-more-link">Know more about us <i
                        class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/feature-new-1.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between mt-5">
                    <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/feature-new-2.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5">
                        <div class="feature-content-wrap">
                            <h2>Our Own Interfaces for All Management Processes</h2>
                            <p>Authoritatively transform functionalized information without cross-platform convergence.
                                Quickly cross-unit e-markets without superior products foster timely collaboration and idea-sharing rather than magnetic potentialities restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                            <a href="about-us.html" class="read-more-link">Know more about us<i
                        class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--features section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">
                                24/7 Expert Hosting Support Our Customers Love
                            </h2>
                            <p>
                                Objectively innovate high compellingly maintain progressively pursue
                                mission-critical information quality imperatives.
                            </p>
                        </div>
                        <div class="support-action d-inline-flex flex-wrap">
                            <a href="mailto:support@yourdomain.com" class="me-3 text-info"><i class="fas fa-comment me-1 text-tertiary"></i>
                                <span>support@yourdomain.com</span></a>
                            <a href="tel:+00123456789" class="mb-0 text-info"><i class="fas fa-phone-alt me-1 text-tertiary"></i>
                                <span>+00123456789</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--network map section start-->
        <section class="network-map-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Data centers Location</h2>
                            <p>Cloudhub offers a low latency worldwide network, enabling you to deploy your
                                service infrastructure in close proximity to your customer base.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="network-map-wrap">
                            <ul class="custom-map-location">
                                <li style="top: 29%; left: 15.5%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                                </li>
                                <li style="top: 42%; left: 20%;">
                                    <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                                </li>
                                <li style="top: 70%; left: 32%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                                </li>
                                <li style="top: 57%; left: 48%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                                </li>
                                <li style="top: 18%; left: 53%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                                </li>
                                <li style="top: 34%; left: 55%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                                </li>
                                <li style="top: 45%; left: 68%;">
                                    <span data-toggle="tooltip" data-placement="top" title="India"></span>
                                </li>
                                <li style="top: 35%; left: 80%;">
                                    <span data-toggle="tooltip" data-placement="top" title="China"></span>
                                </li>
                                <li style="top: 77%; left: 85%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                                </li>
                            </ul>
                            <img src="assets/img/map-dark.svg" alt="location map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--network map section end-->

        <!--testimonial section start-->
        <section class="review-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>Our Lovely Client Say About Us</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Amazing template</h5>
                                        <p>Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Objectively implement strategic niches through.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Best template for app</h5>
                                        <p>Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Tony Roy</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Efficiently innovate app</h5>
                                        <p>Continually redefine sticky channels whereas extensive "outside the box" thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-4.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Compellingly empower app</h5>
                                        <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Holisticly reintermediate</h5>
                                        <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Compellingly empower app</h5>
                                        <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Holisticly reintermediate</h5>
                                        <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--our blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>Recent News and Events</h2>
                            <p>
                                Efficiently matrix robust total linkage after market positioning bandwidth materials rather
                                than brand flexible paradigms vis-a-vis mission-critical e-commerce.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Professionally cultivate testing</h3>
                                <span> On 20 Mar, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 34 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Monotonectally promote market</h3>
                                <span> On 20 May, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 24 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Seamlessly evolve interactive </h3>
                                <span> On 10 Mar, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 20 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--our blog section end-->

        <!--our team section start-->
        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Lots of Customer Love Us</h2>
                            <p>
                                Rapidiously morph transparent internal or sources whereas resource sucking e-business. Conveniently innovate formulate manufactured products compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our team section end-->

    </div>

    <!--footer section start-->
    <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="d-block">
                        <img src="assets/img/logo-white.png" alt="logo" class="img-fluid" />
                    </a>
                    <br />
                    <p>
                        Dynamically re-engineer high standards in functiona with alternative
                        paradigms. Conveniently monetize resource maximizing initiatives.
                    </p>
                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item">
                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Resources</h6>
                            <ul>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li>
                                    <a href="#">Live sessions</a>
                                </li>
                                <li>
                                    <a href="#">Open source</a>
                                </li>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Products</h6>
                            <ul>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Navigation</a>
                                </li>
                                <li>
                                    <a href="#">AI Studio</a>
                                </li>
                                <li>
                                    <a href="#">Page Speed </a>
                                </li>
                                <li>
                                    <a href="#">Performance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Company</h6>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">Customers</a>
                                </li>
                                <li>
                                    <a href="#">Community</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="font-weight-normal">Support</h6>
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Sells</a>
                                </li>
                                <li>
                                    <a href="#">Contact Support</a>
                                </li>
                                <li>
                                    <a href="#">Network Status</a>
                                </li>
                                <li>
                                    <a href="#">Product Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">
                            &copy; ThemeTags Design Agency, All rights reserved
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-end text-md-end text-start">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="small-text" href="terms-condition.html">Terms & Condition</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="small-text" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <div class="theme-setting show">
        <a href="javascript:void(0)" id="themeSettingShow" class="theme-setting-link"><i class="fas fa-gear fa-spin"></i></a>
        <div class="theme-setting-body">
            <h6>Theme Option</h6>
            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Default Theme</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center active" id="theme-default">
                    <span class="default-primary"></span>
                    <span class="default-accent"></span>
                    <span class="default-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme One</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-1">
                    <span class="theme-1-primary"></span>
                    <span class="theme-1-accent"></span>
                    <span class="theme-1-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme Two</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-2">
                    <span class="theme-2-primary"></span>
                    <span class="theme-2-accent"></span>
                    <span class="theme-2-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme Three</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-3">
                    <span class="theme-3-primary"></span>
                    <span class="theme-3-accent"></span>
                    <span class="theme-3-tertiary"></span>
                </a>
            </div>
        </div>
    </div><!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->

</body>

</html>