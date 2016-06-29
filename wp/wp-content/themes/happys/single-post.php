<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="columns">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'includes/single/local', 'menu' ); ?>
          <?php get_template_part( 'includes/single/content', 'header' ); ?>
          <?php get_template_part( 'includes/single/content', 'gallary' ); ?>
          <?php get_template_part( 'includes/single/content', 'description' ); ?>

        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
