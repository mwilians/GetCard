<!DOCTYPE html>

<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS guru Dashboard Theme
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

<head>
    <title>PDF - List Perusahaan | Get Card</title>

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

    <style>

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: center;
            background-color: #353047;
            color: white;
        }

    </style>

</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">

    <!--begin: Datatable-->

    <div class="card gutter-b">

        <div class="card-body">

            <div class="text-center mb-15 text-dark-50 font-weight-bolder" style="text-align:center">

                List Perusahaan | {{ count($dataLembaga) }} Data <br> <br> <br>

            </div>

            <br>

            <!--begin: Datatable-->

            <style>

                tr {
                    border-bottom: 1px solid #f2f2f2;
                }

                tr:last-child {
                    border-bottom: none;
                }

            </style>

            <table class="datatable datatable-bordered datatable-head-custom" id="customers">

                <thead>

                    <tr>

                        <th class="text-muted pt-2 font-size-sm" style="">No</th>

                        <th class="text-muted pt-2 font-size-sm" style="">Perusahaan</th>

                        <th class="text-muted pt-2 font-size-sm" style="">Alamat</th>

                        <th class="text-muted pt-2 font-size-sm" style="">Telepon</th>

                        <th class="text-muted pt-2 font-size-sm" style="">Email</th>

                        <th class="text-muted pt-2 font-size-sm" style="">Website</th>

                    </tr>

                </thead>


                <tbody>

                    @php

                        $no = 1;

                    @endphp

                    @foreach ($dataLembaga as $dL)

                        <tr>

                            <td scope="No" style="text-align:center"><h4>{{ $no++ }}</h4></td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="ml-2">

                                        <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">{{ $dL->nama }}</span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="ml-2">

                                        <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">{{ $dL->alamat }}</span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="ml-2">

                                        <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">{{ $dL->telepon }}</span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="ml-2">

                                        <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">{{ $dL->email }}</span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="ml-2">

                                        <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">{{ $dL->website }}</span>

                                    </div>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

            <!--end: Datatable-->

        </div>

    </div>

    <!--end: Datatable-->

</body>

</html>