<?php
/**
 * Default template fallback — Version D
 */
get_header();
?>

<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="hero-dots"></div>
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section style="padding:5rem 0;">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
