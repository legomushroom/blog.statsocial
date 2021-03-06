<?php
/**
 * The template part file for footer.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 *
 * @uses wp_upload_dir( )
 * @uses statsocial_upload_image_parser( $footer_image_uri, 'inline','#ft' )
 * @uses is_active_sidebar( 'sidebar-4' )
 * @uses get_bloginfo( 'name' )
 * @uses get_bloginfo( 'rss2_url' )
 * @uses ucwords( )
 * @uses wp_footer( )
 * @uses statsocial_prepend_footer( )
 * @uses statsocial_append_footer( )
 * @uses statsocial_append_doc( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $statsocial_current_theme_name, $statsocial_current_data_theme_uri, $template, $statsocial_accessibility_link;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
    </div>
  </div>

<!-- FOOTER STARTS -->
    <div class="base-p__footer">
      <div class="base-p__footer__core">
        <div id="" class="footer">
          <div class="footer__share">
            <div id="" class="footer-share">
              <a href="https://twitter.com/statsocial" title="StatSocial on Twitter" class="icon ">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#twitter-icon"></use>
                </svg>
              </a>
              <a href="https://www.facebook.com/statsocial" title="StatSocial on Facebook" class="icon ">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#facebook-icon"></use>
                </svg>
              </a>
              <a href="https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos" title="StatSocial on LinkedIn" class="icon ">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#linkedin-icon"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="footer__blocks-l cf">
            <div class="footer__links-block">
              <div class="footer__links-block__header">Info</div>
              <div><a href="http://statsocial.com/about/" title="About" class="footer__links-block__item">About</a></div>
              <div><a href="http://blog.statsocial.com/category/press/" title="Press" class="footer__links-block__item">Press</a></div>
              <div><a href="http://statsocial.com/faq/" title="FAQ" class="footer__links-block__item">FAQ</a></div>
              <div><a href="http://statsocial.com/support/" title="Support" class="footer__links-block__item">Support</a></div>
            </div>
            <div class="footer__links-block">
              <div class="footer__links-block__header">Product Demos</div>
              <div><a href="http://statsocial.com/sample-reports/" title="Sample Reports" class="footer__links-block__item">Sample Reports</a></div>
              <div><a href="http://www.statsocial.com/request-demo/" title="Request Demo" class="footer__links-block__item">Request Demo</a></div>
            </div>
            <div class="footer__links-block">
              <div class="footer__links-block__header">Legal</div>
              <div><a href="http://www.statsocial.com/privacy-policy/" title="Privacy Policy" class="footer__links-block__item">Privacy Policy</a></div>
              <div><a href="http://statsocial.com/terms-of-service/" title="Terms of Service" class="footer__links-block__item">Terms of Use</a></div>
            </div>
            <div class="footer__copy">
              ©Copyright 2014 StatSocial 
              (owned by PeekAnalytics, Inc). Patent Pending. 
              All Rights Reserved.
            </div>
          </div>
        </div>
        <div id="" class="mobile-footer">
          <div><a href="http://statsocial.com/" class="mobile-footer__link">statsocial.com</a></div>
          <div><a href="http://blog.statsocial.com/" class="mobile-footer__link">blog.statsocial.com</a></div>
          <div id="" class="footer-share">
              <a href="https://twitter.com/statsocial" title="StatSocial on Twitter" class="icon ">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#twitter-icon"></use>
                </svg>
              </a>
            <a href="https://www.facebook.com/statsocial" title="StatSocial on Facebook" class="icon ">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#facebook-icon"></use>
                </svg>
              </a>
            <a href="https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos" title="StatSocial on LinkedIn" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#linkedin-icon"></use>
              </svg>
            </a>
          </div>
          <div><a href="#" class="mobile-footer__link">contacts</a></div>
          <div><a href="#" class="mobile-footer__link">terms of service</a></div>
          <div class="mobile-footer__copy">
            ©Copyright 2014 StatSocial 
            (owned by PeekAnalytics, Inc). Patent Pending. 
            All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER ENDS -->
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    
    <div id="js-scroll-top" class="scroll-top"></div>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/velocity/jquery.velocity.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/raf.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/helpers.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  
  </body>
</html><?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
