<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="columns">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'includes/single/local', 'menu' ); ?>
          <?php get_template_part( 'includes/single/content', 'block1' ); ?>
          <?php get_template_part( 'includes/single/content', 'block2' ); ?>
          <?php get_template_part( 'includes/single/content', 'block3' ); ?>

        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
