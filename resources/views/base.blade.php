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
    <!--Whatsapp-->
    <div class="floating">
        <a href="https://api.whatsapp.com/send?phone=971545485795&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank"><img src="{{ asset('/assets/img/whatsapp.svg') }}" alt="MasterMindz Whatsapp" /></a>
    </div>
    <!-- Start Footer -->
    <footer class="cs_footer background-filled text-white" data-src="{{ asset('/assets/img/footer_bg.jpeg') }}">
        <div class="container">
            <div class="cs_footer_top d-flex justify-content-between align-items-start align-items-md-center cs_pt_46 cs_pb_46 cs_column_gap_15 cs_row_gap_15 flex-md-row  flex-column">
                <div class="cs_footer_contact_info">
                    <h3 class="text-accent fw-normal cs_mb_4 cs_fs_16 cs_lh_lg">Have Any Question?</h3>
                    <h2 class="text-white fw-medium m-0 cs_fs_22"> </h2>
                </div>
                <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="{{ asset('/assets/img/favicon.png') }}" alt="Logo"></div>
                <div class="cs_footer_contact_info">
                    <h3 class="text-accent fw-normal cs_mb_4 cs_fs_16 cs_lh_lg">Send Email</h3>
                    <h2 class="text-white fw-medium m-0 cs_fs_22"><a href="mailto:mastermindz.fze@gmail.com">mastermindz.fze@gmail.com</a></h2>
                </div>
            </div>
            <div class="cs_footer_main cs_pt_30 cs_pb_30">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <div class="cs_text_widget">
                                <p>We are always looking to collaborate with like-minded businesses and professionals who share our commitment to excellence and innovation. If you are interested in partnering with MasterMinds or exploring potential collaboration opportunities, please feel free to contact us.</p>
                            </div>
                            <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">Explore</h2>
                            <ul class="cs_menu_widget text-uppercase">
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cs_footer_item cs_pt_20 cs_pb_20">
                            <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">Services</h2>
                            <ul class="cs_menu_widget text-uppercase">
                                <li><a href="{{ route('business.setup') }}">Business SetUp</a></li>
                                <li><a href="{{ route('accounting.and.taxation') }}">Accounting & Taxation</a></li>
                                <li><a href="{{ route('services.legal') }}">Legal and Compliance</a></li>
                                <li><a href="{{ route('services.bank') }}">Bank Account Opening</a></li>
                                <li><a href="{{ route('services.pro') }}">PRO</a></li>
                                <li><a href="{{ route('services.visa') }}">Golden Visa</a></li>
                                <li><a href="{{ route('services.office') }}">Family Office</a></li>
                                <li><a href="{{ route('services.will') }}">Will Preparation</a></li>
                                <li><a href="{{ route('services.brand') }}">Brand / Trademark Registration</a></li>
                                <li><a href="{{ route('services.difc') }}">DIFC AND ADGM foundation and Trustee</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_copyright text-center cs_fs_124 cs_lh_lg cs_pt_36 cs_pb_36">
            <div class="container">
                <p class="m-0">Copyright © {{ date('Y') }} <a href="{{ route('index') }}">Master Mindz</a>. All rights reserved.</p>
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
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>