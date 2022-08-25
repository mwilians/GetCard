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

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    {{-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        /* Card 1 */

        .container{
            display: grid;
            width: 100%;
            overflow: hidden;
            position: relative;
            grid-template-areas: "main";
            font-family: 'Josefin Sans', sans-serif;
        }

        .container img{
            width: 100%;
        }

        .image-section{
            grid-area: main;
        }

        .text-section{
            grid-area: main;
            position: relative;
        }

        #nama-id{
            font-size: 30px;
        }
            
        #no-id{
            font-size: 20px;
        }

        #profile-img{
            position: relative;
            width: 140px;
            height: 140px;
            margin-top: -3%;
            margin-left: 13px;
            border-radius: 50%;
        }

        .profile-nama{
            margin-top: 20px;
        }

        #profile-jabatan{
            margin-top: 13px;
            font-size: large;
            color: white;
        }

        #detail-info-app{
            font-size: 18px;
            position: relative;
            top: 0rem;
        }

        #detail-lembaga-app{
            /* font-size: 18px;
            position: relative;
            top: -4rem; */

            font-size: 18px;
            position: absolute;
            top: 39rem;
            left: 1.2rem;
        }

        #profile-telp{
            margin-top: 30px;
        }

        #profile-email{
            margin-top: -5%;
        }

        #profile-tanggal{
            margin-top: -5%;
            /* color: white; */
        }

        #logo-lembaga{
            /* position: relative;
            margin-top: 25px;
            width: 120px; */

            position: absolute;
            top: 18rem;
            left: 5rem;
            width: 40%;
        }

        #profile-telepon{
            margin-top: 35px;
        }

        #profile-alamat-lembaga{
            margin-top: -5%;
            width: 285px;
        }

        #profile-email-lembaga{
            margin-top: -5%;
        }

        #profile-website-lembaga{
            margin-top: -5%;
        }

        #qrcode{
            /* position: relative;
            left: 0.45rem;
            bottom: 1.6rem; */

            position: absolute;
            left: 6.58rem;
            bottom: 36.5rem;
        }

        .active{
            display: block !important;
        }

        .container-1{
            display: grid;
            width: 340px;
            overflow: hidden;
            position: relative;
            margin-top: 30px;
            grid-template-areas: "main";
            font-family: 'Josefin Sans', sans-serif;
        }

        .container-1 img{
            width: 100%;
        }

        #id_card_2{
            margin-top: 100px;
        }

        .section-kartu-nama{
            grid-area: main;
            margin-top: 940px;
        }

        .section-kartu-nama-belakang{
            grid-area: main;
            margin-top: 1155px;
        }




        /* Card 2 */

        .text-section-card{
            grid-area: main;
            position: relative;
        }

        #profile-img-card{
            position: relative;
            width: 5rem;
            margin-top: 949px;
            margin-left: 78px;
            border-radius: 50%;
        }

        .profile-nama-card{
            position: relative;
            top: 0.6rem;
            left: 3rem;
        }

        #profile-jabatan-card{
            text-transform: uppercase;
            position: relative;
            top: 0.1rem;
            left: 3rem;
            font-size: 11px;
            color: white;
        }

        #detail-card{
            position: relative;
            top: -1.5rem;
            left: 1rem;
            font-size: 12px;
            text-align: left;

        }

        #profile-telp-card{
            margin-top: 30px;
        }

        #profile-email-card{
            margin-top: -5%;
        }

        #profile-tanggal-card{
            margin-top: -5%;
            /* color: white; */
        }

        #qrcode-card{
            position: absolute;
            top: 81.9rem;
            left: 13.1rem;
        }

        #logo-lembaga-card{
            position: absolute;
            top: 92rem;
            left: 10.5rem;
            width: 10%;
        }

        #detail-lembaga-card{
            font-size: 12px;
            text-align: center;
            left: 1rem;
            position: absolute;
            top: 92.3rem;
        }
    </style> --}}

</head>
<!--end::Head-->

<!--begin::Body-->
<body onload="window.print();">
    
    @foreach ($pengguna as $p)

    <div class="position-relative overflow-hidden">
        <div id="id_card_1" class="tabcontent">
            <div class="container">

                {{-- <div class="section-kartu-nama">
                    <img src="{{ asset('assets/media/desain/DKN/C1-1-B.png') }}" id="kartu_nama" alt="">
                </div>
                
                <div class="section-kartu-nama-belakang">
                    <img src="{{ asset('assets/media/desain/DKN/C1-2-A.png') }}" id="kartu_nama_belakang" alt="">
                </div> --}}
        
                <div class="text-section-card" >
                    <!-- <h5 id="nama-id" class="text fw-bold mt-2"><bold>No ID :</bold></h5> -->
                    {{-- <p id="no-id">{{ $p->no_id }}</p> --}}
                    <img id="profile-img-card" src="{{ asset($p->foto) }}"  alt="image" />
                    <h4 style="font-size: 18px;" class="profile-nama-card">{{ $p->nama }}</h4>
                    <p id="profile-jabatan-card" class="mx-auto"> {{ $p->jabatan }}</p>
                    <div id="detail-card">
                        <p id="profile-telp-card">0{{ $p->telepon }}</p>
                        <p id="profile-email-card">{{ $p->email }}</p>
                        <p id="profile-tanggal-card">{{ $p->tanggal_bergabung }} / {{ $p->tanggal_berakhir }}</p>
                    </div>
                    <div id="qrcode-card">
                        {!! QrCode::size(50)->generate($p); !!}
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
        </div>
    </div>

    @endforeach

</body>
<!--end::Body-->