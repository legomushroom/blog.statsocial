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
      <div class="header__left">
        <div id="" class="icon-text">
          <div id="" title="" class="icon ">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#logo-icon"></use>
            </svg>
          </div>
          <div class="icon-text__text">statsocial</div>
        </div>
      </div>
      <div class="header__right">
        <div id="" class="rounded-btn header__right__request-demo rounded-btn--blue2 rounded-btn--hoverable">Request Demo</div>
        <div id="" class="header-link-line header__right__actions"><a id="" class="header-link">Log In</a><a id="" class="header-link">Sign Up</a>
        </div>
        <div id="" class="input-icon input-icon--header">
          <input id="input-undefined" placeholder="search.." class="input">
          <label for="input-undefined" class="input-icon__label">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#search-icon"></use>
              </svg>
            </div>
          </label>
        </div>
        <div id="" title="" class="icon header__right__menu-icon">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#menu-icon"></use>
          </svg>
        </div>
        <div id="" class="main-header-menu header__right__menu-icon">
          <div class="main-header-menu-section-l">
            <div id="" class="main-header-menu-item is-hoverable is-checkable">About</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">FAQ</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Support</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">API</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Sample reports</div>
          </div>
          <div class="main-header-menu-section-l">
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Top 1000 investors</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Press</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Blog</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Privacy policy</div>
            <div id="" class="main-header-menu-item is-hoverable is-checkable">Terms of service</div>
          </div>
        </div>
      </div>
    </div>

    <div id="js-core" class="base-p__core">
      <div class="base-p__core__wrapper cf">



