<?php get_header(); ?>

<div class="row">
	<div class="columns">
		<?php custom_breadcrumbs(); ?>
	</div>
	<div class="columns shrink">
		<?php get_template_part( 'includes/social-buttons' ); ?>
	</div>
</div>

<!-- [ #content ] -->
<div class="page_wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="columns">
				<h2 class="main_title"><?php the_title(); ?></h2>
				<div class="main_edition">
					<?php the_content(); ?>
				</div>
		 	</div>
		</div>
	<?php endwhile; ?>

	<div class="row">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
