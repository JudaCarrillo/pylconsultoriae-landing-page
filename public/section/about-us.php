<?php
$rutaImg = '../assets/img/logo.svg';
$rutaImgFt = '../assets/img/logo.svg';
$rutaLogo = '../index.php#carouselExampleAutoplaying';

$sectionHome = '../index.php';
$sectionAboutUs = '#about-us';
$sectionServices  = './services.php';
$sectionBlog = './blog.php';
$sectionContact = './contact.php';

$ftAbout = './about-us.php';
$ftServices = './services.php';
$ftExperience = '../index.php#experience';
$ftInit = '#about-us';
$rutaNosotros = '#about-us';
$rutaContacto = './contact.php';

$classHome = '';
$classAbout = 'active';
$classServices = '';
$classBlog = '';
$classContact = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P&L Consultoría Estratégica</title>
  <!-- css -->
  <link rel="stylesheet" href="../assets/css/style_about.css?t=1701978342236" />
  <!-- css / templates -->
  <link rel="stylesheet" href="../assets/css/style_comp.css?t=1701978342236" />
  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon" />
  <!-- boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- header -->
  <?php
  require_once('../../src/components/header.php')
  ?>

  <img class="vector" src="../assets/img/vector.svg" alt="" />
  <section class="about-us" id="about-us">
    <div class="about-content">
      <div class="header-content">
        <div class="img">
          <img class="img01" src="../assets/img/img01.png" alt="" />
          <img class="img02" src="../assets/img/img02.png" alt="" />
        </div>

        <div class="text">
          <p id="about"><span>¿Quíenes somos?</span></p>
          <h1>Nuestra Compañía</h1>
          <p>
            Queremos ayudarte a optimizar tus recursos y a mejorar la calidad
            de información de los datos de tu compañía. Nuestros directores te
            apoyarán en todo momento para que puedas tomar mejores decisiones.
            <br />
            Nuestra experiencia y compromiso será tu aliado al momento de
            ejecutar tu proyecto.
          </p>
        </div>
      </div>

      <div class="comments">
        <div class="text">
          <h2><span>Nuestro Equipo</span></h2>
          <p>
            Nuestro equipo de trabajo refleja una variedad de disciplinas y
            una amplia experiencia en la industria. Nuestra compañía está
            integrada por Ingenieros, Contadores, especialistas en
            comunicación y psicólogos organizacionales.
            <br />
            Nuestro equipo de alta dirección, incluidos los miembros de
            nuestro consejo asesor dedicados a la firma, tienen un historial
            notable en el mundo de la transformación digital. Nuestra
            experiencia laboral acumulada suma más de 12 años con experiencia
            local y global. Estos incluyen Sudamérica, Centro América y
            Europa.
          </p>
        </div>

        <img id="img03" src="../assets/img/img03.png" alt="" />
      </div>

      <div class="images">
        <img class="vector2" src="../assets/img/img05.png" alt="" />
      </div>

      <div class="comment-inf">
        <div class="comment">
          <p>Ayudarte y lograr tus objetivos será nuestra meta.</p>
          <i>Director General</i>
        </div>
        <div class="comment">
          <p>
            Nos adaptaremos a tus necesidades, somos una compañía con alta
            motivación humana.
          </p>
          <i>Directora Comercial</i>
        </div>
        <div class="comment">
          <p>
            Prondremos a tu disposición recursos de calidad para lograr juntos
            el éxito.
          </p>
          <i>Director de Proyectos</i>
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
  <script src="../assets/js/section.js?t=1701978342236"></script>
=======
  <script src="../assets/js/section.js?t=1701978640718"></script>
>>>>>>> refs/remotes/origin/main
</body>

</html>