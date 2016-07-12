<?php
/*
Plugin Name: Happys plugin
Description: Site specific pluggin adding widgets
Author: Neopa
*/
/* Start Adding Functions Below this Line */

// Creating the widget happys_clinic_date_widget
class happys_clinic_date_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'happys_clinic_date_widget',

    // Widget name will appear in UI
    __('Jiko recommended clinics', 'happys_clinic_date_widget_domain'),

    // Widget description
    array( 'description' => __( 'Get the last clinics created', 'happys_clinic_date_widget_domain' ), )
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )

    // This is where you run the code and display the output ?>
    <?php $post_args = array(
      'posts_per_page'   => 6,
      'post_type'        => 'post',
      'has_password'     => false,
      'orderby'          => 'date',
      'has_password' => false,
      'tag'              => 'recommend',
    	'order'            => 'DESC'
    );
    $the_query = new WP_Query( $post_args ); ?>

    <div class="columns">
      <h3 class="front-widget--title"><?php echo $title; ?></h3>
      <div class="more"><a href="<?php echo home_url(); ?>/clinic?tag=recommend&amp;post_type=clinic&amp;s=" title="もっと見る">もっと見る <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
    </div>


    <div class="sideWidget">
      <ul class="front-widget--list">
        <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="front-widget--item" id="post-<?php echo get_the_id(); ?>">
            <article class="clinic-frontPanel">
              <div class="row">
                <div class="small-12 medium-3 columns">
                  <?php if( get_field('clinic_logo', get_the_id()) ){ ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_field('clinic_logo', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                  <?php } else if( get_field('iincho_image', get_the_id()) ) { ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_field('iincho_image', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php the_title(); ?>" />
                  <?php } ?>
                  <p class="clinic-frontPanel--reward">お見舞金：<?php echo get_field('bengo_omimai'); ?>円</p>
                </div>

                <div class="small-12 medium-9 columns">
                  <a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>">
                    <h3 class="clinic-frontPanel--title"><?php echo the_title(); ?></h3>
                  </a>
                  <table class="clinic-frontPanel--detail table-bordered">
                    <tr>
                      <th>住所</th>
                      <td><?php echo get_field('bengo_address'); ?></td>
                    </tr>
                    <tr>
                      <th>最寄駅</th>
                      <td><?php echo get_field('bengo_station'); ?></td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td><?php echo get_field('bengo_tel'); ?></td>
                    </tr>
                  </table>
                  <a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>" class="clinic-frontPanel--button button">予約治療の希望</a>
                </div>
              </div>
            </article>
          </li>

        <?php endwhile; } else { echo 'No result'; } ?>
      </ul>
    </div>


    <!-- お見舞金が多い -->
    <?php $post_args = array(
      'posts_per_page'   => 3,
      'post_type'        => 'post',
      'has_password'     => false,
      'orderby'          => 'date',
      'has_password' => false,
      'tag'              => 'omimaikin',
    	'order'            => 'DESC'
    );
    $the_query2 = new WP_Query( $post_args ); ?>
    <div class="columns">
      <h3 class="front-widget--title">お見舞金が多い整骨院・接骨院・整体・鍼灸院</h3>
      <div class="more"><a href="<?php echo home_url(); ?>/clinic?tag=omimaikin&amp;post_type=clinic&amp;s=" title="もっと見る">もっと見る <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
    </div>


    <div class="sideWidget">
      <ul class="front-widget--list">
        <?php if ( $the_query2->have_posts() ) { while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>

          <li class="front-widget--item" id="post-<?php echo get_the_id(); ?>">
            <article class="clinic-frontPanel">
              <div class="row">
                <div class="small-12 medium-3 columns">
                  <?php if( get_field('clinic_logo', get_the_id()) ){ ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_field('clinic_logo', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                  <?php } else if( get_field('iincho_image', get_the_id()) ) { ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_field('iincho_image', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img class="clinic-frontPanel--image" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php the_title(); ?>" />
                  <?php } ?>
                  <p class="clinic-frontPanel--reward">お見舞金：<?php echo get_field('bengo_omimai'); ?>円</p>
                </div>

                <div class="small-12 medium-9 columns">
                  <a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>">
                    <h3 class="clinic-frontPanel--title"><?php echo the_title(); ?></h3>
                  </a>
                  <table class="clinic-frontPanel--detail table-bordered">
                    <tr>
                      <th>住所</th>
                      <td><?php echo get_field('bengo_address'); ?></td>
                    </tr>
                    <tr>
                      <th>最寄駅</th>
                      <td><?php echo get_field('bengo_station'); ?></td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td><?php echo get_field('bengo_tel'); ?></td>
                    </tr>
                  </table>
                  <a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>" class="clinic-frontPanel--button button">予約治療の希望</a>
                </div>
              </div>
            </article>
          </li>

        <?php endwhile; } else { echo 'No result'; } ?>
      </ul>
    </div>


    <?php echo $args['after_widget'];
  }

  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'happys_clinic_date_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
  <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
} // Class happys_clinic_date_widget ends here




// Creating the widget happys_post_widget
class happys_post_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'happys_post_widget',

    // Widget name will appear in UI
    __('Happys post list', 'happys_post_widget_domain'),

    // Widget description
    array( 'description' => __( 'Display jidans list', 'happys_post_widget_domain' ), )
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $post_type = $instance[ 'post_type' ];
    $count = esc_attr($instance['count']);
    $with_image = $instance[ 'with_image' ];
    $with_date = $instance[ 'with_date' ];
    if ( empty( $post_type ) ) {
      $post_type = 'post';
    }
    if ( empty( $count ) ) {
      $count = 5;
    }
    if ( empty( $with_image ) ) {
      $with_image = false;
    }
    if ( empty( $with_date ) ) {
      $with_date = false;
    }
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )

    // This is where you run the code and display the output ?>
    <?php
    $post_args = array(
      'posts_per_page'	=> $count,
      'post_type'        => $post_type,
      'orderby'			=> 'date',
      'has_password' => false,
      'order'				=> 'DESC'
    );
    $the_query = new WP_Query( $post_args ); ?>


  <?php if( $post_type != "post" ){ ?>
    <a href="<?php echo get_post_type_archive_link($post_type); ?>" title="<?php echo $title; ?>"><h3 class="aside--title"><?php echo $title; ?></h3></a>
  <?php } else { ?>
    <a href="<?php echo get_category_link(get_category_by_slug('clinic')->term_id); ?>" title="<?php echo $title; ?>"><h3 class="aside--title"><?php echo $title; ?></h3></a>
  <?php } ?>

  <div class="sideWidget jidanList_wrapper">
      <div class="inner">
        <ul class="aside--list">
          <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <li class="aside--item" id="post-<?php echo get_the_id(); ?>">
                <a class="aside--link" href="<?php echo get_the_permalink(); ?>">
                  <div class="row align-middle">
                    <?php
                    if( $with_image ){ ?>
                      <div class="small-3 columns">
                        <?php if( get_field('clinic_logo', get_the_id()) ){ ?>
                          <img class="aside--item--image" src="<?php echo get_field('clinic_logo', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                        <?php } else if( get_field('iincho_image', get_the_id()) ) { ?>
                          <img class="aside--item--image" src="<?php echo get_field('iincho_image', get_the_id())["sizes"]["thumbnail"]; ?>" alt="<?php the_title(); ?>" />
                        <?php } else { ?>
                          <img class="aside--item--image" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                      </div>
                      <div class="small-9 columns">

                    <?php } else if( $with_date ){ ?>
                      <div class="columns shrink">
                        <time class="aside--item--date"><?php echo get_the_date('Y-m-d'); ?></time>
                      </div>
                      <div class="columns">

                    <?php }
                    else { ?>
                      <div class="small-12 columns">
                    <?php } ?>
                        <h4 class="aside--item--title"><?php echo the_title(); ?></h4>
                      </div>
                  </div>
                 </a>
              </li>

          <?php endwhile; } else { echo 'No result'; } ?>
        </ul>
        <?php if( $post_type != "post" ){ ?>
          <a class="aside--more" href="<?php echo get_post_type_archive_link($post_type); ?>" title="もっと見る">もっと見る <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          <?php } else { ?>
          <a class="aside--more" href="<?php echo get_category_link(get_category_by_slug('clinic')->term_id); ?>" title="もっと見る">もっと見る <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        <?php } ?>

      </div>

    </div>

    <?php echo $args['after_widget'];
  }

  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'happys_post_widget_domain' );
    }

    if ( isset( $instance[ 'count' ] ) ) {
      $count = esc_attr($instance['count']);
    }
    else {
      $count = __( '5', 'happys_post_widget_domain' );
    }

    if ( isset( $instance[ 'post_type' ] ) ) {
      $post_type = $instance[ 'post_type' ];
    }
    else {
      $post_type = __( 'post', 'happys_post_widget_domain' );
    }

    if ( isset( $instance[ 'with_image' ] ) ) {
      $with_image = $instance[ 'with_image' ];
    }
    else {
      $with_image = __( '0', 'happys_post_widget_domain' );
    }

    if ( isset( $instance[ 'with_date' ] ) ) {
      $with_date = $instance[ 'with_date' ];
    }
    else {
      $with_date = __( '0', 'happys_post_widget_domain' );
    }

    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('count');  ?>"><?php _e('Display count'); ?>:</label><br/>
  		<input type="number" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $count; ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'post_type' ); ?>"><?php _e( 'Post type:' ); ?></label>
      <select name="<?php echo $this->get_field_name('post_type'); ?>">
          <option value="post" <?php if($instance['post_type']  == 'post') echo 'selected="selected"'; ?>>Clinic</option>
        <?php
          $post_types = get_post_types( array('public'=> true, '_builtin' => false),'names');
          foreach ($post_types as $type) { ?>
            <option value="<?php echo $type; ?>" <?php if($instance['post_type'] == $type) echo 'selected="selected"'; ?>><?php echo $type; ?></option>
        <?php }
        ?>
      </select>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'with_image' ); ?>"><?php _e( 'With image:' ); ?></label>
      <input id="<?php echo esc_attr( $this->get_field_id( 'with_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'with_image' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $instance[ 'with_image' ] ); ?> />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'with_date' ); ?>"><?php _e( 'Display date:' ); ?></label>
      <input id="<?php echo esc_attr( $this->get_field_id( 'with_date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'with_date' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $instance[ 'with_date' ] ); ?> />
    </p>
  <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
    $instance['post_type'] = ( ! empty( $new_instance['post_type'] ) ) ? strip_tags( $new_instance['post_type'] ) : '';
    $instance['with_image'] = ( ! empty( $new_instance['with_image'] ) ) ? strip_tags( $new_instance['with_image'] ) : '';
    $instance['with_date'] = ( ! empty( $new_instance['with_date'] ) ) ? strip_tags( $new_instance['with_date'] ) : '';
    return $instance;
  }
}
// Class happys_post_widget ends here





// Creating the widget happys_category_widget
class happys_category_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'happys_category_widget',

    // Widget name will appear in UI
    __('Happys category list', 'happys_category_widget_domain'),

    // Widget description
    array( 'description' => __( 'Display jidans list', 'happys_category_widget_domain' ), )
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $post_type = $instance[ 'post_type' ];
    if ( empty( $post_type ) ) {
      $post_type = 'post';
    }
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )

    // This is where you run the code and display the output ?>
    <?php
    $cat_slug = $post_type.'-cat';

    $terms = get_terms( $cat_slug, array(
      'hide_empty' => false,
    ) );
  ?>

  <h3 class="aside--title"><?php echo $title; ?></h3>

  <div class="sideWidget jidanList_wrapper">
      <div class="inner">
        <ul class="aside--list">
          <?php foreach ( $terms as $term ) {
            if( $term->slug != $post_type ){ ?>
             <li class="aside--item" id="post-<?php echo $term->term_id; ?>">
               <a class="aside--link" href="<?php echo get_category_link($term->term_id); ?>">
                 <div class="row">
                   <div class="small-12 columns">
                     <h4 class="aside--item--title"><?php echo $term->name; ?></h4>
                   </div>
                 </div>
                </a>
             </li>
          <?php } } ?>
        </ul>

      </div>

    </div>

    <?php echo $args['after_widget'];
  }

  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'happys_category_widget_domain' );
    }

    if ( isset( $instance[ 'post_type' ] ) ) {
      $post_type = $instance[ 'post_type' ];
    }
    else {
      $post_type = __( 'post', 'happys_category_widget_domain' );
    }

    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'post_type' ); ?>"><?php _e( 'Post type:' ); ?></label>
      <select name="<?php echo $this->get_field_name('post_type'); ?>">
          <option value="post" <?php if($instance['post_type']  == 'post') echo 'selected="selected"'; ?>>Clinic</option>
        <?php
          $post_types = get_post_types( array('public'=> true, '_builtin' => false),'names');
          foreach ($post_types as $type) { ?>
            <option value="<?php echo $type; ?>" <?php if($instance['post_type'] == $type) echo 'selected="selected"'; ?>><?php echo $type; ?></option>
        <?php }
        ?>
      </select>
    </p>
  <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['post_type'] = ( ! empty( $new_instance['post_type'] ) ) ? strip_tags( $new_instance['post_type'] ) : '';
    return $instance;
  }
}
// Class happys_category_widget ends here










// Creating the widget happys_image_widget
class happys_image_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'happys_image_widget',

    // Widget name will appear in UI
    __('Happys category list', 'happys_image_widget_domain'),

    // Widget description
    array( 'description' => __( 'Display jidans list', 'happys_image_widget_domain' ), )
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $post_type = $instance[ 'post_type' ];
    if ( empty( $post_type ) ) {
      $post_type = 'post';
    }
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )

    // This is where you run the code and display the output ?>
    <?php
    $cat_slug = $post_type.'-cat';

    $terms = get_terms( $cat_slug, array(
      'hide_empty' => false,
    ) );
  ?>

  <h3 class="aside--title"><?php echo $title; ?></h3>

  <div class="sideWidget jidanList_wrapper">
      <div class="inner">
        <ul class="aside--list">
          <?php foreach ( $terms as $term ) {
            if( $term->slug != $post_type ){ ?>
             <li class="aside--item" id="post-<?php echo $term->term_id; ?>">
               <a class="aside--link" href="<?php echo get_category_link($term->term_id); ?>">
                 <div class="row">
                   <div class="small-12 columns">
                     <h4 class="aside--item--title"><?php echo $term->name; ?></h4>
                   </div>
                 </div>
                </a>
             </li>
          <?php } } ?>
        </ul>

      </div>

    </div>

    <?php echo $args['after_widget'];
  }

  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'happys_image_widget_domain' );
    }

    if ( isset( $instance[ 'post_type' ] ) ) {
      $post_type = $instance[ 'post_type' ];
    }
    else {
      $post_type = __( 'post', 'happys_image_widget_domain' );
    }

    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'post_type' ); ?>"><?php _e( 'Post type:' ); ?></label>
      <select name="<?php echo $this->get_field_name('post_type'); ?>">
          <option value="post" <?php if($instance['post_type']  == 'post') echo 'selected="selected"'; ?>>Clinic</option>
        <?php
          $post_types = get_post_types( array('public'=> true, '_builtin' => false),'names');
          foreach ($post_types as $type) { ?>
            <option value="<?php echo $type; ?>" <?php if($instance['post_type'] == $type) echo 'selected="selected"'; ?>><?php echo $type; ?></option>
        <?php }
        ?>
      </select>
    </p>
  <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['post_type'] = ( ! empty( $new_instance['post_type'] ) ) ? strip_tags( $new_instance['post_type'] ) : '';
    return $instance;
  }
}
// Class happys_image_widget ends here










// Register and load the widget
function happys_load_widget() {
	register_widget( 'happys_clinic_date_widget' );
  register_widget( 'happys_post_widget' );
  register_widget( 'happys_category_widget' );
  register_widget( 'happys_image_widget' );
}
add_action( 'widgets_init', 'happys_load_widget' );

/* Stop Adding Functions Below this Line */
?>
