@extends("base")
@section("content")
<!-- Start Page Header -->
<section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('/assets/img/page_header_1.png') }}">
    <div class="container position-relative z-index-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Services</a></li>
                <li class="breadcrumb-item active">DIFC AND ADGM foundation and Trustee Services</li>
            </ol>
        </nav>
        <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">DIFC AND ADGM foundation and Trustee Services</h1>
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
@endsection("content")