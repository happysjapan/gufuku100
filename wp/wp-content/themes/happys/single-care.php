<?php get_header(); ?>

<div class="row">
  <div class="columns breadcrumbs--top">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<div class="page_wrapper">
  <div class="row">
    <div class="column">
      <h1 class=single_title><?php the_title(); ?></h1>
      <?php get_template_part( 'includes/single/local', 'menu' ); ?>
    </div>
  </div>

  <div class="row">
    <div class="columns">
      <div class="care_panel--top"> <!--最上部のパネル-->
        <div class="row">
          <article class="columns small-12 medium-8">
             <!-- 商品名 -->
             <h4 class="main_title"><?php echo get_field('care_top_name'); ?></h4>
             <!-- テキスト -->
             <p class="care_panel--text"><?php echo get_field('care_top_description'); ?></p>
           </article>

           <!-- thumbnail -->
           <div class="columns small-12 medium-4">
                <?php get_template_part( 'includes/single-care', 'slider' ); ?>
           </div>
        </div>
      </div>
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
               <div class="care_panel--thumbnail"><img src="<?php
               echo get_sub_field('care_thumbnail')['sizes']['medium']; ?>" alt="<?php the_sub_field('care_name'); ?>"></div>
             </div>
          </div>
        </div>
      </div>
    </div>

  <?php $i++; endwhile; ?>

  <div class="row">
    <div class="columns breadcrumbs--bottom">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
