<?php
/*
Template Name: catalog
*/

get_header();
?>

	<main id="primary" class="site-main">

        <div class="home-top-bg">

            <!-- catalog -->
            <section class="catalog">
                <div class="catalog__container _container">
                    <h2 class="catalog__title first-title">Каталоги нашей продукции</h2>
                    <div id="catalog-slider" class="catalog__slider" data-da=".catalog,991,1">
                        <?php echo show_product_categories($atts); ?>
                    </div>
                </div>
                <div class="catalog__pagination"></div>
            </section>
            <!-- /catalog -->

        </div>
        

	</main><!-- #main -->

<?php

get_footer();
