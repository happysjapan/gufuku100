<?php get_header();
  global $query_string;

  $queried_object = get_queried_object();
  $args = array( 'parent' => $queried_object->term_id );
  $cat_list = get_categories( $args );
  $current_cat = null;

  foreach ($cat_list as $cat) {
    if( $cat->slug != $queried_object->slug) {
      $cat_description = $cat->category_description;
    }
  }
?>

<div class="row">
  <div class="columns breadcrumbs--top">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<!-- [ #container ] -->
<div id="container" class="page_wrapper">
    <div class="row">
      <div class="columns">
        <h1 class="main_title"><?php echo $queried_object->name; ?></h1>
      </div>
    </div>

    <?php
      parse_str($query_string, $query_array);

      $custom_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'has_password' => false,
        'posts_per_page' => 5,
        'paged' => $paged
      );
      $custom_args = array_merge($query_array, $custom_args);
      $myposts = get_posts( $custom_args );
      ?>

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

  </section>
  <!-- [ /#content ] -->

</div>

<div class="row">
  <div class="columns breadcrumbs--bottom">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>
