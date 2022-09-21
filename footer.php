<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffee
 */

?>

	<footer id="colophon" class="site-footer footer">
        <div class="footer__bg _bg">
            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/bg-desktop.png">
        </div>

        <div class="footer__container _container">
            <div class="footer__body">
                <div class="footer__content">
                    <h2 class="footer__title first-title">Подписка на новости и рассылку</h2>
                    <p class="footer__text">Подпишитесь на нашу рассылку прямо сейчас и будьте в курсе новых поставок, скидок и эксклюзивных предложений.</p>
                    <div class="footer__mailing mailing-footer"><?php echo do_shortcode('[mailpoet_form id="2"]') ?></div>
                    <p class="footer__agree">Нажимая на кнопку “Подписаться”, вы принимаете правила <span>пользовательского соглашения</span></p>
                </div>
                
                <div class="footer__image">
                    <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/coffee.png">
                </div>
            </div>
            
            <div class="footer__bottom">
                <div class="footer__logo">
                    <?php the_custom_logo(); ?>
                </div>

                <nav class="footer__nav main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>

        <div id="register-popup" class="login-popup popup">
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#header" class="popup__close close-popup">X</a>

                    <div class="login-popup__col-1 login-col-1">
                        <div class="login-col-1__img">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                        </div>
                        <h3 class="login-col-1__title">Добро пожаловать!</h3>
                        <p class="login-col-1__text">Уже есть аккаунт?</p>
                        <a href="#login-popup" class="login-col-1__button button-1 popup-link">Войти</a>
                    </div>

                    <div class="login-popup__col-2">
                        <div class="login-popup__logo">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                        </div>
                        <h3 class="login-popup__title"><?php esc_html_e( 'Register', 'woocommerce' ); ?></h3>
                        <p class="login-popup__text">Зарегистрируйтесь на сайте, чтобы первым получать скидки и узнавать акционные предложения!</p>

                        <form method="post" class="woocommerce-form woocommerce-form-register register login-popup__form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

                            <?php do_action( 'woocommerce_register_form_start' ); ?>

                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" placeholder="Имя и фамилия" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                </p>

                            <?php endif; ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" placeholder="Email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                            </p>

                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
                                    placeholder="Придумайте пароль" id="reg_password" autocomplete="new-password" />
                                </p>

                            <?php else : ?>

                                <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

                            <?php endif; ?>

                            <p class="woocommerce-form-row form-row">
                                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                                <button type="submit" class="woocommerce-Button woocommerce-button button-1 woocommerce-form-register__submit login-popup__button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">Зарегистрироваться</button>
                            </p>

                            <?php do_action( 'woocommerce_register_form_end' ); ?>

                        </form>

                        <a href="#login-popup" class="login-popup__mobile popup-link">Уже есть аккаунт? <span>Войти</span></a>
                    </div>

                </div>
            </div>
        </div>

        <div id="login-popup" class="login-popup popup">
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#header" class="popup__close close-popup">X</a>

                    <div class="login-popup__col-1 login-col-1">
                        <div class="login-col-1__img">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                        </div>
                        <h3 class="login-col-1__title">Регистрация</h3>
                        <p class="login-col-1__text">Получайте скидки первым!</p>
                        <a href="#register-popup" class="login-col-1__button button-1 popup-link">Зарегистрироваться</a>
                    </div>

                    <div class="login-popup__col-2">
                        <div class="login-popup__logo">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                        </div>
                        <h3 class="login-popup__title"><?php esc_html_e( 'Login', 'woocommerce' ); ?></h3>

                        <form class="woocommerce-form woocommerce-form-login login login-popup__form" method="post">

                            <?php do_action( 'woocommerce_login_form_start' ); ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" placeholder="Введите логин" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" placeholder="Введите пароль" />
                            </p>

                            <?php do_action( 'woocommerce_login_form' ); ?>

                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme login-popup__remember">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                                </label>
                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                <button type="submit" class="woocommerce-button button-1 login-popup__button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                            </p>

                            <div class="login-popup__lost">
                                <a href="#register-popup" class="login-popup__mobile popup-link"><span>Регистрация</span></a>
                                <a href="#lost-popup" class="login-popup popup-link">Забыли пароль?</a>
                            </div>

                            <?php do_action( 'woocommerce_login_form_end' ); ?>

                        </form>

                        

                    </div>

                </div>
            </div>
        </div>


        <div id="lost-popup" class="login-popup popup">
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#header" class="popup__close close-popup">X</a>

                    <div class="login-popup__col-1 login-col-1">
                        <div class="login-col-1__img">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                        </div>
                        <h3 class="login-col-1__title">Регистрация</h3>
                        <p class="login-col-1__text">Получайте скидки первым!</p>
                        <a href="#register-popup" class="login-col-1__button button-1 popup-link">Зарегистрироваться</a>
                    </div>

                    <div class="login-popup__col-2">
                        <div class="login-popup__logo">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                        </div>
                        <h3 class="login-popup__title">Забыли пароль?</h3>
                        <p class="login-popup__text">Укажите свой Email или имя пользователя. Ссылку на создание нового пароля вы получите по электронной почте.</p>

                        <form method="post" class="woocommerce-ResetPassword lost_reset_password login-popup__form">

                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" placeholder="Имя пользователя или Email" autocomplete="username" />
                            </p>

                            <?php do_action( 'woocommerce_lostpassword_form' ); ?>

                            <p class="woocommerce-form-row form-row">
                                <button type="submit" class="woocommerce-Button button-1 login-popup__button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
                            </p>

                            <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
                            <div class="login-popup__lost">
                                <a href="#login-popup" class="popup-link">Вернуться на страницу входа</a>
                            </div>
                            

                        </form>
                    </div>

                </div>
            </div>
        </div>

	</footer><!-- #colophon -->

    </div><!-- wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
