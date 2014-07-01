<?php
/**
 * The template for displaying 404 pages ( Not Found ).
 *
 *
 * @pack(format)kage statsocial
 * @since Raindrop 0.1
 *
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

get_header( $statsocial_document_type );

do_action( 'statsocial_pre_' . basename( __FILE__ ) );

statsocial_debug_navitation( __FILE__ );
?>

<?php get_sidebar( 'default' ); ?>  
<div class="base-p__core__main">
    <div class="base-p__core__main__line">
        <div class="post">
            <h2 class="entry-title bold-g">
                <?php esc_html_e( 'Error 404 - Not Found', 'statsocial' ); ?>
            </h2>
            <div id="post-0" class="post error404 not-found">
                <div class="entry-content m-t-x2-g">
                    <p>
                        <?php esc_html_e( 'Apologies, but no results were found for the requested Archive. Perhaps searching will help find a related post.', 'statsocial' ); ?>
                    </p>
                    <form class="input-icon input-icon--header m-t-x2-g" method="get" name="searchform" id="searchform1" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <input id="input-d4324d50411e14fd3c5c35d9680f6bf7" name="s" placeholder="search.." class="input" value="<?php the_search_query(); ?>" pattern="^[^(<|>)]+$" title="<?php esc_attr_e( 'must not contain html tags', 'statsocial' ); ?>">
                      <label for="input-d4324d50411e14fd3c5c35d9680f6bf7" class="input-icon__label">
                      <input style="width: 0; height: 0; postion: absolute; visibility:hidden; left: -300%" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>"  type="submit" style="" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>" />
                        <div id="" title="" class="icon ">
                          <svg viewBox="0 0 32 32">
                            <use xlink:href="#search-icon"></use>
                          </svg>
                        </div>
                      </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
do_action( 'statsocial_after_' . basename( __FILE__ ) );

get_footer( $statsocial_document_type );
?>