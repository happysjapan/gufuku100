

<?php if ('post' == get_post_type()) {
  $link_clinic = get_the_permalink();
  $link_care = get_the_permalink(get_field('care_page')->ID);
  $link_recruitment = get_the_permalink(get_field('recruitment_page')->ID);
  $clinic_active = 'active';
} else if ('care' == get_post_type()) {
  $link_clinic = get_the_permalink(get_field('care_clinic_page')->ID);
  $link_care = get_the_permalink();
  $link_recruitment = get_the_permalink(get_field('care_recruitment_page')->ID);
  $care_active = 'active';
} else if ('recruitment' == get_post_type()) {
  $link_clinic = get_the_permalink(get_field('recruitment_clinic_page')->ID);
  $link_care = get_the_permalink(get_field('recruitment_care_page')->ID);
  $link_recruitment = get_the_permalink();
  $recruitment_active = 'active';
} ?>




<div class="row">
  <div class="columns">

    <ul class="nav nav-pills button-group">
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $clinic_active; ?>" href="<?php echo $link_clinic; ?>">治療院情報</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $care_active; ?>" href="<?php echo $link_care; ?>">治療について</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $recruitment_active; ?>" href="<?php echo $link_recruitment; ?>">求人情報</a></li>
    </ul>
  </div>
</div>
