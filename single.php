<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package coffee
 */

get_header();
?>

	<main id="primary" class="site-main _header-placeholder">

        <section class="blog__breadcrumbs breadcrumbs-blog _header-placeholder">
            <div class="breadcrumbs-blog__container _container">
                <?php
                    $args = array(
                            'delimiter' => ' · ',
                            'wrap_before' => '<nav class="woocommerce-breadcrumb breadcrumb breadcrumb-black">'
                    );
                ?>
                <?php woocommerce_breadcrumb( $args ); ?>
            </div>
        </section>

		<?php
		while ( have_posts() ) :
			the_post();
            ?>
            
            <section class="post__top top-post">
                <div class="top-post__container _container">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title single-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title single-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
                </div>
            </section>


            <section class="post__content content-post">
                <div class="content-post__container _container">
                    <div class="content-post__image _ibg">
                        <?php coffee_post_thumbnail(); ?>
                    </div>
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'coffee' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coffee' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </section>

            <section class="post__comment comment-post">
                <div class="comment-post__container _container">
                    <div data-filter="product-filter-4" class="product-filter-tab additional-single__reviews">
                        <h3 class="additional-single__title single-title">Отзывы (<?php echo get_comments_number(); ?>)</h3>
                        <?php echo comments_template(); ?>
                    </div>
                </div>
            </section>
        <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
