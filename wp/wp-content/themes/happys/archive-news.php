<?php get_header();
  global $query_string;
  $queried_object = get_queried_object();

  if( isset($_GET['y']) && $_GET['y'] != '' ) {
    $displayed_year = htmlspecialchars($_GET['y']).'年';
    function filter_where($where = '') {
      $year = htmlspecialchars($_GET['y']);
      $year_start = $year.'-01-01';
      $year_end = $year.'-12-31';
      $where .= " AND post_date >= '$year_start' AND post_date <= '$year_end'";
      return $where;
    }
  }
  else {
    $displayed_year = date("Y").'年';
    function filter_where($where = '') {
      $year = date("Y");
      $year_start = $year.'-01-01';
      $where .= " AND post_date >= '$year_start'";
      return $where;
    }
  }

  add_filter('posts_where', 'filter_where');
  parse_str($query_string, $query_array);

  $paged = get_query_var( 'paged' );
  $custom_args = array(
    'posts_per_page' => -1,
    'post_type' => 'news',
    'post_status' => 'publish',
    'order' => 'DESC',
    'has_password' => false,
    'orderby' => 'date',
    'paged' => $paged
  );
  $custom_args = array_merge($query_array, $custom_args);
  $wp_query = new WP_Query($custom_args);
?>

<div class="row">
  <div class="columns breadcrumbs--top">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<div class="page_wrapper">
  <div class="row">
    <section class="main small-12 medium-9 columns">
      <h1 class="main_title"><?php echo $queried_object->labels->name; ?></h1>
      <ul class="row">

        <?php if($wp_query->have_posts()) :
          while($wp_query->have_posts()) : the_post(); ?>
            <?php get_template_part( 'includes/category', 'news-panel' ); ?>
          <?php endwhile; ?>

          <div class="pagination--holder">
            <?php if (function_exists(custom_pagination)) {
                custom_pagination($wp_query->max_num_pages,"",$paged);
              } ?>
          </div>
        <?php endif; ?>
      </ul>
    </section>

    <aside class="aside small-12 medium-3 columns">
      <?php
      $query = "
      SELECT DISTINCT YEAR(post_date)
      FROM $wpdb->posts
      WHERE post_type = 'news' AND post_status = 'publish'
      ORDER BY post_date DESC
      ";
      $years = $wpdb->get_col($query);
      ?>
      <h3 class="aside--title">Archives</h3>
      <ul class="aside--list">
        <?php foreach($years as $year) : ?>
          <li class="aside--list_item"><a href="<?php echo get_post_type_archive_link( 'news' ); ?>?y=<?php echo $year; ?>" class="aside--link"><?php echo $year; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </div>

</div>

<div class="row">
  <div class="columns breadcrumbs--bottom">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<?php get_footer(); ?>
