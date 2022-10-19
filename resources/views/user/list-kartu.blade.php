@extends('layouts.user')

@section('title', 'My List Card')

@section('content')

@include('sweetalert::alert')

<style>
    @media only screen and (min-width: 992px) {
        .list {
            /* background: rgb(61, 49, 49); */
        
        }
    }

    @media only screen and (max-width: 600px) {
        .list {
        
            /* background: rgb(157, 63, 63); */
        }
    }

    @media only screen and (max-width: 576px) {
        .list {
            /* background: rgb(255, 0, 0); */
            /* width: 100%; */
        
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
                        @if($data)
                            <picture class="row">
                                <div class="list col-sm-12 col-md-6"> 
                                    <img src="{{ ('/getcard.kartusaya.depan/'.$data->id) }}" width="100%" alt="KD">
                                </div>
                                <div class="list col-sm-12 col-md-6">
                                    <img src="{{ ('/getcard.kartusaya.belakang/'.$data->id) }}" width="100%" alt="KB"> 
                                </div>
                            </picture>
                        @endif
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

                        <form action="{{ url('user/list-kartu') }}" method="GET">
                            <div class="input-icon card-toolbar mt-5">
                                <input type="text" class="form-control" placeholder="Cari Kartu" name="cariKartu" value="{{ $cariKartu }}" />
                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        {{-- // List My Card --}}

                        @if(count($simpanKartu) == 0)

                        <div class="d-flex justify-content-center">
                            <p>-- Belum Ada List Kartu yang di Simpan --</p>
                        </div>

                        @else

                        <picture class="row">
                            @foreach($simpanKartu as $sK)
                                <div class="list col-sm-12 col-md-4 mb-5">
                                    <img src="{{ ('/getcard.kartusaya.depan/'.$sK->pengguna_id) }}" width="100%" alt="KD" data-toggle="modal" data-target="#detailkartu{{ $sK->id }}" style="cursor:pointer">
                                </div>
                            @endforeach
                        </picture>
                            
                        @endif
                    </div>

                    <!--Begin::Modal Detail -->
                    @foreach($simpanKartu as $sK)

                    <div class="modal fade" id="detailkartu{{ $sK->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Kartu</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <picture class="row">
                                        <div class="list col-sm-12 col-md-6"> 
                                            <img src="{{ ('/getcard.kartusaya.depan/'.$sK->pengguna_id) }}" width="100%" alt="KD">
                                        </div>
                                        <div class="list col-sm-12 col-md-6">
                                            <img src="{{ ('/getcard.kartusaya.belakang/'.$sK->pengguna_id) }}" width="100%" alt="KB"> 
                                        </div>
                                    </picture>
                                </div>

                                <div class="modal-footer">
                                    <form action="{{ url('user/deleteKartu/'.$sK->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-light-danger font-weight-bold">Hapus</button>
                                        <button type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Tutup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!--End::Modal Detail -->

                    <!--Begin::Pagination -->
                    <div class="card-footer d-flex justify-content-between">
                        {{ $simpanKartu->links()}}
                    </div>
                    <!--End::Pagination -->
                    
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