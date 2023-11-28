<?php
$rutaImg = './assets/img/logo.svg';
$rutaImgFt = './assets/img/logo.svg';

$sectionHome = '#home';
$sectionAboutUs = './section/about-us.php';
$sectionServices  = './section/services.php';
$sectionBlog = './section/blog.php';
$sectionContact = './section/contact.php';

$ftAbout = './section/about-us.php';
$ftServices = './section/services.php';
$ftExperince = '#experience';
$ftInit = '#home';

$classHome = 'active';
$classAbout = '';
$classServices = '';
$classBlog = '';
$classContact = '';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P&L Consultoría Estratégica</title>
  <!-- css / templates -->
  <link rel="stylesheet" href="./assets/css/style_comp.css?t=1701179769620">
  <!-- css -->
  <link rel="stylesheet" href="./assets/css/style.css?t=1701179769620" />
  <!-- favicon -->
  <link rel="shortcut icon" href="./assets/img/logo.svg" type="image/x-icon" />
  <!-- boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- header structure -->
  <?php
  require_once('../src/components/header.php');
  ?>


  <!-- home section structure-->
  <section class="home" id="home">
    <div class="home-content">
      <h1>P&L Consultoría Estratégica</h1>
      <p>
        Consultora en creciente expansión, con una sólida trayectoria en la
        prestación de servicios de desarrollo de software a medida y de
        implementación y outsourcing de desarrollos embebidos en el ERP
        Dynamics NAV y Dynamics 365 Business Central SaaS.

        <br />
        <br />

        Actualmente estamos apoyando a clientes y partners de Microsoft de los
        países:
        <b>Chile, España, Bolivia, México, Paraguay y Perú.</b>
      </p>

      <div class="btn-box">
        <a href="./section/about-us.php" class="btn" title="Información sobre P&L">Nosotros</a>
        <a href="./section/contact.php" class="btn" title="Formulario de Contacto">Contactanos</a>
      </div>

      <div class="home-sci">
        <a href="https://www.linkedin.com/company/pyl-consultor%C3%ADa/" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section>

  <img class="vector" src="./assets/img/vector2.svg" alt="" />

  <div class="prueba">
    <div class="experience">
      <div class="box-experience">
        <i>Años de Experiencia</i>
        <br />
        <b class="num" data-val="12">+00</b>
      </div>
      <div class="box-experience">
        <i>Experiencia en Países</i>
        <br />
        <b class="num" data-val="6">0</b>
      </div>
      <div class="box-experience">
        <i>Clientes en D365BC</i>
        <br />
        <b class="num" data-val="28">+00</b>
      </div>
    </div>
  </div>

  <span id="experience"></span>
  <!-- section customer structure -->
  <section class="experience-customers" id="home">
    <div class="experience-content">
      <h1>Nuestra Experiencia</h1>

      <div class="img-mapa">
        <img src="./assets/img/mapa.png" alt="Mapa de nuestra experiencia">
      </div>


      <div class="slider" id="companies-slider">
        <div class="title-slider">
          <h2>Compañías usuarias</h2>
        </div>

        <div class="container">
          <div class="wrapper">
            <div class="wrapper-holder">
              <div class="slider-img" id="slider-img-1"></div>
              <div class="slider-img" id="slider-img-2"></div>
              <div class="slider-img" id="slider-img-3"></div>
              <div class="slider-img" id="slider-img-4"></div>

              <div class="slider-img" id="slider-img-5"></div>
              <div class="slider-img" id="slider-img-6"></div>
              <div class="slider-img" id="slider-img-7"></div>
              <div class="slider-img" id="slider-img-8"></div>

              <div class="slider-img" id="slider-img-9"></div>
              <div class="slider-img" id="slider-img-10"></div>
              <div class="slider-img" id="slider-img-11"></div>
              <div class="slider-img" id="slider-img-12"></div>

              <div class="slider-img" id="slider-img-13"></div>
              <div class="slider-img" id="slider-img-14"></div>
              <div class="slider-img" id="slider-img-15"></div>
              <div class="slider-img" id="slider-img-16"></div>

              <div class="slider-img" id="slider-img-17"></div>
              <div class="slider-img" id="slider-img-18"></div>
              <div class="slider-img" id="slider-img-19"></div>
              <div class="slider-img" id="slider-img-20"></div>

              <div class="slider-img" id="slider-img-21"></div>
              <div class="slider-img" id="slider-img-22"></div>
              <div class="slider-img" id="slider-img-23"></div>
              <div class="slider-img" id="slider-img-24"></div>
              <div class="slider-img" id="slider-img-25"></div>
              <div class="slider-img" id="slider-img-26"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider" id="partners-slider">
        <div class="title-slider">
          <h2>Partners</h2>
        </div>

        <div class="container">
          <div class="wrapper">
            <div class="wrapper-holder">

              <div class="slider-img" id="img-1"></div>
              <div class="slider-img" id="img-2"></div>
              <div class="slider-img" id="img-3"></div>
              <div class="slider-img" id="img-4"></div>
              <div class="slider-img" id="img-5"></div>
              <div class="slider-img" id="img-6"></div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- footer -->
  <?php
  require_once('../src/components/footer.php');
  ?>

  <!-- scroll reveal / js -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- js -->
  <script src="./assets/js/main.js?t=1701179769620"></script>
</body>

</html>