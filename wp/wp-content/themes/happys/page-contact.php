<?php
/*
  Template Name: Page Contact
*/
get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<!-- [ #content ] -->
<div class="page_wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="columns">
				<h2 class="form_title"><?php the_title(); ?></h2>
				<div class="row">
					<div class="main_form columns small-8">
						<?php the_content(); ?>
					</div>
				</div>
		 	</div>
		</div>
	<?php endwhile; ?>

	<div class="row">
		<div class="columns breadcrumbs--bottom">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
