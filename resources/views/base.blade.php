<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('/assets/img/favicon.png') }}">
    <!-- Site Title -->
    <title>Matser Mindz</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>
    <div class="cs_preloader cs_accent_color cs_white_bg">
        <div class="cs_preloader bg-white d-flex justify-content-center align-items-center">
            <div class="cs_preloader_in">
                <img src="{{ asset('/assets/img/favicon.png') }}" alt="Logo">
            </div>
        </div>
    </div>
    @include("nav")
    @yield("content")
    <!-- Start Footer -->
    <footer class="cs_footer background-filled text-white" data-src="{{ asset('/assets/img/footer_bg.jpeg') }}">
        <div class="container">
            <div class="cs_footer_top d-flex justify-content-between align-items-start align-items-md-center cs_pt_46 cs_pb_46 cs_column_gap_15 cs_row_gap_15 flex-md-row  flex-column">
                <div class="cs_footer_contact_info">
                    <h3 class="text-accent fw-normal cs_mb_4 cs_fs_16 cs_lh_lg">Have Any Question?</h3>
                    <h2 class="text-white fw-medium m-0 cs_fs_22">+ 070 4531 9507 </h2>
                </div>
                <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="{{ asset('/assets/img/logo.svg') }}" alt="Logo"></div>
                <div class="cs_footer_contact_info">
                    <h3 class="text-accent fw-normal cs_mb_4 cs_fs_16 cs_lh_lg">Send Email</h3>
                    <h2 class="text-white fw-medium m-0 cs_fs_22"><a href="mailto:bizmax@laralink.com">bizmax@laralink.com</a></h2>
                </div>
            </div>
            <div class="cs_footer_main cs_pt_30 cs_pb_30">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <div class="cs_text_widget">
                                <p>I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                            </div>
                            <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">Explore</h2>
                            <ul class="cs_menu_widget text-uppercase">
                                <li><a href="about.html">About</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="#">Support </a></li>
                                <li><a href="pricing.html">Pricing Page</a></li>
                                <li><a href="portfolio.html">New Projects</a></li>
                                <li><a href="blog-list-with-sidebar.html">Blog</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <div class="cs_newsletter cs_style_1">
                                <h2 class="cs_newsletter_title text-white cs_fs_22 cs_mb_9">Newsletter</h2>
                                <p class="cs_newsletter_subtitle cs_mb_26"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </p>
                                <form action="#" class="cs_newsletter_form position-relative">
                                    <input type="email" class="cs_newsletter_input text-white cs_fs_14 cs_rounded_5 border-0 w-100 cs_pt_10" placeholder="Enter your mail">
                                    <button class="cs_newsletter_btn cs_fs_14 cs_rounded_5 cs_transition_4 bg-accent position-absolute text-uppercase">
                                        <span>Go</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_copyright text-center cs_fs_124 cs_lh_lg cs_pt_36 cs_pb_36">
            <div class="container">
                <p class="m-0">Copyright © 2023 <a href="index.html">bizmax</a>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Script -->
    <script src="{{ asset('/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/ripples.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>