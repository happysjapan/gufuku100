<?php if ( is_single() ) : ?>
  <div class="block-detail--introduction block-detail">
    <div class="row">
      <div class="columns small-12 medium-4 large-3">

        <?php
          $image = get_field("clinic_top_image");
          if ($image["url"] != "") {
            echo '<img src="'.$image["sizes"]["large"].'" width="380" />';
          } else {
            echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
          }
        ?>

        <p class="block-detail--intro--owner-name">代表名：<?php the_field("clinic_representative"); ?></p>

        <div class="block-detail--intro--profile">
          <h5>プロフィール</h5>
          <p class="block-detail--intro--profile-text"><?php the_field("clinic_profile"); ?></p>
        </div>

      </div>

      <div class="columns small-12 medium-8 large-9">
        <h3 class="block_title">理念</h3>
        <div class="block-detail--intro--content">
          <p>
            <?php
              $page_info = get_page_by_path('post');
              $page = get_post($page_info);
              echo $page->post_content;
            ?>
          </p>
        </div>

        <h3 class="block_title">100選ポイント</h3>
        <div class="block-detail--intro--content">
          <?php echo get_field("clinic_points"); ?>
        </div>

      </div>

    </div>
  </div>

<?php endif; ?>
