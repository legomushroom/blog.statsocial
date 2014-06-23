<?php
/**
 * Template for search form.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $statsocial_document_type, $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );?>

  <form class="input-icon sidebar__search" method="get" name="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" <?php statsocial_doctype_elements( '', 'role="search"' ); ?>>
    <input id="s" name="s" value="<?php the_search_query(); ?>" pattern="^[^(<|>)]+$" title="<?php esc_attr_e( 'must not contain html tags', 'statsocial' ); ?>" placeholder="search.." class="input">
    <label for="s" class="input-icon__label">
    <input style="width: 0; height: 0; postion: absolute; visibility:hidden; left: -300%" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>"  type="submit" style="" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>" />
      <div id="" title="" class="icon ">
        <svg viewBox="0 0 32 32">
          <use xlink:href="#search-icon"></use>
        </svg>
      </div>
    </label>
  </form>

    
<?php
  do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>