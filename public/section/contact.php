<?php
$rutaImg = '../assets/img/logo.svg';
$rutaImgFt = '../assets/img/logo.svg';
$rutaLogo = '../index.php#carouselExampleAutoplaying';

$sectionHome = '../index.php';
$sectionAboutUs = './about-us.php';
$sectionServices  = './services.php';
$sectionBlog = './blog.php';
$sectionContact = '#contact';

$ftAbout = './about-us.php';
$ftServices = './services.php';
$ftExperience = '../index.php#experience';
$ftInit = '#contact';
$rutaNosotros = './about-us.php';
$rutaContacto = '#contact';

$classHome = '';
$classAbout = '';
$classServices = '';
$classBlog = '';
$classContact = 'active';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P&L Consultoría Estratégica</title>
  <!-- css -->
  <link rel="stylesheet" href="../assets/css/style_contact.css?t=1701978342242" />
  <!-- css / templates -->
  <link rel="stylesheet" href="../assets/css/style_comp.css?t=1701978342242" />
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

  <!-- section contact structure -->
  <section id="contact" class="contact">
    <h1 class="contact-title" id="contact-title">
      Contáctanos <span>!</span>
    </h1>
    <div class="container-contact">
      <div class="contact-inf">
        <div class="info">
          <div class="address">
            <i class="bx bx-current-location"></i>
            <h4>Ubicación:</h4>
            <p>Calle las camelias 877 Res. San Isidro.</p>
          </div>

          <div class="email">
            <div class="title">
              <i class="bx bx-envelope"></i>
              <h4 class="title-email">E-mail:</h4>
            </div>

            <p class="text-email">comercial@pylconsultoriae.com</p>
          </div>

          <div class="phone">
            <i class="bx bx-phone"></i>
            <h4>Teléfono:</h4>
            <p>
              +51 901013293
              <br />
              01-7012382
            </p>
          </div>
        </div>

        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.3021276015237!2d-77.02895603033596!3d-12.09787339925892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868b790d529%3A0xda3725e877bf129!2sC.%20las%20Camelias%20877%2C%20San%20Isidro%2015036!5e0!3m2!1ses-419!2spe!4v1697981707491!5m2!1ses-419!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="contact-form">
        <form action="../form/form.php" class="form" method="post">
          <div class="input-box">
            <div class="input-field">
              <input type="text" name="nombre" placeholder="Nombre completo" required />
              <span class="focus"></span>
            </div>
            <div class="input-field">
              <input type="email" name="email" placeholder="Correo electrónico" required />
              <span class="focus"></span>
            </div>
          </div>

          <div class="input-box">
            <div class="input-field">
              <input type="number" name="telefono" placeholder="Número de teléfono" required />
              <span class="focus"></span>
            </div>
            <div class="input-field">
              <input type="text" name="asunto" placeholder="Asunto del correo" required />
              <span class="focus"></span>
            </div>
          </div>

          <div class="textarea-field">
            <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
            <span class="focus"></span>
          </div>

          <div class="btn-box btns">
            <button type="submit" class="btn">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php
  require_once('../../src/components/footer.php');
  ?>

  <!-- js / jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- js / form  -->
<<<<<<< HEAD
  <script src="../assets/js/form.js?t=1701978342242"></script>
  <!-- js / navbar -->
  <script src="../assets/js/section.js?t=1701978342242"></script>
=======
  <script src="../assets/js/form.js?t=1701978640723"></script>
  <!-- js / navbar -->
  <script src="../assets/js/section.js?t=1701978640723"></script>
>>>>>>> refs/remotes/origin/main
</body>

</html>