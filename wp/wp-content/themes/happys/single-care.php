<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="column">

        <h1 class="row columns"><?php the_title(); ?></h1>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>

      </div>
    </div>



        <?php
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
                     <img src="<?php
                     echo get_sub_field('care_thumbnail')['sizes']['medium']; ?>" alt="<?php the_sub_field('care_name'); ?>">
                   </div>
                </div>
              </div>
            </div>
          </div>

        <?php $i++; endwhile; ?>

    </div>

    <div class="page_wrapper">
      <div class="row">
        <div class="columns">
          <?php custom_breadcrumbs(); ?>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
