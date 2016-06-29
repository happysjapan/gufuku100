<?php get_header();

$queried_object = get_queried_object();
$post_type = get_post_type();

if ( is_tax() ) {
  $taxonomy   = $wp_query->query_vars['taxonomy'];
  $term_slug  = $wp_query->query_vars['term'];
  $taxonomies = get_the_taxonomies();

  if ( isset( $taxonomy ) && isset( $term_slug ) ):
    $term = get_term_by( 'slug', $term_slug, $taxonomy );
  endif;
}
?>
qwe
<!-- [ #container ] -->
<div class="page--inner row">
  <div class="page--main main_edition medium-8 columns">

  <?php if(isset($term)){ ?>
    <h1 class="category--title">検索結果：<?php echo $term->name; ?></h1>
    <div class="category-description">
      <?php echo $term->description; ?>
    </div>
  <?php } ?>

  <!-- [ #content ] -->
  <section id="content" class="content wide">

    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      global $query_string;
      parse_str($query_string, $query_array);


      $custom_args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'orderby' => 'date',
        'posts_per_page' => 10,
        'paged' => $paged
      );
      $custom_args = array_merge($query_array, $custom_args);
      // $custom_query = get_posts( $custom_args );
      $custom_query = new WP_Query( $custom_args );

      ?>

      <!-- the loop -->
      <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <?php get_template_part( 'includes/category', 'default-panel' ); ?>
        <!-- .entry-content -->
      <?php endwhile; ?>
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

<div class="medium-4 aside--holder columns">
  <aside class="aside">
    <?php dynamic_sidebar( 'aside-widget-area' ); ?>
  </aside>
</div>
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>
