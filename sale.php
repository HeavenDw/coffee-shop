<?php
/*
Template Name: sale
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

    <main id="primary" class="single-page">
        <section class="single__breadcrumbs _header-placeholder">
            <div class="single__container _container">
                <?php
                    $args = array(
                            'delimiter' => ' · ',
                            'wrap_before' => '<nav class="woocommerce-breadcrumb breadcrumb breadcrumb-black">'
                    );
                ?>
                <?php woocommerce_breadcrumb( $args ); ?>
            </div>
        </section>

        <section class="category-products">
            <div class="category-products__container _container">
                <?php echo do_shortcode('[sale_products]') ?>
            </div>
        </section>
        

    </main>
    

<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
