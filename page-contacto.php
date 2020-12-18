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
    <p class="contacto_information">Información básica en protección de datos.- Conforme al RGPD y la LOPDGDD, AMER GOURMET SL tratará los datos facilitados, con la finalidad de contestar las dudas y/o quejas planteadas a través del presente formulario y facilitar la información solicitada. Siempre que nos lo autorice previamente, enviaremos información relacionada con [la actividad/ los productos/ los servicios] ofrecidos por AMER GOURMET SL el [grupo] Podrá ejercer, si lo desea, los derechos de acceso, rectificación, supresión, y demás reconocidos en la normativa mencionada. Para obtener más información acerca de cómo estamos tratando sus datos, acceda a nuestra <a href="<?php echo site_url() . '/politica-privacidad'; ?>">Política de Privacidad</a>.</p>
    <div class="contacto_input_container">
      <input class="accept_data_treatment" type="checkbox" id="data_treatment" required>
      <label for="data_treatment">"ENTIENDO Y ACEPTO el tratamiento de mis datos tal y como se describe anteriormente y se explica con mayor detalle en la <a href="<?php echo site_url() . '/politica-privacidad'; ?>">Política de Privacidad</a> (Su negativa a facilitarnos la autorización implicará la imposibilidad de tratar sus datos con la finalidad indicada)."<strong>*</strong></label>
    </div>
    <div class="contacto_input_container">
      <input class="accept_data_treatment" type="checkbox" id="data_reception" required>
      <label for="data_reception">"ENTIENDO Y ACEPTO recibir información relacionada con mi consulta en los términos arriba indicados de parte de AMER GOURMET SL. (Su negativa a facilitarnos la autorización implicará la imposibilidad de enviarle información comercial por parte de la entidad)."<strong>*</strong></label>
    </div>
    <button class="contacto_boton" type="submit" name="button">Enviar</button>
  </form>



</section>


<?php get_footer(); ?>
