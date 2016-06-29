
<!-- <?php if (get_field("bg-color")) { ?>
  <div class="lp-head" style="background-image: -ms-linear-gradient(bottom, #FFFFFF 0%, <?php the_field("bg-color"); ?> 100%); background-image: -moz-linear-gradient(bottom, #FFFFFF 0%, <?php the_field("bg-color"); ?> 100%); background-image: -o-linear-gradient(bottom, #FFFFFF 0%, <?php the_field("bg-color"); ?> 100%); background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #FFFFFF), color-stop(1, <?php the_field("bg-color"); ?>)); background-image: -webkit-linear-gradient(bottom, #FFFFFF 0%, <?php the_field("bg-color"); ?> 100%); background-image: linear-gradient(to top, #FFFFFF 0%, <?php the_field("bg-color"); ?> 100%);">

<?php } else { ?>
  <div class="lp-head" style="background-image: -ms-linear-gradient(bottom, #FFFFFF 0%, #FDDDE8 100%); background-image: -moz-linear-gradient(bottom, #FFFFFF 0%, #FDDDE8 100%); background-image: -o-linear-gradient(bottom, #FFFFFF 0%, #FDDDE8 100%); background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #FFFFFF), color-stop(1, #FDDDE8)); background-image: -webkit-linear-gradient(bottom, #FFFFFF 0%, #FDDDE8 100%); background-image: linear-gradient(to top, #FFFFFF 0%, #FDDDE8 100%);">

<?php } ?>

 -->
  <div class="container block-detail--profile block-detail">

    <div class="row">
      <div class="columns small-12 large-6">
        <h1 class="block-detail--profile--title"><?php the_title(); ?></h1>

        <div class="row">
          <div class="columns small-12 medium-5">
            <?php
              $image = get_field("iincho_image");
              if ($image["url"] != "") {
                echo '<p><img src="'.$image["sizes"]["large"].'" width="203" /></p>';
              }
            ?>

            <!-- <div class="pop-lp">
              <?php include (TEMPLATEPATH . '/pop.php'); ?>
            </div> -->

          </div>


          <div class="columns small-12 medium-7">
            <div class="block-detail--profile--copy"><?php the_field("catch_phrase"); ?></div>

            <?php include (TEMPLATEPATH . '/label-tags-circle.php'); ?>

            <!-- <div class="block-detail--profile--reward reward-box">
              <p>お見舞い金 <?php the_field("bengo_omimai"); ?>円支給</p>
            </div> -->

          </div>
        </div>
      </div>

      <!-- <div class="columns small-12 large-6">
        <div class="alert alert-info block-detail--profile--target">
          交通事故によるむち打ち・交通事故後遺症でお困りの方
        </div> -->

        <!-- <div class="row">
          <div class="columns small-4">
            <p><span class="glyphicon glyphicon-phone-alt"></span>ご予約ご相談はこちら</p>
            <p><span class="label label-primary">初めての方もご相談ください</span></p>
          </div>
          <div class="columns small-8 block-detail--profile--tel">
            <p><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field("bengo_tel"); ?></p>
          </div>
        </div> -->

        <!-- <div class="mtop10">
          <?php the_field("open_table"); ?>
        </div> -->

        <!-- <p>
          〒<?php the_field("bengo_zip"); ?>
          <?php the_field("bengo_address"); ?>
        </p> -->
      </div>
    </div>

  </div>



<!--
<div style="border-bottom: 1px solid #FE4E24;">
<div class="container">

<div class="row">
  <div class="col-xs-3">
    <?php
      $image = get_field("clinic_logo");
      if ($image["url"] != "") {
        echo '<img src="'.$image["sizes"]["large"].'" width="203px" style="margin-top:2px;" />';
      } else {
        echo get_field("bengo_name");
      }
    ?>
  </div>
  <div class="col-xs-9">
    <?php include (TEMPLATEPATH . '/local-menu-nav.php'); ?>
  </div>
</div>

</div>
</div>

-->

  <!-- <div class="block-detail--contact block-detail">
      <h2><span class="block-detail--contact--text__stronger">むち打ち</span>・<span class="block-detail--contact--text__stronger">しびれ</span>など<span class="block-detail--contact--text__stronger">交通事故の治療</span>はお任せ下さい。</h2>
      <p class="block-detail--contact--text__bold"><?php the_field("bengo_name"); ?>は、厚生労働省の認定を受けた治療院です。</p>
      <div class="row block-detail--contact--row">
        <div class="columns small-12 medium-7">
          <p class="block-detail--contact--tel">
            <i class="fa fa-phone" aria-hidden="true"></i> <span><?php the_field("bengo_tel"); ?></span>
          </p>
        </div>
        <div class="columns small-12 medium-5"><a href="<?php echo home_url(); ?>/contact?clinic=<?php the_field("bengo_name"); ?>" class="button block-detail--contact--button">フォームでのご予約はこちら</a></div>
      </div>
      <p>お電話でのご予約、またはご来院の際に<span class="block-detail--contact--text__strong">「交通事故病院を見た」</span>と言って頂くと、<br /><span class="block-detail--contact--text__strong">お見舞い金 <?php the_field("bengo_omimai"); ?>円</span>を支給致します。</p>
  </div> -->

  <?php
    $image = get_field("cover_image");
    if ($image["url"] != "") {
      echo '<p><img src="'.$image["sizes"]["large"].'" width="930px" /></p>';
    }
  ?>


  <!-- <div class="block-detail--reason block-detail">
    <h2 class="block-detail--reason--title"><i class="fa fa-check-square-o" aria-hidden="true"></i></span> <?php the_field("bengo_name"); ?>が交通事故の治療で選ばれる5つの理由</h2>
    <p class="block-detail--reason--text"><span class="block-detail--reason--number">1</span><?php the_field("riyu1"); ?></p>
    <p class="block-detail--reason--text"><span class="block-detail--reason--number">2</span><?php the_field("riyu2"); ?></p>
    <p class="block-detail--reason--text"><span class="block-detail--reason--number">3</span><?php the_field("riyu3"); ?></p>
    <p class="block-detail--reason--text"><span class="block-detail--reason--number">4</span><?php the_field("riyu4"); ?></p>
    <p class="block-detail--reason--text"><span class="block-detail--reason--number">5</span><?php the_field("riyu5"); ?></p>
  </div> -->

  <!-- <div class="block-detail--contact block-detail">
      <div class="row block-detail--contact--row">
        <div class="columns small-12 medium-7">
          <p class="block-detail--contact--tel">
            <i class="fa fa-phone" aria-hidden="true"></i> <span><?php the_field("bengo_tel"); ?></span>
          </p>
        </div>
        <div class="columns small-12 medium-5"><a href="<?php echo home_url(); ?>/contact?clinic=<?php the_field("bengo_name"); ?>" class="button block-detail--contact--button">フォームでのご予約はこちら</a></div>
      </div>
      <p>お電話でのご予約、またはご来院の際に<span class="block-detail--contact--text__strong">「交通事故病院を見た」</span>と言って頂くと、<br /><span class="block-detail--contact--text__strong">お見舞い金 <?php the_field("bengo_omimai"); ?>円</span>を支給致します。</p>
  </div> -->


  <hr />

<!--
<div class="row mtop">
  <div class="columns small-6">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/images/finger.png" /> ココ押しポイント</h3>
    <p style="font-size:18px;"><?php the_field("kokooshi"); ?></p>

    <p><img src="<?php echo get_template_directory_uri(); ?>/images/freevoice.jpg" style="width:100px;" /> <big style="color: red; font-weight:bold; font-size:45px; line-height:34px;"><?php the_field("bengo_tel"); ?></big></p>

  </div>
  <div class="columns small-6">
    <img src="<?php echo get_template_directory_uri(); ?>/images/lower_banner.gif" alt="弁護士法人ベリーベスト法律事務所" style="width:450px;" />
  </div>
</div>

<hr />

 -->

<!-- <div class="block-detail--relief block-detail">
  <h2 class="text-center"><span style="font-size:40px; color:#FE4E24;">交通事故治療</span>の安心<span style="font-size:50px; color:#428bca;">3</span>カ条</h2>
  <div class="row" data-equalizer>
    <div class="block-detail--relief--item columns small-12 medium-12 large-4" data-equalizer-watch>
      <div class="block-detail--relief--box row">
        <h3 class="block-detail--relief--title columns small-2 large-12">安心1</h3>
        <div class="block-detail--relief--text columns small-10 large-12"><?php the_field("anshin1"); ?></div>
      </div>
    </div>
    <div class="block-detail--relief--item columns small-12 medium-12 large-4" data-equalizer-watch>
      <div class="block-detail--relief--box row">
        <h3 class="block-detail--relief--title columns small-2 large-12">安心2</h3>
        <div class="block-detail--relief--text columns small-10 large-12"><?php the_field("anshin2"); ?></div>
      </div>
    </div>
    <div class="block-detail--relief--item columns small-12 medium-12 large-4" data-equalizer-watch>
      <div class="block-detail--relief--box row">
        <h3 class="block-detail--relief--title columns small-2 large-12">安心3</h3>
        <div class="block-detail--relief--text columns small-10 large-12"><?php the_field("anshin3"); ?></div>
      </div>
    </div>
  </div>
</div>
<hr /> -->
