<?php if ( is_single() ) : ?>
  <div class="block-detail--images-description">
    <!-- images line1-->
      <div class="row">
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image2");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
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
        </div>
      </div>
    </div>　<!-- line1 end -->

    <!-- images line2 -->
      <div class="row">
        <div class="columns small-4">
          <?php
            $image = get_field("bengo_image2");
            if ($image["url"] != "") {
              echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
            }
          ?>
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
        </div>
      </div>
    </div>　<!-- line2 end -->

    <!-- message -->
    <div class="block-detail--message">
      <!-- images line1-->
        <div class="row">
          <hr>
          <h3>皆様へメッセージ</h3>
          <div>
            <?php
              $image = get_field("bengo_image2");
              if ($image["url"] != "") {
                echo '<img src="'.$image["sizes"]["thumbnail"].'" width="130" />';
              } else {
                echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
              }
            ?>
            <p>名前 <?php the_field(""); ?></p>

            <hr>
          </div>
        </div>
      </div>


  <?php endif; ?>
