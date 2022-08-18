@extends('layouts.user')

@section('title', 'My Company')

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
            <div
                class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        Perusahaan </h5>
                    <!--end::Title-->

                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                    </div>
                    <!--end::Separator-->

                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ $l ? $l->nama : 'Nama Perusahaan' }}</span>
                    </div>
                    <!--end::Search Form-->
                </div>
                <!--end::Details-->
            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container-fluid ">
                <!--Begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--Begin::Body-->
                    <div class="card-body">
                        <div class="d-flex">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-7">
                                <div class="symbol symbol-50 symbol-lg-120 symbol-light-danger">
                                    {{-- <span class="font-size-h3 symbol-label font-weight-boldest">LOGO</span> --}}
                                    <img src="{{ $lembaga ? $lembaga->foto : 'assets/media/logos/default.png' }}" alt="">
                                </div>
                            </div>
                            <!--end::Pic-->

                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <!--begin::User-->
                                    <div class="mr-3">
                                        <div class="d-flex align-items-center mr-3">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                                {{-- Nama Perusahaan --}}
                                                {{ $l ? $l->nama : 'Nama Perusahaan' }}
                                            </a>
                                            <!--end::Name-->
                                        </div>

                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
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
                                            </a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
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
                                            </a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
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
                                            </a>
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--begin::User-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Content-->
                                {{-- <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <!--begin::Description-->
                                    <div class="flex-grow-1 text-muted-50 py-2 py-lg-2 mr-5">
                                        I distinguish three main text objectives could be merely to inform
                                        people.<br />
                                        A second could be persuade people.
                                    </div>
                                    <!--end::Description-->
                                </div> --}}
                                <!--end::Content-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--End::Card-->

                <!--begin::Form-->
                <form method="post" action="{{ route('lembaga_insert') }}" enctype="multipart/form-data" class="form"
                    id="kt_form">
                    @csrf
                    <!--begin::Card-->
                    <div class="card card-custom gutter-bs">

                        {{-- @foreach($lembaga as $lembaga) --}}
                            
                        <!--Begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x "
                                    role="tablist">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link active" data-toggle="tab"
                                            href="">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                opacity="0.3" />
                                                            <path
                                                                d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> </span>
                                            <span class="nav-text font-weight-bold">Informasi Perusahaan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Button-->
                                <a href="#" class="btn btn-default font-weight-bold"> Reset </a>
                                <!--end::Button-->

                                <!--begin::Dropdown-->
                                <div class="btn-group ml-2">
                                    <button type="submit" class="btn btn-primary font-weight-bold"><i class="ki ki-check icon-sm"></i> Simpan </button>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--Begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <form class="form">
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5"></h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Logo</label>
                                            <div class="col-9">
                                                <div class="image-input image-input-empty image-input-outline"
                                                    id="kt_image_5"
                                                    style="background-image: url(assets/media/logos/default.png)">
                                                    <div class="image-input-wrapper"></div>

                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>

                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>

                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Nama</label>
                                            <div class="col-lg-9 col-xl-6">
                                                {{-- <input class="form-control form-control-lg form-control-solid"
                                                    type="text" name="nama" value="" placeholder="Perusahaan" required/> --}}
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" name="nama" value="{{ $l ? $l->nama : 'Perusahaan' }}" placeholder="Perusahaan" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Telepon</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-phone"></i></span></div>
                                                    {{-- <input type="text" name="telepon"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="+6282278953712" required/> --}}
                                                    <input type="text" name="telepon"
                                                        class="form-control form-control-lg form-control-solid"
                                                            value="{{ $l ? $l->telepon : '+6282278953712' }}" placeholder="+6282278953712" required/>
                                                </div>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Alamat</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-map-marker"></i></span></div>
                                                    {{-- <input type="text" name="alamat"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="Jln. Raya Tlogomas" required/> --}}
                                                    <input type="text" name="alamat"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $l ? $l->alamat : 'Jln. Raya Tlogomas' }}" placeholder="Jln. Raya Tlogomas" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-at"></i></span></div>
                                                    {{-- <input type="text" name="email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="perusahaan@gmail.com" required/> --}}
                                                    <input type="text" name="email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $l ? $l->email : 'perusahaan@gmail.com' }}" placeholder="perusahaan@gmail.com" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Webstie</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="la la-globe"></i></span></div>
                                                    {{-- <input type="text" name="website"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="" placeholder="info@website.com" required/> --}}
                                                    <input type="text" name="website"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="{{ $l ? $l->website : 'info@website.com' }}" placeholder="info@website.com" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                        </div>
                        <!--end::Body-->
                        
                        {{-- @break --}}
                        
                        {{-- @endforeach --}}

                    </div>
                    <!--end::Card-->
                </form>
                <!--end::Form-->

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

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->

    <script>
        var avatar5 = new KTImageInput('kt_image_5');
    </script>
@endpush