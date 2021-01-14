<?php get_header(); ?>


<section class="contacto">
  <div class="contacto_caption">
    <p class="contacto_title">Dudas, preguntas, consultas:</p>
    <p class="contacto_description">
      <?php echo get_post_meta(get_the_ID(), 'A_telefono', true); ?>
    </p>

    <p class="contacto_title">O envíanos un email a:</p>
    <p class="contacto_description">
      <?php echo get_post_meta(get_the_ID(), 'B_email', true); ?>
    </p>

    <p class="contacto_title">
      Quieres tener Cuckoo Fruits en tu país? Eres importador? Distribuidor?<br>Envíanos un email a:
    </p>
    <p class="contacto_description">
     <?php echo get_post_meta(get_the_ID(), 'C_email_distrib', true); ?>
    </p>

  </div>
    <img class="contacto_img" src="<?php echo get_template_directory_uri() . '/img/pluma.jpg'; ?>" alt="Botellas is frutas">
  <form class="contacto_form" action="index.html" method="post">
    <input class="contacto_input" placeholder="Nombre*" type="text" name="" value="" required>
    <input class="contacto_input" placeholder="Correo Electrónico*" type="text" name="" value="" required>
    <textarea class="contacto_input" placeholder="Comentario" name="name" rows="8" cols="80"></textarea>
    <div>
      <div class="contacto_input_container">
        <input class="accept_data_treatment" type="checkbox" id="data_treatment" required>
        <label for="data_treatment">"ENTIENDO Y ACEPTO el tratamiento de mis datos tal y como se describe anteriormente y se explica con mayor detalle en la <a href="<?php echo site_url() . '/politica-privacidad'; ?>">Política de Privacidad</a>."<strong>*</strong></label>
      </div>
      <br>
      <div class="contacto_input_container">
        <input class="accept_data_treatment" type="checkbox" id="data_reception" required>
        <label for="data_reception">"ENTIENDO Y ACEPTO recibir información relacionada con mi consulta en los términos arriba indicados."<strong>*</strong></label>
      </div>
    </div>
    <button class="contacto_boton" type="submit" name="button">Enviar</button>
  </form>



</section>


<?php get_footer(); ?>
