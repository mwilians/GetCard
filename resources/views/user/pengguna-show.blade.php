@extends('layouts.user')

@section('title', 'Show Card')

@section('content')

<style>

    #img {
      border-radius: 50%;
      margin-left: 10px; 
    }
    
    #id {
    width:250px;
    height:450px;
    position:absolute;
    top: 75px;
    left: -51px;
    opacity: 0.88;
    margin:auto;
    margin-left: 100px;
    font-family: 'Josefin Sans', sans-serif;
    transition: 0.4s;
    border-radius: 2%;
    }
    #profile{
        width: 120px;
        border-radius: 50%;
    }

    #id::before {
    content: "";
    position: absolute;
    /* width:250px; */
    height:830px;
    background: url('{{ asset("assets/media/desain/D-1-3.png") }}');
    background-repeat:repeat-x;
    background-size: 250px 445px;
    /* opacity: 0.2; */
    z-index: -1;
    margin:auto;
    text-align:center;
    }

    .container{
        font-size: 12px;
        font-family: 'Josefin Sans', sans-serif;
    }
    .id-1{
        transition: 0.4s;
        height:830px;
        background: url('{{ asset("assets/media/desain/D-1-3.png") }}');
        text-align:center;
        font-size: 16px;
        font-family: 'Mouse Memoirs', sans-serif;
        background-size: 250px 445px;
        margin:auto;
        margin-top:500px;
    }
    .jabatan{
        position: relative;
        top: 20px;
        color: #E7E3DC;
    }
</style>

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Preview</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- // Preview ID Card --}}

                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img class="mt-5" src="{{ asset('assets/media/desain/D-1-3.png') }}" height="830" alt="image" />
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img src="{{ asset('assets/media/desain/ID1-1.png') }}" height="168" alt="image" />
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img src="{{ asset('assets/media/desain/ID1-3.png') }}" height="168" alt="image" />
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img src="{{ asset('assets/media/desain/ID1-2.png') }}" height="168" alt="image" />
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img src="{{ asset('assets/media/desain/ID1-4.png') }}" height="168" alt="image" />
                                </div>
                            </div>

                            @foreach ($pengguna as $p)

                            <div class="card-body col">
                                {{-- // Preview ID Card --}}

                                <div id="id" class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <center>
                                    <h5 class="text fw-bold mt-2"><bold>No ID : {{ $p->no_id }}</bold></h5>
                                    <img id="profile" class="mt-5" src="{{ asset($p->foto) }}" alt="image" />
                                    <div class="container" align="center">
                                        <h4 style="margin:auto" class="mt-7">{{ $p->nama }}</h4>
                                        <p class="jabatan" style="margin:auto">{{ $p->jabatan }}</p>
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
                                        {!! QrCode::size(125)->generate($p); !!}
                                    </div>
                                    </center>
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <center>
                                    <img src="{{ asset('assets/media/desain/D-1-3.png') }}" height="830px" alt="image" />
                                    </center>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>
                            </div>

                            {{-- --------------------------------------------------------------------------------- --}}

                            {{-- @foreach ($pengguna as $p)

                            <div class="card-body col">
                                // Preview ID Card 
                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120 ">
                                    <div id="id" class="mx-auto border border-black ml-10">
                                        <center>
                                        <h5 class="text fw-bold mt-2"><bold>No ID :</bold></h5>
                                        <p>098976546</p>
                                        <img id="img" class="mt-5 " src="{{ asset($p->foto) }}"  width="105" height="138" alt="image" />
                                        <div class="container" align="center">
                                            <h4 style="margin:auto" class="mt-7">{{ $p->nama }}</h4>
                                            <p style="margin:auto">{{ $p->jabatan }}</p>
                                            <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr>
                                            {!! QrCode::size(100)->generate($p); !!}
                                        </div>
                                    </center>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="user/print/{{ $p->id }}" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>                            
                            </div>     --}}
                            @endforeach
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Desain Card</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- // Tampilan Desain --}}

                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/DC1.png') }}"  alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150"> 
                                        <img src="{{ asset('assets/media/desain/DC2.png') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
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
@endpush

<!--begin::Card-->
{{-- <div class="card card-custom col-4">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Preview</h3>
        </div>
    </div>
    <div class="card-body">
        Preview ID Card
    </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
        <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
    </div>
</div>

<div class="card card-custom col-4">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Desain Card:</h3>
        </div>
    </div>
    <div class="card-body">
        Desain ID Card
    </div>
</div> --}}
<!--end::Card-->