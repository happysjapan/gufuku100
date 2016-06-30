<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <link rel="icon"
      type="svg"
      href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo gofuku_getCssAssets(); ?>"> -->

    <link rel="stylesheet" href="http://localhost:8888/HAPPYS/gofuku/src/css/app.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic">

    <?php wp_head(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-45441393-1', 'jiko24.jp');
      ga('send', 'pageview');
    </script>

  </head>
  <body>
    <div id="top">
      <div id="header" class="header">
        <div class="header--introduction">
          <p class="row">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>

      <!-- <div class="page-wrapper"> -->
          <div class="header--inner">

              <div class="row">
                <!-- logo -->
                <div class="header--logo">
                  <a class="site-title--link" href="<?php echo home_url(); ?>" title="全国呉服店100選" rel="home">
                    <h2 class="site-title">
                      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/gofuku_logo.png" alt="全国呉服店100選" width="180" height="37" data-template="<?php echo home_url(); ?>">
                    </h2>
                  </a>
                </div>
              </div>

            <div class="navigation--holder">
              <a id="nav_button" class="navigation-button"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
              <nav id="navigation" class="navigation">
                <?php
                $args = array(
                 'theme_location' => 'navigation',
                 'container' => false,
                 'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
                 'walker' => new description_walker()
                );
                wp_nav_menu( $args ) ;
                ?>
              </nav>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="columns">
            <?php custom_breadcrumbs(); ?>
          </div>
        </div>
    </div>
