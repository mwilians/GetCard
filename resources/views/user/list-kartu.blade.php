@extends('layouts.user')

@section('title', 'My List Card')

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        {{-- <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
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
        </div> --}}
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container-fluid ">
                <!--Begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Pencarian Kartu Nama</h3>
                        </div>
                    </div>
                    <!--end::Body-->

                    <!--begin::Card-->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Cari ID" id="kt_datatable_search_query" />
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                                <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/DKN/C1-1.png') }}" height="190" alt="image" />
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--End::Card-->

                <!--Begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">List Kartu Saya</h3>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- // List My Card --}}

                        <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                            <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/DKN/C1-1.png') }}" height="190" alt="image" />
                            <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/DKN/C2-1.png') }}" height="190" alt="image" />
                            <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/DKN/C3-1.png') }}" height="190" alt="image" />
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        {{-- <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a> --}}
                        {{-- <a href="#" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a> --}}
                    </div>
                    <!--end::Body-->
                </div>
                <!--End::Card-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@push('script')
    
@endpush