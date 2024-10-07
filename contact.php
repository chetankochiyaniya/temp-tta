<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/img/icon/logo-32x32.png" sizes="32x32"/>
    <link rel="icon" href="assets/img/icon/logo-192x192.png" sizes="192x192"/>

    <title>Contact Us | Blackdsn</title>

    <link href="assets/css/plugins.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="v-dark dsn-ajax">


<div id="dsn_preloader" class="preloader">

    <div class="dsnload p-absolute">
        <span class="dsnload__row">
            <span class="dsnload__img">
            <img src="assets/img/icon/logo-light.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy"/>
            <img src="assets/img/icon/logo.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy"/>
            </span>
        </span>
        <span class="dsnload__row dsnload__row--sibling">
            <span class="dsnload__img">
                 <img src="assets/img/icon/logo-light.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy"/>
            <img src="assets/img/icon/logo.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy"/>
            </span>
        </span>
        <span class="dsnload__row dsnload__row--sibling">
            <span class="dsnload__img">
                <img src="assets/img/icon/logo-light.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy"/>
            <img src="assets/img/icon/logo.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy"/>
            </span>
        </span>
        <span class="dsnload__row dsnload__row--sibling">
            <span class="dsnload__img">
               <img src="assets/img/icon/logo-light.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy"/>
            <img src="assets/img/icon/logo.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy"/>
            </span>
        </span>


    </div>
    <svg width="100%" height="100%" viewBox="0 0 100 100" class="v-middle" preserveAspectRatio="xMinYMin meet"
         fill="none">
        <linearGradient id="linearColors" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="var(--theme-color)"></stop>
            <stop offset="50%" stop-color="var(--border-color)"></stop>
            <stop offset="100%" stop-color="var(--assistant-color)"></stop>
        </linearGradient>
        <path class="dsn-progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
    <div class="loading-circle v-middle">
        <p class="loading-count v-middle">0</p>
    </div>

    <span class="loading-text text-uppercase mt-30 dsn-container">Loading ...</span>
    <div class="bg-load background-section d-flex align-items-end">
        <svg class="dsn-separator-bottom dsn-icon-assistant-color" width="100%" height="100%" viewBox="0 0 100 10"
             preserveAspectRatio="none">
            <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
                  vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
        </svg>
    </div>

</div>

<main id="main_root" class="main-root">

    <!-- ========== Menu ========== -->
    <?php include "header.php" ?>
    
    <!-- ========== End Menu ========== -->

    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation header-normal v-dark-head">
            <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>

            <div class="entry-header p-relative over-hidden">
                <div id="hero_content"
                    class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                    <div class="content p-relative ">
                        <div class="intro-project w-100">
                            <div class="intro-title ">

                                <div id="hero_title" class="mt-20">
                                    <h1 class="title text-upper">
                                        Ask us how can we help you:
                                    </h1>
                                </div>
                                <p class="mt-20 max-w570 text-justify">
                                    At TTA, we value your feedback, inquiries, and the opportunity to assist you. Our
                                    dedicated team is here to provide you with the support and information you need to
                                    make the most of our trading services. Whether you have questions about our plans,
                                    need guidance on your trading journey, or simply want to get in touch, we're just a
                                    message away.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
                data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                <div class="text">SCROLL</div>
            </a>
        </header>
    <!-- ========== End Header Normal ========== -->


    <div id="page_wrapper" class="wrapper">
        <!-- ========== Contact  ========== -->
        <div class="p-relative contact-form over-hidden section-padding">
            <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
            <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                <div class="box-form">
                    <h2 class="title-h2 ">
                        IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                    </h2>
                    <p class="mt-10">Fill fields and find approximate your repair</p>
                    <div class="dsn-form mt-20 form-box d-flex flex-column">
                        <form id="contact-form" class="form w-100" method="post" action="contact.php"
                              data-toggle="validator">
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">

                                            <input id="form_name" type="text" name="name" placeholder="Type your name"
                                                   required="required"
                                                   data-error="name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">

                                            <input id="form_email" type="email" name="email"
                                                   placeholder="Type your Email Address"
                                                   required="required" data-error="Valid email is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group dsn-up">
                                    <div class="entry-box">

                                    <textarea id="form_message" class="form-control" name="message" rows="7"
                                              placeholder="Tell us about you and the world" required="required"
                                              data-error="Please,leave us a message."></textarea>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="d-flex dsn-up">
                                    <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                         data-dsn="parallax">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-info p-30 background-theme ">
                        <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                            <div class="d-grid dsn-service icon-left align-items-center">
                                <div class="service-item p-relative grid-item style-box  background-transparent">

                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">Head Office:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>Asopalav Avenue
                                                    <br>601 Nanamava, Rajkot
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item p-relative grid-item style-box  background-transparent">
                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">
                                                Phones:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>+91 9974373146</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item p-relative grid-item style-box  background-transparent">
                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">
                                                Write Us:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>contact@thetradingarea.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
            </div>
        </div>
        <!-- ========== End Contact  ========== -->
        <!-- ========== Map  ========== -->
        <div class="map-custom hv-80" data-dsn-lat="51.5073509" data-dsn-len="-0.1277583" data-dsn-zoom="14"></div>
        <!-- ========== End Map  ========== -->

        <!-- ========== Footer ========== -->
        <?php include "footer.php" ?>
        <!-- ========== End Footer ========== -->

    </div>


</main>


<!-- ========== Cursor ========== -->
<div id="dsn_cursor" class="ball"></div>
<div id="dsn_cursor_inner" class="ball"></div>
<!-- ========== End Cursor ========== -->


<!-- ==========  Social ========== -->
<div class="social-side d-flex align-items-center flex-column justify-content-center">

    <ul class="socials d-flex flex-column-reverse">
        <li style="--dsn-index-animate : 0;">
            <a href="#0" target="_blank" rel="nofollow">
                <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>Fb</span>
            </a>
        </li>
        <li style="--dsn-index-animate : 1;">
            <a href="#0" target="_blank" rel="nofollow">
                <i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span>
            </a>
        </li>
        <li style="--dsn-index-animate : 2;">
            <a href="#0" target="_blank" rel="nofollow">
                <i class="fab fa-twitter" aria-hidden="true"></i><span>Tw</span>
            </a>
        </li>
        <li style="--dsn-index-animate : 3;">
            <a href="#0" target="_blank" rel="nofollow">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i><span>Linkedin</span>
            </a>
        </li>
    </ul>
    <div class="icon">FOLLOW US</div>
</div>
<!-- ========== End Social ========== -->

<!-- ========== Style Option Page ========== -->
<div id="dsn_box_options" class="day-night">
    <div class="night active" data-dsn-theme="dark">
        <svg width="48" height="48" viewBox="0 0 48 48">
            <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
            <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"
                  height="2.6"></rect>
            <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
            <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"
                  height="1"></rect>
            <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
            <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"
                  height="2.6"></rect>
            <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
            <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"
                  height="1"></rect>
            <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
            </path>
        </svg>

    </div>
    <div class="moon" data-dsn-theme="night">
        <svg width="48" height="48" viewBox="0 0 48 48">
            <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
            </path>
        </svg>
    </div>
</div>
<!-- ========== End Style Option Page ========== -->

<!-- ========== Line BG ========== -->
<div id="line_head"><span class="container"></span></div>
<!-- ========== End Line BG ========== -->


<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/plugins/dsn-grid.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>
