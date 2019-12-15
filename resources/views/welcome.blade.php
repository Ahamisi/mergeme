<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MergeME</title>
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="/mergeme/resources/landing/plugins/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/mergeme/resources/landing/plugins/fancybox-master/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/mergeme/resources/landing/plugins/aos-animation/aos.css">
  <!-- fonts -->
  <link rel="stylesheet" href="/mergeme/resources/landing/fonts/ep-icon-fonts/css/style.css">
  <link rel="stylesheet" href="/mergeme/resources/landing/fonts/fontawesome-5/css/all.min.css">
  <link rel="stylesheet" href="/mergeme/resources/landing/fonts/typography-font/typo-fonts.css">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="/mergeme/resources/landing/css/settings.css">
  <link rel="stylesheet" href="/mergeme/resources/landing/css/style.css">
</head>

<body>
<div class="site-wrapper">
    <div class="preloader-wrap">
        <div class="berlin-cube-grid">
            <div class="berlin-cube berlin-cube1"></div>
            <div class="berlin-cube berlin-cube2"></div>
            <div class="berlin-cube berlin-cube3"></div>
            <div class="berlin-cube berlin-cube4"></div>
            <div class="berlin-cube berlin-cube5"></div>
            <div class="berlin-cube berlin-cube6"></div>
            <div class="berlin-cube berlin-cube7"></div>
            <div class="berlin-cube berlin-cube8"></div>
            <div class="berlin-cube berlin-cube9"></div>
        </div>
    </div>
    <!-- Header Starts -->
    <header class="site-header d-none d-lg-block">
        <div class="container-fluid pl-lg--35 pr-lg--35">
            <div class="row justify-content-between align-items-center position-relative">
                <div class="col">
                    <!-- Brand Logo -->
                    <div class="brand-logo">
                              <i class="fab fa-mix" style="font-size:60px"></i><strong>MergeMe</strong>
                    </div>
                </div>
                <!-- Menu Block -->
                <div class="col">
                    <div class="main-navigation ">
                        <ul class="main-menu">

                <!-- Button Block -->
                <div class="col">
                    <div class="header-btns">
                        <a href="{{ url('/login') }}" class="btn btn--transparent ">Sign in</a>
                        <a href="{{ url('/register') }}" class="btn btn--primary hvr-shine">Register  Now</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu Header Starts -->
    <header class="mobile-header d-lg-none">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-md-4 col-7" style="color: #fff;">
            <a href="{{ url('/home') }}" class="site-brand">
                <i class="fab fa-mix" style="font-size:60px"></i><strong>MergeMe</strong>
            </a>
        </div>
        <div class="col-md-8 col-5 text-right">
            <div class="header-top-widget">
                <ul class="header-links">
                    <li class="single-link">
                    <a href="#" class="link-icon hamburger-icon off-canvas-btn"><i class="icon icon-menu-34"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    </header>
    <!--Off Canvas Navigation Start-->
    <aside class="off-canvas-wrapper">
        <div class="btn-close-off-canvas">
            <i class="icon icon-simple-remove"></i>
        </div>
        <div class="off-canvas-inner">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu">
                        <li class="menu-item"><a href="#feature">About</a></li>

                        <li class="menu-item"><a href="#demos">Demos</a></li>

                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <!-- Header buttons start -->
            <div class="header-btns offcanvas">
                <div class="header-btns">
                    <a href="{{ url('/login') }}" class="btn btn-primary--opacity hvr-bounce-to-right">Sign in</a>
                    <a href="{{ url('/register') }}" class="btn btn--primary hvr-shine">Register  Now</a>
                </div>
            </div>
            <!-- Header buttons end -->
        </div>
    </aside>
    <!--Off Canvas Navigation End-->

    <!-- Banner Section -->
    <section class="hero-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="hero-content">
                        <h1 class="title h2">Get your Dream Job, faster!</h1>
                        <p>Get Fulltime, Contract and Freelance roles in all industry ranging from Fashion, ICT, Domestic, Events Planning and so on </p>
                        <div class="hero-btn">
                        <a href="{{ url('/register')}}" class="btn btn--primary hvr-shine">Get Started Now</a>
                            <span class="text--info">Automated and realtime job monitoring dashboard</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="dashboard-img" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true">
                        <img src="/mergeme/resources/landing/image/dashboard-analytics.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="hero-shape"><img src="image/hero-shape.png" alt=""></div> -->
    </section>

    <!-- Feature Section -->
    <div class="feature-section" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true" data-aos-delay="300">
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-1"></span>
                            <span class="outer-circle circle-bg-1"></span>
                        </div>
                        <div class="widget__body divider--right">
                            <h3 class="widget__heading h6">Single Platform</h3>
                            <p>Take control of everything, switch from freelance to fulltime, change your job market instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4"  data-aos="fade-up" data-aos-duration='1500' data-aos-once="true" data-aos-delay='800'>
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-2"></span>
                            <span class="outer-circle circle-bg-2"></span>
                        </div>
                        <div class="widget__body divider--right">
                            <h3 class="widget__heading h6">Faster Communication</h3>
                            <p>Have direct communication with your clients via our sms messages and voice calls.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true" data-aos-delay='1300'>
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-3"></span>
                            <span class="outer-circle circle-bg-3"></span>
                        </div>
                        <div class="widget__body">
                            <h3 class="widget__heading h6">Everything in One Place</h3>
                            <p>We care for you ate MergeME. So we have bulk of clienteles waiting for your service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section -->
    <div class="content-section bg-light-white section-padding" id="demos">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="content-img content-img-group-1">
                        <div class="image-1 d-none d-md-block " data-aos="fade-left" data-aos-duration='1500' data-aos-once="true">
                             <img src="/mergeme/resources/landing/image/content-1-1.png" alt="">
                        </div>
                        <div class="image-2 image-overlay d-none d-md-block" data-aos="fade-right" dat data-aos-duration="1500" data-aos-once="true">
                             <img src="/mergeme/resources/landing/image/content-1-2.png" alt="">
                        </div>
                        <div class="image-mobile d-md-none">
                             <img src="/mergeme/resources/landing/image/content-1-mobile.png" alt="">
                        </div>
                     </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
                    <div class="content-section-text">
                        <h2 class="title">Never miss out <br class="d-none d-xs-block"> the right opportunity.</h2>
                        <p>As an employee you are positioned on every opportunities matching your profile.</p>
                        <a href="{{ url('/register') }}" class="btn btn-primary--opacity hvr-bounce-to-right">Register  Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section 2 -->
    <div class="content-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6 order-md-2">
                    <div class="content-img content-img-group-2">
                       <div class="image-1 d-none d-md-block" data-aos="fade-right" data-aos-duration='1500' data-aos-once="true">
                            <img src="/mergeme/resources/landing/image/content-2-1.png" alt="">
                       </div>
                       <div class="image-2 d-none d-md-block" data-aos="fade-left" data-aos-duration='1500' data-aos-once="true">
                            <img src="/mergeme/resources/landing/image/content-2-2.png" alt="">
                       </div>
                       <div class="image-mobile d-md-none">
                            <img src="/mergeme/resources/landing/image/content-2-mobile.png" alt="">
                       </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 order-md-1">
                    <div class="content-section-text">
                        <h2 class="title">Listen to the <br class="d-none d-xs-block">market anonimously</h2>
                        <p>Whether its you making clothes for a client, take control over your career and your life thanks to MergeMe.</p>
                        <a href="{{ url('/register') }}" class="btn btn-primary--opacity hvr-bounce-to-right">Register  Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <!-- Content Section -->
        <div class="content-section bg-light-white section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="content-img content-img-group-1">
                            <div class="image-1 d-none d-md-block " data-aos="fade-left" data-aos-duration='1500'
                                data-aos-once="true">
                                <img src="/mergeme/resources/landing/image/content-1-1.png" alt="">
                            </div>
                            <div class="image-2 image-overlay d-none d-md-block" data-aos="fade-right" dat
                                data-aos-duration="1500" data-aos-once="true">
                                <img src="/mergeme/resources/landing/image/content-1-2.png" alt="">
                            </div>
                            <div class="image-mobile d-md-none">
                                <img src="/mergeme/resources/landing/image/content-1-mobile.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
                        <div class="content-section-text">
                            <h2 class="title">Its Free <br class="d-none d-xs-block"> No Kobo!!!.</h2>
                            <p>Whether you are a freelancer or an employee MergeMe covers it all, and its totally free. For freelancers, timesheet and invoicing management are free.</p>
                            <a href="{{ url('/register') }}" class="btn btn-primary--opacity hvr-bounce-to-right">Register  Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Video Section -->
    <div class="section-padding video-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="video-content">
                        <a data-fancybox href="#" class="video-btn" data-aos="zoom-in" data-aos-duration='1000' data-aos-once="true"><i class="icon icon-triangle-right-17-2"></i></a>
                        <h2 class="title">We help you to be successful</h2>
                        <p>As your career management tool MergeMe is always on your side. You decide when to listen to the market.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="price-section" class="pricing-section section-padding-top mb--60 mb-md--80">
        <div class="pricing-section-bg">
            <div class="pricing-shape">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 72" version="1.1">
                    <path d="M0 9.21563C0 9.21563 486.438 -2.64935 790.035 31.8207C1093.63 66.2908 1343.93 92.2333 1600 44.5336L1600 0L0 0L0 9.21563Z" transform="translate(0 0.5)" id="Path-4" fill="#D8D8D8" stroke="none" class="pricing-shape-color"/>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8 mb--35">
                    <div class="section-title">
                        <h2 class="title h3">Our Market</h2>
                        <!-- <p>Wireframes are generally created by business analysts, user experience designers, developers, visual designers, and by those with expertise</p> -->
                    </div>
                </div>
               
                
            
        </div>
    </div>

    <!-- Brand Section -->
    <div class="brand-section pb--60 pb-md--100">
        <div class="container">
            <div class="brand-top-text">
                <P>We are proud to have some big brands as our sponsors</P>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="brand-wrapper">
                        <div class="single-brand">
                            <img src="https://naijahacks.com/guide/img/favicon.png" alt="" style="height: 45px">
                        </div>
                        <div class="single-brand">
                            <img src="https://naijahacks.com/static/media/xyz.c89e99e6.png" alt="" style="height: 45px">
                        </div>
                        <div class="single-brand">
                            <img src="https://naijahacks.com/static/media/bizskill_logo.cb40a5c3.svg" alt="" style="height: 45px">
                        </div>
                        <div class="single-brand">
                            <img src="https://naijahacks.com/2018/res/sponsors/linode.png" alt="" style="height: 45px">
                        </div>
                        <div class="single-brand">
                            <img src="https://naijahacks.com/static/media/Nexmo_VonageAPI_vert.1543b393.png" alt="" style="height: 45px">
                        </div>
                        <div class="single-brand">
                            <img src="https://naijahacks.com/2018/res/sponsors/twilio.png" alt="" style="height: 45px">
                        </div>
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="pb--60 pb-md--70">
        <div class="container">
            <div class="card-group berlin-card-group">
                <div class="card testimonial-card-1">
                    <div class="card-body">
                    <span class="quote-icon" style="visibility: hidden">”</span>
                    <p class="card-text">ICT</p>
                </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                    <span class="quote-icon" style="visibility: hidden">”</span>
                    <p class="card-text">Engineering</p>
                </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon" style="visibility: hidden">”</span>
                        <p class="card-text">Sales & Marketing</p>
                    </div>
                    <div class="card-footer" style="visibility: hidden">
                            <div class="client-card">
                                <div class="image">
                                    <img src="/mergeme/resources/landing/image/testimonial3.png" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">Cameron Anderson</h5>
                                    <span>From CrazyEggs.com</span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb--60 pb-md--70" style="margin-top:-90px;">
        <div class="container">
            <div class="card-group berlin-card-group">
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon" style="visibility: hidden">”</span>
                        <p class="card-text">Finance</p>
                    </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon" style="visibility: hidden">”</span>
                        <p class="card-text">Construction and real estate</p>
                    </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon" style="visibility: hidden">”</span>
                        <p class="card-text">Fashion and Household</p>
                    </div>
                    <div class="card-footer" style="visibility: hidden">
                        <div class="client-card">
                            <div class="image">
                                <img src="/mergeme/resources/landing/image/testimonial3.png" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Cameron Anderson</h5>
                                <span>From CrazyEggs.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="pb--60 pb-md--165">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="cta-wrapper">
                        <h3 class="title mt--20" data-aos="fade-right" data-aos-duration='1500' data-aos-once="true">Get Jobs in one place</h3>
                        <div class="button" data-aos="fade-left" data-aos-duration='1500' data-aos-once="true">
                            <a href="{{ url('/register') }}" class="btn btn--primary mt--20  hvr-shine">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer Section -->
    <footer class="section-padding-top footer-bg shape-holder">
        <div class="container">
            <div class="row justify-content-md-center justify-content-lg-left space-db--40">
                
                
                

                
            </div>

            <div class="copyright-area pt--60 pt-md--80 pb--40">
                <div class="row align-items-center space-db--10">
                        <div class="col-lg-2 offset-lg-2 col-md-3 order-md-3 mb--10">
                        <ul class="footer-list social-list">
                            <li><a href=""><i class="icon icon-logo-twitter"></i></a></li>
                            <li><a href=""><i class="icon icon-logo-fb-simple"></i></a></li>
                            <li><a href=""><i class="icon icon-google"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 col-sm-7 order-md-2 mb--10">
                        <ul class="footer-list list-inline">
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Site map</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 order-md-1  mb--10">
                        <p class="mb-0">© 2019 MergeMe. All rights reserved</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-shapes">
                <div class="shape-1">
                    <img src="/mergeme/resources/landing/image/footer-shape.svg" alt="">
                </div>
                <div class="shape-2">
                    <!-- <img src="/mergeme/resources/landing/image/footer-shape-white.svg" alt=""> -->
                </div>
        </div>
    </footer>
</div>
  <!-- Vendor JS-->
  <script src="/mergeme/resources/landing/plugins/jquery/jquery.min.js"></script>
  <script src="/mergeme/resources/landing/plugins/jquery/jquery-migrate.min.js"></script>
  <script src="/mergeme/resources/landing/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>

  <!-- Plugins JS -->
  <script src="/mergeme/resources/landing/plugins/fancybox-master/jquery.fancybox.min.js"></script>
  <script src="/mergeme/resources/landing/plugins/aos-animation/aos.js"></script>

  <!-- Custom JS -->
  <script src="/mergeme/resources/landing/js/active.js"></script>
</body>

</html>
