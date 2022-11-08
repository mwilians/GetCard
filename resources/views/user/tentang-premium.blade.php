@extends('layouts.user')

@section('title', 'Tentang')

@section('content')

<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (!\App\Http\Controllers\User\UserController::cekPremium ())

                    <div class="card card-custom bg-primary">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <span class="svg-icon svg-icon-white svg-icon-2x mr-4">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo10\dist/../src/media/svg/icons\General\Lock.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z M17,16 L17,10 C17,8.34314575 15.6568542,7 14,7 L8,7 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L17,16 Z" fill="#000000" fill-rule="nonzero"/>
                                            <path d="M9.27272727,9 L13.7272727,9 C14.5522847,9 15,9.44771525 15,10.2727273 L15,14.7272727 C15,15.5522847 14.5522847,16 13.7272727,16 L9.27272727,16 C8.44771525,16 8,15.5522847 8,14.7272727 L8,10.2727273 C8,9.44771525 8.44771525,9 9.27272727,9 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                                <h3 class="card-label text-white">
                                    Fitur apa yang didapatkan?
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="user/premium" class="btn btn-sm btn-white">
                                    <i class="flaticon2-settings"></i> Beralih Premium
                                </a>
                            </div>
                        </div>
                    </div>

                    @else

                    <div class="card card-custom bg-primary">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <span class="svg-icon svg-icon-white svg-icon-2x mr-4">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo10\dist/../src/media/svg/icons\General\Lock.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z M17,16 L17,10 C17,8.34314575 15.6568542,7 14,7 L8,7 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L17,16 Z" fill="#000000" fill-rule="nonzero"/>
                                            <path d="M9.27272727,9 L13.7272727,9 C14.5522847,9 15,9.44771525 15,10.2727273 L15,14.7272727 C15,15.5522847 14.5522847,16 13.7272727,16 L9.27272727,16 C8.44771525,16 8,15.5522847 8,14.7272727 L8,10.2727273 C8,9.44771525 8.44771525,9 9.27272727,9 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                                <h3 class="card-label text-white">
                                    Fitur apa yang didapatkan?
                                </h3>
                            </div>
                        </div>
                    </div>

                    @endif
                </div>
            </div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6 mt-8">
                    <!--begin::List Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Premium</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-9 bg-light-info rounded p-5">
                                <!--begin::Img-->
                                <span class="svg-icon svg-icon-5x mr-4">
                                    <img src="{{ asset('assets/media/img/P8.png') }}" width="150px" height="100px" alt="">
                                </span>
                                <!--end::Img-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><b>Kartu Nama Tak Terbatas!</b></a>
                                    <span class="text-muted font-weight-bold">Buat kartu nama sebanyak mungkin tanpa batas</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-9">
                                <!--begin::Img-->
                                <span class="svg-icon svg-icon-5x mr-4">
                                    <img src="{{ asset('assets/media/img/P9.png') }}" width="150px" height="100px" alt="">
                                </span>
                                <!--end::Img-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><b>Akses Template!</b></a>
                                    <span class="text-muted font-weight-bold">Dapat mengakses seluruh template yang telah disediakan oleh GetCard</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 11-->
                </div>
                <div class="col-xl-6 mt-8">
                    <!--begin::List Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Gratis</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                                <!--begin::Img-->
                                <span class="svg-icon svg-icon-5x mr-4">
                                    <img src="{{ asset('assets/media/img/P6.png') }}" width="150px" height="100px" alt="">
                                </span>
                                <!--end::Img-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><b>Limit Kartu Nama!</b></a>
                                    <span class="text-muted font-weight-bold">Hanya dapat membuat 3 kartu nama</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                <!--begin::Img-->
                                <span class="svg-icon svg-icon-5x mr-4">
                                    <img src="{{ asset('assets/media/img/P5.png') }}" width="150px" height="100px" alt="">
                                </span>
                                <!--end::Img-->

                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><b>Template terbatas!</b></a>
                                    <span class="text-muted font-weight-bold">Hanya dapat mengakses beberapa template yang telah disediakan oleh GetCard</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 11-->
                </div>
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            {{-- <div class="row mt-8">
                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo BCA.jpg" alt="image" width="120px" height="40px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo Mandiri.png" alt="image" width="120px" height="40px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo BNI.png" alt="image" width="110px" height="40px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo PB.jpg" alt="image" width="120px" height="40px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo BRI.png" alt="image" width="120px" height="40px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->
            </div> --}}
            <!--end::Row-->

            <!--begin::Separator-->
            {{-- <div class="separator separator-dashed mb-5"></div> --}}
            <!--end::Separator-->

            <!--begin::Row-->
            {{-- <div class="row">
                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo GoPay.png" alt="image" width="80px" height="80px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo Qris.png" alt="image" width="120px" height="50px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mt-3">
                                    <div class="">
                                        <img src="assets/media/logos/payment/Logo ShopeePay.png" alt="image" width="90px" height="60px"/>
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->
            </div> --}}
            <!--end::Row-->

            <!--begin::Separator-->
            {{-- <div class="separator separator-dashed mb-5"></div> --}}
            <!--end::Separator-->
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

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/datatables/pengguna.js?v=7.0.6') }}"></script>
<!--end::Page Scripts-->
@endpush 