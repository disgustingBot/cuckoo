<?php get_header(); ?>


<section class="contacto">
  <div class="contacto_caption">
    <p class="contacto_title">Dudas, preguntas, consultas:</p>
    <p class="contacto_description">(+34)93 71 30 423</p>

    <p class="contacto_title">O envíanos un email a:</p>
    <p class="contacto_description">hola@cuckoofruits.com</p>

    <p class="contacto_title">
      Quieres tener Cuckoo Fruits en tu país? Eres importador? Distribuidor?<br>Envíanos un email a:
    </p>
    <p class="contacto_description">distributors@cuckoofruits.com</p>

  </div>

  <img class="contacto_img" src="<?php echo get_template_directory_uri() . '/img/pluma.jpg'; ?>" alt="Botellas is frutas">

  <form class="contacto_form" action="index.html" method="post">
    <input class="contacto_input" placeholder="Nombre" type="text" name="" value="">
    <input class="contacto_input" placeholder="Correo Electrónico" type="text" name="" value="">
    <textarea class="contacto_input" placeholder="Comentario" name="name" rows="8" cols="80"></textarea>

    <button class="contacto_boton" type="submit" name="button">Enviar</button>
  </form>
</section>


<?php get_footer(); ?>
