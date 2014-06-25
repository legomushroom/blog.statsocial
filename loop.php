<?php
/**
 * Template for display loops.
 *
 * @package statsocial
 * @since statsocial 0.1
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="base-p__core__main">
    <div class="base-p__core__main__line">
<?php
/**
 * Display navigation to next/previous pages when applicable
 */
// statsocial_prepend_loop();

// statsocial_next_prev_links();

if ( have_posts() ) {

    statsocial_loop_title();

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
         *
         *
         *
         *
         */
        if ( in_category( "gallery" ) || has_post_format( "gallery" ) ) {

            get_template_part( 'part', 'gallery' );
            /**
             * In category blog 
             *
             *
             *
             *
             */
        } elseif ( in_category( "blog" ) || has_post_format( "status" ) ) {
            get_template_part( 'part', 'blog' );
        } elseif ( $format !== false ) {

            get_template_part( 'part', $format );
            /**
             * Default loop
             *
             *
             *
             *
             */
        } else {
            ?>
            <?php
            statsocial_entry_title();
            ?>

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

                <?php
            }
            ?>
        </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>
        </li>
        <?php
    } //end while
    ?>
    </ul>
    
    <div class="posts-nav grid grid--gutter-x2">
        <?php echo statsocial_next_prev_links() ?>
    </div>

    <!-- <div class="posts-nav grid grid--gutter-x2">
        <a class="next-post grid-bit grid-bit--1-2">← older posts</a>
        <a class="next-post grid-bit grid-bit--1-2">recent posts →</a>
    </div> -->
</div>
    <?php  } ?>