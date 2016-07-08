<?php get_header(); ?>
  <div class="page_wrapper">
    <?php while ( have_posts() ) : the_post(); ?>

      <h1 class="row columns"><?php the_title(); ?></h1>

      <?php get_template_part( 'includes/single/local', 'menu' ); ?>
      <?php get_template_part( 'includes/single/content', 'header' ); ?>
      <?php get_template_part( 'includes/single/content', 'gallary' ); ?>
      <?php get_template_part( 'includes/single/content', 'description' ); ?>

    <?php endwhile; ?>


    <div class="row">
      <div class="columns">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
