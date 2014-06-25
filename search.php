<?php
/**
 * Template for search .
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 *
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
do_action( 'statsocial_' . basename( __FILE__ ) );
get_header( $statsocial_document_type );
do_action( 'statsocial_pre_' . basename( __FILE__ ) );
?>
<?php get_sidebar( 'default' ); ?>

<div class="base-p__core__main">
    <div class="base-p__core__main__line">

      <?php statsocial_debug_navitation( __FILE__ ); ?>
      <?php statsocial_prepend_loop(); ?>
      <?php if ( have_posts() ) { ?>
        <strong class="f16" id="archives-title">Search Results for "<?php the_search_query(); ?>"</strong>
          <!-- <h1 class="pagetitle h1">Search Results : <?php the_search_query(); ?></h1> -->
          <ul class="search-results">
              <?php

    $statsocial_loop_number = 1;



    while ( have_posts() ) {

        the_post();

        $statsocial_loop_class = statsocial_loop_class( $statsocial_loop_number, get_the_ID() );

        printf( '<li class="loop-%1$s%2$s">', esc_attr( trim( $statsocial_loop_class[ 0 ] ) ), esc_attr( rtrim( $statsocial_loop_class[ 1 ] ) )
        );

        $statsocial_loop_number++;
        ?>              
        <<?php statsocial_doctype_elements( 'div', 'article' ); ?> id="post-<?php the_ID(); ?>" <?php statsocial_post_class(); ?>>      
        <?php
        $format = get_post_format();
        /**
         * In category gallery
         */
        if ( in_category( "gallery" ) || has_post_format( "gallery" ) ) {

            get_template_part( 'part', 'gallery' );
            /**
             * In category blog 
             */
        } elseif ( in_category( "blog" ) || has_post_format( "status" ) ) {

            get_template_part( 'part', 'blog' );
        } elseif ( $format !== false ) {

            get_template_part( 'part', $format );
            /**
             * Default loop
             */
        } else {
            ?>
            <?php statsocial_entry_title(); ?>

            <div class="post-credits">  
              <div class="credits-item"><span class="post-credits__prefix">in </span><?php statsocial_posted_in(true); ?></div>
              <div class="credits-item"><span class="post-credits__prefix">by </span><?php statsocial_posted_by(); ?></div>
              <div class="credits-item"><?php statsocial_posted_on(true); ?></div>
            </div>


            <div class="entry-content clearfix">
                <?php
                    statsocial_entry_content();
                ?>
                <div class="post-splitter m-t-x8-g m-b-x8-g">
                    <a href="http://statsocial.com" title="StatSocial home" class="post-splitter__logo">
                      <div id="" title="" class="icon ">
                          <svg viewBox="0 0 32 32">
                              <use xlink:href="#logo-icon"></use>
                          </svg>
                      </div>
                      <div class="post-splitter__logo__glare"></div>
                    </a>
                </div>
            </div>

            <!-- edit_post_link( esc_html__( 'Edit', 'statsocial' ) . statsocial_link_unique( 'Post', $post->ID ), '<span class="edit-link">', '</span>' ); -->


                <?php
            }
            ?>
        <br class="clear" />
        </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>
        </li>
        <?php
    } //end while
    ?>
                    </ul>
    <div class="posts-nav grid grid--gutter-x2">
        <?php statsocial_next_prev_links( "nav-below" ); ?>
    </div>

                <?php } else { ?>
                    <div class="m-l-x8-g m-r-x8-g">
                        <?php esc_html_e( "Nothing was found though it was regrettable. Please change the key word if it is good, and retrieve it.", "statsocial" ); ?>
                        <?php get_search_form(); ?>
                    </div>
                <?php } ?>
                <?php statsocial_append_loop(); ?>
            </div>




</div>
<?php get_footer( $statsocial_document_type ); ?>