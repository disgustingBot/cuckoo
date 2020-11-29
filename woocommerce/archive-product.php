<?php get_header(); ?>

<section class="product_grid">

  <?php while(have_posts()){the_post(); ?>


    <figure class="product" id="product<?php echo get_the_id();?>">
      <a class="product_amg" href="<?php echo get_permalink(); ?>">
        <img class="product_img lazy" data-url="<?php the_post_thumbnail_url(); ?>" alt="Product Image">
      </a>
      <figcaption class="product_caption">
        <p class="product_title" style="color:<?php echo get_post_meta(get_the_ID(), 'Z_color', true); ?>"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="product_description"><a href="<?php echo get_permalink(); ?>"><?php echo excerpt(70); ?></a></p>
        <!-- <p class="productCardPrice"><a href="<?php echo get_permalink(); ?>"> <?php echo $product->get_price_html(); ?> </a></p> -->
      </figcaption>
    </figure>

  <?php } ?>
</section>


<?php get_footer(); ?>
