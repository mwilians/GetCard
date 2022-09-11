@extends('layouts.user')

@section('title', 'My List Card')

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

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

                        <form action="{{ url('user/list-kartu') }}" method="GET">
                            {{-- @csrf --}}
                            <div class="input-icon card-toolbar">
                                <input type="text" class="form-control" placeholder="Cari No ID" name="search" />
                                <button type="submit" class="btn btn-primary font-weight-bold"><i class="flaticon2-search-1 text-muted"></i> Cari </button>
                            </div>
                        </form>

                        {{-- <div class="input-icon card-toolbar">
                            <input type="text" class="form-control" placeholder="Cari No ID" name="search" />
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div> --}}
                    </div>
                    <!--end::Body-->

                    <!--begin::Card-->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6 my-2 my-md-0">
                                <img src="{{asset($data->template->template_id)}}" alt="" class="card-img" height="190" alt="image">
                                {{-- <img class="mr-4" src="{{ asset('assets/media/desain/DKN/C1-1.png') }}" height="190" alt="image" /> --}}

                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between card-toolbar">
                        <a href="#" class="btn btn-light-primary font-weight-bold">Simpan Kartu Nama</a>
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

                        {{-- <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                            <img class="mt-5 mr-4" src="{{ asset('assets/media/desain/DKN/C1-1.png') }}" height="190" alt="image" />
                        </div> --}}
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