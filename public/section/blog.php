<?php
$rutaImg = '../assets/img/logo.svg';
$rutaImgFt = '../assets/img/logo.svg';
$rutaLogo = '../index.php#carouselExampleAutoplaying';

$sectionHome = '../index.php';
$sectionAboutUs = './about-us.php';
$sectionServices  = './services.php';
$sectionBlog = '#blog';
$sectionContact = './contact.php';

$ftAbout = './about-us.php';
$ftServices = './services.php';
$ftExperience = '../index.php#experience';
$ftInit = '#blog';
$rutaNosotros = './about-us.php';
$rutaContacto = './contact.php';

$classHome = '';
$classAbout = '';
$classServices = '';
$classBlog = 'active';
$classContact = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P&L Consultoría Estratégica</title>
  <!-- css -->
  <link rel="stylesheet" href="../assets/css/style_blog.css?t=1701978342241" />
  <!-- css / templates -->
  <link rel="stylesheet" href="../assets/css/style_comp.css?t=1701978342241" />
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

  <section class="blog" id="blog">
    <div class="blog-content">
      <div class="head">
        <div class="text">
          <h1>Últimas <span>Novedades</span></h1>
          <p>
            ¡Bienvenidos al mundo de Business Central! En este espacio, te
            sumergirás en el fascinante universo del ERP con el que día a día
            impulsamos nuestros negocios. Descubre información relevante,
            consejos y novedades que te ayudarán a optimizar tu operación.
          </p>
        </div>

        <div class="video">
          <iframe class="video-container" src="https://www.microsoft.com/en-us/videoplayer/embed/RW11Mi9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          <p>
            <span>Business Central</span>
            <br />
            Principales ventajas:
            <br />
            <b>Eficiencia y Productividad </b> : Business Central automatiza
            procesos empresariales clave, lo que ahorra tiempo y recursos.
            <br />
            <b>Toma de Decisiones </b>: Proporciona datos en tiempo real para
            decisiones más informadas y estratégicas.
            <br />
            <b>Escalabilidad </b>: Se adapta al crecimiento de tu empresa sin
            problemas.
          </p>
        </div>
      </div>

      <div class="box-content">
        <div class="row1">
          <div class="box">
            <img src="../assets/img/bc-directions.png" alt="" />

            <div class="box-inf">
              <p class="date">29 de Octubre, 2021</p>
              <h2>¿Qué se puede esperar en Directions 4 Partners 2021?</h2>
              <p>
                Asistir a Directions EMEA 2021 garantiza una ventaja
                competitiva en el mercado de las pymes. Le ayuda como socio a
                reinventar su modelo de negocio para responder rápidamente a
                la transformación digital y las expectativas de los clientes
                con las soluciones más innovadoras y eficientes.
                <br />
                Nuestra experiencia y compromiso será tu aliado al momento de
                ejecutar tu proyecto.
              </p>
            </div>
          </div>

          <div class="box">
            <img src="../assets/img/bc-wave.png" alt="" />

            <div class="box-inf">
              <p class="date">9 de Octubre, 2021</p>
              <h2>¿Qué novedades trae Business Central 2020 Wave 2?</h2>
              <p>
                Dynamics 365 Business Central es una solución de aplicaciones
                empresariales diseñada para pequeñas y medianas empresas. En
                las Versiones de 2021, se enfocaron en:
                <br />
                1. Aumentar la productividad de los usuarios en menos tiempo.
                <br />
                2. Ampliar las guías para abarcar más áreas comunes y
                facilitar la adaptación de nuevos roles comerciales.
                <br />
                3. Continuar mejorando Business Central y Teams a través de la
                iniciativa 'Mejor con Microsoft 365'.
              </p>
            </div>
          </div>
        </div>

        <div class="row2">
          <div class="box">
            <img src="../assets/img/bc-outlook.png" alt="" />

            <div class="box-inf">
              <p class="date">6 de Mayo, 2020</p>
              <h2>
                ¿Cómo se puede utilizar Business Central junto con Microsoft
                Outlook?
              </h2>
              <p>
                Business Central introduce la posibilidad de gestionar las
                interacciones comerciales con sus clientes y proveedores
                directamente en Microsoft Outlook.
                <br />
                Con los complementos de Outlook de Business Central, puede ver
                los datos financieros relativos a los clientes y los
                proveedores, así como crear y enviar documentos financieros,
                como por ejemplo presupuestos y facturas.
              </p>
            </div>
          </div>

          <div class="box">
            <img src="../assets/img/bc-wave.png" alt="" />

            <div class="box-inf">
              <p class="date">1 de Mayo, 2020</p>
              <h2>¿Qué novedades trae Business Central 2020 Wave 1?</h2>
              <p>
                Desde su lanzamiento en abril de 2018, cada vez más empresas
                eligen Business Central para la transformación digital de su
                negocio.
                <br />
                Para el primer lanzamiento de versiones de 2020, las
                inversiones en Business Central se centran en los fundamentos
                del servicio para satisfacer las demandas de una base de
                clientes en rápido crecimiento, una mayor productividad del
                usuario, la expansión geográfica y las principales
                características solicitadas por los clientes.
                <br />
                Las mejoras en las herramientas de migración reflejan la
                principal prioridad, que es llevar a los clientes de entornos
                locales de Dynamics GP, Dynamics SL y Dynamics NAV a Business
                Central Online.
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
  <script src="../assets/js/section.js?t=1701978342241"></script>
=======
  <script src="../assets/js/section.js?t=1701978640722"></script>
>>>>>>> refs/remotes/origin/main
</body>

</html>