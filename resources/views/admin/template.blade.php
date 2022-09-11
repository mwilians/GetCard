@extends('layouts.admin')

@section('title', 'Desain Card')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Desain Card</h3>
                                </div>

                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Button-->
                                    {{-- <a href="user/desain-add" class="btn btn-primary font-weight-bolder">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" cx="9" cy="15" r="6"/>
                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>	Tambah Desain
                                    </a> --}}

                                    <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#desain">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" cx="9" cy="15" r="6"/>
                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>	Tambah Desain
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Toolbar-->
                            </div>


                            <!-- begin::Modal Tambah Desain -->
                            <div class="modal fade" id="desain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Desain</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('storeTemplate') }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">

                                                @csrf

                                                {{-- <div class="label font-weight-bold label-lg label-light-warning label-inline mb-6">Gunakan file foto dengan ukuran minimal 88Kb</div> --}}

                                                <br>
                                                
                                                <div class="form-group">
                                                    <label for="tipeHeader">File Demo
                                                        <span class="text-warning">|| Gunakan foto dengan ukuran 4200 x 4500 Pixels ||</span>
                                                    </label>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="tipeHeader" name="file_demo">
                                                        <label class="custom-file-label" for="tipeHeader">Pilih file
                                                            {{-- <div class="label label-lg label-light-warning label-inline">Gunakan foto dengan ukuran 4200 x 4500 Pixels</div> --}}
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tipeHeader">File App
                                                        <span class="text-warning">|| Gunakan foto dengan ukuran 1500 x 4500 Pixels ||</span>
                                                    </label>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="tipeHeader" name="file_kartu_app">
                                                        <label class="custom-file-label" for="tipeHeader">Pilih file
                                                            {{-- <div class="label label-lg label-light-warning label-inline toolbar">Gunakan foto dengan ukuran 1500 x 4500 Pixels</div> --}}
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tipeHeader">File Kartu Depan
                                                        <span class="text-warning">|| Gunakan foto dengan ukuran 3190 x 1950 Pixels ||</span>
                                                    </label>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="tipeHeader" name="file_kartu_nama1">
                                                        <label class="custom-file-label" for="tipeHeader">Pilih file
                                                            {{-- <div class="label label-lg label-light-warning label-inline toolbar">Gunakan foto dengan ukuran 3190 x 1950 Pixels</div> --}}
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tipeHeader">File Kartu Belakang
                                                        <span class="text-warning">|| Gunakan foto dengan ukuran 3190 x 1950 Pixels ||</span>
                                                    </label>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="tipeHeader" name="file_kartu_nama2">
                                                        <label class="custom-file-label" for="tipeHeader">Pilih file
                                                            {{-- <div class="label label-lg label-light-warning label-inline">Gunakan foto dengan ukuran 3190 x 1950 Pixels</div> --}}
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Modal Tambah Desain -->


                            <div class="card-body">
                                {{-- // Tampilan Desain --}}

                                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                    {{-- <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/DP/Preview1.png') }}" alt="image" />
                                    </div> --}}

                                    @if(count($template) == 0)

                                    <div class="d-flex justify-content-center">
                                        <p>-- Belum Ada Desain Template --</p>
                                    </div>

                                    @else

                                    <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3 desain">
                                        @foreach ($template as $t)
                                            <div class="symbol symbol-50 symbol-lg-150 gambar">
                                                <button onclick="template({{ $t->id }})" class="btn symbol symbol-50 symbol-lg-150" style="border: none"><img src="{{ asset($t->file_demo) }}" alt="image" /></button>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset($template->file_demo) }}" alt="image" />
                                    </div> --}}

                                    @endif
                                    
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

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/datatables/lembaga.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
@endpush