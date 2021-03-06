<?php get_header(); ?>

<div class="row">
  <div class="banner columns">
    <?php echo do_shortcode('[contentblock id=banner]'); ?>
  </div>
</div>

<div class="row">

	<div id="content" class="content frontpage medium-8 columns">
		<div id="content-main" class="content-main">
			<?php echo do_shortcode('[contentblock id=list-pricesample]'); ?>

			<form name="searchform1" id="searchform1" method="get" action="<?php bloginfo( 'url' ); ?>/clinic">
			<div class="areaSearch">
				<h2>全国交通事故治療対応治療院 - 整骨院・接骨院・整体・鍼灸院検索</h2>
				<div class="searchInner">
				<ul class="listP">


					<?php
					    // リンク先URL
						function clinicCategoryLink($type = "tokyo")
						{
						    return get_category_link(get_category_by_slug($type)->term_id);
						}
					?>

					<li><h3>北海道・東北エリア</h3>
					     <ul class="listC">
						 	<li><a href="<?php echo clinicCategoryLink("hokkaido");?>">北海道</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("aomori");?>">青森県</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("iwate");?>">岩手県</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("miyagi");?>">宮城県</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("akita");?>">秋田県</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("yamagata");?>">山形県</a></li>
						 	<li><a href="<?php echo clinicCategoryLink("fukushima");?>">福島県</a></li>
					     </ul>
					</li>
					<li><h3>関西エリア</h3>
					       <ul class="listC">
								   <li><a href="<?php echo clinicCategoryLink("osaka");?>">大阪府</a></li>
								   <li><a href="<?php echo clinicCategoryLink("hyogo");?>">兵庫県</a></li>
								   <li><a href="<?php echo clinicCategoryLink("kyoto");?>">京都府</a></li>
								   <li><a href="<?php echo clinicCategoryLink("shiga");?>">滋賀県</a></li>
								   <li><a href="<?php echo clinicCategoryLink("nara");?>">奈良県</a></li>
								   <li><a href="<?php echo clinicCategoryLink("wakayama");?>">和歌山県</a></li>
							</ul>
					</li>
					<li><h3>甲信越・北陸エリア</h3>
					     <ul class="listC">
								 <li><a href="<?php echo clinicCategoryLink("yamanashi");?>">山梨県</a></li>
								 <li><a href="<?php echo clinicCategoryLink("nigata");?>">新潟県</a></li>
								 <li><a href="<?php echo clinicCategoryLink("nagano");?>">長野県</a></li>
								 <li><a href="<?php echo clinicCategoryLink("toyama");?>">富山県</a></li>
								 <li><a href="<?php echo clinicCategoryLink("ishikawa");?>">石川県</a></li>
								 <li><a href="<?php echo clinicCategoryLink("fukui");?>">福井県</a></li>
							 </ul>
					</li>
					<li><h3>中国・四国エリア</h3>
					      <ul class="listC">
								<li><a href="<?php echo clinicCategoryLink("tottori");?>">鳥取県</a></li>
								<li><a href="<?php echo clinicCategoryLink("shimane");?>">島根県</a></li>
								<li><a href="<?php echo clinicCategoryLink("okayama");?>">岡山県</a></li>
								<li><a href="<?php echo clinicCategoryLink("hiroshima");?>">広島県</a></li>
								<li><a href="<?php echo clinicCategoryLink("yamaguchi");?>">山口県</a></li>
								<li><a href="<?php echo clinicCategoryLink("tokushima");?>">徳島県</a></li>
								<li><a href="<?php echo clinicCategoryLink("kagawa");?>">香川県</a></li>
								<li><a href="<?php echo clinicCategoryLink("ehime");?>">愛媛県</a></li>
								<li><a href="<?php echo clinicCategoryLink("kochi");?>">高知県</a></li>
								</ul>
					</li>
					<li><h3>関東エリア</h3>
					     <ul class="listC">
							 	<li><a href="<?php echo clinicCategoryLink("tokyo");?>">東京都</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("kanagawa");?>">神奈川県</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("saitama");?>">埼玉県</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("chiba");?>">千葉県</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("ibaraki");?>">茨城県</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("tochigi");?>">栃木県</a></li>
							 	<li><a href="<?php echo clinicCategoryLink("gunma");?>">群馬県</a></li>
						 </ul>
					</li>
					<li><h3>九州・沖縄エリア</h3>
					      <ul class="listC">
							<li><a href="<?php echo clinicCategoryLink("fukuoka");?>">福岡県</a></li>
							<li><a href="<?php echo clinicCategoryLink("saga");?>">佐賀県</a></li><li>
							<a href="<?php echo clinicCategoryLink("nagasaki");?>">長崎県</a></li>
							<li><a href="<?php echo clinicCategoryLink("kumamoto");?>">熊本県</a></li>
							<li><a href="<?php echo clinicCategoryLink("oita");?>">大分県</a></li>
							<li><a href="<?php echo clinicCategoryLink("miyazaki");?>">宮崎県</a></li>
							<li><a href="<?php echo clinicCategoryLink("kagoshima");?>">鹿児島県</a></li>
							<li><a href="<?php echo clinicCategoryLink("okinawa");?>">沖縄県</a></li>
						</ul>
					</li>
						<li><h3>東海エリア</h3>
					     <ul class="listC">
								<li><a href="<?php echo clinicCategoryLink("aichi");?>">愛知県</a></li>
								<li><a href="<?php echo clinicCategoryLink("gifu");?>">岐阜県</a></li>
								<li><a href="<?php echo clinicCategoryLink("shizuoka");?>">静岡県</a></li>
								<li><a href="<?php echo clinicCategoryLink("mie");?>">三重県</a></li>
						</ul>
					</li>
				</ul>
				<div class="searchTerms">
					<?php
						$subcategories_parent = get_category_by_slug('clinic');
					    $sub_args = array('child_of' => $subcategories_parent->term_id);
						$secondary_tags = get_terms('secondary-tags');

						$tags_array = get_tags();
					?>
					<div class="select-box">
		        <label for ="searchSelect" class="search--form--label">条件でお選びください
			        <select id="searchSelect" name="tag" class="search--form--select">
		      				<option value="">--</option>
			          <?php
			            foreach ($tags_array as $tag_elem) {
			              if( wp_specialchars($tag, 1) == $tag_elem->slug ) {
			                echo '<option value="'.$tag_elem->slug.'" selected>'.$tag_elem->name.'</option>';
			              }
			              else {
			                echo '<option value="'.$tag_elem->slug.'">'.$tag_elem->name.'</option>';
			              }
			            }
			          ?>
			        </select>
		        </label>
	    	</div>

				</div>
				<div class="searchText">
					<input type="hidden" name="post_type" value="clinic" />
					<input name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>" type="text" placeholder="検索ワード地域名/
					整骨院・接骨院・整体・鍼灸院" class="topSearch"/>
					<input type="submit" value="検索" id="submit" class="button" />
				</div>
			</div><!-- /searchInner -->

			</div><!-- /areaSearch -->
			</form>

			<?php echo do_shortcode('[contentblock id=about_keshipedia]'); ?>

			<div class="row">
				<div class="front-widget--holder columns">
					<?php dynamic_sidebar( 'home-front-widget-area' ); ?>
				</div>
			</div>

		</div>
	</div>

	<div class="medium-4 aside--holder columns">
		<aside class="aside">
			<?php dynamic_sidebar( 'home-widget-area' ); ?>
		</aside>
	</div>

</div>


<?php get_footer(); ?>
