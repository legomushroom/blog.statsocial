<?php
/**
 * The template for displaying Auther.
 * *
 * @package statsocial
 * @since Raindrop 0.1
 *
 * @uses get_header( $statsocial_document_type )	include template part file
 * @uses statsocial_yui_class_modify( )	add class attribute value
 * @uses is_2col_statsocial( 'style="width:99%;"' )	add inline style attribute
 * @uses get_avatar( )
 * @uses apply_filters( 'statsocial_author_bio_avatar_size', 60 )
 * @uses have_posts( )
 * @uses have_posts( )
 * @uses the_post( )
 * @uses get_option( 'date_format' )
 * @uses the_time( $statsocial_date_format )
 * @uses the_permalink( )
 * @uses the_title_attribute( )
 * @uses statsocial_entry_title( )
 * @uses the_category( ', ' )
 * @uses get_the_tag_list( '', ', ' )
 * @uses get_sidebar( 'extra' )	include template part file
 * @uses get_sidebar( 'default' )	include template part file
 * @uses get_footer( $statsocial_document_type ) 
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

$curauth = get_userdata( intval( $author ) );

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

      <h2 id="archives-title">
          <?php printf( '<strong>Author:</strong>  %s %s ', $curauth->first_name, $curauth->last_name ); ?>
      </h2>

      <div class="user-thumb">
        <div class="user-thumb__avatar">
          <?php
            echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'statsocial_author_bio_avatar_size', 60 ), '', esc_attr__( 'Author Avatar Image', 'statsocial' ) );
          ?>
        </div>
        <div class="user-thumb__text">
          <?php printf( esc_html__( '%s %s', 'statsocial' ), $curauth->first_name, $curauth->last_name ); ?>
          <?php echo wpautop( esc_html( $curauth->description ) ); ?>
        </div>
      </div>
<!-- 
  $image = get_the_post_thumbnail( $id );
  printf( $html, $link, esc_attr( $title ), $image );
 -->

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
?>

  <?php
    $statsocial_date_format = get_option( 'date_format' );
    $statsocial_year        = get_the_time( 'Y' );
    $statsocial_month       = get_the_time( 'm' );
    $statsocial_day         = get_the_time( 'd' );
    $day_link               = esc_url( get_day_link( $statsocial_year, $statsocial_month, $statsocial_day ) . '#post-' . $post->ID );
    // statsocial_entry_title( array( 'statsocial_title_element' => 'span' ) );
  ?>
  <div class="post">
    <?php statsocial_entry_title(); ?>
      <div class="post-credits">  
          <div class="credits-item"><span class="post-credits__prefix">in </span><?php statsocial_posted_in(true); ?></div>
          <div class="credits-item"><span class="post-credits__prefix">by </span><?php statsocial_posted_by(); ?></div>
          <div class="credits-item"><?php statsocial_posted_on(true); ?></div>
      </div>

      <div class="entry-content clearfix">
        <?php statsocial_entry_content(); ?>
        <div class="post-splitter m-t-x8-g m-b-x8-g">
          <a class="post-splitter__logo">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#logo-icon"></use>
              </svg>
            </div>
            <div class="post-splitter__logo__glare"></div>
          </a>
        </div>
      </div>
    </div>

<?php
    } //end while			
  } else {
?>
<p><?php esc_html_e( 'No posts by this author.', 'statsocial' ); ?></p>
                        <?php } //if ( have_posts( ) ) 
                    ?>

  <div class="posts-nav grid grid--gutter-x2">
    <?php statsocial_next_prev_links( "nav-below" ); ?>
  </div>
</div>
</div>

                
 </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>


<?php get_footer( $statsocial_document_type ); ?>
