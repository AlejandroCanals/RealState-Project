<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/BienesRaices/build/css/app.css" />
  </head>

  <body>
<header class="header <?php echo $inicio ? 'inicio' : '' ; ?>">
      <div class="contenedor contenido-header">
        <!--LOGO HEADER-->
        <div class="barra">
          <a href="index.php">
            <img
              src="build/img/logo.svg"
              alt="Logotipo de Bienes Raices"
              class="logo-header logoindex"
            />
          </a>

          <!--MENU HAMBURGUESA-->
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="icono menu responsive" />
          </div>

          <!--MENU DARKMODE-->

          <!-- BARRA  NAVEGACION-->

          <div class="derecha mostrar">
            <img class="dark-mode-boton" src="build/img/dark-mode.svg">
          

            <nav class="navegacion ">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          
            </div>
            
        </div>
        

        <?php if($inicio) { ?>
            <h1>Ventas de Casas y Departamentos Exclusivos de Lujo</h1>
        <?php } ?>

      </div>
    </header>