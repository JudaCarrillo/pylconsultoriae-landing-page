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
$ftExperince = '#customers';
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
  <link rel="stylesheet" href="./assets/css/style_comp.css?t=1701055761211">
  <!-- css -->
  <link rel="stylesheet" href="./assets/css/style.css?t=1701055761211" />
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

  <span id="customers"></span>
  <!-- section customer structure -->
  <section class="customers" id="home">
    <div class="customers-content">
      <h1>Nuestra Experiencia</h1>
    </div>
  </section>

  <!-- footer -->
  <?php
  require_once('../src/components/footer.php');
  ?>

  <!-- scroll reveal / js -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- js -->
  <script src="./assets/js/main.js?t=1701055761211"></script>
</body>

</html>