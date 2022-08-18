@extends('layouts.user')

@section('title', 'Show Card')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="{{ asset('assets\css\pages\template\id_card.css') }}" rel="stylesheet" type="text/css"/>

{{-- <style>

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
        top: 16px;
        font-size: 16px;
        color: #E7E3DC;
    }
    .image-section{
    grid-area: main;
}

    .data{
        position: relative;
        top: 50px;
        font-size: 14px;
        color: #41624F;
    }
    .foto{
        width: 200px;
        border-radius: 10px;
    }
    #profile-alamat{
        margin-top: -5%;
    }
</style> --}}

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch overflow-hidden">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Preview</h3>
                                </div>
                            </div>

                            @foreach ($pengguna as $p)

                            <div class="card-body login login-5 login-signin-on  col " align="center" id="kt_login" >
                                
                                {{-- // Preview ID Card --}}

                                <div class="position-relative overflow-hidden">
                                    <div id="id_card_1" class="tabcontent">
                                        <div class="container">
                                            <div class="image-section">
                                                <img src="{{ asset('assets/media/desain/DD/Demo1-B.png') }}" id="template" alt="">
                                            </div>
                                            <div class="section-kartu-nama">
                                                <img src="{{ asset('assets/media/desain/DKN/C1-1-A.png') }}" id="kartu_nama" alt="">
                                            </div>
                                            <div class="section-kartu-nama-belakang">
                                                <img src="{{ asset('assets/media/desain/DKN/C1-2-A.png') }}" id="kartu_nama_belakang" alt="">
                                            </div>
                                            <div class="text-section" align="center">
                                                <h5 id="nama-id" class="text fw-bold mt-2"><bold>No ID :</bold></h5>
                                                <p id="no-id">{{ $p->no_id }}</p>
                                                <img id="profile-img" src="{{ asset($p->foto) }}"  alt="image" />
                                                <h4 style="margin:auto; font-size: 30px;" class="profile-nama mt-5">{{ $p->nama }}</h4>
                                                <p id="profile-jabatan" class="mx-auto"> {{ $p->jabatan }}</p>
                                                <div id="detail">
                                                    <p id="profile-telp">0{{ $p->telepon }}</p>
                                                    <p id="profile-email">{{ $p->email }}</p>
                                                    <p id="profile-tanggal">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    @foreach ($lembaga as $l)
                                                    <img src="{{ asset($l->foto) }}" id="logo-lembaga" alt="Avatar">
                                                    <p id="profile-telepon">0{{ $l->telepon }}</p>
                                                    <p id="profile-alamat-lembaga">{{ $l->alamat }}</p>
                                                    <p id="profile-email-lembaga">{{ $l->email }}</p>
                                                    <p id="profile-website-lembaga">{{ $l->website }}</p>
                                                    @endforeach
                                                </div>
                                                <div id="qrcode">
                                                    {!! QrCode::size(145)->generate($p); !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>
                            </div>
                            @endforeach
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Desain Card</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- // Pilihan Desain --}}
                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 desain">
                                    @foreach ($template as $t)
                                        <div class="symbol symbol-50 symbol-lg-150 gambar">
                                            <button onclick="template({{ $t->id }})" class="btn symbol symbol-50 symbol-lg-150" style="border: none"><img src="{{ asset($t->file_demo) }}" alt="image" /></button>
                                        </div>
                                    @endforeach
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    function template(id){
        let url = HOST_URL + '/template/' + id;
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'json',
            success: function(response){

                // ----- preview desain ----- //

                // file app
                let foto = $('#template');
                // file kartu nama 1
                let foto_kartu_nama = $('#kartu_nama');
                // file kartu nama 2
                let foto_kartu_nama_belakang = $('#kartu_nama_belakang');

                var kartu_app = response.data[0].file_kartu_app;
                var kartu_nama = response.data[0].file_kartu_nama1;
                var kartu_nama_belakang = response.data[0].file_kartu_nama2;

                foto.attr('src', kartu_app);
                foto_kartu_nama.attr('src', kartu_nama);
                foto_kartu_nama_belakang.attr('src', kartu_nama_belakang);
            }
        });
    }

        // function download(){
        //     let data = document.querySelector('.container')

        //     domtoimage.toPng(data)
        //         .then(function (dataUrl) {
        //             var link = document.createElement('a');
        //             link.download = 'my-image-name.png';
        //             link.href = dataUrl;
        //             link.click();
        //         });

        //         let data1 = document.querySelector('.container-1')

        //     domtoimage.toPng(data1)
        //         .then(function (dataUrl) {
        //             var link = document.createElement('a');
        //             link.download = 'my-image-name.png';
        //             link.href = dataUrl;
        //             link.click();
        //         });
        // }

    </script> 

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
@endpush