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
						<a href="#" class="japan_map--area--title--link japan_map--icon--link" title="">
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
						<a href="<?php echo clinicCategoryLink('kanto'); ?>" class="japan_map--area--title--link" title="">
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
						<a href="#" class="japan_map--area--title--link" title=""><h3 class="japan_map--area--title">中部</h3></a>
						<ul class="japan_map--area--list row">
							<li class="japan_map--area--listitem columns small-6"><a href="#">新潟</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">富山</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">石川</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">福井</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">静岡</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">山梨</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">愛知</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">長野</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">岐阜</a></li>
						</ul>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_4">
						<a href="#" class="japan_map--area--title--link" title=""><h3 class="japan_map--area--title">近畿</h3></a>
						<ul class="japan_map--area--list row">
							<li class="japan_map--area--listitem columns small-6"><a href="#">大阪</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">京都</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">兵庫</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">奈良</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">三重</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">滋賀</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">和歌山</a></li>
						</ul>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_5">
						<a href="#" class="japan_map--area--title--link" title=""><h3 class="japan_map--area--title">中国</h3></a>
						<ul class="japan_map--area--list row">
							<li class="japan_map--area--listitem columns small-6"><a href="#">鳥取</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">島根</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">広島</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">岡山</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">山口</a></li>
						</ul>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_6">
						<a href="#" class="japan_map--area--title--link" title=""><h3 class="japan_map--area--title">四国</h3></a>
						<ul class="japan_map--area--list row">
							<li class="japan_map--area--listitem columns small-6"><a href="#">香川</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">徳島</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">愛知</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">高知</a></li>
						</ul>
					</div>

					<div class="columns small-6 medium-4 japan_map--area area_7">
						<a href="#" class="japan_map--area--title--link" title=""><h3 class="japan_map--area--title">九州・沖縄</h3></a>
						<ul class="japan_map--area--list row">
							<li class="japan_map--area--listitem columns small-6"><a href="#">長崎</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">佐賀</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">熊本</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">福岡</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">大分</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">宮崎</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">鹿児島</a></li>
							<li class="japan_map--area--listitem columns small-6"><a href="#">沖縄</a></li>
						</ul>
					</div>
				</div>


				<div class="japan_map--icon--holder">
					<a class="japan_map--icon--link" href="">
						<svg class="japan_map--icon icon-japan-1"><use xlink:href="#icon-japan-1"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="<?php echo clinicCategoryLink('kanto'); ?>">
						<svg class="japan_map--icon icon-japan-2"><use xlink:href="#icon-japan-2"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="">
						<svg class="japan_map--icon icon-japan-3"><use xlink:href="#icon-japan-3"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="">
						<svg class="japan_map--icon icon-japan-4"><use xlink:href="#icon-japan-4"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="">
						<svg class="japan_map--icon icon-japan-5"><use xlink:href="#icon-japan-5"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="">
						<svg class="japan_map--icon icon-japan-6"><use xlink:href="#icon-japan-6"></use></svg>
					</a>
					<a class="japan_map--icon--link" href="">
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

</div>


<?php get_footer(); ?>
