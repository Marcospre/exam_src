<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La web de los zoos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vista/assets/img/favicon.png" rel="icon">
  <link href="vista/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vista/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vista/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vista/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.1.1
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="vista/assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Zoopolis</h1>
      </a>


      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Bienvenido a Zoopolis</h2>
            <p>Contribuimos a la protección del ambiente, promoviendo el conocimiento y sensibilización sobre la biodiversidad mediante</p>

            <a class="cta-btn" href="c_crearZoo.php">Agregar zoo</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
        
        <!-- TODO examen una foto por cada zoo -->
        <!-- ini zoo Gallery Item -->
        <?php foreach ($zoos as $zoo){
           echo ' <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="'.$zoo['foto'].'" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- TODO examen el link debe abrir la info del zoo -->
                  <a href="c_verZoo.php?idZoo='.$zoo['id'].'" class="details-link"><i class="bi bi-eye"></i></a>
                </div>
              </div>
            </div>';
            }?>
            <!-- End zoo Gallery Item -->

       
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="vista/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vista/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vista/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vista/assets/vendor/aos/aos.js"></script>
  <script src="vista/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="vista/assets/js/main.js"></script>

</body>

</html>