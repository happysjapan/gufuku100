<?php get_header();
  global $query_string;

  $cat_list = get_the_category();
  $current_cat = null;
  $cat_object = get_queried_object();

  foreach ($cat_list as $cat) {
    if( $cat->slug != 'clinic') {
      $cat_description = $cat->category_description;
      $cat_title = $cat->name.'の交通事故対応の病院・整骨院・接骨院・整体・鍼灸院検索';
    }
  }
?>

<!-- [ #container ] -->
<div id="container" class="innerBox page__wide">
  <?php
    if(isset($cat_object)) {
      echo '<h1 class="page--title">'.$cat_object->name.'の交通事故対応の病院・整骨院・接骨院・整体・鍼灸院検索</h1>';
      echo '<div class="pageDescription">'.$cat_object->description.'</div>';
    }
    else { ?>
      <h1 class="page--title"><?php echo esc_html($biz_vektor_options['postLabelName']); ?></h1>
  <?php } ?>

  <!-- [ #content ] -->
  <section id="content" class="content wide">
    <!-- [ #search ] -->
    <section class="searchArea">
      <?php get_template_part( 'includes/category', 'clinic-search' ); ?>
    </section>
    <!-- [ /#search ] -->

    <?php
      parse_str($query_string, $query_array);

      $custom_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'has_password' => false,
        'orderby' => 'date',
        'posts_per_page' => 5,
        'paged' => $paged
      );
      $custom_args = array_merge($query_array, $custom_args);
      $myposts = get_posts( $custom_args );
      ?>
      <?php if ( $myposts ) { ?>
        <!-- the loop -->
        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<?php get_template_part( 'includes/category', 'clinic-panel' ); ?>
        <?php endforeach;
        wp_reset_postdata();?>
        <!-- end of the loop -->

        <!-- pagination -->
        <?php
          if (function_exists(custom_pagination)) {
            custom_pagination($custom_query->max_num_pages,"",$paged);
          }
        ?>
        <!-- end of pagination -->
      <?php
      }
      else {
        echo 'お探しの検索は該当がありません。';
      }
      ?>
  </section>
  <!-- [ /#content ] -->

</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>
