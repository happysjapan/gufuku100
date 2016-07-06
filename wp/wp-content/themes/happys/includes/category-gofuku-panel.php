<article id="post-<?php the_ID(); ?>" class="panel row">
    <div class=" gofuku_panel columns">
      <div class="panel--header row">

          <h3 class="panel--title columns"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>

      </div>



      <div class="row">
        <div class="medium-3 columns">
            <img class="panel--thumbnail" src="<?php the_sub_field('medical_list_image')["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />


            <!-- 代表名 -->
          <p>代表名：<?php the_sub_field('medical_list_name'); ?></p>
        </div>

        <div class="medium-9 columns">
          <h2 class="product_panel--title">100選ポイント</h2>
           <?php echo get_field('shop_medical_list'); ?>
           <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="panel--articleLink">詳しく見る</a>
        </div>
      </div>


    </div>

</article>
