<?php /*Template Name: front page*/
get_header(); ?>

<div class="page_wrapper">

  <?php get_template_part( 'includes/front', 'shop-gallery' ); ?>

  <div class="row">
  	<div class="small-12 columns">
  		<div class="front_main">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?>
  		</div>
  	</div>
  </div>

  <div class="row">
    <div class="front_section small-12 columns">
      <?php dynamic_sidebar( 'home-front-widget-area' ); ?>
    </div>
  </div>

</div>


<?php get_footer(); ?>
