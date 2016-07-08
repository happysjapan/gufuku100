<?php if ( is_single() ) : ?>

  <?php if( have_rows('clinic_image_list', $page_id) ){ ?>
  <div class="row">
  	<div class="small-12 columns">
      <ul class="block-detail--gallary row">

        <?php while ( have_rows('clinic_image_list', $page_id) ) : the_row(); ?>
          <?php
          $clinic_image = get_sub_field('clinic_image')['sizes']['medium'];
          $clinic_image_comment = get_sub_field('clinic_image_comment');
          ?>

            <li class="columns small-6 medium-4">
              <?php
                if ($clinic_image) {
                  echo '<img src="'.$clinic_image.'">';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
                }
              ?>
              <p><?php echo $clinic_image_comment; ?></p>
            </li>

        <?php endwhile; ?>

      </ul>
  	</div>
  </div>
  <?php	} ?>



    <!-- message -->
    <div class="row">
      <div class="columns">
        <div class="block-detail--message">
          <h4>皆様へメッセージ</h4>

           <div class="row">
            <div class="columns small-12 medium-4 large-3">
              <?php
                $image = get_field("message_image");
                if ($image["url"] != "") {
                  echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
                }
              ?>
              <p>名前: <?php the_field("message_name"); ?></p>
            </div>

            <div class="columns small-12 medium-8 large-9">
              <p><?php the_field("message_comment"); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>
