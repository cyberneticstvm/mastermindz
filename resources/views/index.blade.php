@extends("base")
@section("content")
<!-- Start Hero -->
<section class="cs_hero_1-wrap position-relative cs_hero_slider bg-primary">
    <div class="cs_swiper_parallax_slider_wrap">
        <div class="cs_parallax_slider loading">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                        <figure class="cs_swiper_parallax_bg" data-src="{{ asset('/assets/img/hero_slider_1.png') }}">
                            <img src="{{ asset('/assets/img/hero_slider_1.png') }}" alt="Slider" class="cs_entity_img">
                            <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
                        </figure>
                        <div class="container">
                            <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                                <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">Own Your Business Journey with MasterMindz.</h2>
                                <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                                    BUSINESS SETUP - UAE | EUROPE | <br /> KSA | MIDDLE EAST | ASIA
                                </h1>
                                <p class="text-white cs_mb_20">
                                    Our team of professionals brings extensive knowledge and experience in various<br> aspects of business setup and management.
                                </p>
                                <div class="cs_hero_btn">
                                    <a href="{{ route('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                        <figure class="cs_swiper_parallax_bg" data-src="{{ asset('/assets/img/hero_slider_2.png') }}">
                            <img src="{{ asset('/assets/img/hero_slider_2.png') }}" alt="Slider" class="cs_entity_img">
                            <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
                        </figure>
                        <div class="container">
                            <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                                <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">We are committed to delivering exceptional services that exceed client expectations.</h2>
                                <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                                    PRO SERVICES & VISAS
                                </h1>
                                <p class="text-white cs_mb_20">
                                    We are dedicated to delivering high-quality services that exceed your expectations.
                                </p>
                                <div class="cs_hero_btn">
                                    <a href="{{ route('contact') }}" class=" cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                        <figure class="cs_swiper_parallax_bg" data-src="{{ asset('/assets/img/hero_slider_3.png') }}">
                            <img src="{{ asset('/assets/img/hero_slider_3.png') }}" alt="Slider" class="cs_entity_img">
                            <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
                        </figure>
                        <div class="container">
                            <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                                <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">We embrace innovative solutions to address the evolving needs of our clients.</h2>
                                <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                                    ACCOUNTING | CORPROATE TAX | <br /> INTERNATIONAL TAX
                                </h1>
                                <p class="text-white cs_mb_20">
                                    Based in UAE, we offer strategic advantages for businesses looking to access markets in the Middle East,<br /> Asia, Europe and beyond.
                                </p>
                                <div class="cs_hero_btn">
                                    <a href="{{ route('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="cs_slider_navigation d-flex cs_row_gap_15 flex-column position-absolute
          cs_zindex_4">
                <div class="cs_swiper_button_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                    <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black" />
                        <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black" />
                    </svg>
                </div>
                <div class="cs_swiper_button_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                    <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D" />
                        <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D" />
                    </svg>
                </div>
            </div>
            <div class="cs_hero_shape_1 position-absolute bottom-0 d-flex align-items-end h-100 cs_zindex_1">
                <svg width="434" height="759" viewBox="0 0 434 759" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M240 0H660L430 759H0L240 0Z" fill="url(#paint0_linear_81_287)" />
                    <defs>
                        <linearGradient id="paint0_linear_81_287" x1="145" y1="256.5" x2="484" y2="738" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D9D9D9" stop-opacity="0" offset="none" />
                            <stop offset="1" stop-color="#E9A132" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="cs_hero_shape_2 position-absolute start-0 cs_zindex_1">
                <svg width="572" height="572" viewBox="0 0 572 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M572 -6.10352e-05L6.10352e-05 572L1.10293e-05 -1.10293e-05L572 -6.10352e-05Z" fill="url(#paint0_linear_81_258)" fill-opacity="0.7" />
                    <defs>
                        <linearGradient id="paint0_linear_81_258" x1="388.254" y1="307.69" x2="-127.973" y2="-227.83" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0457759" stop-color="#18191D" stop-opacity="0" />
                            <stop offset="0.514455" stop-color="#FEC63F" stop-opacity="0.35" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <div class="cs_social_btns d-flex flex-column cs_column_gap_15 cs_row_gap_15 cs_transition_5 position-absolute cs_zindex_5 ">
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
    </div>
</section>
<!-- End Hero -->

<!-- Animated Text -->
<!--<div class="cs_moving_wrap background-filled text-uppercase text-white d-flex align-items-center" data-src="{{ asset('/assets/img/moving_text_shape.png') }}">
    <div class="cs_moving_text cs_fs_30 cs_fs_lg_26 d-flex align-items-center text-nowrap">
        <span>* Integrity</span>
        <span>* Excellence</span>
        <span>* Innovation </span>
        <span>* Collaboration</span>
        <span>* Client-Centricity</span>
    </div>
    <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span>* Integrity</span>
        <span>* Excellence</span>
        <span>* Innovation </span>
        <span>* Collaboration</span>
        <span>* Client-Centricity</span>
    </div>
    <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span>* Integrity</span>
        <span>* Excellence</span>
        <span>* Innovation</span>
        <span>* Collaboration</span>
        <span>* Client-Centricity</span>
    </div>
</div>-->
<!-- End Animated Text -->
<!-- Start About Section -->
<section class="cs_pt_135 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 cs_mb_lg_55">
                <div class="cs_experience cs_style_1 position-relative">
                    <div class="cs_experience_thumb">
                        <img src="{{ asset('/assets/img/experience_img.png') }}" alt="Thumb" class="position-relative cs_zindex_3 cs_rounded_15">
                        <div class="cs_experience_shape"><img src="{{ asset('/assets/img/experience_shape_1.png') }}" alt="Shape" class="moving_x"></div>
                    </div>
                    <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute bottom-0 end-0 cs_zindex_3 d-flex flex-column justify-content-center align-items-center" data-src="{{ asset('/assets/img/experience_bg.png') }}">
                        <img src="{{ asset('/assets/img/experience_icon.svg') }}" alt="Icon" class="cs_mb_5">
                        <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                            <span data-count-to="20" class="odometer"></span>
                            <span class="fw-light">+</span>
                        </h3>
                        <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs_about cs_style_1">
                    <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Get Ready for Success with <span class="text-accent">Master Mindz</span> Your Path to Growth.</h2>
                            <p class="m-0">Welcome to <strong>MasterMindz</strong>, your trusted corporate service provider with a keen focus on delivering exceptional business solutions, we specialize in assisting companies from UAE, Europe, Singapore, KSA, Asia and Middle east in navigating the complexities of establishing and growing their presence in the UAE and vice versa. Our comprehensive range of services is designed to cater to the unique needs of our clients, ensuring seamless operations and sustainable growth.</p>
                            <p class="m-0">At <strong>MasterMindz</strong>, we pride ourselves on our expertise, reliability, and commitment to excellence. Our team of seasoned professionals provides personalized solutions that align with your business objectives, helping you achieve your goals efficiently and effectively.</p>
                            <p class="m-0">Launching a company anywhere in the world can be intricate, yet it becomes straightforward with the right expertise. Our Dubai-based business set-up consultants, boasting 10+ years of industry experience, are equipped to facilitate your establishment process. We have a proven track record of assisting entrepreneurs in navigating the complexities of company formation, ensuring a seamless and efficient setup in Dubai. With our professional guidance, the path to starting your business is streamlined and expertly managed.</p>
                        </div>
                    </div>
                    <div class="cs_progressbar cs_style_1 cs_mb_20">
                        <div class="cs_progressbar_heading d-flex justify-content-between align-items-center cs_mb_8">
                            <h3 class="fw-medium m-0 cs_fs_18">Company Formation and Registration</h3>
                            <p class="cs_fs_14 cs_lh_base m-0">100%</p>
                        </div>
                        <div class="cs_progress cs_rounded_8 overflow-hidden" data-progress="100">
                            <div class="cs_progress_in bg-accent cs_rounded_8 h-100 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"></div>
                        </div>
                    </div><!-- .cs_progressbar -->
                    <div class="row cs_mb_15">
                        <div class="col-lg-6">
                            <div class="cs_about-icon-box position-relative cs_mb_25">
                                <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                                <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Corporate Secretarial Services</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_about-icon-box position-relative cs_mb_25">
                                <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                                <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Accounting and Bookkeeping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                        <a href="{{ route('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                        <a href="https://www.youtube.com/embed/VStvZjykQ00" class="cs_video_open d-flex align-items-center">
                            <span class="cs_player_btn cs_width_45 cs_height_45 rounded-circle d-flex align-items-center justify-content-center text-white bg-primary position-relative cs_pl_5">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.71401 16C1.61636 16 1.51868 15.9748 1.43054 15.9246C1.25251 15.8231 1.14258 15.6339 1.14258 15.4285V0.570579C1.14258 0.365193 1.25251 0.176009 1.43054 0.0744495C1.61022 -0.026561 1.82844 -0.0243301 2.00475 0.0783627L14.5762 7.50735C14.7503 7.6106 14.8569 7.79755 14.8569 7.99957C14.8569 8.20159 14.7503 8.38855 14.5762 8.49179L2.00475 15.9207C1.9149 15.9732 1.81443 16 1.71401 16ZM2.28544 1.57172V14.4274L13.1621 7.99957L2.28544 1.57172Z" fill="white" />
                                </svg>
                            </span>
                            <span class="cs_ml_15">Watch the video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_section_shape-1 position-absolute semi_rotate">
        <svg width="182" height="177" viewBox="0 0 182 177" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M94.4478 96.1115C106.99 105.211 120.6 111.159 132.748 112.86C132.823 112.871 132.894 112.876 132.967 112.886L150.387 27.5688C151.002 24.552 147.98 22.0838 145.148 23.2887L63.8438 57.8735C67.5196 70.1011 78.6592 84.6548 94.4478 96.1115Z" fill="#888888" fill-opacity="0.2" />
            <path d="M128.155 120.487C115.612 118.057 102.053 111.863 89.5833 102.815C72.3806 90.3334 60.5954 75.0018 56.1891 61.1295L14.8513 78.7143C11.6218 80.0876 11.7968 84.724 15.1212 85.8483L74.9037 106.09C78.4203 107.281 81.3895 109.706 83.2572 112.915L115.015 167.46C116.78 170.492 121.358 169.74 122.061 166.301L131.308 121.013C130.265 120.863 129.215 120.692 128.155 120.487Z" fill="#888888" fill-opacity="0.2" />
            <path d="M129.41 114.012C116.866 111.583 103.307 105.387 90.8381 96.3405C61.4995 75.0532 47.8833 45.4701 59.84 28.9897C71.7975 12.512 104.146 16.278 133.483 37.5651C143.082 44.5285 151.409 52.7615 157.564 61.3736C158.895 63.2352 158.464 65.8208 156.603 67.1511C154.742 68.4799 152.156 68.0495 150.827 66.1896C145.184 58.2942 137.505 50.7138 128.621 44.2672C103.894 26.326 75.466 21.5559 66.5447 33.8531C57.6235 46.1491 70.9766 71.6938 95.7041 89.6352C108.246 98.7348 121.848 104.686 134.005 106.383C145.234 107.955 153.677 105.705 157.78 100.049C162.059 94.1524 160.568 86.183 158.563 80.5345C157.799 78.3788 158.926 76.0123 161.081 75.2472C163.236 74.4823 165.604 75.6089 166.369 77.7657C170.142 88.3972 169.474 98.04 164.484 104.915C158.497 113.168 147.265 116.603 132.859 114.587C131.719 114.43 130.568 114.237 129.41 114.012Z" fill="#888888" fill-opacity="0.2" />
        </svg>
    </div>
</section>
<!-- End About Section -->
<!-- Start Service Section -->
<section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 cs_gray_bg" data-src="{{ asset('/assets/img/services_bg.png') }}">
    <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
            <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Did you know?</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Should You Handle Business Setup<br /> in Dubai Yourself?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h5>Considering setting up a business in Dubai on your own? While it is possible, there are several factors to consider:</h5>
                <ul class="cs_mb_30 cs_list cs_style_1">
                    <li><strong>Diverse Options:</strong> With over 60 jurisdictions available, selecting the right one for your Dubai company can be challenging. Determining the appropriate license and business activity requires careful consideration to avoid a trial-and-error approach.</li>
                    <li><strong>Complex Process:</strong> Navigating the various authorities and government departments can be time-consuming and labor-intensive. Managing these interactions requires substantial time and effort.</li>
                    <li><strong>Extensive Paperwork:</strong> The process of establishing a company in Dubai involves considerable paperwork, including forms, applications, and compliance with banking and legal requirements.</li>
                    <li><strong>Cost vs. Benefit:</strong> While you might save on initial setup costs by doing it yourself, consider the value of your time. Are you prepared to invest significant time in paperwork and meetings, or would it be more efficient to focus on your core business activities?</li>
                </ul>
            </div>
            <div class="col-lg-6 cs_mb_lg_55">
                <div class="cs_experience cs_style_1 position-relative">
                    <div class="cs_experience_thumb">
                        <img src="{{ asset('/assets/img/experience_img.png') }}" alt="Thumb" class="position-relative cs_zindex_3 cs_rounded_15">
                        <div class="cs_experience_shape"><img src="{{ asset('/assets/img/experience_shape_1.png') }}" alt="Shape" class="moving_x"></div>
                    </div>
                    <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute bottom-0 end-0 cs_zindex_3 d-flex flex-column justify-content-center align-items-center" data-src="{{ asset('/assets/img/experience_bg.png') }}">
                        <img src="{{ asset('/assets/img/experience_icon.svg') }}" alt="Icon" class="cs_mb_5">
                        <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                            <span data-count-to="20" class="odometer"></span>
                            <span class="fw-light">+</span>
                        </h3>
                        <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_service_1-info  text-center cs_mt_40 d-flex justify-content-center align-items-center flex-wrap">
            <a href="{{ route('services') }}" class="cs_btn cs_style_1 cs_fs_16  overflow-hidden cs_fs_16 cs_rounded_25 cs_pl_20 cs_pr_20 cs_pt_7 cs_pb_7 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Find More</span></a>
        </div>
    </div>
</section>
<!-- End Service Section -->

<!-- Start Why Choose Us -->
<section class="position-relative cs_iconbox_2_wrap cs_pt_135 cs_pt_lg_75 cs_pb_100 cs_pb_lg_40 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="position-relative cs_zindex_3">
                    <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Why Choose Us</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">Streamline Your Setup with <span class="text-accent">Expert Assistance</span></h2>
                            <p class="text-white m-0">Avoid the complexities and potential pitfalls of self-management. Consult with our experts at MasterMindz to discover how our streamlined process can simplify your business setup in Dubai. We are the preferred partner for many entrepreneurs, ensuring a smooth and efficient start for your Dubai company.</p>
                            <h3 class="mt-3 text-white">Refer and Earn / Collaborate <span class="text-accent">with Us</span></h3>
                            <p class="text-white m-0">Anyone can earn an <span class="text-accent">extra income with MasterMindz.</span> Start earning by simply referring MasterMindz to your network. You heard it Right, you can become #SideBizGuru and it’s easier than you think. With our team of expertise and the vast services you can start earning by referring.<br />Now, are you looking to collaborate with us? We are interested in collaborating with like-minded businesses and professionals <span class="text-accent">#InnovateTogether</span> who share our commitment to excellence and innovation. If you are interested in partnering with MasterMindz or exploring potential collaboration opportunities, please feel free to contact us.</p>
                            <div class="cs_service_1-info  text-center cs_mt_40 d-flex justify-content-center align-items-center flex-wrap">
                                <a href="{{ route('contact') }}" class="cs_btn cs_style_1 cs_fs_16  overflow-hidden cs_fs_16 cs_rounded_25 cs_pl_20 cs_pr_20 cs_pt_7 cs_pb_7 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Connect With Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6"></div>
        </div>
    </div>
    <div class="cs_iconbox_left-img position-absolute bottom-0 start-0 h-100 background-filled" data-src="{{ asset('/assets/img/why_choose_us_left_img.jpeg') }}"></div>
    <div class="cs_iconbox_right-img position-absolute cs_zindex_1 bottom-0 end-0 background-filled" data-src="{{ asset('/assets/img/why_choose_us_right_img.png') }}"></div>
    <div class="cs_iconbox_logo position-absolute semi_rotate">
        <svg width="191" height="197" viewBox="0 0 191 197" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100.397 107.26C113.305 117.648 127.237 124.564 139.602 126.736C139.678 126.749 139.75 126.756 139.825 126.77L155.856 32.5327C156.421 29.2004 153.306 26.3917 150.454 27.6622L68.5886 64.126C72.5569 77.7763 84.1472 94.1815 100.397 107.26Z" fill="#888888" fill-opacity="0.2" />
            <path d="M134.283 136.497C121.573 133.528 107.766 126.385 95.0023 116.124C77.395 101.968 65.2019 84.7963 60.4863 69.405L19.093 87.8249C15.8591 89.2634 16.1251 94.3774 19.5029 95.6938L80.2458 119.392C83.8188 120.786 86.8631 123.528 88.8105 127.109L121.922 187.961C123.762 191.345 128.37 190.622 129.013 186.848L137.475 137.15C136.42 136.96 135.357 136.747 134.283 136.497Z" fill="#888888" fill-opacity="0.2" />
            <path d="M135.873 127.406C123.172 124.44 109.376 117.306 96.6244 107.06C66.6205 82.949 52.3161 50.0723 64.0597 32.2106C75.8041 14.3519 108.507 19.2476 138.51 43.3581C148.326 51.2452 156.884 60.5001 163.258 70.1219C164.637 72.2018 164.251 75.0376 162.4 76.4586C160.549 77.878 157.932 77.3443 156.556 75.2663C150.711 66.4452 142.82 57.9237 133.733 50.622C108.446 30.3012 79.6787 24.3911 70.9164 37.7191C62.1543 51.0456 76.1154 79.4713 101.404 99.7925C114.23 110.099 128.065 116.965 140.36 119.115C151.717 121.106 160.191 118.825 164.221 112.695C168.424 106.304 166.766 97.4981 164.635 91.2345C163.822 88.8441 164.914 86.2656 167.073 85.4735C169.232 84.6816 171.642 85.9765 172.455 88.3683C176.466 100.157 175.977 110.755 171.077 118.207C165.196 127.151 153.932 130.671 139.362 128.118C138.21 127.918 137.045 127.679 135.873 127.406Z" fill="#888888" fill-opacity="0.2" />
        </svg>
    </div>
</section>
<!-- End Why Choose Us -->

<!-- Start Team Section -->
<section class="cs_pb_115 cs_pb_lg_55 mt-5">
    <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
            <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Meet Our Team Member</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Meet the professional team <br>behind the success</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>At MasterMinds, we believe in the power of collective expertise, with a team of seasoned professionals from various fields, including finance, accounting, business consulting, and human resources. Committed to providing tailor-made solutions, we cater to the unique needs of each client by integrating insights from different disciplines, ensuring a holistic perspective and innovative solutions. </p>
                <ul class="cs_mb_30 cs_list cs_style_1">
                    <li>Led by <strong>Mr. Arie Chiche</strong>, our founder and an expert in international finance, we have successfully guided numerous companies through the complexities of global taxation, financial planning, and growth strategies. With a strong emphasis on business development, financial optimization, and fundraising, Mr. Chiche leads a team dedicated to implementing innovative strategies that enhance profitability and secure sustainable growth for our clients.</li>
                    <li><strong>Mr. Shihan Wijayagunawardane</strong>, an Attorney-at-Law and Legal Consultant at MasterMindz, has over 15 years of experience in litigation, arbitration, and contract drafting, with expertise in commercial and intellectual property law. He holds a Bachelor of Law (HONS) from the University of London and has represented clients in various Sri Lankan courts. As Senior Partner at Echelon Consultants, he offers legal consultancy to corporate entities, focusing on agreements, regulatory compliance, and strategic legal advice.</li>
                    <li><strong>Mr. Imran Mansoor</strong>, Compliance Officer at MasterMindz, is a seasoned professional with deep expertise in compliance management. In his role as Compliance Officer, he has demonstrated a strong ability to oversee regulatory adherence, ensuring that all business operations meet legal standards and industry regulations. Imran effectively identifies risks, implements corrective actions, and promotes ethical practices within the organization. His strategic approach, combined with an MBA from the University of Wolverhampton, U.K., enables him to drive growth and enhance operational efficiency at MasterMindz.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

@endsection("content")