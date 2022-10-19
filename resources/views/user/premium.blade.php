@extends('layouts.user')

@section('title', 'Premium')

@section('content')

@include('sweetalert::alert')

<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
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
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{ $p->harga }}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">{{ $p->paket }}</h4>
                            <p class="font-size-h6 d-block font-weight-bold mb-15 d-flex flex-column">
                                <span>{{ $p->benefit }}</span>
                            </p>
                            <div class="d-flex justify-content-center">
                                {{-- <a href="user/premium/pembayaran" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Bayar</a> --}}
                                <button id="pay-button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Bayar</button>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!--end: Pricing-->

                    <form action="" id="submit_form" method="POST">
                        @csrf
                        <input type="hidden" name="json" id="json_callback">
                    </form>

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
                            <div class="d-flex justify-content-center">
                                <a href="user/pengguna" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Bayar</a>
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
                            <div class="d-flex justify-content-center">
                                <a href="user/premium/pembayaran" class="btn btn-success text-uppercase font-weight-bolder px-15 py-3">Bayar</a>
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
                            <div class="d-flex justify-content-center">
                                <a href="user/premium/pembayaran" class="btn btn-danger text-uppercase font-weight-bolder px-15 py-3">Bayar</a>
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
                            <div class="d-flex justify-content-center">
                                <a href="user/premium/pembayaran" class="btn btn-warning text-uppercase font-weight-bolder px-15 py-3">Bayar</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--end: Pricing-->
                </div>
                <!--end::Row-->
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

<!-- TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" 
    data-client-key="SB-Mid-client-ztEDdkunNS_GYGmc">
</script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
        /* You may add your own implementation here */
        console.log(result);
        send_response_to_form(result);
        },
        onPending: function(result){
        /* You may add your own implementation here */
        console.log(result);
        send_response_to_form(result);
        },
        onError: function(result){
        /* You may add your own implementation here */
        console.log(result);
        send_response_to_form(result);
        },
        onClose: function(){
        /* You may add your own implementation here */
        alert('You closed the popup without finishing the payment');
        }
    })
});

function send_response_to_form(result){
    document.getElementById('json_callback').value = JSON.stringify(result);
    $('#submit_form').submit();
}
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