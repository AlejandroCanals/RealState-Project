<?php

require 'includes/funciones.php';

incluirTemplate('header' , $inicio = false);

?>

    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp"> 
        <source srcset="build/img/destacada3.jpg" type="image/jpg"> 

        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">

      </picture>

      <h2>Llene el formulario de Contacto</h2>

    <form class="formulario">
      <fieldset>
        <legend>Información Personal</legend>
        <label for="Nombre">Nombre</label>
        <input type="text" placeholder="Tu Nombre" id="Nombre">

        <label for="email">E-mail</label>
        <input type="email" placeholder="Tu e-mail" id="email">

        <label for="telefono">Teléfono</label>
        <input type="tel" placeholder="Tu Teléfono" id="telefono">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje"></textarea>

      </fieldset>

      <fieldset>
        <legend>Información sobre la Propiedad </legend>
        <label for="opciones">Venta o Compra</label>
        <select id="opciones">
          <option value="" disabled selected >-- Seleccione --</option>

          <option value="Compra">Compra</option>
          <option value="Venta">Venta</option>
        </select>

        <label for="presupuesto">Presupuesto</label>
        <input type="number" placeholder="Tu presupuesto" id="presupuesto">

      </fieldset>


      <fieldset>
        <legend>Contacto </legend>

        <p>Como desea ser contacatado</p>
        <div class="forma-contacto">
          <label for="contactar-telefono">Teléfono</label>
          <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

          <label for="contactar-email">E-mail</label>
          <input name="contacto" type="radio" value="email" id="contactar-email">
        </div>

        <p>Si eligió teléfono, elija la fecha y la hora</p>

        <label for="fecha">Fecha</label>
        <input type="date" id="fecha">

        <label for="hora">Hora</label>
        <input type="time" id="hora" min="9:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
    </main>

    <?php

include './includes/templates/footer.php'
?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
