<?php get_header(); ?>

  <div class="row">
    <div class="columns">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="page_wrapper">
    <div class="row">
      <div class="column">
        <h1 class=single_title><?php the_title(); ?></h1>
        <?php get_template_part( 'includes/single/local', 'menu' ); ?>

      </div>
    </div>


    　<?php while(have_rows('recruitment')): the_row(); ?>

    <div class="row clinic_recruitment">
      <div class="columns small-12 medium-4">
        <!-- thumbnail -->
        <img src="<?php echo get_sub_field('recruitment_thumbnail')['sizes']['medium']; ?>" alt="<?php the_sub_field('recruitment_name'); ?>">
      </div>

      <article class="columns small-12 medium-8">
        <h4 class="block_detail--recruitment--title"><?php the_sub_field('recruitment_name'); ?></h4>
        <!-- テキスト -->
        <p class="block_detail--recruitment--text"><?php the_sub_field('recruitment_text'); ?></p>
      </article>
    </div>

    <article class="row">
      <div class="columns">
        <div class="block-detail--recruitment--message">
          <h5 class="block-detail--recruitment--title">求人者へのメッセージ</h5>
          <h6 class="block-detail--recruitment--title"><?php the_field('recruitment_message_title'); ?></h6>
          <p class="block-detail--recruitment--text"><?php the_field('recruitment_message_text'); ?></p>
        </div>
      </div>
    </article>

    <div class="row">
      <div class="columns small-12">
        <h3 id="detail" class="block-detail--recruitment--title">募集要項</h3>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>募集の背景</th>
              <td>
                <?php echo get_field("recruitment_background"); ?>
              </td>
            </tr>
            <tr>
              <th>仕事内容</th>
              <td><?php the_field("recruitment_description"); ?></td>
            </tr>
            <tr>
              <th>求める人材</th>
              <td><?php the_field("recruitment_ideal"); ?></td>
            </tr>
            <tr>
              <th>勤務地</th>
              <td><?php the_field("recruitment_access"); ?></td>
            </tr>
            <tr>
              <th>給与</th>
              <td><?php the_field("recruitment_salary"); ?></td>
            </tr>
            <tr>
              <th>待遇</th>
              <td><?php the_field("recruitment_condition"); ?></td>
            </tr>
            <tr>
              <th>勤務時間</th>
              <td><?php the_field("recruitment_working_time"); ?></td>
            </tr>
            <tr>
              <th>休日・休暇</th>
              <td><?php the_field("recruitment_holiday"); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="columns small-12">
        <h3 id="detail" class="block-detail--recruitment--title">応募</h3>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>応募方法</th>
              <td>
                <?php the_field("recruitment_application"); ?>
              </td>
            </tr>
            <tr>
              <th>連絡先</th>
              <td><?php the_field("recruitment_contact"); ?></td>
            </tr>
            <tr>
              <th>応募受付後の連絡</th>
              <td><?php the_field("recruitment_after_contact"); ?></td>
            </tr>
            <tr>
              <th>採用プロセス</th>
              <td><?php the_field("recruitment_process"); ?></td>
            </tr>
            <tr>
          </tbody>
        </table>
      </div>
    </div>

    <?php endwhile; ?>

    <div class="row">
      <div class="columns">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
