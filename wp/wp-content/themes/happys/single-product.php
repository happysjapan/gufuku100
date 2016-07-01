<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="column">

        <h3 class="row columns"><?php the_title(); ?></h3>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>



        <?php while ( have_rows("shop_product_list") ) : the_row(); ?>

          <div class="row">
            <div class="columns small-12 medium-8">
              <!-- 商品名 -->
              <h4><?php the_sub_field('shop_product_name'); ?></h4>

              <!-- text -->
               <p><?php the_sub_field('shop_product_content'); ?></p>
           </div>

            <!-- thumbnail -->
            <div class="columns small-12 medium-4">
              <img src="<?php the_sub_field('shop_product_thumbnail'); ?>" alt="<?php the_sub_field('shop_product_name'); ?>">
            </div>

          </div>


        <?php endwhile; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
