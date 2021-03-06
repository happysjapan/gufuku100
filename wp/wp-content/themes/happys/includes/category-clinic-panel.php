<article id="post-<?php the_ID(); ?>" class="row">
  <div class="columns">
    <div class="panel">

      <div class="panel--header row">
        <div class="small-12 columns">
          <h3 class="panel--title"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>
        </div>
      </div>

      <div class="panel--main row">
        <div class="small-12 columns">
          <div class="row">
            <div class=" small-12 medium-3 columns">
              <?php $thumbnail = get_field('clinic_top_image'); ?>
              <?php if( !$thumbnail ){
                $thumbnail_url = get_template_directory_uri().'/images/thumbnail_default.jpg';
              } else {
                $thumbnail_url = $thumbnail['sizes']['thumbnail'];
              } ?>

              <img class="panel--thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />

                <!-- 代表名 -->
              <p>代表名：<?php echo get_field('clinic_representative'); ?></p>
            </div>

            <div class=" small-12 medium-9 columns">
               <h2 class="panel--main--title main_title">100選ポイント</h2>
               <div class="panel--main--content">
                 <?php echo get_field('clinic_points'); ?>
               </div>

               <p class="panel--main--area">エリア：<?php echo get_field('clinic_area'); ?></p>

               <div class="button__panel--holder">
                 <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="button button__panel">詳しく見る</a>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
