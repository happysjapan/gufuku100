<article id="post-<?php the_ID(); ?>" class="small-12 columns">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="panel_news">
    <div class="panel_news--link align-middle row">
      <div class="shrink columns">
        <time class="panel_news--date"><?php echo get_the_date('Y-m-d'); ?></time>
      </div>

      <div class="panel_news--title--holder columns">
        <h2 class="panel_news--title"><?php the_title(); ?></h2>
      </div>
    </div>
  </a>
</article>
