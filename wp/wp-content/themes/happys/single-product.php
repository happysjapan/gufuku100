<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="column">

        <h3 class="row columns"><?php the_title(); ?></h3>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>

      </div>
    </div>



        <?php
        for ($i=0; $i < 12345; $i++) {
          # code...
        }

        $i=0;
        while ( have_rows("product") ) : the_row(); ?>

          <div class="row">
            <div class="columns">
              <div class="product_panel <?php if($i==0){echo 'first';} ?>">
                <div class="row">
                  <article class="columns small-12 medium-8">
                       <!-- 商品名 -->
                       <h4 class="product_panel--title"><?php the_sub_field('product_name'); ?></h4>
                      <!-- テキスト -->
                       <p class="product_panel--text"><?php the_sub_field('product_description'); ?></p>
                   </article>

                   <!-- thumbnail -->
                   <div class="columns small-12 medium-4">
                     <img src="<?php the_sub_field('product_thumbnail'); ?>" alt="<?php the_sub_field('product_name'); ?>">
                   </div>
                </div>
              </div>
            </div>
        </div>

        <?php $i++; endwhile; ?>

  </div>

<?php get_footer(); ?>
