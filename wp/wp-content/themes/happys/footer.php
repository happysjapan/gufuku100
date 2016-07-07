</div><!-- the end of .page-wrapper-->

<footer id="footer" class="footer">

    <a id="js_top" class="button go-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

    <div class="container">
      <div class="row">
        <div class="columns">
          <div class="footer-sitemap--holder">
            <nav id="footer-sitemap" class="footer-sitemap">
              <?php
              $args = array(
               'theme_location' => 'footer-sitemap',
               'container' => false,
               'items_wrap' => '<ul class="dropdown menu align-center" data-dropdown-menu>%3$s</ul>',
               'walker' => new footer_walker()
              );
              wp_nav_menu( $args ) ;
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>

  <div class="copyright_row row">
      <p class="small-12 large6 columns copyright_row--address">Copyright &copy; 株式会社ハッピーズ All Rights Reserved.</p>
  </div>


</footer>

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation-sites/dist/foundation.min.js"></script>
<!--
<script src="<?php echo get_template_directory_uri(); ?>/js/min/app.js"></script>
-->
<script src="http://localhost:8888/HAPPYS/gofuku/src/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/min/google-map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=240954495949691";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php wp_footer(); ?>
</div>
</body>
</html>
