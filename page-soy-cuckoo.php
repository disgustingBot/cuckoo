<?php get_header(); ?>

<section class="soy_cuckoo">
  <img class="soy_cuckoo_img rowcol1" src="<?php echo get_template_directory_uri() . '/img/imcuckoo.jpg'; ?>" alt="Botellas is frutas">

  <div class="soy_cuckoo_caption">
    <h1 class="soy_cuckoo_title rowcol1">
      <?php echo get_post_meta(get_the_ID(), 'A_title', true); ?>
    </h1>
    <h3 class="soy_cuckoo_sub_title">
    <?php echo get_post_meta(get_the_ID(), 'B_sub_title', true); ?>
    </h3>
    <p class="soy_cuckoo_txt">
    <?php echo get_post_meta(get_the_ID(), 'C_texto', true); ?>
    </p>
  </div>
</section>


<?php get_footer(); ?>
