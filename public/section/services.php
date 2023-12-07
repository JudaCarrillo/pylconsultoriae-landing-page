<?php
$rutaImg = '../assets/img/logo.svg';
$rutaImgFt = '../assets/img/logo.svg';

$sectionHome = '../index.php';
$sectionAboutUs = './about-us.php';
$sectionServices  = '#services';
$sectionBlog = './blog.php';
$sectionContact = './contact.php';

$ftAbout = './about-us.php';
$ftServices = './services.php';
$ftExperience = '../index.php#experience';
$ftInit = '#services';

$classHome = '';
$classAbout = '';
$classServices = 'active';
$classBlog = '';
$classContact = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P&L Consultoría Estratégica</title>
  <!-- css / templates -->
  <link rel="stylesheet" href="../assets/css/style_comp.css?t=1701978342245" />
  <!-- css -->
  <link rel="stylesheet" href="../assets/css/style_services.css?t=1701978342245" />
  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon" />
  <!-- boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- header -->
  <?php
  require_once('../../src/components/header.php');
  ?>


  <!-- section services structure -->
  <section class="services" id="services">
    <div class="services-content">
      <div class="head">
        <div class="images">
          <img src="../assets/img/megafono.png" alt="Image de un megafono" />
        </div>

        <h1>Nuestros <span>Servicios</span></h1>
        <p>
          Nuestro equipo de trabajo está integrado por profesionales
          multidisciplinares con visión y estrategia, especializados en
          Dirección; Gestión; Arquitectura y despliegues de proyectos en ERPs
          <i> world class </i>
          y con amplios conocimientos de procesos de negocios.
        </p>
      </div>

      <div class="box-content">
        <div class="row1">
          <div class="services-box" id="one">
            <i class="bx bxs-cog"></i>
            <div class="text">
              <p><b>Implementación y Configuración Personalizada</b></p>
              <p>
                Adaptación e implementación del sistema a medida de la empresa
                para satisfacer sus necesidades y requisitos específicos
              </p>
            </div>
          </div>

          <div class="services-box" id="two">
            <i class="bx bxs-data"></i>
            <div class="text">
              <p><b>Migración de Datos y Actualizaciones</b></p>
              <p>
                Se brinda soporte para migrar datos a Microsoft Dynamics 365
                Business Central y se garantiza la actualización constante
                para aprovechar las últimas mejoras de la plataforma.
              </p>
            </div>
          </div>
        </div>

        <div class="row2">
          <div class="services-box" id="three">
            <i class="bx bxs-book-reader"></i>
            <div class="text">
              <p><b>Capacitación y Formación</b></p>
              <p>
                Ofrecemos capacitación y formación en la migración de datos a
                Microsoft Dynamics 365 Business Central.
              </p>
            </div>
          </div>

          <div class="services-box" id="four">
            <i class="bx bxs-hard-hat"></i>
            <div class="text">
              <p><b>Desarrollo de Soluciones Personalizadas</b></p>
              <p>
                Creación de soluciones y extensiones personalizadas que se
                integren perfectamente con Microsoft Dynamics 365 Business
                Central para satisfacer necesidades empresariales específicas.
              </p>
            </div>
          </div>
        </div>

        <div class="row3">
          <div class="services-box" id="five">
            <i class="bx bxs-phone"></i>
            <div class="text">
              <p><b>Soporte Técnico y Mantenimiento</b></p>
              <p>
                Proporcionar servicios de soporte continuo para resolver
                problemas, responder preguntas y mantener el sistema
                funcionando sin problemas.
              </p>
            </div>
          </div>

          <div class="services-box" id="six">
            <i class="bx bxs-compass"></i>
            <div class="text">
              <p><b>Consultoría Estratégica</b></p>
              <p>
                Asesoramiento sobre cómo aprovechar al máximo Microsoft
                Dynamics 365 Business Central para optimizar los procesos
                empresariales y mejorar la eficiencia operativa.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php
  require_once('../../src/components/footer.php');
  ?>

  <!-- js -->
<<<<<<< HEAD
  <script src="../assets/js/section.js?t=1701978342245"></script>
=======
  <script src="../assets/js/section.js?t=1701978640725"></script>
>>>>>>> refs/remotes/origin/main
</body>

</html>