

<?php if ('post' == get_post_type()) {
  $link_shop = get_the_permalink();
  $link_product = get_the_permalink(get_field('product_page')->ID);
  $link_recruitment = get_the_permalink(get_field('recruitment_page')->ID);
  $shop_active = 'active';
} else if ('product' == get_post_type()) {
  $link_shop = get_the_permalink(get_field('product_shop_page')->ID);
  $link_product = get_the_permalink();
  $link_recruitment = get_the_permalink(get_field('product_recruitment_page')->ID);
  $product_active = 'active';
} else if ('recruitment' == get_post_type()) {
  $link_shop = get_the_permalink(get_field('recruitment_shop_page')->ID);
  $link_product = get_the_permalink(get_field('recruitment_product_page')->ID);
  $link_recruitment = get_the_permalink();
  $recruitment_active = 'active';
} ?>




<div class="row">
  <div class="columns">

    <ul class="nav nav-pills button-group">
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $shop_active; ?>" href="<?php echo $link_shop; ?>">呉服店情報</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $product_active; ?>" href="<?php echo $link_product; ?>">取り扱い商品</a></li>
      <li class="nav-pills--item"><a class="button nav-pills--button <?php echo $recruitment_active; ?>" href="<?php echo $link_recruitment; ?>">求人情報</a></li>
    </ul>
  </div>
</div>
