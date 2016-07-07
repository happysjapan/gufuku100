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
        while ( have_rows("care") ) : the_row(); ?>

          <div class="row">
            <div class="columns">
              <div class="care_panel <?php if($i==0){echo 'first';} ?>">
                <div class="row">
                  <article class="columns small-12 medium-8">
                     <!-- 商品名 -->
                     <h4 class="main_title"><?php the_sub_field('care_name'); ?></h4>
                     <!-- テキスト -->
                     <p class="care_panel--text"><?php the_sub_field('care_description'); ?></p>
                   </article>

                   <!-- thumbnail -->
                   <div class="columns small-12 medium-4">
                     <img src="<?php the_sub_field('care_thumbnail'); ?>" alt="<?php the_sub_field('care_name'); ?>">
                   </div>
                </div>
              </div>

            <div class="care_panel--border"></div>

            </div>
          </div>

        <?php $i++; endwhile; ?>

        <!-- pagination -->
        <?php
          if (function_exists(custom_pagination)) {
            custom_pagination($custom_query->max_num_pages,"",$paged);
          }
        ?>
        <!-- end of pagination -->

  </div>

<?php get_footer(); ?>
