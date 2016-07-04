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

<!-- [ #container ] -->
<div id="container" class="innerBox page__wide">

      <h1 class="page_title"><?php echo $queried_object->name; ?></h1>

  <!-- [ #content ] -->
  <section id="content" class="content wide">
    <p class="searchDescription"><?php echo do_shortcode('[contentblock id=office_description]'); ?></p>
    <!-- [ #search ] -->
    <section class="searchArea">
      <!-- <?php get_template_part( 'includes/category', 'clinic-search' ); ?> -->

      <?php echo do_shortcode('[contentblock id=panel_consult]'); ?>
    </section>
    <!-- [ /#search ] -->

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
      	<?php get_template_part( 'includes/category', 'gofuku-panel' ); ?>
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
<!-- [ /#container ] -->

<?php get_footer(); ?>
