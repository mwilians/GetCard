@extends('layouts.user')

@section('title', 'Show Card')

@section('content')
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

                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Putar Tampilan" data-card-tool="toggle">
                                    <i class="ki ki-reload icon-nm"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- // Preview ID Card --}}

                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img class="mt-5" src="{{ asset('assets/media/desain/1.png') }}" height="475" alt="image" />
                                </div> <br>
                                <div class=" mr-7 mt-lg-0 mt-3 symbol-50 symbol-lg-120">
                                    <img src="{{ asset('assets/media/desain/2.png') }}" height="475" alt="image" />
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold"><i class="ki ki-copy icon-nm"></i> Salin Link</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold"><i class="la la-print icon-dm"></i> Print</a>
                            </div>
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
                                        <img src="{{ asset('assets/media/desain/A.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/B.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/C.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/D.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/E.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/F.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/G.jpg') }}" alt="image" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-150">
                                        <img src="{{ asset('assets/media/desain/H.jpg') }}" alt="image" />
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