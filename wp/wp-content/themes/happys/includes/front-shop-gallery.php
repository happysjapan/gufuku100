<?php
$custom_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'orderby' => 'date',
  'has_password' => false,
  'posts_per_page' => -1
);
$shops_array = get_posts( $custom_args );
// $wp_query = new WP_Query($custom_args);

// echo "<pre>";
// var_dump($shops_array);
?>


<div class="gallery row">
  <div class="gallery--holder columns">
    <h1 class="main_title">全国むちうち治療院100選</h1>

    <div id="gallery" class="gallery orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-auto-play="false">
      <ul class="gallery--list small__gutter orbit-container row">
        <li class="gallery--slide orbit-slide columns medium-4 large-3">
          <div class="row">

              <?php $i=0;$k=0; $lenght=count($shops_array);
              foreach ($shops_array as $post) { ?>
                <?php $thumbnail = get_field('clinic_top_image'); ?>
                <?php if( !$thumbnail ){
                  $thumbnail_url = get_template_directory_uri().'/images/thumbnail_default.jpg';
                } else {
                  $thumbnail_url = $thumbnail['sizes']['thumbnail'];
                } ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="gallery--list_item columns small-4">
                          <div class="gallery--tooltip">
                            <div class="gallery--tooltip--inner">
                              <img class="gallery--list_item--thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                              <h3 class="gallery--tooltip--title"><?php the_title(); ?>
                                <strong class="gallery--tooltip--area"><?php echo get_field('clinic_area'); ?></strong>
                              </h3>
                            </div>
                          </div>

                          <img class="gallery--list_item--thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                        </a>
                  <?php if( $i == $lenght ){ ?>
                      </div>
                    </li>
                  <?php } else if( $k == 2 ){ ?>
                      </div>
                    </li>
                    <li class="gallery--slide orbit-slide columns medium-4 large-3">
                      <div class="row">
                  <?php $k=0; } else {$k++;} ?>




              <?php $i++; } // end while
              wp_reset_postdata(); ?>
      </ul>
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
  </div>
</div>
