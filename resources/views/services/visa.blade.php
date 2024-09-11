@extends("base")
@section("content")
<!-- Start Page Header -->
<section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('/assets/img/page_header_1.png') }}">
    <div class="container position-relative z-index-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Services</a></li>
                <li class="breadcrumb-item active">Golden Visa</li>
            </ol>
        </nav>
        <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">Golden Visa</h1>
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
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Services</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Golden <span class="text-accent">Visa</span></h2>
                            <p class="m-0">The UAE Golden Visa offers long-term residency options for individuals across various professional categories. Here’s a detailed guide to the eligibility criteria for each category:</p>
                            <h5 class="mt-3">Investors</h5>
                            <ul class="">
                                <li class="fw-bold">Property Investors</li>
                                <ul class="">
                                    <li><strong>For 10 years Golden Visa</strong></li>
                                    <ul class="cs_mb_30 cs_list cs_style_1">
                                        <li>Properties purchased should not be less than AED 2 million.</li>
                                        <li>Off-plan property – the project must be 50% completed.</li>
                                        <li>Mortgaged letter required from the bank for the Mortgaged Property</li>
                                        <li>If there is payment plan with developer, statement of accounts is mandatory </li>
                                    </ul>
                                </ul>
                                <li class="fw-bold">Investment Fund Depositors</li>
                                <ul class="cs_mb_30 cs_list cs_style_1">
                                    <li>A bank letter in Arabic confirming the deposit, stating that it will remain intact for two years, with a notification to the General Directorate of Residency and Foreigners Affairs.</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="cs_progressbar cs_style_1 cs_mb_20">
                        <div class="cs_progressbar_heading d-flex justify-content-between align-items-center cs_mb_8">
                            <h3 class="fw-medium m-0 cs_fs_18">Golden Visa</h3>
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
            <div class="col-lg-12">
                <h5 class="">Specialized Talents and Researchers</h5>
                <ul class="">
                    <li class="fw-bold">Doctors</li>
                    <ul class="cs_mb_30 cs_list cs_style_1">
                        <li>Certificate of practicing profession in Arabic from the Health Authority or Ministry of Health – Dubai Healthcare City.</li>
                        <li>Copy of the labor card or a work contract certified by relevant authorities.</li>
                        <li>Provide a residence photo.</li>
                    </ul>
                    <li class="fw-bold">Healthcare Workers</li>
                    <ul class="cs_mb_30 cs_list cs_style_1">
                        <li>Recognition for contributions during crises, such as the COVID-19 pandemic, including doctors, nurses, and frontline medical professionals.</li>
                        <li>Certification and proof of professional contributions are required.</li>
                    </ul>
                    <li class="fw-bold">Scientists</li>
                    <ul class="cs_mb_30 cs_list cs_style_1">
                        <li>Recommendation letter from the Emirates Scientists Council or the Secretariat of the Sheikh Mohammed bin Rashid Al Maktoum Award for Academic Excellence.</li>
                        <li>A copy of the passport.</li>
                    </ul>
                    <li class="fw-bold">Creative Individuals and Artists</li>
                    <ul class="cs_mb_30 cs_list cs_style_1">
                        <li>Recommendation letter from the Culture and Arts Authority.</li>
                        <li>A copy of the passport.</li>
                    </ul>
                    <li class="fw-bold">Inventors</li>
                    <ul class="cs_mb_30 cs_list cs_style_1">
                        <li>Recommendation letter from the Ministry of Economy.</li>
                        <li>A copy of the passport.</li>
                    </ul>
                    <li class="fw-bold">High-Level Executives</li>
                    <ul class="">
                        <li class="fw-bold">General Managers, Executive Directors, and Chairpersons</li>
                        <ul class="cs_mb_30 cs_list cs_style_1">
                            <li>A company NOC letter confirming a term of service of at least five years.</li>
                            <li>Bachelor’s degree or higher, certified by the Ministry of Education.</li>
                            <li>Monthly salary certificate of AED 30,000 or more, along with a work contract.</li>
                            <li>Provide a personal account statement for the past six months.</li>
                        </ul>
                        <li class="fw-bold">Athletes</li>
                        <ul class="cs_mb_30 cs_list cs_style_1">
                            <li>Recommendation letter from a sports council or the General Authority for Sports.</li>
                            <li>A copy of the passport.</li>
                        </ul>
                        <li class="fw-bold">Specialists in Engineering and Science</li>
                        <ul class="cs_mb_30 cs_list cs_style_1">
                            <li>Bachelor’s degree or higher, certified or degree equivalency letter from the Ministry of Education.</li>
                            <li>Employment contract in specified fields such as AI, big data, and engineering disciplines.</li>
                            <li>Provide a residence photo.</li>
                        </ul>
                    </ul>
                    <li class="fw-bold">Outstanding Students</li>
                    <ul class="">
                        <li class="fw-bold">High School Students</li>
                        <ul class="cs_mb_30 cs_list cs_style_1">
                            <li>National-level topper with a minimum grade of 95%.</li>
                            <li>Recommendation letter from the Ministry of Education.</li>
                            <li>Eligible for a 5-year Golden Visa, extendable based on academic needs.</li>
                        </ul>
                        <li class="fw-bold">University Students</li>
                        <ul class="cs_mb_30 cs_list cs_style_1">
                            <li><strong>Local Universities:</strong> Must be rated A or B by the Ministry of Education, with a minimum GPA of 3.5 (A class) or 3.8 (B class). Graduation within the last two years.</li>
                            <li><strong>Foreign Universities:</strong> Must be among the top 100 globally, with a minimum GPA of 3.5. Graduation within the last two years, with a certificate accredited by the Ministry of Education.</li>
                            <li>Eligible students are granted a 10-year Golden Visa.</li>
                        </ul>
                    </ul>
                </ul>
                <h5>Embark on Your New Journey with a UAE Golden Visa</h5>
                <p>Experience the UAE's year-round sunshine, luxury lifestyle, and robust business opportunities with a UAE Golden Visa. If you believe you meet the eligibility criteria, now is the perfect time to explore this opportunity. Contact our experts at MasterMindz to guide you through the process of obtaining a Golden Visa and establishing your business in the UAE.</p>
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