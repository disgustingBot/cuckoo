<?php get_header(); ?>

<section class="home_ATF">

  <h1 class="home_ATF_title">
  <?php echo get_post_meta(get_the_ID(), 'A_home_title', true); ?>

  </h1>
  <img class="home_ATF_img" src="<?php echo get_template_directory_uri() . '/img/start3.jpg'; ?>" alt="Botellas is frutas">
  <!-- <img class="home_ATF_sello rowcol1" src="<?php echo get_template_directory_uri() . '/img/made_in_spain.png'; ?>" alt="made in spain"> -->
</section>


<?php get_footer(); ?>
