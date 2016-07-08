<?php get_header(); ?>

<div class="row">
  <div class="banner columns">
    <?php echo do_shortcode('[contentblock id=banner]'); ?>
  </div>
</div>

<div class="row">
  <div class="main_page small-12 medium-6 columns">

    <h1 class="main_page--title">整骨院・接骨院を「無料で」お探しします。</h1>
    <hr>
    <p>交通事故病院では、あなたのご要望にあった整骨院・接骨院・整体・治療院・鍼灸院を「お電話」または「メール」でご紹介致します。</p>
    <p>全て無料で承っておりますので、まずはお気軽にご相談ください。</p>

    <hr>

    <h2 class="main_page--subtitle">お電話でのご紹介・ご相談</h2>
    <b>フリーボイス(無料)</b>
    <p class="main_page--phone">
      <a href="tel:<?php echo do_shortcode('[contentblock id=phone]'); ?>" class="header--contact--tel-link" title="電話で無料相談">
        <i class="fa fa-phone" aria-hidden="true"></i> <?php echo do_shortcode('[contentblock id=phone]'); ?>
      </a>
    </p>

    <hr>

    <h4 class="main_page--subtitle">メールでのご紹介・ご相談</h4>
    <p>交通事故病院の運営会社である、株式会社gofukuがご対応いたします。</p>
    <p>メールアドレス : <a href="mailto:info@gofuku.co.jp" target="_blank">info@gofuku.co.jp</a></p>

  </div>

  <div class="main_page--form small-12 medium-6 columns">
    <h3 class="main_page--form--title">お問い合わせフォームでのご紹介・ご相談</h3>
    <hr>
    <?php echo do_shortcode('[contact-form-7 id="32586" title="contact2"]'); ?>
  </div>
</div>

<div class="row">
  <div class="main_page small-12">
    <section class="searchArea">
      <?php get_template_part( 'includes/category', 'clinic-search' ); ?>
    </section>
  </div>
</div>


<?php get_footer(); ?>
