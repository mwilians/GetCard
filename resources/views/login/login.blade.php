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
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Login | Get Card</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/classic/login-4.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="assets/media/logos/get card-02.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->

                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Masuk</h3>
                            <div class="text-muted font-weight-bold">Masukkan Detail Akun Anda:</div>
                        </div>
                        {{-- <form action="{{ route('postLogin') }}" method="POST" class="form" id="kt_login_signin_form">
                        @csrf
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
                            </div>
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Login</button>
                        </form> --}}
                        <form method="POST" action="{{ route('postLogin') }}">
                            @csrf
    
                            <div class="row mb-5">
    
                                <input id="email" type="email" class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="row mb-5">
    
                                <input id="password" type="password" class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">
                                {{ __('Masuk') }}
                            </button>

                        </form>
                        
                        <div class="mt-10">
                            <span class="opacity-70 mr-4">
                                Belum memiliki akun?
                            </span>
                            <a href="/register" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Daftar!</a>
                        </div>
                    </div>
                    <!--end::Login Sign in form-->

                    <!--begin::Login Sign up form-->
                    <div class="login-signup">
                        <div class="mb-20">
                            <h3>Daftar</h3>
                            <div class="text-muted font-weight-bold">Masukkan Detail untuk Membuat Akun:</div>
                        </div>
                        <form action="{{ route('register') }}" method="POST" class="form" id="kt_login_signup_form">
                        @csrf
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Fullname" name="name" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
                            </div>
                            <div class="form-group mb-5 text-left">
                                <div class="checkbox-inline">
                                    <label class="checkbox m-0">
                                        <input type="checkbox" name="agree" />
                                        <span></span>
                                        I Agree the <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.
                                    </label>
                                </div>
                                <div class="form-text text-muted text-center"></div>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button id="" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Daftar</button>
                                <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Batal</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign up form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->


    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576
                , "md": 768
                , "lg": 992
                , "xl": 1200
                , "xxl": 1200
            }
            , "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff"
                        , "primary": "#663259"
                        , "secondary": "#E5EAEE"
                        , "success": "#1BC5BD"
                        , "info": "#8950FC"
                        , "warning": "#FFA800"
                        , "danger": "#F64E60"
                        , "light": "#F3F6F9"
                        , "dark": "#212121"
                    }
                    , "light": {
                        "white": "#ffffff"
                        , "primary": "#F4E1F0"
                        , "secondary": "#ECF0F3"
                        , "success": "#C9F7F5"
                        , "info": "#EEE5FF"
                        , "warning": "#FFF4DE"
                        , "danger": "#FFE2E5"
                        , "light": "#F3F6F9"
                        , "dark": "#D6D6E0"
                    }
                    , "inverse": {
                        "white": "#ffffff"
                        , "primary": "#ffffff"
                        , "secondary": "#212121"
                        , "success": "#ffffff"
                        , "info": "#ffffff"
                        , "warning": "#ffffff"
                        , "danger": "#ffffff"
                        , "light": "#464E5F"
                        , "dark": "#ffffff"
                    }
                }
                , "gray": {
                    "gray-100": "#F3F6F9"
                    , "gray-200": "#ECF0F3"
                    , "gray-300": "#E5EAEE"
                    , "gray-400": "#D6D6E0"
                    , "gray-500": "#B5B5C3"
                    , "gray-600": "#80808F"
                    , "gray-700": "#464E5F"
                    , "gray-800": "#1B283F"
                    , "gray-900": "#212121"
                }
            }
            , "font-family": "Poppins"
        };

    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
    <!--end::Global Theme Bundle-->

    @include('sweetalert::alert')

    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/custom/login/login-general.js?v=7.0.6"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>

