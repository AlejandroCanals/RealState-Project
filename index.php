<?php

require 'includes/funciones.php';


incluirTemplate('header', $inicio = true);

?>

<main class="contenedor seccion">
  <h1>Sobre Nosotros</h1>

  <!--3 ICONOS HORIZONTAL-->
  <div class="iconos-nosotros">
    <!--ICONO-->
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
    <!--ICONO-->
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
    <!--ICONO-->
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

<section class="seccion contenedor">
  <h2>Casas y Departamentos en Venta</h2>

  <!--SECCION CASAS EN VENTA-->
  <div class="contenedor-anuncios">
    <!-- 1 PARTE ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>

      <div class="contenido-anuncio">
        <h3>Casa de Lujo en el Lago</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->
    <!--ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con acabados de Lujo</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->

    <!--ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de Lujo con Piscina</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->
  </div>
  <!-- Contendor-Anuncio-->

  <!--SEGUNDA PARTE DE ANUNCIOS-->
  <div class="contenedor-anuncios">
    <!--ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio4.webp" type="image/webp" />
        <source srcset="build/img/anuncio4.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio4.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de Lujo en el Lago</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->

    <!--ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio5.webp" type="image/webp" />
        <source srcset="build/img/anuncio5.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio5.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con acabados de Lujo</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->
    <!--ANUNCIO CASA EN VENTA-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio6.webp" type="image/webp" />
        <source srcset="build/img/anuncio6.jpg" type="image/jpg" />
        <img loading="lazy" src="build/img/anuncio6.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de Lujo con Piscina</h3>
        <p>Casa en el lago con excelente vista y acabados de lujo</p>
        <p class="precio">3.000.000€</p>

        <ul class="iconos-caracterisisticas">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" class="icono" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" class="icono" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" class="icono" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- Contenido Anuncio-->
    </div>
    <!--Anuncio-->
  </div>
  <!-- Contendor-Anuncio-->

  <!--BOTON ANUNCIO-->
  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</section>

<!--SECCION CONTACTO-->
<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondrá en contacto con
    usted en la mayor brevedad posible
  </p>
  <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
</section>

<!--SECCION BLOG-->
<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <!--PRIMER ARTICULO-->
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta"><span>04/07/2023</span></p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero.
          </p>
        </a>
      </div>
    </article>

    <!--SEGUNDO ARTICULO-->

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guía para la decoración de tu hogar</h4>
          <p class="informacion-meta"><span>04/07/2023</span></p>
          <p>
            Amplia el espacio en tu hogar con esta guia , aprende a combinar
            muebles y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimonios">
    <h3>Testimonios</h3>
    <div class="testimonio">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Antonio Torres</p>
    </div>
  </section>
</div>

<?php

include './includes/templates/footer.php'
?>


<script src="build/js/bundle.min.js"></script>
</body>

</html>