<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="page--inner row">
    <div class="page--main main_edition medium-8 columns">
      <h4><?php the_title(); ?></h4>
      <hr />
      <div class="article">
        <?php the_content(); ?>
      </div>
      <hr />
    </div>

		<div class="medium-4 aside--holder columns">
			<aside class="aside">
				<?php dynamic_sidebar( 'aside-widget-area' ); ?>
			</aside>
		</div>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
