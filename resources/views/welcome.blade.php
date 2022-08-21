<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">

    <!--begin::Page Custom Styles(used by this page)-->
    {{-- <link href="{{ asset('assets/css/pages/wizard/wizard-6.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/> --}}
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    {{-- <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css" /> --}}
    <!--end::Global Theme Styles-->

    <title>Get Card</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand">Get Card</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="/login">Masuk</a>
                <a class="nav-item nav-link" href="/register">Daftar</a>
                </div>
            </div> 
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Buat <span>kartu namamu</span> sendiri untuk <span>mempermudah</span> segala urusan.</h1>
            <!-- <a href="" class="btn btn-primary button">Fitur Get Card</a> -->
        </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">
        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ asset('assets/media/img/login-1.png') }}" alt="Employee" class="float-left">
                        <h4>Akses</h4>
                        <p>Memiliki akses masuk atau daftar akun.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('assets/media/img/input-1.png') }}" alt="High Res" class="float-left">
                        <h4>Data</h4>
                        <p>Membuat data diri dan mengisi perusahaan.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('assets/media/img/card-1.png') }}" alt="Security" class="float-left">
                        <h4>Selesai</h4>
                        <p>Memilih desain kartu sesuai selera.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Panel -->

        <!-- Working Space-->
        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="{{ asset('assets/media/img/preview1-ex.png') }}" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>Pilih sesuai <span>seleramu!</span></h3>
                <p>Get Card menyediakan berbagai desain kartu nama untuk Anda gunakan.</p>
                <!-- <a href="" class="btn btn-primary button">Galeri</a> -->
            </div>
        </div>

        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="{{ asset('assets/media/img/preview2-ex.png') }}" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>Buat <span>sebanyak</span> mungkin!</h3>
                <p>Get Card juga menyediakan fitur agar Anda dapat membuat kartu nama lebih dari satu.</p>
                <!-- <a href="" class="btn btn-primary button">Galeri</a> -->
            </div>
        </div>
        <!-- End Working Space-->

        <!-- Testimonial -->
        <section class="testimonial">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>"Temukan partner dimanapun Anda berada dengan Get Card"</h5>
                </div>
            </div>

            <!-- <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center d-flex">
                    <figure class="figure">
                        <img src="{{ asset('assets/media/img/img1.png') }}" class="figure-img img-fluid rounded-circle" alt="Img 1">
                    </figure>
                    <figure class="figure">
                        <img src="{{ asset('assets/media/img/img2.png') }}" class="figure-img img-fluid rounded-circle utama" alt="Img 2">
                        <figcaption class="figure-caption">
                            <h5>Sunny Ye</h5>
                            <p>Designer</p>
                        </figcaption>
                    </figure>
                    <figure class="figure">
                        <img src="{{ asset('assets/media/img/img3.png') }}" class="figure-img img-fluid rounded-circle" alt="Img 3">
                    </figure>
                </div>
            </div> -->
        </section>
        <!-- End Testimonial -->

        <!-- Footer -->
        <!-- <div class="row footer">
            <div class="col text-center">
                <p>2022 Get Card</p>
            </div>
        </div> -->
        <!-- End Footer -->

        <!-- Footer-->
        <div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column " id="kt_footer">
            <!--begin::Container-->
            <div
                class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted mr-2 font-footer-2022">2022&copy;</span>
                    <a href="http://keenthemes.com/metronic" target="_blank"
                        class="text-dark-75 text-hover-primary font-footer">GetCard</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Nav-->
                <div class="nav nav-dark order-1 order-md-2">
                    <a href="http://keenthemes.com/metronic" target="_blank"
                        class="text-dark-75 px-3 text-hover-primary font-footer">About</a>
                    <a href="http://keenthemes.com/metronic" target="_blank"
                        class="text-dark-75 px-3 text-hover-primary font-footer">Team</a>
                    <a href="http://keenthemes.com/metronic" target="_blank"
                        class="text-dark-75 px-3 text-hover-primary font-footer">Contact</a>
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Container-->
        </div>
        <!-- End Footer-->
    </div>
    <!-- End Container -->

</body>

</html>
























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
