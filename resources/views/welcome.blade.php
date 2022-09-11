<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Card</title>

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->
  <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />


  <!-- 
    - custom css link
  -->
  {{-- <link rel="stylesheet" href="./assets/css/style.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{ asset('assets/media/logos/GC.png') }}" alt="Landio logo" width="40px">
      </a> 

      <a class="navbar-brand"></a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <!-- <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Features</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact Us</a>
          </li> -->

        </ul>

        <div class="header-actions">
          <a href="/login" class="header-action-link">Masuk</a>

          <a href="/register" class="header-action-link">Daftar</a>
        </div>
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Dapatkan Kartu Nama</h1>

            <p class="hero-text">
              Buatlah kartu namamu sendiri untuk mempermudah segala urusan.
            </p>
          </div>

          <figure class="hero-banner">
            <img src="{{ asset('assets/media/img/scan.png') }}" alt="Hero image">
          </figure>

        </div>
      </section>





      <!-- 
        - ABOUT
      -->

      <section class="about">
        <div class="container">

          <div class="about-content">

            <!-- <div class="about-icon">
              <ion-icon name="cube"></ion-icon>
            </div> -->

            <h2 class="h2 about-title">Mengapa Memilih GetCard ?</h2>

            <p class="about-text">
              <!-- Nam libero tempore cum soluta as nobis est eligendi optio cumque nihile impedite quo minus id quod maxime. -->
              GetCard mengutamakan kepuasan pengguna, sehingga segala fitur yang diberikan telah dipertimbangkan dengan baik.
            </p>

            <!-- <button class="btn btn-outline">Learn More</button> -->

          </div>

          <ul class="about-list">

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Mudah Digunakan</h3>

                <p class="card-text">
                  GetCard memiliki fitur yang mudah untuk digunakan secara umum.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="trending-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Pembaruan Template</h3>

                <p class="card-text">
                  Selalu memberikan pembaruan template yang dapat digunakan.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark"></ion-icon>
                </div>

                <h3 class="h3 card-title">Tanpa Batas</h3>

                <p class="card-text">
                  Buat kartu namamu sebanyak mungkin dengan batasan tertentu.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="repeat"></ion-icon>
                </div>

                <h3 class="h3 card-title">Berbagi Kartu Nama</h3>

                <p class="card-text">
                  Menyediakan fitur scan Code kartu untuk saling berbagi ke sesama pengguna.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - FEATURES
      -->

      <!-- <section class="features" id="features">
        <div class="container">

          <h2 class="h2 section-title">Awesome Features</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="./assets/images/features-img-1.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>CREATIVE FEATURES</span>
              </p>

              <h3 class="features-content-title">
                Build <strong>community</strong> & <strong>conversion</strong> with our suite of <strong>social
                  tool</strong>
              </h3>

              <p class="features-content-text">
                Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et
                voluptates repudiandae
                sint molestiae non recusandae itaque.
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <ion-icon name="layers-outline"></ion-icon>

                  <p>Donec pede justo fringilla vel nec.</p>
                </li>

                <li class="features-list-item">
                  <ion-icon name="megaphone-outline"></ion-icon>

                  <p>Cras ultricies mi eu turpis hendrerit fringilla.</p>
                </li>

              </ul>

              <div class="btn-group">
                <button class="btn btn-primary">Read More</button>

                <button class="btn btn-secondary">Buy Now</button>
              </div>

            </div>

          </div>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="./assets/images/features-img-2.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>CREATIVE FEATURES</span>
              </p>

              <h3 class="features-content-title">
                We do the work you <strong>stay focused</strong> on <strong>your customers.</strong>
              </h3>

              <p class="features-content-text">
                Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et
                voluptates repudiandae
                sint molestiae non recusandae itaque.
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <ion-icon name="rocket-outline"></ion-icon>

                  <p>Donec pede justo fringilla vel nec.</p>
                </li>

                <li class="features-list-item">
                  <ion-icon name="wifi-outline"></ion-icon>

                  <p>Cras ultricies mi eu turpis hendrerit fringilla.</p>
                </li>

              </ul>

              <div class="btn-group">
                <button class="btn btn-primary">Read More</button>

                <button class="btn btn-secondary">Buy Now</button>
              </div>

            </div>

          </div>

        </div>
      </section> -->





      <!-- 
        - BLOG
      -->

      <section class="blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Ringkas GetCard</h2>

          <p class="section-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="{{ asset('assets/media/img/banner-3.png') }}" alt="Akses Masuk">
                </figure>

                <h3 class="blog-title">Memiliki Akses Masuk</h3>

                <p class="blog-text">
                  Pastikan Anda memiliki Akun untuk mengakses GetCard. Jika belum, dapat melakukan pendaftaran Akun.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="{{ asset('assets/media/img/banner-1.png') }}" alt="Data Perusahaan">
                </figure>

                <h3 class="blog-title">Mengisi Data Perusahaan</h3>

                <p class="blog-text">
                  Masukkan data Perusahaan yang akan digunakan sebagai identitas.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="{{ asset('assets/media/img/banner-2.png') }}" alt="Data Kartu">
                </figure>

                <h3 class="blog-title">Mengisi Data Kartu</h3>

                <p class="blog-text">
                  Masukkan data Kartu yang berisi biodata pengguna dengan teliti. Anda juga dapat membuat data lebih dari satu.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>


  <!-- 
    - FOOTER
  -->

  <footer>

    <!-- <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>
        
      </div>
    </div> -->

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2022 <a href="">GetCard</a>. All Right Reserved
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>