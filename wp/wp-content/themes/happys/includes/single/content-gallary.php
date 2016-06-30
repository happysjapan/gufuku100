<?php if ( is_single() ) : ?>
  <div class="block-detail--images-gallary">
      <div class="page_wrapper row"><!-- images line1-->
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image2");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>example text<?php the_field(""); ?></p>
        </div>
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image3");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>text<?php the_field(""); ?></p>
        </div>
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image4");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>text<?php the_field(""); ?></p>
        </div>
      </div>
    </div>　<!-- line1 end -->

      <div class="page_wrapper row"><!-- images line2 -->
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image2");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>text<?php the_field(""); ?></p>
        </div>
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image3");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>text<?php the_field(""); ?></p>
        </div>
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image4");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
          <p>text<?php the_field(""); ?></p>
        </div>
      </div>
    </div>　<!-- line2 end -->

    <!-- message -->
    <div class="block-detail--message page_wrapper">
            <h4 class="row columns">皆様へメッセージ</h4>
          <div class="row">
            <div class="columns small-12 medium-4 large-3">
              <?php
                $image = get_field("bengo_image2");
                if ($image["url"] != "") {
                  echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
                }
              ?>
              <p>名前 <?php the_field(""); ?></p>
            </div>

            <div class="columns small-12 medium-8 large-9">
              <p>text<?php the_field(""); ?></p>
            </div>
          </div>
       </div>
    </div>


  <?php endif; ?>
