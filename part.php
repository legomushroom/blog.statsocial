<?php
/**
 * Template part file part
 *
 * @package statsocial
 * @since statsocial 0.940
 *
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
$format = get_post_format();

if ( false === $format ) {

    $statsocial_entry_meta_class = 'post-credits';
} else {

    $statsocial_entry_meta_class = 'entry-meta-' . $format;
}
        statsocial_entry_title();
?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<div class="post">
  <div class="<?php echo $statsocial_entry_meta_class; ?>" style="font-weight: normal;" >  
    <div class="credits-item"><span class="post-credits__prefix">in </span><?php statsocial_posted_in(true); ?></div>
    <div class="credits-item"><span class="post-credits__prefix">by </span><?php statsocial_posted_by(); ?></div>
    <div class="credits-item"><?php statsocial_posted_on(true); ?></div>
  </div>

  <div class="entry-content clearfix">
    <?php
      statsocial_entry_content();
      //wp_link_pages( 'before=<p class="pagenate clearfix">&after=</p>&next_or_number=number&pagelink=<span>%</span>' );
      ?>
  </div>

  <div id="" class="post-bottom-credits">
    <div class="post-bottom-credits__top cf">
      <div id="" class="post-splitter is-at-bottom"><a class="post-splitter__logo">
          <div id="" title="" class="icon ">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#logo-icon"></use>
            </svg>
          </div>
          <div class="post-splitter__logo__glare"></div></a></div>
      <div id="" class="post-credits is-at-bottom">
        <div class="credits-item"><span class="post-credits__prefix">in </span><a>Celebrity accounts</a></div>
        <div class="credits-item"><span class="post-credits__prefix">by </span><a>Audrey Hungerman</a></div>
        <div class="credits-item"><a>Jan 9, 2014</a></div>
      </div>
    </div>
    <div id="" class="share cf is-at-bottom">
      <div id="" class="share-icon share-icon--twitter">
        <div id="" title="" class="icon ">
          <a href="https://twitter.com/share" class="twitter-share-button" data-via="statsocial">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <svg viewBox="0 0 32 32">
            <use xlink:href="#twitter-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--facebook">
        <div id="" title="" class="icon ">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-share-button" data-href="<?php echo curPageURL(); ?>" data-type="icon"></div>
          <svg viewBox="0 0 32 32">
            <use xlink:href="#facebook-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--linkedin">
        <div id="" title="" class="icon ">
          <script src="//platform.linkedin.com/in.js" type="text/javascript">
            lang: en_US
          </script>
          <script type="IN/Share"></script>
          <svg viewBox="0 0 32 32">
            <use xlink:href="#linkedin-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--google">
        <div class="g-plus" data-google-plus data-action="share" data-annotation="none" data-height="15"></div>
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
        <div id="" title="" class="icon ">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#google-icon"></use>
          </svg>
        </div>
      </div>
    </div>
   

    <?php
      $next_post_obj      = get_adjacent_post( '', '', false );
      $next_post_ID       = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
      $next_post_link     = get_permalink( $next_post_ID );
      $next_post_title    = get_the_title( $next_post_ID );

      $prev_post_obj      = get_adjacent_post( '', '', true );
      $prev_post_ID       = isset( $prev_post_obj->ID ) ? $prev_post_obj->ID : '';
      $prev_post_link     = get_permalink( $prev_post_ID );
      $prev_post_title    = get_the_title( $prev_post_ID );
    ?>
    
    <?php if ($prev_post_ID != ''): ?>
      <a href="<?php echo $prev_post_link; ?>" rel="next" class="next-post">
        ← <?php echo $prev_post_title; ?>
      </a>
    <?php endif ?>


    <?php if ($next_post_ID != ''): ?>
      <a href="<?php echo $next_post_link; ?>" rel="next" class="next-post">
        <?php echo $next_post_title; ?> →
      </a>
    <?php endif ?>

    <div class="post-bottom-credits__line"></div>
  </div>


<div class="post__comments">
  <?php comments_template( '', true ); ?>
</div>

<?php

  do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
