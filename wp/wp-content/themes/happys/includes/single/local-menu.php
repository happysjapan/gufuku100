
<?php
$queried_object = get_queried_object();

echo "<pre>";
var_dump(get_post_type());
?>


<?php if ('post' == get_post_type()) {
  echo 'class = "active"';
} ?>


<?php if ('product' == get_post_type()) {
  echo 'class = "active"';
} ?>


<?php if ('recruitment' == get_post_type()) {
  echo 'class = "active"';
} ?>




<div class="row">
  <div class="columns">

    <ul class="nav nav-pills button-group">
      <li class="nav-pills--item"><a class="button nav-pills--button" href="<?php the_field(' post '); ?>">呉服店情報</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button" href="<?php the_field(' product '); ?>">取り扱い商品</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button" href="<?php the_field(' recruitment '); ?>">求人情報</a></li>
    </ul>
  </div>
</div>
