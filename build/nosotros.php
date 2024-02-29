<?php

require 'includes/funciones.php';

incluirTemplate('header' , $inicio = false);

?>



<main class="contenedor seccion ">
  <h1>Conoce Sobre Nosotros</h1>
  <div class="sobre-nosotros">
    <div class="imagen">

      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de Experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu
        pretium ex. Phasellus neque eros, auctor eu tortor quis, ullamcorper
        dictum nulla. Etiam facilisis, leo sed commodo rutrum, magna purus
        cursus purus, malesuada aliquam ipsum ante vitae est. Pellentesque eu
        finibus arcu. Quisque at lorem sit amet orci convallis consectetur vel
        eu eros. Integer vel massa eget ipsum bibendum aliquam eu in nibh. Sed
        nec sollicitudin erat, at ornare lectus. Suspendisse potenti. Sed id
        quam et nulla tincidunt suscipit et non mauris. Cras at sodales nibh.
        Praesent diam ipsum, gravida quis nisi ac, elementum maximus justo.
        Nulla ut tincidunt neque, sed congue odio. Sed quis laoreet leo. Duis
        dictum odio ac dictum maximus.
        <br>
        <br> Aenean semper lacus eleifend, efficitur
        libero sit amet, tristique eros. Maecenas efficitur auctor ipsum, a
        pellentesque nisl eleifend vitae. Donec ornare, ante et dignissim
        fringilla, diam risus sagittis libero, vitae dictum dolor metus non
        eros. Etiam eleifend consequat est vel ultricies. In hac habitasse
        platea dictumst. Donec blandit leo non dui euismod, nec finibus dolor
        commodo. Sed in vulputate justo, quis ullamcorper arcu. Ut eu dolor
        lacus. Pellentesque et dolor est.
      </p>
    </div>
  </div>
</main>

<main class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
        ipsum vitae nulla pulvinar ullamcorper. Nullam rutrum, est quis
        iaculis sagittis, dui lorem eleifend quam, in tincidunt arcu nulla
        tincidunt orci.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono de Precio" loading="lazy" />
      <h3>Precio</h3>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
        ipsum vitae nulla pulvinar ullamcorper. Nullam rutrum, est quis
        iaculis sagittis, dui lorem eleifend quam, in tincidunt arcu nulla
        tincidunt orci.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy" />
      <h3>Tiempo</h3>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
        ipsum vitae nulla pulvinar ullamcorper. Nullam rutrum, est quis
        iaculis sagittis, dui lorem eleifend quam, in tincidunt arcu nulla
        tincidunt orci.
      </p>
    </div>
  </div>
</main>

<?php

include './includes/templates/footer.php'
?>

<script src="build/js/bundle.min.js"></script>
</body>

</html>