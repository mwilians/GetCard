@extends('layouts.user')

@section('title', 'My Card')

@section('content')

@include('sweetalert::alert')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        Kartu Saya </h5>
                    <!--end::Title-->

                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                    </div>
                    <!--end::Separator-->

                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ count($pengguna) }} Data</span>
                    </div>
                    <!--end::Search Form-->
                </div>
                <!--end::Details-->

                {{-- @if(Session::has('error'))
                    <div>
                        <span class="text-danger">Import Error!</span>
                    </div>
                @elseif(Session::has('success'))
                <div>
                    <span class="text-success">Import Berhasil!</span>
                </div>
                @elseif(Session::has('gagal'))
                <div>
                    <span class="text-warning">Import Gagal!</span>
                </div>
                @endif --}}

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->

                    @if(count($pengguna) >= 10)

                    <a class="btn btn-light-primary font-weight-bolder mr-2 premium">
                        Import
                    </a>

                    <a class="btn btn-primary font-weight-bolder premium">
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
                        </span>	Tambah Data
                    </a>
                    
                    @else 

                    <a href="" class="btn btn-light-primary font-weight-bolder mr-2" data-toggle="modal" data-target="#import">
                        Import
                    </a>

                    <a href="user/pengguna-add" class="btn btn-primary font-weight-bolder">
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
                        </span>	Tambah Data
                    </a>

                    @endif
                    <!--end::Button-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->

        <!-- begin::Modal Import -->
        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ url('user/import/pengguna') }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">

                            @csrf

                            Gunakan template yang telah disediakan untuk dapat menggunakan fitur import.

                            <div>

                                <a target="_blank"

                                    href="https://docs.google.com/spreadsheets/d/1ezQ1RQHJaErZObzfhxL_P-ck3ndwXSFlGh1hlrmfYFo/edit?usp=sharing"

                                    class="btn btn-primary btn-sm font-weight-bold mt-3 mb-10">Download Template</a>

                            </div>

                            <div class="form-group row">
                                <label class="col-3">File</label>

                                <div class="col-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" accept=".csv,.xlsx" required>
                                        <label class="custom-file-label form-control form-control-solid">.csv atau .xlsx</label>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::Modal Import -->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container ">
                <!--begin::Card-->
                <div class="card card-custom gutter-b mb-7" id="card-info">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->

                <br>

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        </div>
                        <!--end: Datatable-->
                    </div>
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
        // premium function
        $('body').on('click', '.premium', function () {
            Swal.fire({
                title: 'Data Kartu Telah Mencapai Limit!',
                text: 'Upgrade ke Premium!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FFA800',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Upgrade Premium!!'
            }).then((result)=>{
                if(result.isConfirmed){
                    window.location = "{{ url('user/premium') }}"
                }
            })
        });
    </script>

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
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