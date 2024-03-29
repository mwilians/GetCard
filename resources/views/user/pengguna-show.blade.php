@extends('layouts.user')

@section('title', 'Show Card')

@section('content')

@include('sweetalert::alert')

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<link href="{{ asset('assets\css\pages\template\id_card.css') }}" rel="stylesheet" type="text/css"/>

<style> 
.iframe {
    border-style:solid;
}

.wrap {
    width: 320px;
    height: 700px;
    padding: 0;
    overflow: hidden;
}
.frame {
    width: 2500px;
    height: 5000px !important;
    border: 0;
    -ms-transform: scale(0.15);
    -moz-transform: scale(0.15);
    -o-transform: scale(0.15);
    -webkit-transform: scale(0.15);
    transform: scale(0.15);

    -ms-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -o-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}
.kartusaya {
    border-color: blue;
}
</style> 

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <h5 class="card-label mt-8">Desain Kartu</h5>
                                {{-- <div class="card-title">
                                    <form action="{{ url('user/pengguna/'.$id.'/simpan-template') }}" method="POST">
                                    @csrf
                                        <div id="pilih-desain"></div>
                                            <button type="submit" class="btn btn-light-primary font-weight-bold card-toolbar">Simpan Desain</button>
                                    </form>
                                </div> --}}
                            </div>
                            
                            <div class="card-body">
                                {{-- // Pilihan Desain --}}

                                {{-- 2 --}}

                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 desain">
                                    
                                    @foreach ($template as $t)

                                        @if($t->tipe != 'Gratis')

                                            @if(!\App\Http\Controllers\User\UserController::cekPremium())

                                              <div class="symbol symbol-50 symbol-lg-150 gambar">
                                                <button class="btn symbol symbol-50 symbol-lg-150 alertPremium" style="border: none">
                                                    <span class="svg-icon svg-icon-md svg-icon-warning">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3"/>
                                                                <path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <img src="{{ asset($t->file_demo) }}" alt="image" style="filter:blur(5px)"/>
                                                </button>
                                            </div>

                                            @else

                                            <div class="symbol symbol-50 symbol-lg-150 gambar">
                                                <button onclick="template({{ $t->id }})" class="btn symbol symbol-50 symbol-lg-150" style="border: none">
                                                    <span class="svg-icon svg-icon-md svg-icon-warning">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3"/>
                                                                <path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <img src="{{ asset($t->file_demo) }}" alt="image" />
                                                </button>
                                            </div>

                                            @endif

                                        @else

                                            <div class="symbol symbol-50 symbol-lg-150 gambar">
                                                <button onclick="template({{ $t->id }})" class="btn symbol symbol-50 symbol-lg-150 mt-6" style="border: none">
                                                    <img src="{{ asset($t->file_demo) }}" alt="image" />
                                                </button>
                                            </div>

                                        @endif

                                    @endforeach

                                </div>

                                {{-- @endif --}}
                            </div>

                            <!--Begin::Pagination -->
                            <div class="card-footer d-flex justify-content-between">
                                {{ $template->links()}}
                            </div>
                            <!--End::Pagination -->

                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch overflow-hidden">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Preview</h3>
                                </div>
                            </div>

                            @foreach ($pengguna as $p)

                            <div class="card-body login login-5 login-signin-on col" align="center" id="kt_login" >
                                
                                {{-- // Preview Kartu  --}}

                                <div class="position-relative overflow-hidden">

                                    {{-- <div id="id_card_1" class="tabcontent">

                                        @if($previewDesain->template_id == null)
                                            <div class="container">
                                                <div class="image-section">
                                                    <img src="{{ asset('assets/media/desain/DD/Demo1-B.png') }}" id="template" alt="">
                                                </div>

                                                <div class="section-kartu-nama">
                                                    <img src="{{ asset('assets/media/desain/DKN/C1-1-B.png') }}" id="kartu_nama" alt="">
                                                </div>
                                                
                                                <div class="section-kartu-nama-belakang">
                                                    <img src="{{ asset('assets/media/desain/DKN/C1-2-A.png') }}" id="kartu_nama_belakang" alt="">
                                                </div>

                                                <div class="text-section" align="center">
                                                    <h5 id="nama-id" class="text fw-bold mt-2"><bold>{{ $p->no_id }}</bold></h5>
                                                    <p id="no-id">{{ $p->no_id }}</p>
                                                    <img id="profile-img" src="{{ asset($p->foto) }}"  alt="image" />
                                                    <h4 style="margin:auto; font-size: 30px;" class="profile-nama mt-5">{{ $p->nama }}</h4>
                                                    <p id="profile-jabatan" class="mx-auto"> {{ $p->jabatan }}</p>
                                                    <div id="detail-info-app">
                                                        <p id="profile-telp">0{{ $p->telepon }}</p>
                                                        <p id="profile-email">{{ $p->email }}</p>
                                                        <p id="profile-tanggal">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    </div>
                                                    
                                                        @foreach ($lembaga as $l)
                                                        <div id="logo-lembaga">
                                                            <img src="{{ asset($l->foto) }}" id="logo-lembaga" alt="Avatar">
                                                        </div>
                                                        <div id="detail-lembaga-app">
                                                            <p id="profile-telepon">0{{ $l->telepon }}</p>
                                                            <p id="profile-alamat-lembaga">{{ $l->alamat }}</p>
                                                            <p id="profile-email-lembaga">{{ $l->email }}</p>
                                                            <p id="profile-website-lembaga">{{ $l->website }}</p>
                                                        </div>
                                                        @endforeach
                                                    <div id="qrcode">
                                                        {!! QrCode::size(145)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                                                    </div>
                                                </div>
                                                
                                                // Kartu Nama
/
                                                <div class="text-section-card" >
                                                    <img id="profile-img-card" src="{{ asset($p->foto) }}"  alt="image" />
                                                    <h4 style="font-size: 18px;" class="profile-nama-card">{{ $p->nama }}</h4>
                                                    <p id="profile-jabatan-card" class="mx-auto"> {{ $p->jabatan }}</p>
                                                    <div id="detail-card">
                                                        <p id="profile-telp-card">0{{ $p->telepon }}</p>
                                                        <p id="profile-email-card">{{ $p->email }}</p>
                                                        <p id="profile-tanggal-card">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    </div>
                                                    <div id="qrcode-card">
                                                        {!! QrCode::size(50)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                                                    </div>
 
                                                    @foreach ($lembaga as $l)
                                                        <img src="{{ asset($l->foto) }}" id="logo-lembaga-card" alt="Avatar">

                                                        <div id="detail-lembaga-card">
                                                            <p id="profile-telepon">0{{ $l->telepon }}</p>
                                                            <p id="profile-alamat-lembaga">{{ $l->alamat }}</p>
                                                            <p id="profile-email-lembaga">{{ $l->email }}</p>
                                                            <p id="profile-website-lembaga">{{ $l->website }}</p>
                                                        </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>

                                        @else

                                            <div class="container">
                                                <div class="image-section">
                                                    <img src="{{ asset($previewDesain->template->file_kartu_app) }}" id="template" alt="">
                                                </div>

                                                <div class="section-kartu-nama">
                                                    <img src="{{ asset($previewDesain->template->file_kartu_nama1) }}" id="kartu_nama" alt="">
                                                </div>
                                                
                                                <div class="section-kartu-nama-belakang">
                                                    <img src="{{ asset($previewDesain->template->file_kartu_nama2) }}" id="kartu_nama_belakang" alt="">
                                                </div>

                                                <div class="text-section" align="center">
                                                    <h5 id="nama-id" class="text fw-bold mt-2"><bold>{{ $p->no_id }}</bold></h5>
                                                    <p id="no-id">{{ $p->no_id }}</p>
                                                    <img id="profile-img" src="{{ asset($p->foto) }}"  alt="image" />
                                                    <h4 style="margin:auto; font-size: 30px;" class="profile-nama mt-5">{{ $p->nama }}</h4>
                                                    <p id="profile-jabatan" class="mx-auto"> {{ $p->jabatan }}</p>
                                                    <div id="detail-info-app">
                                                        <p id="profile-telp">0{{ $p->telepon }}</p>
                                                        <p id="profile-email">{{ $p->email }}</p>
                                                        <p id="profile-tanggal">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    </div>
                                                    
                                                        @foreach ($lembaga as $l)
                                                        <div id="logo-lembaga">
                                                            <img src="{{ asset($l->foto) }}" id="logo-lembaga" alt="Avatar">
                                                        </div>
                                                        <div id="detail-lembaga-app">
                                                            <p id="profile-telepon">0{{ $l->telepon }}</p>
                                                            <p id="profile-alamat-lembaga">{{ $l->alamat }}</p>
                                                            <p id="profile-email-lembaga">{{ $l->email }}</p>
                                                            <p id="profile-website-lembaga">{{ $l->website }}</p>
                                                        </div>
                                                        @endforeach
                                                    <div id="qrcode">
                                                        {!! QrCode::size(145)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                                                    </div>
                                                </div>
                                                
                                                // Kartu Nama

                                                <div class="text-section-card" >
                                                    <img id="profile-img-card" src="{{ asset($p->foto) }}"  alt="image" />
                                                    <h4 style="font-size: 18px;" class="profile-nama-card">{{ $p->nama }}</h4>
                                                    <p id="profile-jabatan-card" class="mx-auto"> {{ $p->jabatan }}</p>
                                                    <div id="detail-card">
                                                        <p id="profile-telp-card">0{{ $p->telepon }}</p>
                                                        <p id="profile-email-card">{{ $p->email }}</p>
                                                        <p id="profile-tanggal-card">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                                                    </div>
                                                    <div id="qrcode-card">
                                                        {!! QrCode::size(50)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                                                    </div>

                                                    @foreach ($lembaga as $l)
                                                        <img src="{{ asset($l->foto) }}" id="logo-lembaga-card" alt="Avatar">

                                                        <div id="detail-lembaga-card">
                                                            <p id="profile-telepon">0{{ $l->telepon }}</p>
                                                            <p id="profile-alamat-lembaga">{{ $l->alamat }}</p>
                                                            <p id="profile-email-lembaga">{{ $l->email }}</p>
                                                            <p id="profile-website-lembaga">{{ $l->website }}</p>
                                                        </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>

                                        @endif
                                        
                                    </div> --}}

                                    {{-- <div class="wrap">
                                        <iframe id="iframe" src="{{ ('/getcard.kartusaya/'.$p->id.'/'.$p->no_id) }}" title="card" class="frame" height="500"></iframe>
                                    </div> --}}
                                    
                                    <picture class="kartusaya">
                                        <img src="{{ ('/getcard.kartusaya/'.$p->id.'/'.$p->no_id) }}" width="100%" alt="KA">
                                    </picture>

                                    <picture>
                                        <img src="{{ ('/getcard.kartusaya.depan/'.$p->id) }}" width="100%" alt="KD" class="mt-5">
                                    </picture>

                                    <picture>
                                        <img src="{{ ('/getcard.kartusaya.belakang/'.$p->id) }}" width="100%" alt="KB" class="mt-5">
                                    </picture>

                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between">
                                <input type="hidden" id="link" value="{{ url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id) }}">
                                <button onclick="salinLink()" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</button>
                                {{-- <button onclick="download()" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Download</button> --}}
                                <a href="{{ route('print', ['id' => $p->id]) }}" target="_blank" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Cetak</a>
                            </div>

                            @endforeach
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
        let url = HOST_URL + '/user/ubah-template/{{ $id }}/' + id;
        $.ajax({
            url: url,
            method: "GET",
            success: function(response){

                window.location.href = '/user/pengguna/{{ $id }}/show'

                // // ----- preview desain ----- //

                // // file app
                // let foto = $('#template');
                // // file kartu nama 1
                // let foto_kartu_nama = $('#kartu_nama');
                // // file kartu nama 2
                // let foto_kartu_nama_belakang = $('#kartu_nama_belakang');

                // var kartu_app = response.data[0].file_kartu_app;
                // var kartu_nama = response.data[0].file_kartu_nama1;
                // var kartu_nama_belakang = response.data[0].file_kartu_nama2;

                // foto.attr('src', kartu_app);
                // foto_kartu_nama.attr('src', kartu_nama);
                // foto_kartu_nama_belakang.attr('src', kartu_nama_belakang);

                // // ----- input desain ----- //
                // $('#pilih-desain').html(' <input type="hidden" name="template" value="'+response.data[0].id+'"> ')

            }
        });
    }

    function salinLink() {

        var inputa = document.getElementById('link');
        var inputb = document.body.appendChild(document.createElement("input"));

        inputb.value = inputa.value;
        inputb.focus();
        inputb.select();
        inputb.setSelectionRange(0, 99999);

        document.execCommand('copy');

        inputb.parentNode.removeChild(inputb);

        alert("URL Copied.");

    }
    
    function download(){
        let data = document.querySelector('.container')

        domtoimage.toPng(data)
            .then(function (dataUrl) {
                var link = document.createElement('a');
                link.download = 'my-image-name.png';
                link.href = dataUrl;
                link.click();
            });

        let data1 = document.querySelector('.container-1')

        domtoimage.toPng(data1)
            .then(function (dataUrl) {
                var link = document.createElement('a');
                link.download = 'my-image-name.png';
                link.href = dataUrl;
                link.click();
            });
    }

    $('body').on('click', '.alertPremium', function () {
        // var id = $(this).data('id');
        Swal.fire({
            title: 'Akun Anda Belum Premium!',
            text: 'Silahkan berlangganan untuk mendapatkan fitur premium!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Berlangganan!'
            // cancelButtonText: 'Batal'
        }).then((result)=>{
            if(result.isConfirmed){
                window.location.href = 'user/premium'
            }
        });
    });
    </script>

{{-- <script src="https://www.jsdelivr.com/package/npm/sweetalert2"></script> --}}

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/datatables/dom-to-image.min.js') }}"></script>
    <!--end::Page Scripts-->
@endpush