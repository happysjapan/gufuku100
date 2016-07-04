<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="column">

        <h3 class="row columns"><?php the_title(); ?></h3>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>

      </div>
    </div>



        <?php while ( have_rows("product") ) : the_row(); ?>

          <div class="row product">
            <!-- <div class="product"> -->
               <article class="columns small-12 medium-8">
                    <!-- 商品名 -->
                    <h4 class="product--title"><?php the_sub_field('product_name'); ?></h4>
                   <!-- テキスト -->
                    <p class="product--text"><?php the_sub_field('product_description'); ?></p>
                </article>

                <!-- thumbnail -->
                <div class="columns small-12 medium-4">
                  <img src="<?php the_sub_field('product_thumbnail'); ?>" alt="<?php the_sub_field('product_name'); ?>">
                </div>
          <!-- </div> -->
        </div>

        <?php endwhile; ?>

  </div>

<?php get_footer(); ?>
