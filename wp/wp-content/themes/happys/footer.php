</div><!-- the end of .page-wrapper-->

<footer id="footer" class="footer">
  <div class="page-wrapper">
    <a id="js_top" class="button go-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

    <div class="container">
      <div class="row">
          <div class="footer-sitemap--holder">
            <nav id="footer-sitemap" class="footer-sitemap">
              <?php
              $args = array(
               'theme_location' => 'footer-sitemap',
               'container' => false,
               'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
               'walker' => new footer_walker()
              );
              wp_nav_menu( $args ) ;
              ?>
            </nav>
          </div>
        </div>
      </div>

       <!-- <div class="small-12 large-6 columns footer--fb_like_box">
          <div class="fb-like-box" data-href="https://www.facebook.com/clinic.jiko24.jp" data-width="450" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
          <!-- <div class="fb-page" data-href="https://www.facebook.com/clinic.jiko24.jp" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/clinic.jiko24.jp"><a href="https://www.facebook.com/clinic.jiko24.jp">交通事故病院</a></blockquote></div></div>
        </div>
      </div> -->
  </div>

  <div class="copyright_row row">
    <div class="page-wrapper">
      <p class="small-12 large6 columns copyright_row--address">Copyright &copy 株式会社ハッピーズ All Rights Reserved.</p>
    </div>
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
