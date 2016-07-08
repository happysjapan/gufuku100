<?php /*Template Name: front page*/
get_header();
$page_id = get_the_id();
?>

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

  <?php if( have_rows('front_sponsors', $page_id) ){ ?>
  <div class="row">
  	<div class="small-12 columns">
      <ul class="block_sponsor row align-middle">
        <?php while ( have_rows('front_sponsors', $page_id) ) : the_row(); ?>
          <?php
          $front_sponsor_image = get_sub_field('front_sponsor_image')['sizes']['medium'];
          $front_sponsor_link = get_sub_field('front_sponsor_link');
          ?>
          <li class="block_sponsor--article columns small-4">
            <a href="<?php echo $front_sponsor_link; ?>">
              <img src="<?php echo $front_sponsor_image; ?>" alt="Sponsor" />
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
  	</div>
  </div>
  <?php	} ?>

</div>


<?php get_footer(); ?>
