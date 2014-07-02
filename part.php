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
  <div class="post-credits">  
    <div class="credits-item"><span class="post-credits__prefix">in </span><?php statsocial_posted_in(true); ?></div>
    <div class="credits-item"><span class="post-credits__prefix">by </span><?php statsocial_posted_by(); ?></div>
    <div class="credits-item"><?php statsocial_posted_on(true); ?></div>
  </div>

  <?php statsocial_entry_content(); ?>

  <div id="" class="post-bottom-credits">
    <div class="post-bottom-credits__top cf">
      <div id="" class="post-splitter is-at-bottom">
        <a href="http://statsocial.com" title="StatSocial home" class="post-splitter__logo">
          <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                  <use xlink:href="#logo-icon"></use>
              </svg>
          </div>
          <div class="post-splitter__logo__glare"></div>
        </a>
        </div>
      <div class="post-credits is-at-bottom">  
        <div class="credits-item"><span class="post-credits__prefix">in </span><?php statsocial_posted_in(true); ?></div>
        <div class="credits-item"><span class="post-credits__prefix">by </span><?php statsocial_posted_by(); ?></div>
        <div class="credits-item"><?php statsocial_posted_on(true); ?></div>
      </div>
    </div>
    <div id="" class="share cf is-at-bottom">
      <div id="" class="share-icon share-icon--twitter">

      <?php
        function encodeURI($uri)
          {
              return preg_replace_callback("{[^0-9a-z_.!~*'();,/?:@&=+$#]}i", function ($m) {
                      return sprintf('%%%02X', ord($m[0]));
                  }, $uri);
          }
      ?>

        <a id="js-twitter-share" href="javascript:twShare()" data-href="http://twitter.com/share" class="twitter-share-button1" data-via="statsocial" data-size="large">Tweet</a>
        <script>
          function twShare(){
            var el = document.getElementById('js-twitter-share');
            var width  = 575,
                height = 400,
                left   = 0,
                top    = 0,
                url    = el.getAttribute('data-href'),
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;
            window.open(url, 'twitter', opts);
            return false;
          }
        </script>
        <div id="" title="" class="icon ">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#twitter-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--facebook">
        <script>
            function fbShare(url, title, descr, image, winWidth, winHeight) {
                var winTop = (screen.height / 2) - (winHeight / 2);
                var winLeft = (screen.width / 2) - (winWidth / 2);
                window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
            }
        </script>
        <a href="javascript:fbShare('<?php echo curPageURL(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">Share</a>

        <div id="" title="" class="icon ">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#facebook-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--linkedin">
        <script src="//platform.linkedin.com/in.js" type="text/javascript">
          lang: en_US
        </script>
        <script type="IN/Share"></script>
        <div id="" title="" class="icon ">
          <svg viewBox="0 0 32 32">
            <use xlink:href="#linkedin-icon"></use>
          </svg>
        </div>
      </div>
      <div id="" class="share-icon share-icon--google">
        <div class="g-plus" data-google-plus data-action="share" data-annotation="none" data-height="60"></div>
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
