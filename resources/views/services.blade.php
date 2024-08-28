@extends("base")
@section("content")
<!-- Start Page Header -->
<section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('/assets/img/page_header_1.png') }}">
    <div class="container position-relative z-index-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </nav>
        <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">Our Services</h1>
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
<!-- Start Service Section -->
<section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 cs_gray_bg" data-src="{{ asset('/assets/img/services_bg.png') }}">
    <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
            <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Service List</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0">We Provide The Solution <br>For Our Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Company Formation and Registration</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_1.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Assistance with company setup in various jurisdictions within the UAE, EU, UK and US.</li>
                        <li>Guidance on choosing the appropriate business structure and shareholding structure.</li>
                        <li>Comprehensive support with legal documentation and compliance requirements.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Corporate Secretarial Services</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_2.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Management of corporate records and statutory registers.</li>
                        <li>Filing of annual returns and other statutory documents.</li>
                    </ul>
                    <br /><br /><br /><br />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Accounting and Bookkeeping</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_3.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Accurate and timely bookkeeping services.</li>
                        <li>Preparation of financial statements and reports.</li>
                        <li>VAT registration and compliance services.</li>
                    </ul>
                    <br /><br /><br />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Business Advisory and Consultancy</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_4.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Strategic business planning and market entry strategies.</li>
                        <li>Financial analysis and risk management.</li>
                        <li>Assistance with mergers, acquisitions, and joint ventures.</li>
                    </ul>
                    <br />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Legal and Compliance Services</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_5.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Corporate governance and regulatory compliance.</li>
                        <li>Drafting and reviewing legal agreements and contracts.</li>
                        <li>Liaison with government authorities and regulatory bodies.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Human Resources and Recruitment</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_6.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Talent acquisition and recruitment services.</li>
                        <li>HR management and payroll processing.</li>
                        <li>Employee visa and work permit services.</li>
                    </ul>
                    <br /><br /><br />
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Office Setup and Support Services</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_7.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Provision of virtual offices and co-working spaces.</li>
                        <li>Assistance with office leasing and fit-out services.</li>
                        <li>IT support and administrative services.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                        <h2 class="cs_lh_base cs_fs_18 cs_fs_lg_18 m-0"><a href="{{ route('services') }}" class="inline-block">Market Research & Feasibility Studies</a></h2>
                    </div>
                    <div class="cs_service_thumb position-relative cs_rounded_5">
                        <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('/assets/img/service_8.png') }}"></div>
                    </div>
                    <ul class="cs_mb_30 cs_list cs_style_1 mt-3">
                        <li>Comprehensive market research and analysis.</li>
                        <li>Feasibility studies and business model development.</li>
                        <li>Industry-specific insights and trend analysis.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Section -->
@endsection("content")