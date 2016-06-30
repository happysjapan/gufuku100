<?php if ( is_single() ) : ?>
  <div class="block-detail--introduction block-detail">
    <div class="row">
      <div class="columns small-12 medium-5 large-4">

        <?php
          $image = get_field("bengo_image1");
          if ($image["url"] != "") {
            echo '<img src="'.$image["sizes"]["large"].'" width="380" />';
          } else {
            echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" width="380px" style="border:1px solid #cdcdcd;">';
          }
        ?>

        <p class="block-detail--introduction--owner-name">代表名：<?php the_field(""); ?></p>

        <div class="block-detail--introduction--profile">
          <h5>プロフィール</h5>
          <p class="block-detail--introduction--profile-text">text<?php the_field(""); ?></p>
        </div>

      </div>

      <div class="columns small-12 medium-7 large-8">

        <div class="block-detail--introduction--information">
          <h3 class="points">理念</h3>
        </div>
        <div class="block-detail--introduction--information-text">
          <p>text<?php the_field(""); ?></p>
        </div>

        <div class="block-detail--introduction--information">
          <h3 class="points">100選ポイント</h3>
        </div>
        <div class="block-detail--introduction--information-text">
          <p>text<?php the_field(""); ?></p>
        </div>

      </div>

    </div>
  </div>

<!--
  <?php
    $image = get_field("bengo_sub_image1");
    if ($image["url"] != "") {
  ?>
  <div class="panel panel-primary">
    <div class="panel-heading"><?php the_field("bengo_name"); ?>院内写真</div>
    <div class="panel-body">
      <div class="row">

        <div class="columns small-3">
          <div class="thumbnail">
            <?php
              $image = get_field("bengo_sub_image1");
              if ($image["url"] != "") {
                echo '<img src="'.$image["sizes"]["thumbnail"].'" width="192" />';
              }
            ?>
          </div>
        </div>

        <div class="columns small-3">
          <div class="thumbnail">
            <?php
              $image = get_field("bengo_sub_image2");
              if ($image["url"] != "") {
                echo '<img src="'.$image["sizes"]["thumbnail"].'" width="192" />';
              }
            ?>
          </div>
        </div>

        <div class="columns small-3">
          <div class="thumbnail">
            <?php
              $image = get_field("bengo_sub_image3");
              if ($image["url"] != "") {
                echo '<img src="'.$image["sizes"]["thumbnail"].'" width="192" />';
              }
            ?>
          </div>
        </div>

        <div class="columns small-3">
          <div class="thumbnail">
            <?php
              $image = get_field("bengo_sub_image4");
              if ($image["url"] != "") {
                echo '<img src="'.$image["sizes"]["thumbnail"].'" width="192" />';
              }
            ?>
          </div>
        </div>

      </div>
    </div>
  </div>


  <?php } ?>
  <?php
    $url = get_field("bengo_movie1");
    if ($url != "") {
  ?>
  <div class="panel panel-primary">
    <div class="panel-heading">動画で学ぶ交通事故治療</div>
    <div class="panel-body">
      <div class="row">

        <div class="columns small-4">
          <div class="thumbnail">
            <?php
              $url = get_field("bengo_movie1");
              if ($url != "") {
                $url = preg_replace('/http:\/\/youtu.be/','//www.youtube.com/embed',$url);
                echo '<iframe width="269" height="200" src="'.$url.'" frameborder="0" allowfullscreen></iframe>';
              }
            ?>
          </div>
        </div>

        <?php
          $url = get_field("bengo_movie2");
          if ($url != "") {
            $url = preg_replace('/http:\/\/youtu.be/','//www.youtube.com/embed',$url);
        ?>
        <div class="columns small-4 end">
            <div class="thumbnail">
              <iframe width="269" height="200" src="<?php echo $url ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        <?php } ?>

        <?php
          $url = get_field("bengo_movie3");
          if ($url != "") {
            $url = preg_replace('/http:\/\/youtu.be/','//www.youtube.com/embed',$url);
        ?>
        <div class="columns small-4">
            <div class="thumbnail">
              <iframe width="269" height="200" src="<?php echo $url ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <?php } ?> -->

<?php endif; ?>
