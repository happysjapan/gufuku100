<div class="searchBox for_clinic">
  <h2>地域・条件から病院／クリニックを探す</h2>
  <div class="inner">

    <?php
    $queried_object = get_queried_object();

    if($queried_object == null) {
      $parent_id = get_category_by_slug('clinic')->term_id;
    }
    else {
      $parent_id = $queried_object->term_id;
    }

    $subcategories_parent = get_category_by_slug('clinic');
    $sub_args = array(
      'parent' => $parent_id,
      'orderby' => 'menu_order'
    );
    $subcategories = get_categories( $sub_args );

    $exclude_ids = array();
    $i=0;
    foreach($subcategories as $subcategory) {
      $exclude_ids[$i] = $subcategory->term_id;
      $i++;
    }

    $primary_tags = get_tags();
    ?>

    <div class="search--list--holder">
      <h4 class="search--list--title">お住まいの地域をお選び下さい</h4>
      <ul class="search--list">
      <?php
        foreach ($subcategories as $subcategory) { ?>
          <li class="search--listitem"><a class="search--list--link" href="<?php echo get_category_link( $subcategory->term_id ); ?>" title="<?php echo $subcategory->name; ?>"><?php echo $subcategory->name; ?></a></li>
        <?php } ?>
      </ul>
    </div>

    <!-- [ #search form ] -->
    <!-- <form method="get" id="searchform" action="<?php echo home_url(); ?>/clinic">
      <div class="select-box">
        <label for ="searchTag" class="search--form--label">条件でお選びください
        <select id="searchTag" name="tag" class="search--form--select">
          <option value="">--</option>
          <?php

            foreach ($primary_tags as $tag_elem) {
              if( wp_specialchars($tag, 1) == $tag_elem->slug ) {
                echo '<option value="'.$tag_elem->slug.'" selected>'.$tag_elem->name.'</option>';
              }
              else {
                echo '<option value="'.$tag_elem->slug.'">'.$tag_elem->name.'</option>';
              }
            }
          ?>
        </select>
        </label>
      </div>

      <input type="hidden" name="post_type" value="clinic" />
      <input type="hidden" name="category_name" value="<?php echo $queried_object->slug; ?>" />
      <input class="topSearch" type="search" placeholder="地域など" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">

      <input class="btn" id="searchsubmit"  type="submit" value="検索する">
    </form> -->
    <!-- [ /#search form ] -->
  </div>
</div>
