<?php
/*
  Template Name: Page Map
*/
get_header(); ?>
<?php
	function clinicCategoryLink($type = "tokyo")
	{
			return get_category_link(get_category_by_slug($type)->term_id);
	}
?>

<div class="row">
	<div class="columns">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<div class="page_wrapper page_map">
	<div class="row">
		<div class="columns">
      <h1 class="main_title">全国のむちうち治療院100選</h1>

			<div class="japan_map--holder">
				<!-- Area lists -->
				<div class="japan_map--area--holder row">

					<div class="columns small-6 medium-4 japan_map--area area_1">
						<a href="<?php echo clinicCategoryLink('hokkaido_tohoku'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">
							北海道・東北</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">北海道</li>
								<li class="japan_map--area--listitem columns small-6">青森</li>
								<li class="japan_map--area--listitem columns small-6">岩手</li>
								<li class="japan_map--area--listitem columns small-6">秋田</li>
								<li class="japan_map--area--listitem columns small-6">宮城</li>
								<li class="japan_map--area--listitem columns small-6">山形</li>
								<li class="japan_map--area--listitem columns small-6">福島</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_2">
						<a href="<?php echo clinicCategoryLink('kanto'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">関東</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">東京</li>
								<li class="japan_map--area--listitem columns small-6">千葉</li>
								<li class="japan_map--area--listitem columns small-6">埼玉</li>
								<li class="japan_map--area--listitem columns small-6">茨城</li>
								<li class="japan_map--area--listitem columns small-6">群馬</li>
								<li class="japan_map--area--listitem columns small-6">栃木</li>
								<li class="japan_map--area--listitem columns small-6">神奈川</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_3">
						<a href="<?php echo clinicCategoryLink('chubu'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">中部</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">新潟</li>
								<li class="japan_map--area--listitem columns small-6">富山</li>
								<li class="japan_map--area--listitem columns small-6">石川</li>
								<li class="japan_map--area--listitem columns small-6">福井</li>
								<li class="japan_map--area--listitem columns small-6">静岡</li>
								<li class="japan_map--area--listitem columns small-6">山梨</li>
								<li class="japan_map--area--listitem columns small-6">愛知</li>
								<li class="japan_map--area--listitem columns small-6">長野</li>
								<li class="japan_map--area--listitem columns small-6">岐阜</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_4">
						<a href="<?php echo clinicCategoryLink('kinki'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">近畿</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">大阪</li>
								<li class="japan_map--area--listitem columns small-6">京都</li>
								<li class="japan_map--area--listitem columns small-6">兵庫</li>
								<li class="japan_map--area--listitem columns small-6">奈良</li>
								<li class="japan_map--area--listitem columns small-6">三重</li>
								<li class="japan_map--area--listitem columns small-6">滋賀</li>
								<li class="japan_map--area--listitem columns small-6">和歌山</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_5">
						<a href="<?php echo clinicCategoryLink('chugoku'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">中国</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">鳥取</li>
								<li class="japan_map--area--listitem columns small-6">島根</li>
								<li class="japan_map--area--listitem columns small-6">広島</li>
								<li class="japan_map--area--listitem columns small-6">岡山</li>
								<li class="japan_map--area--listitem columns small-6">山口</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_6">
						<a href="<?php echo clinicCategoryLink('shikoku'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">四国</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">香川</li>
								<li class="japan_map--area--listitem columns small-6">徳島</li>
								<li class="japan_map--area--listitem columns small-6">愛知</li>
								<li class="japan_map--area--listitem columns small-6">高知</li>
							</ul>
						</a>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_7">
						<a href="<?php echo clinicCategoryLink('kyushu_okinawa'); ?>" class="japan_map--area--link" title="">
							<h3 class="japan_map--area--title">九州・沖縄</h3>
							<ul class="japan_map--area--list row">
								<li class="japan_map--area--listitem columns small-6">長崎</li>
								<li class="japan_map--area--listitem columns small-6">佐賀</li>
								<li class="japan_map--area--listitem columns small-6">熊本</li>
								<li class="japan_map--area--listitem columns small-6">福岡</li>
								<li class="japan_map--area--listitem columns small-6">大分</li>
								<li class="japan_map--area--listitem columns small-6">宮崎</li>
								<li class="japan_map--area--listitem columns small-6">鹿児島</li>
								<li class="japan_map--area--listitem columns small-6">沖縄</li>
							</ul>
						</a>
					</div>
				</div>


				<div class="japan_map--icon--holder">
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('hokkaido_tohoku'); ?>">
						<svg class="japan_map--icon icon-japan-1"><use xlink:href="#icon-japan-1"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('kanto'); ?>">
						<svg class="japan_map--icon icon-japan-2"><use xlink:href="#icon-japan-2"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('chubu'); ?>">
						<svg class="japan_map--icon icon-japan-3"><use xlink:href="#icon-japan-3"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('kinki'); ?>">
						<svg class="japan_map--icon icon-japan-4"><use xlink:href="#icon-japan-4"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('chugoku'); ?>">
						<svg class="japan_map--icon icon-japan-5"><use xlink:href="#icon-japan-5"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('shikoku'); ?>">
						<svg class="japan_map--icon icon-japan-6"><use xlink:href="#icon-japan-6"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('kyushu_okinawa'); ?>">
						<svg class="japan_map--icon icon-japan-7"><use xlink:href="#icon-japan-7"></use></svg>
					</a>
				</div>

			</div>

		</div>
	</div>

	<div class="row columns">
		<div class="front_main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>

</div>


<?php get_footer(); ?>
