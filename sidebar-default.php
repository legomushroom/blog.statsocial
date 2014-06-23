<?php
/**
 * Template part file for default sidebar.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>





<div class="base-p__core__sidebar">
  <div id="js-sidebar" class="sidebar-n-panel">
    <div class="sidebar-n-panel__sidebar-l">
      <div class="sidebar">
        <div class="sidebar-header sidebar__about-header">What is StatSocial?</div>
        <div class="sidebar-about">StatSocial delivers enterprise-class Twitter analytics that help marketers understand their social consumers. By identifying where Twitter users exist elsewhere on the Web, StatSocial offers an unparalleled level of demographic and psychographic insights from consumer data aggregated not just from Twitter, but from over sixty social sites and every major blog platform.</div>
        <?php
          if ( !dynamic_sidebar( 'sidebar-1' ) ) {
            statsocial_sidebar_menus( 'default' );
          }
        ?>
        <div class="sidebar-header">StatSocial</div>
        <ul>
          <li class=""><a href="http://statsocial.com">Stat Social</a></li>
          <li class=""><a href="http://statsocial.com/sample-reports/">Stat Social Demo</a></li>
          <li class=""><a href="#">Stat Social Pricing</a></li>
          <li class=""><a href="http://statsocialblog.disqus.com/latest.rss">Comments RSS</a></li>
          <li class=""><a href="?feed=rss2">Posts RSS</a></li>
          <li class=""><a href="https://twitter.com/statsocial">Twitter</a></li>
          <li class=""><a href="https://www.facebook.com/statsocial">Facebook</a></li>
          <li class=""><a href="https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos">LinkedIn</a></li>
        </ul>
        <!-- <div class="sidebar-header m-t-x3-g">Recent Posts</div>
        <ul id="" class="sidebar-list">
          <li id="" class="sidebar-list-item"><a>Matt Laure Joins Facebook</a></li>
          <li id="" class="sidebar-list-item"><a>Obama takes Tumblr</a></li>
          <li id="" class="sidebar-list-item"><a>The Best &amp; Worst of Twitter: Week of 6/1/2014</a></li>
        </ul>
        -->
 
    <div id="" class="sidebar-panel">
      <div class="sidebar-panel__core">
        <div class="sidebar-panel__top-btns">
          <div id="" class="sidebar-btn">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#home-icon"></use>
              </svg>
            </div>
          </div>
        </div>
        <div id="" class="input-icon sidebar-panel__search">
          <input id="input-883c00286c7cedf015ccc175d0a02dec" placeholder="search.." class="input">
          <label for="input-883c00286c7cedf015ccc175d0a02dec" class="input-icon__label">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#search-icon"></use>
              </svg>
            </div>
          </label>
        </div>
        <div id="js-expand-sidebar" class="sidebar-expand"></div>
        <div id="js-scroll-top-sidebar" class="sidebar-scoll-top"></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


	<?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
