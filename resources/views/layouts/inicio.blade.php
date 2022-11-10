<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistema</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="inicio/img/favicon.png" rel="icon">
    <link href="inicio/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="inicio/vendor/aos/aos.css" rel="stylesheet">
    <link href="inicio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="inicio/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="inicio/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="inicio/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="inicio/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="inicio/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="inicio/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.8.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            {{-- <a href="(Route::has('login')" class="get-started-btn scrollto">Administrador</a> --}}


            @if (Route::has('login'))
                <div class="d-flex align-items-center justify-content-lg-between">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="get-started-btn scrollto">Acceder</a>
                    @endauth
                </div>
            @endif


        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>H. Ayuntamiento de Chignautla<span>.</span></h1>
                    <h2>Bienvenido!!</h2>
                    <h2>Por Favor Añade Un Reporte</h2>
                </div>
            </div>
            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class='bx bxs-plus-circle'></i>
                        <h3><a href="{{ route('seguridad.create') }}">Añadir Reporte Ciudadano</a></h3>
                    </div>
                </div>
            </div>
    </section><!-- End Hero -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="inicio/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="inicio/vendor/aos/aos.js"></script>
    <script src="inicio/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="inicio/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="inicio/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="inicio/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="inicio/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="inicio/js/main.js"></script>

</body>

</html>
