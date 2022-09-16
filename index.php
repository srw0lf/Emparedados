<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Emparedados</title>


  <!-- Favicons -->
  <link href="views/resources/img/LogoEm.png" rel="icon">
  <link href="Views/resources/img/LogoEm.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="views/resources/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="views/resources/vendor/aos/aos.css" rel="stylesheet">
  <link href="views/resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="views/resources/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="views/resources/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="views/resources/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="views/resources/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="views/resources/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <a href="index.html" class="logo me-auto me-lg-0"><img src="Views/resources/img/LogoEm.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0"><a href="index.html">Emparedados</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menú</a></li> 
          <li><a class="nav-link scrollto" href="#events">Combos</a></li> 
          <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="views/templates/login.php" class="book-a-table-btn scrollto d-none d-lg-flex">Iniciar sesión</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenido a <span>Emparedados</span></h1>
          <h2> Que tan grande es tu antojo?</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menú</a>
            <a href="views/login.html" class="btn-book animated fadeInUp scrollto">Iniciar sesión</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="Views/resources/img/local.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>QUIENES SOMOS.</h3>
          <p class="fst-italic">
            Somos una empresa que busca suplir tus nesecidades gastronomicas de manera rapida con  deliciosas combinaciones y exquicitos sabores
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Personar dinamico.</li>
            <li><i class="bi bi-check-circle"></i> Siempre innovando.</li>
            <li><i class="bi bi-check-circle"></i> Enfocado a las nesecidades de nuestros clientes.</li>
          </ul>
          <p>
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menú</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-starters">Sandwich</li>
              <li data-filter=".filter-salads">Ensaladas</li>
              <li data-filter=".filter-specialty">Acompañamientos</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/boloñesa.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Sandwich boloñesa</a><span>$10.000</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich de carne molida y salsa boloñesa con vegetales y pan integral
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="views/resources/img/menu/papas.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Papas a la francesa</a><span>$3.500</span>
            </div>
            <div class="menu-ingredients">
              papas a la francesa con queso y albaca
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/pollo.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Sandwich de pollo</a><span>$10.500</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich de pollo teriyaki con vegetales y pan brioche
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/mini.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Sandwich mini</a><span>$5.800</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich pequeño con jamon, queso, vegetales y pan integral
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/personal.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Sandwich personal</a><span>$9.600</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich mediano a tu eleccion
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/grande.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Sandwich titan</a><span>$12.000</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich agrandado con ingredientes a tu eleccion
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/carne.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Sandwich de carne</a><span>$10.000</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich de carne desmenuzada con vegetales y pan integral
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="views/resources/img/menu/boloñesa.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Ensalada César</a><span>$4.000</span>
            </div>
            <div class="menu-ingredients">
              lechuga, queso, vinagre de manzana,zuno de limon,tomate
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="views/resources/img/menu/yuca.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Croquetas de yuca</a><span>$3.500</span>
            </div>
            <div class="menu-ingredients">
              cuatro dedos de yuca apanada y frita, salsa de la casa
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="views/resources/img/menu/jamon.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Sandwich de jamon</a><span>$9.000</span>
            </div>
            <div class="menu-ingredients">
              Un Sandwich de jamon de cerdo con vegetales y pan integral
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="views/resources/img/menu/tropical.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Ensalada tropical</a><span>$6.000</span>
            </div>
            <div class="menu-ingredients">
              Lechuga, jamon, piña, uvas pasas, poyo desmechado y mayonesa
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="views/resources/img/menu/espinaca.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Ensalada romana</a><span>$6.000</span>
            </div>
            <div class="menu-ingredients">
              Espinaca, lechuga, crotones, tiras de pechuga asada, tomate en cascos, ajonjolí 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="views/resources/img/menu/cebolla.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a >Aros de cebolla</a><span>$3.500</span>
            </div>
            <div class="menu-ingredients">
              Cinco aros de cebolla apanados al estilo de la casa
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

   

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Combos</h2>
          <p>Organiza tus antojos con nosotros</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="Views/resources/img/c1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Combo personal</h3>
                  <div class="price">
                    <p><span>$16.500</span></p>
                  </div>
                  <h4>
                    Disfruta tu delicioso combo personal en el cual puedes tener papas a la francesa, 
                    una gaseosa de tamaño personal y puedes escojer entre un Sandwich de boloñesa, de poyo o de carne 
                  </h4>
                  <ul>
                    <h5><i class="bi bi-check-circle"></i>Papas a la francesa</h5>
                    <h5><i class="bi bi-check-circle"></i>Sandwich boloñesa / Sandwich pollo / Sandwich carne</h5>
                    <h5><i class="bi bi-check-circle"></i>Gaseosa personal</h5>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="Views/resources/img/c2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>combo familiar</h3>
                  <h4>
                    Por la compra de dos Sandwich personales y una Ensalada ten encimamos un acompañamiento a tu eleccion
                  </h4>
                  <ul>
                    <h5><i class="bi bi-check-circle"></i>2 Sandwich personales</h5>
                    <h5><i class="bi bi-check-circle"></i>Ensalada cesar / Ensalada tropical / Ensalada romana</h5>
                    <h5><i class="bi bi-check-circle"></i>Papas a la francesa /Aros de cebolla/ Croquetas de yuca</h5>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="Views/resources/img/menu/grande.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>combo titan</h3>
                  <div class="price">
                    <p><span>$24.000</span></p>
                  </div>
                  <h4>
                    Lleva dos Sandwich titan Y te encimamos dos gaseosas personales 
                  </h4>
                  <ul>
                    <h5><i class="bi bi-check-circle"></i>2 Sandwich titan</h5>
                    <h5><i class="bi bi-check-circle"></i>2 gaseosas personales</li>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contáctanos</h2>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicacion:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horarios de apertura:</h4>
                <p>
                  Lunes a sabado:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Llamanos:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="razón" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando..</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensage</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Emparedados</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="views/resources/vendor/aos/aos.js"></script>
  <script src="views/resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="views/resources/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="views/resources/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="views/resources/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="views/resources/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="views/resources/js/main.js"></script>

</body>

</html>