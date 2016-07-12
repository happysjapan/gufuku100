<?php get_header(); ?>

  <div class="row">
    <div class="columns">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="page_wrapper">
    <div class="row">
      <div class="column">
        <h1 class=main_title><?php the_title(); ?></h1>
      </div>
    </div>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  		<div class="row">
  			<div class="columns">
  				<div class="main_edition">
  					<?php the_content(); ?>
  				</div>
  		 	</div>
  		</div>
  	<?php endwhile; ?>

  </div>

<?php get_footer(); ?>
