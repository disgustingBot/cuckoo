<?php get_header(); ?>

<section class="prod_page">
  <img class="prod_page_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="Product Image">
  <div class="prod_page_caption">
    <h1 class="prod_page_title" style="color:<?php echo get_post_meta(get_the_ID(), 'Z_color', true); ?>"><?php the_title(); ?></h1>
    <h3 class="prod_page_sub_title"><?php echo get_post_meta(get_the_ID(), 'A_sub_title', true); ?></h3>
    <div class="prod_page_col prod_page_col_1">
      <p class="prod_page_text">
        <?php echo get_post_meta(get_the_ID(), 'B_description_1', true); ?>
      </p>

      <p class="prod_page_quote">
        <?php echo get_post_meta(get_the_ID(), 'C_quote', true); ?>
      </p>


    </div>
    <div class="ficha" style="border-color:<?php echo get_post_meta(get_the_ID(), 'Z_color', true); ?>;">

      <?php the_content(); ?>

    </div>
    <div class="prod_page_col">

      <p class="prod_page_item">Ingredientes</p>
      <p class="prod_page_text">
        <?php echo get_post_meta(get_the_ID(), 'D_ingredientes', true); ?>
      </p>

      <p class="prod_page_item">Variedad</p>
      <p class="prod_page_text">
        <?php echo get_post_meta(get_the_ID(), 'E_variedad', true); ?>
      </p>


      <p class="prod_page_item">Localización</p>
      <p class="prod_page_text">
        <?php echo get_post_meta(get_the_ID(), 'F_localizacion', true); ?>
      </p>


      <p class="prod_page_item">Precio</p>
      <?php echo get_post_meta(get_the_ID(), 'G_price', true); ?>
      

      <a class="prod_page_mas" href="<?php echo site_url() . '/shop'; ?>">Más formatos y sabores disponibles</a>
      <p class="prod_page_boton_ficha" onclick="altClassFromSelector('alt', '.prod_page_caption')"><strong>+</strong> Ficha técnica</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
