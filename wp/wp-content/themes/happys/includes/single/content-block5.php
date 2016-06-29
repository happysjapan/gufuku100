
<?php
  $categories = get_the_category();
  array_shift($categories);
  $cat = $categories[0];

  if ($cat) { ?>

    <h4 class="mtop"><a href="<?php echo get_category_link($cat->cat_ID) ?>"><?php echo $cat->cat_name ?>近辺</a>の整骨院・接骨院</h4>
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

        <?php
        $custom_args = array(
          'post_type' => 'post',
          'category' => $cat->cat_ID,
          'post_status' => 'publish',
          'has_password' => false,
          'posts_per_page' => 12,
          'exclude' => $current_id
        );
        $myposts = get_posts( $custom_args );

        $chunks = array_chunk($myposts, 3); ?>

        <?php foreach ($chunks as $slide_array) { ?>
          <li class="orbit-slide">
            <div class="row">
              <?php foreach ($slide_array as $clinic) { ?>

                <div class="orbit-slide-post columns medium-4">
                  <a href="<?php echo get_permalink($clinic->ID); ?>">
                    <div class="orbit-slide-post--holder clearfix">
                      <?php
                        $image = get_field("bengo_image1", $clinic->ID);
                        if ($image["url"] != "") {
                          echo '<img class="orbit-image" src="'.$image["sizes"]["large"].'">';
                        } else {
                          echo '<img class="orbit-image" src="'.get_template_directory_uri().'/images/noimage_sq.jpg">';
                        }
                      ?>
                      <figcaption class="orbit-caption">
                        <h5><?php echo get_the_title($clinic->ID); ?></h5>
                        <small><?php echo get_field("bengo_address", $clinic->ID); ?></small>
                      </figcaption>
                    </div>
                  </a>
                </div>

              <?php } ?>
            </div>
          </li>
        <? } ?>

      </ul>
    </div>




<?php } ?>
