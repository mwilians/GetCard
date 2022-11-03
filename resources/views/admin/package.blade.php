@extends('layouts.admin')

@section('title', 'Package')

@section('content')

@include('sweetalert::alert')


<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Paket Premium</h5>
                    
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->

                <span class="svg-icon svg-icon-lg svg-icon-warning">
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
            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#tambahPaket">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span> Tambah Paket
                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row my-10">
                    <!--begin: Pricing-->
                    @foreach($package as $p)
                        
                    <div class="col-md-3 col-xxl-3 border-right-0 border-right-md border-left-md border-bottom border-bottom-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <div class="d-flex flex-center position-relative mb-25">
                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                    <svg width="175" height="200">
                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                    </svg>
                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary">
                                    <img src="{{ $p->foto }}" width="60px" height="60px" alt="">
                                </span>
                            </div>
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Rp. {{ str_replace('.00','',$p->harga) }}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">{{ $p->paket }}</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>Masa Berlaku {{ $p->masa_berlaku }} Hari</span>
                            </p>
                            <div class="d-flex justify-content-center" data-toggle="modal" data-target="#editPaket{{ $p->id }}">
                                <a class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Edit</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    {{-- <div class="col-md-3 col-xxl-3 border-right-0 border-right-md border-left-md border-bottom border-bottom-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <div class="d-flex flex-center position-relative mb-25">
                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                    <svg width="175" height="200">
                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                    </svg>
                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Safe.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M6.5,16 L7.5,16 C8.32842712,16 9,16.6715729 9,17.5 L9,19.5 C9,20.3284271 8.32842712,21 7.5,21 L6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z M16.5,16 L17.5,16 C18.3284271,16 19,16.6715729 19,17.5 L19,19.5 C19,20.3284271 18.3284271,21 17.5,21 L16.5,21 C15.6715729,21 15,20.3284271 15,19.5 L15,17.5 C15,16.6715729 15.6715729,16 16.5,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6 C3,4.8954305 3.8954305,4 5,4 Z M15.5,15 C17.4329966,15 19,13.4329966 19,11.5 C19,9.56700338 17.4329966,8 15.5,8 C13.5670034,8 12,9.56700338 12,11.5 C12,13.4329966 13.5670034,15 15.5,15 Z M15.5,13 C16.3284271,13 17,12.3284271 17,11.5 C17,10.6715729 16.3284271,10 15.5,10 C14.6715729,10 14,10.6715729 14,11.5 C14,12.3284271 14.6715729,13 15.5,13 Z M7,8 L7,8 C7.55228475,8 8,8.44771525 8,9 L8,11 C8,11.5522847 7.55228475,12 7,12 L7,12 C6.44771525,12 6,11.5522847 6,11 L6,9 C6,8.44771525 6.44771525,8 7,8 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Gratis</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Gratis</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>10 Kartu Nama</span>
                                <span>Template Gratis</span>
                            </p>
                            <div class="d-flex justify-content-center" data-toggle="modal" data-target="#editPaket">
                                <a class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Edit</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    {{-- <div class="col-md-3 col-xxl-3 border-right-0 border-right-md border-left-md border-bottom border-bottom-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <div class="d-flex flex-center position-relative mb-25">
                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                    <svg width="175" height="200">
                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                    </svg>
                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box3.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3" />
                                            <polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Rp. 20000</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Standar</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>25 Kartu Nama</span>
                                <span>Template Standar</span>
                            </p>
                            <div class="d-flex justify-content-center" data-toggle="modal" data-target="#editPaket">
                                <a class="btn btn-success text-uppercase font-weight-bolder px-15 py-3">Edit</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    {{-- <div class="col-md-3 col-xxl-3 border-right-0 border-right-md border-left-md border-bottom border-bottom-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <div class="d-flex flex-center position-relative mb-25">
                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                    <svg width="175" height="200">
                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                    </svg>
                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-danger">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Home-heart.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 C2.99998155,19.0000663 2.99998155,19.0000652 2.99998155,19.0000642 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z" fill="#000000" opacity="0.3" />
                                            <path d="M13.8,12 C13.1562,12 12.4033,12.7298529 12,13.2 C11.5967,12.7298529 10.8438,12 10.2,12 C9.0604,12 8.4,12.8888719 8.4,14.0201635 C8.4,15.2733878 9.6,16.6 12,18 C14.4,16.6 15.6,15.3 15.6,14.1 C15.6,12.9687084 14.9396,12 13.8,12 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Rp.38000</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Premium</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>75 Kartu Nama</span>
                                <span>Template Premium</span>
                            </p>
                            <div class="d-flex justify-content-center" data-toggle="modal" data-target="#editPaket">
                                <a class="btn btn-danger text-uppercase font-weight-bolder px-15 py-3">Edit</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    {{-- <div class="col-md-3 col-xxl-3 border-right-0 border-right-md border-left-md border-bottom border-bottom-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <div class="d-flex flex-center position-relative mb-25">
                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                    <svg width="175" height="200">
                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                    </svg>
                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-warning">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Star.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Rp. 299000</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Ultimate</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>1000 Kartu Nama</span>
                                <span>Seluruh Template</span>
                            </p>
                            <div class="d-flex justify-content-center" data-toggle="modal" data-target="#editPaket">
                                <a class="btn btn-warning text-uppercase font-weight-bolder px-15 py-3">Edit</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--end: Pricing-->
                </div>
                <!--end::Row-->

                <!--Begin::Modal Tambah Package -->
                <div class="modal fade" id="tambahPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>

                            <form action="{{ route('storePackage') }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">

                                    @csrf

                                    <div class="form-group">
                                        <label for="tipeHeader">Foto</label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="tipeHeader" name="foto">
                                            <label class="custom-file-label" for="tipeHeader">Pilih file</label>
                                            @error('foto')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Paket</label>
                                        <input type="text" class="form-control" placeholder="Nama Paket" name="paket"/>
                                        @error('paket')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" placeholder="Rp." name="harga" id="rupiah"/>
                                        @error('harga')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Masa Berlaku</label>
                                        <input type="number" class="form-control" placeholder="0 Hari" name="masa_berlaku"/>
                                        @error('masa_berlaku')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Tipe Template</label>
                                        <select class="form-control" name="tipe_template">
                                            <option value="">Pilih tipe:</option>
                                            <option>Gratis</option>
                                            <option>Premium</option>
                                        </select>
                                        @error('tipe_template')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="exampleTextarea">Informasi Benefit</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Benefit" name="benefit"></textarea>
                                        @error('benefit')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div> --}}
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End::Modal Tambah Package -->

                <!--Begin::Modal Edit Package -->
                @foreach($package as $p)
                    <div class="modal fade" id="editPaket{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Paket {{ $p->paket }}</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>

                                <form action="{{ url('admin/package/'.$p->id) }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        @csrf

                                        <div class="form-group">
                                            <label for="tipeHeader">Foto</label>

                                            <div>
                                                <img src="{{ asset($p->foto)}}" width="80px" height="80px /" style="margin-left: 200px; margin-bottom: 8px">
                                            </div>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="tipeHeader" name="foto">
                                                <label class="custom-file-label" for="tipeHeader">Pilih file</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input type="text" class="form-control" placeholder="Nama Paket" name="paket" value="{{ $p->paket }}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" placeholder="Rp." name="harga" id="rupiah" value="{{ str_replace('.00','',$p->harga) }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Masa Berlaku</label>
                                            <input type="number" class="form-control" placeholder="0 Hari" name="masa_berlaku" value="{{ $p->masa_berlaku }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tipe Template</label>
                                            <select class="form-control" name="tipe_template">
                                                <option value="{{ $p->tipe_template }}">{{ $p->tipe_template }}</option>
                                                <option>Gratis</option>
                                                <option>Premium</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary font-weight-bold">Edit</button>
                                </form>
                                        <form action="{{ url('admin/deletePackage/'.$p->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-light-danger font-weight-bold">Hapus</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End::Modal Edit Package -->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

@endsection

@push('script')

<script>
    var rupiah = 
    document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e)
    {
        rupiah.value = formatRupiah(this.value,
        "Rp.");
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g,"").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;

        return prefix == undefined ? rupiah: rupiah ? "Rp." + " " + rupiah:"";
    }
</script>

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/datatables/pengguna.js?v=7.0.6') }}"></script>
<!--end::Page Scripts-->
@endpush