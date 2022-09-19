@extends('layouts.user')

@section('title', 'My List Card')

@section('content')

@include('sweetalert::alert')

<style>
    @media only screen and (max-width: 600px) {
        .list{
            width: 100%;
            background: red;
        }
    }
</style>

{{-- @php 
print_r($data);exit;
@endphp --}}

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

                        {{-- <form action="{{ url('user/list-kartu') }}" method="GET">
                            <div class="input-icon card-toolbar">
                                <input type="text" class="form-control" placeholder="Cari No ID" name="search" value="{{ $search }}" />
                                <button type="submit" class="btn btn-primary font-weight-bold"><i class="flaticon2-search-1 text-muted"></i> </button>
                            </div>
                        </form> --}}

                        <form action="{{ url('user/list-kartu') }}" method="GET">
                            <div class="input-icon card-toolbar mt-5">
                                <input type="text" class="form-control" placeholder="Cari No ID" name="search" value="{{ $search }}" />
                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                            </div>
                        </form>
                    </div>
                    <!--end::Body-->

                    <!--begin::Card-->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6 my-2 my-md-0">
                                @if($data)
                                    <picture style="overflow: auto;">
                                        <div class="list" style="float:left; width:0%; ">
                                            <img src="{{ ('/getcard.kartusaya.depan/'.$data->id) }}" width="100%" style="width: 420px; height:247;" alt="KD">
                                        </div>
                                        <div class="list" style="float:right; width:0%; ">
                                            <img src="{{ ('/getcard.kartusaya.belakang/'.$data->id) }}" width="100%" style="width: 420px; height:247;" alt="KB">
                                        </div>
                                    </picture>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between card-toolbar">
                        <form action="{{ url('user/list-kartu/simpan-kartu') }}" method="POST">
                            @csrf
                                @if($data)
                                    <div>
                                        <input type="hidden" name="simpan_kartu" value="{{ $data->id }}">
                                    </div>
                                @endif
                                
                                <button type="submit" class="btn btn-light-primary font-weight-bold card-toolbar">Simpan Kartu Nama</button>
                        </form>
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

                        @if(count($simpanKartu) == 0)

                        <div class="d-flex justify-content-center">
                            <p>-- Belum Ada List Kartu yang di Simpan --</p>
                        </div>

                        @else

                        @foreach($simpanKartu as $sK)
                            <picture style="overflow: auto;">
                                <div class="list" style="float:left; width:48%;"> 
                                    <img src="{{ ('/getcard.kartusaya.depan/'.$sK->pengguna_id) }}" width="100%" style="width: 480px; height:307;" alt="KD">
                                </div>
                                <div class="list" style="float: right; width:48%;">
                                    <img src="{{ ('/getcard.kartusaya.belakang/'.$sK->pengguna_id) }}" width="100%" style="width: 480px; height:307;" alt="KB"> 
                                </div>
                            </picture>
                        @endforeach

                        @endif
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