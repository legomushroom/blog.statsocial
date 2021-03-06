<?php
/**
 * Template for single post.
 *
 *
 * @package statsocial
 * @since statsocial 0.306
 * @uses statsocial_show_one_colum   Detect current post column count
 * @uses add_filter                 Overwrite Color type func statsocial_color_type_custom( )
 * @uses get_header( $statsocial_document_type )       Include template part file
 * @uses have_posts( )
 * @uses the_post( )
 * @uses in_category( )
 * @uses get_the_post_thumbnail( )
 * @uses has_post_thumbnail( )
 * @uses wp_get_attachment_image_src( )
 * @uses esc_url( )
 * @uses round( )
 * @uses esc_attr( )
 * @uses image_hwstring( )
 * @uses switch( )
 * @uses get_template_part( )
 * @uses statsocial_show_one_column( )
 * @uses next_posts_link( )
 * @uses previous_posts_link( )
 * @uses get_sidebar( )
 * @uses get_footer( $statsocial_document_type )
 * @uses get_attachment_link( )
 * @uses get_post_thumbnail_id( )
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 *
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
$statsocial_home_url       = trailingslashit( home_url() );
$statsocial_current_column = statsocial_show_one_column();

get_header( $statsocial_document_type );
do_action( 'statsocial_pre_' . basename( __FILE__ ) );
statsocial_debug_navitation( __FILE__ );
?>

<?php
    statsocial_prepend_default_sidebar();

    get_sidebar( 'default' );

    statsocial_append_default_sidebar();
?>

<div class="base-p__core__main">
  <div class="base-p__core__main__line">

      <?php
      /**
       * Display navigation to next/previous pages when applicable
       */
      if ( have_posts() ) {
          /**
           * when Single page
           */
          while ( have_posts() ) {

              the_post();

              $format = get_post_format();

              $cat = "default";

              if ( in_category( "blog" ) || has_post_format( "status" ) ) {

                  $cat = "blog";
              } elseif ( in_category( "gallery" ) || has_post_format( "gallery" ) ) {

                  $cat = "gallery";
              } elseif ( $format !== false ) {

                  $cat = $format;
              }

              if ( true == WP_DEBUG ) {

                  echo '<!--Single Post Format or 2 Category ' . $cat . ' start-->';
              }
              ?>
              <<?php statsocial_doctype_elements( 'div', 'article' ); ?> id="post-<?php the_ID(); ?>" class="post" <?php statsocial_post_class( array( 'clearfix' ) ); ?>>  
              
              


             
<?php
        
  get_template_part( "part", $cat );

  if ( true == WP_DEBUG ) {
      echo '<!-- #post-' . get_the_ID() . ' -->';
  }
}       //　endwhile
    /**
     * Next Previous post link
     */
    statsocial_next_prev_links( "nav-below" );
} else {
    
}           // if ( have_posts( ) )
?>

                </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>
            </div>
                <?php
                /**
                 * Show Extra sidebar column rsidebar start
                 *
                 *
                 *
                 *
                 */
                if ( 3 == statsocial_show_one_column() ) {
                    ?>
                <?php
                statsocial_prepend_extra_sidebar();

                get_sidebar( 'extra' );

                statsocial_append_extra_sidebar();
                ?>
                    <?php
                } elseif ( $rsidebar_show && false == $statsocial_current_column ) {
                    ?>
                
                    <?php
                }
                //add nest grid here
                ?>
</div>


<?php get_footer( $statsocial_document_type ); ?>









