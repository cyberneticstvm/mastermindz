@extends("base")
@section("content")
<!-- Start Page Header -->
<section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('/assets/img/page_header_1.png') }}">
    <div class="container position-relative z-index-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </nav>
        <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">About Us</h1>
    </div>
    <div class="position-absolute end-0 bottom-0">
        <svg width="660" height="497" viewBox="0 0 660 497" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M240 0H660L430 497H0L240 0Z" fill="url(#paint0_linear_81_9510)" />
            <defs>
                <linearGradient id="paint0_linear_81_9510" x1="330" y1="78.2497" x2="375.052" y2="780.743" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0" offset="none" />
                    <stop offset="0.9999" stop-color="#D9D9D9" stop-opacity="0.35" />
                    <stop offset="1" stop-color="#222121" stop-opacity="0" />
                    <stop offset="1" stop-color="#222121" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
</section>
<!-- End Page Header -->
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
                            <p class="m-0">Welcome to <span class="text-accent">MasterMindz</span>, your trusted corporate service provider with a keen focus on delivering exceptional business solutions, we specialize in assisting companies from UAE, Europe, Singapore, KSA, Asia and Middle east in navigating the complexities of establishing and growing their presence in the UAE and vice versa. Our comprehensive range of services is designed to cater to the unique needs of our clients, ensuring seamless operations and sustainable growth.</p>
                            <p class="m-0">At <span class="text-accent">MasterMindz</span>, we pride ourselves on our expertise, reliability, and commitment to excellence. Our team of seasoned professionals provides personalized solutions that align with your business objectives, helping you achieve your goals efficiently and effectively.</p>
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
                                <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Our Mission</h3>
                                <p>At MasterMindz, our mission is to empower businesses by providing them with the tools and expertise needed to thrive in a competitive global market. We strive to build long-term relationships with our clients based on trust, transparency, and mutual success.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_about-icon-box position-relative cs_mb_25">
                                <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                                <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Our Vision</h3>
                                <p>Our vision is to be the leading corporate service provider in the UAE and EU, recognized for our innovative solutions, exceptional service quality, and commitment to client satisfaction. We aim to be the preferred partner for businesses seeking to establish and expand their operations in the UAE and other countries.</p>
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
@endsection("content")