<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Kartu Nama | Get Card</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Advanced search datatables examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    
    <link href="{{ asset('assets\css\pages\template\kartu-nama.print.css') }}" rel="stylesheet" type="text/css"/>
    
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

</head>
<!--end::Head-->

<!--begin::Body-->
<body onload="window.print()">
    
    @foreach ($pengguna as $p)

    <div class="">
        @if($desainKartu->template_id == null)

        <div class="">
            <div class="section-kartu-nama" style="width:478.5px; height:292.5px; background: url('assets/media/desain/DKN/C1-1-B.png') no-repeat; background-size:cover; ">
                <img id="profile-img-card" src="{{ asset($p->foto) }}"  alt="image" />
                <h4 style="font-size: 21px;" class="profile-nama-card">{{ $p->nama }}</h4>
                <p id="profile-jabatan-card" class="mx-auto">{{ $p->jabatan }}</p>
                <div id="detail-card">
                    <p id="profile-telp-card">0{{ $p->telepon }}</p>
                    <p id="profile-email-card">{{ $p->email }}</p>
                    <p id="profile-tanggal-card">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                </div>
                <div id="qrcode-card">
                    {!! QrCode::size(88)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                </div>
            </div>
            
            <div class="section-kartu-nama-belakang" style="width:478.5px; height:292.5px; background: url('assets/media/desain/DKN/C1-2-A.png') no-repeat; background-size:cover; ">
            
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

        <div class="">
            <div class="section-kartu-nama" style="width:478.5px; height:292.5px; background: url({{ asset($desainKartu->template->file_kartu_nama1)  }}) no-repeat; background-size:cover; ">
                <img id="profile-img-card" src="{{ asset($p->foto) }}"  alt="image" />
                <h4 style="font-size: 21px;" class="profile-nama-card">{{ $p->nama }}</h4>
                <p id="profile-jabatan-card" class="mx-auto">{{ $p->jabatan }}</p>
                <div id="detail-card">
                    <p id="profile-telp-card">0{{ $p->telepon }}</p>
                    <p id="profile-email-card">{{ $p->email }}</p>
                    <p id="profile-tanggal-card">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                </div>
                <div id="qrcode-card">
                    {!! QrCode::size(88)->generate(url('/getcard.kartusaya/'.$p->id.'/'.$p->no_id)); !!}
                </div>
            </div>
            
            <div class="section-kartu-nama-belakang" style="width:478.5px; height:292.5px; background: url({{ asset($desainKartu->template->file_kartu_nama2)  }}) no-repeat; background-size:cover; ">
            
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
    </div>

    @endforeach

</body>
<!--end::Body-->

