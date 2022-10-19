@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')

@include('sweetalert::alert')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-12">
                        @if (!\App\Http\Controllers\User\UserController::cekPremium ())

                        <div class="card card-custom bg-primary">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="svg-icon svg-icon-white svg-icon-2x mr-2">
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
                                    </span>
                                    <h3 class="card-label text-white">
                                        Selamat Datang {{ Auth::user()->name }}!
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <a href="user/premium" class="btn btn-sm btn-white">
                                        <i class="flaticon2-settings"></i> Pengaturan
                                    </a>
                                </div>
                            </div>
                        </div>

                        @else

                        <div class="card card-custom bg-warning">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="svg-icon svg-icon-white svg-icon-2x mr-2">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo10\dist/../src/media/svg/icons\General\Unlock.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <mask fill="white">
                                                    <use xlink:href="#path-1"/>
                                                </mask>
                                                <g/>
                                                <path d="M15.6274517,4.55882251 L14.4693753,6.2959371 C13.9280401,5.51296885 13.0239252,5 12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L14,10 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C13.4280904,3 14.7163444,3.59871093 15.6274517,4.55882251 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                    <h3 class="card-label text-white">
                                        Selamat Datang! Akun Anda Premium
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <a href="user/premium" class="btn btn-sm btn-white">
                                        <i class="flaticon2-settings"></i> Pengaturan
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>

                <div class="row mt-0 mt-lg-8">
                    <div class="col-xl-6">
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
                                                    <a href="user/pengguna" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Kartu Saya</a>
                                                    <span class="text-muted font-weight-bold d-block">{{ count($kartuSaya) }} Data Kartu</span>
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

                    <div class="col-xl-6">
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
                                                    <div class="symbol symbol-50 symbol-light-success mr-2">
                                                        <span class="symbol-label">
                                                            <span class="svg-icon svg-icon-xl svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path d="M4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M18.5,11 L5.5,11 C4.67157288,11 4,11.6715729 4,12.5 L4,13 L8.58578644,13 C8.85100293,13 9.10535684,13.1053568 9.29289322,13.2928932 L10.2928932,14.2928932 C10.7456461,14.7456461 11.3597108,15 12,15 C12.6402892,15 13.2543539,14.7456461 13.7071068,14.2928932 L14.7071068,13.2928932 C14.8946432,13.1053568 15.1489971,13 15.4142136,13 L20,13 L20,12.5 C20,11.6715729 19.3284271,11 18.5,11 Z" fill="#000000"/>
                                                                        <path d="M5.5,6 C4.67157288,6 4,6.67157288 4,7.5 L4,8 L20,8 L20,7.5 C20,6.67157288 19.3284271,6 18.5,6 L5.5,6 Z" fill="#000000"/>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="user/list-kartu" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">List Kartu Saya</a>
                                                    <span class="text-muted font-weight-bold d-block">{{ count($listKartu) }} Kartu Nama</span>
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
                </div>
                <!--end::Row-->

                <!--Begin::Card-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Data Perusahaan</h3>
                            </div>
                            <!--end::Header-->

                            <!--Begin::Body-->
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-7 text-center">
                                        <div class="symbol symbol-50 symbol-lg-100 symbol-light-danger mb-6">
                                            {{-- <span class="font-size-h3 symbol-label font-weight-boldest">LOGO</span> --}}
                                            <img src="{{ $l ? $l->foto : 'assets/media/logos/default.png' }}" alt="">
                                        </div>
                                    </div>
                                    <!--end::Pic-->
        
                                    <!--begin: Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <!--begin::User-->
                                            <div class="mr-3">
                                                <div class="d-flex align-items-center mr-3 mb-5">
                                                    <!--begin::Name-->
                                                    <a href="user/lembaga" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                                        {{-- Nama Perusahaan --}}
                                                        {{ $l ? $l->nama : 'Nama Perusahaan' }}
                                                    </a>
                                                    <!--end::Name-->
                                                </div>
        
                                                <!--begin::Contacts-->
                                                <div class="d-flex flex-wrap my-3">
                                                    <span class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> 
                                                        {{-- perusahaan@gmail.com --}}
                                                        {{ $l ? $l->telepon : 'Telepon Perusahaan' }}
                                                    </span>
                                                    <span class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> 
                                                        {{-- Jln. Perusahaan --}}
                                                        {{ $l ? $l->email : 'Email Perusahaan' }}
                                                    </span>
                                                    <span class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="9"/>
                                                                    <path d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z" fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> 
                                                        {{-- Jln. Perusahaan --}}
                                                        {{ $l ? $l->website : 'Website Perusahaan' }}
                                                    </span>
                                                    <span class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo10/dist/../src/media/svg/icons/Map/Marker1.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span> 
                                                        {{-- Jln. Perusahaan --}}
                                                        {{ $l ? $l->alamat : 'Alamat Perusahaan' }}
                                                    </span>
                                                </div>
                                                <!--end::Contacts-->
                                            </div>
                                            <!--begin::User-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <!--begin::List Widget 14-->
                        <div class="card card-custom gutter-b pb-5">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Data Kartu Saya</h3>
                            </div>
                            <!--end::Header-->

                            @foreach($kartuSaya as $kS)
                                
                            <!--begin::Body-->
                            <div class="card-body p-0 px-10 mb-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="symbol-label"
                                        style="background-image:url({{ asset($kS->foto) }})">
                                        </div>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <span class="text-dark-75 font-weight-bolder text-hover-primary font-size-h5">
                                            {{ $kS->nama }}
                                        </span>
                                        <span class="text-muted font-weight-bold font-size-md my-1">
                                            {{ $kS->jabatan }}
                                        </span>
                                        <span class="text-muted font-weight-bold font-size-md">
                                             <span
                                                class="text-primary font-weight-bold">{{ $kS->tanggal_bergabung }} / {{ $kS->tanggal_berakhir }}</span>
                                        </span>
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                {{ $kS->no_id }}
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->

                            @endforeach
                        </div>
                        <!--end::List Widget 14-->
                    </div>
                </div>
                <!--End::Card-->

                <!--begin::Data User-->
                {{-- <div class="row">
                    <div class="col-lg-12 col-xxl-4">
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Data Kartu Saya</h3>
                                <div class="card-toolbar">
                                    <a href="admin/list-pengguna" class="btn btn-hover-light-primary font-weight-bolder btn-sm text-primary font-size-md"></a>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-1">
                                <!--begin::Item-->
                                @if (count($kartuSaya) == 0)

                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                            <thead>
                                                <tr class="text-left text-uppercase bg-primary">
                                                    <th style="min-width: 250px" class="pl-7">
                                                        <span class="text-dark-75">Nama</span>
                                                    </th>
                                                    <th style="min-width: 120px">No ID</th>
                                                    <th style="min-width: 120px">Tanggal Bergabung</th>
                                                    <th style="min-width: 120px">Tanggal Berakhir</th>
                                                </tr>
                                            </thead>
                                        </table>

                                        <div class="text-center">
                                            <p>-- Belum Ada Data --</p>
                                        </div>
                                    </div>

                                @else

                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                            <thead class="">
                                                <tr class="text-left text-uppercase">
                                                    <th style="min-width: 250px" class="pl-7">
                                                        <span class="text-dark-75">Nama</span>
                                                    </th>
                                                    <th style="min-width: 120px" class="text-light">No ID</th>
                                                    <th style="min-width: 120px" class="text-light">Tanggal Bergabung</th>
                                                    <th style="min-width: 120px" class="text-light">Tanggal Berakhir</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($kartuSaya as $kS)

                                                    <tr>
                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45 mr-4">
                                                                    <span class="symbol-label" style="background-image:url({{ asset($kS->foto) }})"></span>
                                                                </div>

                                                                <div>
                                                                    <a href="" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $kS->nama }}</a>
                                                                    <span class="text-muted font-weight-bold d-block">{{ $kS->jabatan }}</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45 symbol-light mr-3"></div>
                                                                <div>
                                                                    <span class="text-muted font-weight-bold d-block">{{ $kS->no_id }}</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45 symbol-light mr-3"></div>
                                                                <div>
                                                                    <span class="text-muted font-weight-bold d-block">{{ $kS->tanggal_bergabung }}</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45 symbol-light mr-3"></div>
                                                                <div>
                                                                    <span class="text-muted font-weight-bold d-block">{{ $kS->tanggal_berakhir }}</span>
                                                                </div>
                                                            </div>
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

@endsection

@push('script')
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
@endpush