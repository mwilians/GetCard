<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Dashboard | Get Card</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Advanced search datatables examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="/user">
            <img alt="Logo" src="{{ asset('assets/media/logos/get card-01.png') }}" class="logo-default max-h-60px" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left rounded-0" id="kt_aside_mobile_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left d-flex flex-column " id="kt_aside">
                <!--begin::Brand-->
                <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-9">
                    <!--begin::Logo-->
                    <div class="btn p-0 symbol symbol-40 symbol-success" href="?page=index" id="kt_quick_user_toggle">
                        <div class="symbol-label ">
                            <img alt="Logo" src="assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" />
                        </div>
                    </div>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->

                <!--begin::Nav Wrapper-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
                    <!--begin::Nav-->
                    <ul class="nav flex-column">
                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Dashboard">
                            <a href="/admin" class="nav-link btn btn-icon btn-lg btn-borderless {{ Route::is('home') ? 'active' : '' }}">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="List Pengguna">
                            <a href="admin/list-pengguna" class="nav-link btn btn-icon btn-lg btn-borderless {{ Route::is('index') ? 'active' : '' }}">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="List Perusahaan">
                            <a href="admin/list-lembaga" class="nav-link btn btn-icon btn-lg btn-borderless {{ Route::is('perusahaan') ? 'active' : '' }}">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                            <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                            <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Template">
                            <a href="admin/template" class="nav-link btn btn-icon btn-lg btn-borderless {{ Route::is('template') ? 'active' : '' }}">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo10/dist/../src/media/svg/icons/Communication/Adress-book2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Package">
                            <a href="{{ ('admin/package') }}" class="nav-link btn btn-icon btn-lg btn-borderless">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo10/dist/../src/media/svg/icons/Communication/Adress-book2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Nav Wrapper-->
            </div>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed ">
                    <!--begin::Header Wrapper-->
                    <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                        <!--begin::Container-->
                        <div class=" container-fluid  d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                            <!--begin::Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Menu-->
                                <div id="kt_header_menu"
                                    class="header-menu header-menu-mobile  header-menu-layout-default ">
                                    <!--begin::Nav-->
                                    <ul class="menu-nav ">
                                        <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
                                            <a href="" class="menu-link menu-toggle"><span class="menu-text">Get Card</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header Wrapper-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-custom bg-primary">
                                        <div class="card-header border-0">
                                            <div class="card-title">
                                                {{-- <span class="svg-icon svg-icon-white svg-icon-2x mr-2">
                                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo10\dist/../src/media/svg/icons\General\Lock.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <mask fill="white">
                                                                <use xlink:href="#path-1"/>
                                                            </mask>
                                                            <g/>
                                                            <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span> --}}
                                                <h3 class="card-label text-white">
                                                    Selamat Datang Admin!
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row mt-0 mt-lg-8">
                                <div class="col-xl-4">
                                    <!--begin::Card 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light-warning mr-2">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-xl svg-icon-warning">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="admin/list-pengguna" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Data User</a>
                                                                <span class="text-muted font-weight-bold d-block">{{ count($dataUser) }} Data User</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Tablet-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card 1-->
                                </div>

                                <div class="col-xl-4">
                                    <!--begin::Card 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light-primary mr-2">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                                                                    <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                                                                    <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="admin/list-lembaga" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Data Perusahaan</a>
                                                                <span class="text-muted font-weight-bold d-block">{{ count($dataLembaga) }} Data Perusahaan</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Tablet-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card 2-->
                                </div>

                                <div class="col-xl-4">
                                    <!--begin::Card 3-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light-danger mr-2">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-xl svg-icon-danger">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>
                                                                                    <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="admin/template" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Data Template</a>
                                                                <span class="text-muted font-weight-bold d-block">{{ count($dataTemplate) }} Data Template Kartu</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Tablet-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card 3-->
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-stretch gutter-b">
                                        <!--begin::Charts Widget 3-->
                                        <div class="card card-custom gutter-b">
                                            <!--begin::Body-->
                                            <div class="card-body p-0">
                                                <div
                                                    class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                    <span class="symbol  symbol-50 symbol-light-success mr-2">
                                                        <span class="symbol-label">
                                                            <span class="svg-icon svg-icon-xl svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <div class="d-flex flex-column text-right">
                                                        <span class="text-dark-75 font-weight-bolder font-size-h3">+{{ count($dataUser) }}</span>
                                                        <span class="text-muted font-weight-bold mt-1">Jumlah User</span>
                                                    </div>
                                                </div>
                                                <div id="kt_charts_widget_3_chart" class="card-rounded-bottom"
                                                    data-color="success" style="height: 150px"></div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--begin::Charts Widget 3-->
                                    </div>
                                </div>

								<div class="col-xl-7">
									<!--begin::Charts Widget 6-->
									<div class="card card-custom card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header h-auto border-0">
											<div class="card-title py-5">
												<h3 class="card-label">
													<span class="d-block text-dark font-weight-bolder">Riwayat Pembayaran</span>
													<span class="d-block text-muted mt-2 font-size-sm">{{ count($dataBerlangganan) }}  Akun Berlangganan</span>
												</h3>
											</div>
											<div class="card-toolbar">
												<span class="mr-5 d-flex align-items-center font-weight-bold">
													<i class="label label-dot label-xl label-primary mr-2"></i> User Berlangganan
												</span>
												<span class="d-flex align-items-center font-weight-bold">
													<i class="label label-dot label-xl label-info mr-2"></i> Pendapatan
												</span>
											</div>
										</div>
										<!--end::Header-->

										<!--begin::Body-->
										<div class="card-body">
											<div class="row">
												<div class="col-4 d-flex flex-column">
													<!--begin::Block-->
													<div class="bg-light-primary p-8 rounded-xl flex-grow-1">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
																<div class="symbol-label">
																	<span class="svg-icon svg-icon-md svg-icon-danger">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
																	</span>
																</div>
															</div>
															<div>
																<div class="font-size-sm font-weight-bold">{{ count($dataBerlangganan) }} User</div>
																<div class="font-size-sm text-muted">Berlangganan</div>
															</div>
														</div>
														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
																<div class="symbol-label">
																	<span class="svg-icon svg-icon-md svg-icon-warning">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
																			xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                                <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
                                                                                <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
                                                                                <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
                                                                            </g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</div>
															<div>
																<div class="font-size-sm font-weight-bold">Rp. 150.000</div>
																<div class="font-size-sm text-muted">Pendapatan Bulan ini</div>
															</div>
														</div>
														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
																<div class="symbol-label">
																	<span class="svg-icon svg-icon-md svg-icon-success">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24" />
																				<rect fill="#000000" opacity="0.3"
																					x="13" y="4" width="3" height="16"
																					rx="1.5" />
																				<rect fill="#000000" x="8" y="9"
																					width="3" height="11" rx="1.5" />
																				<rect fill="#000000" x="18" y="11"
																					width="3" height="9" rx="1.5" />
																				<rect fill="#000000" x="3" y="13"
																					width="3" height="7" rx="1.5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</div>
															<div>
																<div class="font-size-sm font-weight-bold">Rp. 1.432.000</div>
																<div class="font-size-sm text-muted">Total Pendapatan</div>
															</div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Block-->
												</div>
												<div class="col-8">
													<div id="kt_charts_widget_6_chart"></div>
												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Charts Widget 6-->
								</div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Data User-->
                            {{-- <div class="row">
                                <div class="col-lg-12 col-xxl-4">
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Data User</h3>
                                            <div class="card-toolbar">
                                                <a href="admin/list-pengguna" class="btn btn-hover-light-primary font-weight-bolder btn-sm text-primary font-size-md"></a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
            
                                        <!--begin::Body-->
                                        <div class="card-body pt-1">
                                            <!--begin::Item-->
                                            @if (count($dataUser) == 0)

                                                <div class="table-responsive">
                                                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                        <thead>
                                                            <tr class="text-left text-uppercase">
                                                                <th style="min-width: 250px" class="pl-7">
                                                                    <span class="text-dark-75">Username</span>
                                                                </th>
                                                                <th style="min-width: 250px">Perusahaan</th>
                                                                <th style="min-width: 100px">Kartu Saya</th>
                                                            </tr>
                                                        </thead>
                                                    </table>

                                                    <div class="text-center">
                                                        <p>-- Belum Ada User --</p>
                                                    </div>
                                                </div>
            
                                            @else
            
                                                <div class="table-responsive">
                                                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                        <thead>
                                                            <tr class="text-left text-uppercase">
                                                                <th style="min-width: 250px" class="pl-7">
                                                                    <span class="text-dark-75">Username</span>
                                                                </th>
                                                                <th style="min-width: 250px">Perusahaan</th>
                                                                <th style="min-width: 100px">Kartu Saya</th>
                                                            </tr>
                                                        </thead>
            
                                                        <tbody>
                                                            @foreach ($dataUser as $dU)

                                                                @php
                                                                    $dataPerusahaan = DB::table('lembaga')->where('user_id', $dU->id)->first();

                                                                    $hitungPengguna = DB::table('pengguna')->where('user_id', $dU->id)->get();
                                                                @endphp
            
                                                                <tr>
                                                                    <td class="pl-0 py-8">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="symbol symbol-45 symbol-success mr-4">
                                                                                <span class="symbol-label" style="background-image:url(assets/media/svg/avatars/007-boy-2.svg)"></span>
                                                                            </div>
            
                                                                            <div>
                                                                                <a href="" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $dU->name }}</a>
                                                                                <span class="text-muted font-weight-bold d-block">{{ $dU->email }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="pl-0 py-8">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                                                <span class="symbol-label" style="background-image:url({{ $dataPerusahaan ? $dataPerusahaan->foto : 'assets/media/logos/default.png' }})"></span>
                                                                            </div>
            
                                                                            <div>
                                                                                <a href="" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $dataPerusahaan ? $dataPerusahaan->nama : 'Nama Perusahaan' }}</a>
                                                                                <span class="text-muted font-weight-bold d-block">{{ $dataPerusahaan ? $dataPerusahaan->website : 'Website Perusahaan' }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
            
                                                                    <td>
                                                                        <span class="btn btn-light-primary font-weight-bolder font-size-h6">
                                                                            {{ count($hitungPengguna) }}     
                                                                        </span>
                                                                    </td>
                                                                </tr>
            
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                            </div> --}}
                            <!--end::Data User-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2022&copy;</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Get Card</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Nav-->
                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pr-3 pl-0">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-3 pr-0">Contact</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                User Profile
                <small class="text-muted font-size-sm ml-2"></small>
            </h3>
            <span class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </span>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" id="kt_image_5"
                    style="background-image: url(assets/media/users/blank.png)"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <span class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        {{ Auth::user()->name }}
                    </span>
                    {{-- <div class="text-muted mt-1">
                        Application Developer
                    </div> --}}
                    <div class="navi">
                        <span class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span> </span>
                                <span class="navi-text text-muted text-hover-primary"> {{ Auth::user()->email }}</span>
                            </span>
                        </span>

                        <form action="{{ route('logout') }}" method="POST" class="navi mt-4">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->

    <script>var HOST_URL = "{{ url('/') }}";</script>

    <script>

        var newUser = <?php echo json_encode ($newUser) ?> ;

        var bulan = <?php echo json_encode ($bulan) ?> ;

        Highcharts.chart('kt_stats_widget_11_chart', {

            title : {
                text: 'Pendaftaran User'
            },

            xAxis : {
                categories : bulan
            },

            yAxis : {
                title: {
                    text : 'Jumlah Pendaftaran User'
                }
            },

            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },

            series: [{
                name: 'Pendaftaran User',
                // data: newUser
            }]
        });
    </script>

    <script>

        var userBerlangganan = <?php echo json_encode ($userBerlangganan) ?> ;

        var bulanBerlangganan = <?php echo json_encode ($bulanBerlangganan) ?> ;

        Highcharts.chart('kt_charts_widget_6_chart', {

            title : {
                text: 'User Berlangganan'
            },

            xAxis : {
                categories : bulanBerlangganan
            },

            yAxis : {
                title: {
                    text : 'Jumlah User Berlangganan'
                }
            },

            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },

            series: [{
                name: 'User Berlangganan',
            }]
        });
    </script>

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#663259",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#F4E1F0",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/gmaps/gmaps.js?v=7.0.6') }}"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>