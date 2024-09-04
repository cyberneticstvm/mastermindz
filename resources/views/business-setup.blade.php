@extends("base")
@section("content")
<!-- Start Page Header -->
<section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('/assets/img/page_header_1.png') }}">
    <div class="container position-relative z-index-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active">Business Setup</li>
            </ol>
        </nav>
        <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">Business Setup</h1>
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
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Business Setup</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Company Formation and Registration.</h2>
                            <p class="m-0">Establishing a company in Dubai involves several jurisdiction options, including Mainland, Free Zone, and Offshore, each catering to different business needs. Businesses can choose structures like LLCs, branches, and subsidiaries, with Free Zones allowing full foreign ownership and the mainland typically requiring a local partner. The process includes securing licenses, drafting legal documents, and registering with the relevant authorities. <span class="text-accent">#MasterMindzBizBuild</span> offer comprehensive support in setting up companies not only in Dubai but also across various jurisdictions in the UAE, Europe, Singapore, KSA, Asia, and the Middle East. Our services include expert guidance on selecting the appropriate business and shareholding structure, as well as ensuring compliance with all legal requirements.</p>
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
<!-- Start Team Section -->
<section class="cs_pb_115 cs_pb_lg_55">
    <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
            <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">FREE ZONE</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Advantages of Setting Up in a Free Zone</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="cs_mb_30 cs_list cs_style_1">
                    <li><strong>Full Ownership: </strong> One of the key benefits of UAE free zones is the ability for foreign investors to maintain 100% ownership of their businesses, eliminating the need for a local partner.</li>
                    <li><strong>Simplified Licensing: </strong> Certain business activities may require approvals from specific authorities. Contact us for a complimentary consultation, and our experts will help you navigate the requirements and secure the necessary licenses.</li>
                    <li><strong>Financial Benefits: </strong> Free zones offer significant financial advantages, including a 0% income tax rate, exemption from customs duties on imports and exports, and the ability to repatriate all profits.</li>
                    <li><strong>Industry Focus: </strong> Many UAE free zones are dedicated to specific industries, providing entrepreneurs with valuable access to specialized knowledge and networking opportunities within their sector.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
<!-- Start Team Section -->
<section class="cs_pb_115 cs_pb_lg_55">
    <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
            <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">MAINLAND</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Understanding UAE Mainland Companies and Their Importance</h2>
                <P>A UAE mainland company is a business entity licensed by the Department of Economic Development (DED) in the relevant Emirate of the United Arab Emirates. Establishing a mainland company offers several significant advantages. Here's a summary of why setting up a mainland company in Dubai is beneficial, along with key considerations for business setup:</P>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Advantages of Mainland Company Formation in Dubai</h3>
                <ul class="cs_mb_30 cs_list cs_style_1">
                    <li><strong>Broader Market Access: </strong> Mainland companies have the flexibility to operate and trade throughout Dubai and across the UAE, providing access to a larger and more diverse market.</li>
                    <li><strong>Full Ownership: </strong> Unlike some other business structures, mainland company formation allows for 100% foreign ownership, granting you complete control and operational flexibility.</li>
                    <li><strong>Versatile Location Options: </strong> Mainland companies can choose from a variety of locations to establish their business, enabling you to select the most suitable site for your operational needs.</li>
                </ul>
                <p>These benefits make mainland company formation a compelling choice for entrepreneurs seeking to maximize their business potential and capitalize on growth opportunities in Dubai and beyond.</p>
                <h3>Business Advisory and Consultancy </h3>
                <p>Our Business Advisory and Consultancy services offer comprehensive support to companies in the UAE, Europe, Singapore, and the Middle East, focusing on strategic growth and market adaptation. We provide expert advice on market entry, business expansion, and navigating complex regulatory landscapes across these diverse regions. By leveraging our in-depth knowledge of local markets and global industry trends, we help businesses develop effective strategies, optimize their operations, and achieve long-term success. Whether you're looking to establish a new venture or expand an existing one, our tailored consultancy services are designed to guide you through every stage of your business journey.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
@endsection("content")