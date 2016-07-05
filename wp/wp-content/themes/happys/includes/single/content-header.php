<?php if ( is_single() ) : ?>
  <div class="block-detail--introduction block-detail">
    <div class="row">
      <div class="columns small-12 medium-5 large-4">

        <?php
          $image = get_field("shop_top_image");
          if ($image["url"] != "") {
            echo '<img src="'.$image["sizes"]["large"].'" width="380" />';
          } else {
            echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
          }
        ?>

        <p class="block-detail--introduction--owner-name">代表名：<?php the_field("shop_representative"); ?></p>

        <div class="block-detail--introduction--profile">
          <h5>プロフィール</h5>
          <p class="block-detail--introduction--profile-text"><?php the_field("shop_profile"); ?></p>
        </div>

      </div>

      <div class="columns small-12 medium-7 large-8">

        <div class="block-detail--introduction--information">
          <h3 class="points">理念</h3>
        </div>
        <div class="block-detail--introduction--information-text">
          <p><?php the_field("shop_vision"); ?></p>
        </div>

        <div class="block-detail--introduction--information">
          <h3 class="points">100選ポイント</h3>
        </div>
        <div class="block-detail--introduction--information-text">
          <p><?php the_field("shop_point100"); ?></p>
        </div>

      </div>

    </div>
  </div>

<?php endif; ?>
