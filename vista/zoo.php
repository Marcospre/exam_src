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
<link href="vista/assets/img/apple-touch-icon.png"
	rel="apple-touch-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
	rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="vista/assets/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link href="vista/assets/vendor/bootstrap-icons/bootstrap-icons.css"
	rel="stylesheet">
<link href="vista/assets/vendor/swiper/swiper-bundle.min.css"
	rel="stylesheet">
<link href="vista/assets/vendor/glightbox/css/glightbox.min.css"
	rel="stylesheet">
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
		<div
			class="container-fluid d-flex align-items-center justify-content-between">

			<a href="index.php"
				class="logo d-flex align-items-center  me-auto me-lg-0"> <!-- Uncomment the line below if you also wish to use an image logo -->
				<i class="bi bi-camera"></i>
				<h1>Zoopolis</h1>
			</a>

			<div class="header-social-links">
				<a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <a
					href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a
					href="#" class="instagram"><i class="bi bi-instagram"></i></a> <a
					href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
			</div>
			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i> <i
				class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

		</div>
	</header>
	<!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">
      <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Bienvenido a Zoopolis</h2>
            <p>Contribuimos a la protección del ambiente, promoviendo el conocimiento y sensibilización sobre la biodiversidad mediante</p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    
        <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="//TODO examen foto" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Bienvenidos al zoo <?php echo $zoo['nombre']?></h2>
            <p class="fst-italic py-3">
              
            </p>
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span><?php echo $zoo['ciudad']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Direccion:</strong> <span><?php echo $zoo['direccion']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Pais:</strong> <span><?php echo $zoo['pais']?></span></li>
                </ul>
              </div>
              
            </div>
            <p class="py-3">
             <?php echo $zoo['descripcion']?>
            </p>
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li><a href="c_añadirAnimal.php?zoo_id=<?php echo $zoo['id']?>"><i class="bi bi-chevron-right"></i><strong>Añadir Animal</strong></a></li>
                  
                </ul>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Nuestros Animales</h2>
          <p>Mirad que contentos viven</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">
          
          
          <!-- //TODO un card por cada animal -->
           <!-- Ini card animal item -->
           <?php 
           if($animales != null){
               foreach ($animales as $animal){
                   echo ' <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        
                        <div class="profile mt-auto">
                          <img src="'.$animal['foto'].'" class="testimonial-img" alt="">
                          <h3>'.$animal['nombre'].'</h3>
                          <h4>'.$animal['nombre_cientifico'].'</h4>
                        </div>
                        <p class="mt-2">
                          '.$animal['descripcion'].'
                        </p>
                      </div>
                    </div>';
               }
           }
            ?><!-- End card animal item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

</main><!-- end main -->


  <!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>PhotoFolio</span></strong>. All
				Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#"
		class="scroll-top d-flex align-items-center justify-content-center"><i
		class="bi bi-arrow-up-short"></i></a>

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