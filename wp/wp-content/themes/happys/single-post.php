<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php if (post_password_required()) { ?>

      <div class="container">
        <h1>パスワード保護中</h1>
        <?php the_content(); ?>
      </div>

    <?php } else { ?>

        <?php if (get_field("is_design02")) { ?>
					<!-- <?php get_template_part( 'includes/single/content', 'block4' ); ?> -->
        <?php } else { ?>
          <?php get_template_part( 'includes/single/local', 'menu' ); ?>
        <?php } ?>

        <?php // get_template_part( 'content-bengo', get_post_format() ); ?>
				<?php get_template_part( 'includes/single/content', 'block1', get_post_format() ); ?>
			  <!-- <?php get_template_part( 'includes/single/shinsei', 'now' ); ?> -->
				<?php get_template_part( 'includes/single/content', 'block2' ); ?>
				<!-- <?php get_template_part( 'includes/single/content', 'block3' ); ?> -->
				<!-- <?php get_template_part( 'includes/single/content', 'block5' ); ?> -->
    <?php } ?>

  <?php endwhile; ?>
<?php get_footer(); ?>
