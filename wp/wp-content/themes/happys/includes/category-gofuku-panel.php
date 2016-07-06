<article id="post-<?php the_ID(); ?>" class="panel row">
    <div class=" gofuku_panel columns">
      <div class="panel--header row">

          <h3 class="panel--title columns"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>

      </div>
      <div class="row">
        <div class="medium-3 columns">
          <?php
          if( get_field('clinic_logo') ){ ?>
            <img class="panel--thumbnail" src="<?php the_sub_field('medical_list_image')["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
          <?php } else { ?>
            <img class="panel--thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php the_title(); ?>" />
          <?php } ?>

            <!-- 代表名 -->
          <p>代表名：<?php the_sub_field('medical_list_name'); ?></p>
        </div>

        <div class="medium-9 columns">
           <h4 class="panel--details--title block_title">100選ポイント</h4>
           <p class="panel--details--comment"><?php the_sub_field("medical_list_point1"); ?></p>
           <p class="panel--details--comment"><?php the_sub_field("medical_list_point2"); ?></p>
           <p class="panel--details--comment"><?php the_sub_field("medical_list_point3"); ?></p>
           <p class="panel--tab"><?php the_sub_field('medical_area'); ?></p>
           <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="panel--articleLink">詳しく見る</a>
        </div>
      </div>

    </div>
</article>
