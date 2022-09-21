<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/grain.svg">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="wrapper">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coffee' ); ?></a>

	<header id="masthead" class="site-header header _lock-padding">
		
        <div class="header__container _container">

            <div class="header__logo">
                <button type="button" class="menu__icon icon-menu">
                    <span></span>
                </button>
                <?php the_custom_logo(); ?>
            </div>

            <nav id="site-navigation" class="header__nav main-navigation">


                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->

            <div class="header__menu">
                <ul class="header__list">
                    <li><button id="search-button" class="header__button _icon-search"></button></li>
                    <li class="header__button-cart">
                        <?php $items_count = WC()->cart->get_cart_contents_count(); ?>
                        <button id="cart-button" class="header__button _icon-cart">
                            <?php if($items_count): ?>
                                <span id="mini-cart-count" class="_active"><?php echo $items_count ? $items_count : '&nbsp;'; ?></span>
                            <?php else: ?>
                                <span id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></span>
                            <?php endif; ?>
                        </button>
                        <div class="header__cart"><div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div></div>
                        <div class="header__notification">Товар добавлен в корзину!</div>
                    </li>
                    <li>
                        <?php 
                        if( is_user_logged_in() ):
                        ?>
                            <a href="./my-account"><button class="header__button _icon-login"></button></a>
                        <?php else: ?>
                            <a href="#register-popup" class="popup-link"><button class="header__button _icon-login"></button></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            
            <div class="header__search">
                <?php aws_get_search_form( true ); ?>
                <span id="close-search">Отменить</span>
            </div>

            

            
            
            
        </div>

	</header><!-- #masthead -->
