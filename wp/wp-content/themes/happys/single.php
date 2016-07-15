<?php get_header(); ?>

  <div class="row">
    <div class="columns breadcrumbs--top">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="page_wrapper">
    <?php while ( have_posts() ) : the_post(); ?>

      <div class="row columns">
        <h1 class=single_title><?php the_title(); ?></h1>
      </div>

      <?php get_template_part( 'includes/single/local', 'menu' ); ?>
      <?php get_template_part( 'includes/single/content', 'header' ); ?>
      <?php get_template_part( 'includes/single/content', 'gallery' ); ?>
      <?php get_template_part( 'includes/single/content', 'description' ); ?>

    <?php endwhile; ?>


    <div class="row">
      <div class="columns breadcrumbs--bottom">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
