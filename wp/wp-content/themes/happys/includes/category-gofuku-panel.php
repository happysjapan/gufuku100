<article id="post-<?php the_ID(); ?>" class="panel row">
    <div class=" gofuku_panel columns">
      <div class="panel--header row">

          <h3 class="panel--title columns"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>

      </div>
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

          <div class="panel--tags panel--terms">　
            <!-- 代表名 -->
              <?php
              $primary_tags = wp_get_post_tags( get_the_id());
              foreach ($primary_tags as $tag) { ?>
                <p class="panel--tag">
                  代表名：<a class="panel--tag-link" href="<?php echo get_term_link( $tag->term_id ); ?> ">
                    <?php echo $tag->name; ?>
                  </a>
                </p>
              <?php } ?>
          </div>
        </div>

        <div class="medium-9 columns">
         <div class="panel--details">
             <h4 class="panel--details--title">100選ポイント</h4>
         </div>
         <p class="panel--details--comment"><?php the_field(""); ?></p>
         <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="panel--articleLink">詳しく見る</a>
        </div>
      </div>

    </div>
</article>
