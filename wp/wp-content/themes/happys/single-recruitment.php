<?php get_header(); ?>
  <div class="page_wrapper">
    <div class="row">
      <div class="column">

        <h3 class="row columns"><?php the_title(); ?></h3>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>

      </div>
    </div>


    　<?php while(have_rows('recruitment')): the_row(); ?>

    <div class="row recruitment">
        <div class="columns small-12 medium-4">
          <!-- thumbnail -->
          <img src="<?php the_sub_field('recruitment_thumbnail'); ?>" alt="<?php the_sub_field('recruitment_name'); ?>">
        </div>

        <article class="colums small-12 medium-8">
          <h4 class="recruitment__name"><?php the_sub_field('recruitment_name'); ?></h4>
          <!-- テキスト -->
          <p class="recruitment__text"><?php the_sub_field('recruitment_text'); ?></p>
        </article>

        <article　class="row columns">
          <h5>求人者へのメッセージ</h5>

        </article>

    </div>

    <?php endwhile; ?>

  </div>

<?php get_footer(); ?>
