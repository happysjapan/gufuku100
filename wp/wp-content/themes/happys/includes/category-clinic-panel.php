<article id="post-<?php the_ID(); ?>" class="panel clinic-panel">
  <div class="row">
    <div class="medium-3 columns">
      <?php
      if( get_field('clinic_logo') ){ ?>
        <img class="panel--thumbnail" src="<?php echo get_field('clinic_logo')["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
      <?php } else if( get_field('iincho_image') ) { ?>
        <img class="panel--thumbnail" src="<?php echo get_field('iincho_image')["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img class="panel--thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php the_title(); ?>" />
      <?php } ?>

      <div class="panel--categories panel--terms">
        <?php the_category(); ?>
      </div>
      <div class="panel--tags panel--terms">
        <ul>
          <?php
          $primary_tags = wp_get_post_tags( get_the_id());
          foreach ($primary_tags as $tag) { ?>
            <li class="panel--tag">
              <a class="panel--tag-link" href="<?php echo get_term_link( $tag->term_id ); ?> ">
                <?php echo $tag->name; ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <div class="medium-9 columns">
      <div class="panel--details">
        <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link">
          <h3 class="panel--title"><?php the_title(); ?></h3>
        </a>
        <div class="panel--intro">
          <div class="row">
            <div class="small-8 columns">
              <?php echo get_field('clinic_points'); ?>
            </div>

            <div class="small-4 columns">
              <div class="alert panel--intro--alert">
              <b>お見舞金</b> : <?php echo get_field('bengo_omimai'); ?>円
            </div>
            </div>
          </div>
        </div>
        <table class="panel--table table-bordered">
          <tr>
            <th>院名</th>
            <td><?php echo get_field('bengo_name'); ?></td>
          </tr>
          <tr>
            <th>住所</th>
            <td><?php echo get_field('bengo_address'); ?></td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td><?php echo get_field('bengo_station'); ?></td>
          </tr>

          <tr>
            <th>定休日</th>
            <td><?php echo get_field('bengo_holiday'); ?></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td><?php echo get_field('bengo_open'); ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="panel--button--holder">
    <a href="tel:0120-697-182" title="電話で無料相談" class="button button__lightGreen" onclick="ga('send', 'event', '電話リンク', 'タップ', '一覧ボタン');">電話で無料相談</a>
    <a href="<?php echo home_url(); ?>/contact/?clinic=<?php the_title(); ?>" title="フォームで無料相談" class="button button__blue">フォームで無料相談</a>
  </div>

  <a href="<?php the_permalink(); ?>"  title="詳細ページへ" class="panel--articleLink">▶︎&nbsp;詳細ページへ</a>
</article>
