<?php /*Template Name: front page*/
get_header(); ?>

<div class="page_wrapper">

  <?php get_template_part( 'includes/front', 'shop-gallery' ); ?>

  <div class="row">

  	<div class="medium-4 aside--holder columns">
  		<aside class="aside">
  			<?php dynamic_sidebar( 'home-widget-area' ); ?>
  		</aside>
  	</div>

  </div>

</div>


<?php get_footer(); ?>
