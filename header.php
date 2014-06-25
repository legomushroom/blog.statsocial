<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template, $statsocial_link_unique_text;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no">
  </head>
  <body class="base-p" <?php body_class(); ?>>
    <?php include 'css/icons.svg'; ?>
    <div id="js-header" class="header">
      <a href="http://statsocial.com" title="StatSocial Homepage" class="header__left">
        <div id="" class="icon-text">
          <div id="" title="" class="icon ">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#logo-icon"></use>
            </svg>
          </div>
          <div class="icon-text__text">statsocial</div>
        </div>
      </a>
      <div class="header__right">
        <a href="http://statsocial.com/request-demo/" title="Request Demo" class="rounded-btn header__right__request-demo rounded-btn--blue2 rounded-btn--hoverable">Request Demo</a>
        <div id="" class="header-link-line header__right__actions"><a id="" class="header-link">Log In</a><a id="" class="header-link">Sign Up</a>
        </div>

        <form class="input-icon input-icon--header" method="get" name="searchform" id="searchform1" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input id="input-00706e56b97028c17d294a1487765068" name="s" placeholder="search.." class="input" value="<?php the_search_query(); ?>" pattern="^[^(<|>)]+$" title="<?php esc_attr_e( 'must not contain html tags', 'statsocial' ); ?>">
          <label for="input-00706e56b97028c17d294a1487765068" class="input-icon__label">
          <input style="width: 0; height: 0; postion: absolute; visibility:hidden; left: -300%" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>"  type="submit" style="" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>" />
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#search-icon"></use>
              </svg>
            </div>
          </label>
        </form>
        <div id="" title="" class="icon header__right__menu-icon">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#menu-icon"></use>
          </svg>
        </div>
        <div id="" class="main-header-menu">
          <div class="main-header-menu-section-l">
            <a href="http://statsocial.com/about/" title="About StatSocial" class="main-header-menu-item is-hoverable is-checkable">About</a>
            <a href="http://statsocial.com/faq/" title="FAQ" id="" class="main-header-menu-item is-hoverable is-checkable">FAQ</a>
            <a href="http://statsocial.com/support/" title="Support" class="main-header-menu-item is-hoverable is-checkable">Support</a>
            <a href="http://api.statsocial.com/" title="API" class="main-header-menu-item is-hoverable is-checkable">API</a>
            <a href="http://statsocial.com/sample-reports/" title="Support" class="main-header-menu-item is-hoverable is-checkable">Sample reports</a>
          </div>
          <div class="main-header-menu-section-l">
            <div href="http://statsocial.com/top-investors-twitter/" title="Top Inverstors" class="main-header-menu-item is-hoverable is-checkable">Top 1000 investors</div>
            <div href="http://blog.statsocial.com/category/press/" title="Press" class="main-header-menu-item is-hoverable is-checkable">Press</div>
            <div href="http://blog.statsocial.com/" title="StatSocial Blog" class="main-header-menu-item is-hoverable is-checkable">Blog</div>
            <div href="http://www.statsocial.com/privacy-policy/" title="Privacy Policy" class="main-header-menu-item is-hoverable is-checkable">Privacy policy</div>
            <div href="http://statsocial.com/terms-of-service/" title="Terms of Service" class="main-header-menu-item is-hoverable is-checkable">Terms of service</div>
          </div>
        </div>
      </div>
    </div>

    <div id="js-core" class="base-p__core">
      <div class="base-p__core__wrapper cf">



