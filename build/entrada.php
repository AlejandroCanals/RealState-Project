<?php

require 'includes/funciones.php';

incluirTemplate('header' , $inicio = false);

?>


    <main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>
   
      <picture>
        <source src="build/img/destacada2.webp" type="image/webp"> 
        <source src="build/img/destacada2.jpg" type="image/jpeg"> 
        <img src="build/img/destacada2.jpg" alt="imagen de la propiedad">

      </picture>

      <p class="informacion-meta"><span>04/07/2023</span></p>

     

        <p>   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu
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
    </main>
    
    <?php

include './includes/templates/footer.php'
?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
