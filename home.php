<?php
/*
Template Name: home
*/

get_header();
?>

	<main id="primary" class="site-main">

        <div class="home-top-bg">
            <!-- mainscreen -->
            <section class="mainscreen">
                <div class="mainscreen__container _container">
                    <div id="mainscreen-slider" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="mainscreen__content">
                                    <h2 class="mainscreen__title">Свежеобжаренный кофе</h2>
                                    <p class="mainscreen__text">Кофе Калининградской обжарки из разных стран произрастания с доставкой на дом.</p>
                                    <p class="mainscreen__text">Мы обжариваем кофе <span>каждые выходные.</span></p>
                                    <a href="catalog" class="mainscreen__button button-1">Посмотреть каталог</a>
                                </div>
                                
                                <div class="mainscreen__image">
                                    <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="mainscreen__content">
                                    <h2 class="mainscreen__title">Свежеобжаренный кофе</h2>
                                    <p class="mainscreen__text">Кофе Калининградской обжарки из разных стран произрастания с доставкой на дом.</p>
                                    <p class="mainscreen__text">Мы обжариваем кофе <span>каждые выходные.</span></p>
                                    <a href="##" class="mainscreen__button button-1">Посмотреть каталог</a>
                                </div>
                                
                                <div class="mainscreen__image">
                                    <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="mainscreen__content">
                                    <h2 class="mainscreen__title">Свежеобжаренный кофе</h2>
                                    <p class="mainscreen__text">Кофе Калининградской обжарки из разных стран произрастания с доставкой на дом.</p>
                                    <p class="mainscreen__text">Мы обжариваем кофе <span>каждые выходные.</span></p>
                                    <a href="##" class="mainscreen__button button-1">Посмотреть каталог</a>
                                </div>
                                
                                <div class="mainscreen__image">
                                    <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainscreen/coffee.png">
                                </div>

                            </div>

                        </div>

                        <div class="mainscreen__pagination"></div>
                    </div>
                    
                </div>
            </section>
            <!-- /mainscreen -->

            <!-- catalog -->
            <section class="catalog">
                <div class="catalog__container _container">
                    <h2 class="catalog__title first-title">Каталоги нашей продукции</h2>
                    <div class="catalog__slider" data-da=".catalog,991,1">
                        <?php echo do_shortcode('[show_product_categories limit="4" parent="0"]'); ?>
                    </div>
                </div>
                <div class="catalog__pagination"></div>
            </section>
            <!-- /catalog -->

            <!-- sale-home -->
            <section class="sale-home">
                <div class="sale-home__container _container">
                    <h2 class="sale-home__title first-title">Товары со скидкой</h2>
                    <p class="sale-home__text">Наша компания предлагает покупать товар со скидкой не только в дни распродаж или в течение действия ограниченных предложений, но и пользоваться скидками постоянно!</p>
                    <div class="sale-home__products" data-da=".sale-home,991,1">
                        <?php echo do_shortcode('[sale_products class="sale-home-slider swiper-container"]'); ?>
                        <div class="sale-home__arrow sale-home__arrow-prev _icon-arrow-left"></div>
                        <div class="sale-home__arrow sale-home__arrow-next _icon-arrow-left"></div>
                        <a href="sale" class="sale-home__button">Смотреть все</a>
                    </div>
                </div>
            </section>
            <!-- /sale-home -->
        </div>
        

        <!-- work -->
        <section class="work">
            <div class="work__container _container">
                <div class="work__image _ibg">
                    <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work/image.png">
                </div>
                
                <div class="work__content">
                    <h2 class="work__title first-title">Почему стоит работать именно с нами?</h2>
                    <ul class="work__list">
                        <li class="work__item item-work">
                            <div class="item-work__icon">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work/icon-1.svg">
                            </div>

                            <div class="item-work__body">
                                <h3 class="item-work__title">Всегда свежая обжарка</h3>
                                <p class="item-work__text">Подбор степени обжарки под каждый сорт кофе. Всегда свежая обжарка</p>
                            </div>
                        </li>

                        <li class="work__item item-work">
                            <div class="item-work__icon">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work/icon-2.svg">
                            </div>

                            <div class="item-work__body">
                                <h3 class="item-work__title">Лучшие цены на продукцию</h3>
                                <p class="item-work__text">Благодаря крупным объемам производства мы даем лучшие цены на нашу продукцию</p>
                            </div>
                        </li>

                        <li class="work__item item-work">
                            <div class="item-work__icon">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work/icon-3.svg">
                            </div>

                            <div class="item-work__body">
                                <h3 class="item-work__title">Консультации 24/7</h3>
                                <p class="item-work__text">Наши специалисты готовы всегда помочь и подсказать вам с выбором кофе или другой продукции.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /work -->

        <!-- roasting -->
        <section class="roasting">
            <div class="roasting__container _container">
                <h2 class="roasting__title first-title">Как мы обжариваем наш кофе:</h2>
                <p class="roasting__text">Компания Нью Рефайнинг Груп находится в г. Калининграде и имеет свой склад и представительство в Москве. Завод работает на рынке свежеобжаренного кофе и растворимой продукции более 15 лет. Завод имеет немецкое оборудование марки Probat по обжарке кофе и итальянские агломераторы для производства растворимой продукции.</p>
                <p class="roasting__text">Кофе поставляется в контейнерах напрямую с плантаций по всему миру. Компания имеет долгосрочные контракты по поставке продукции. Каждая партия проходит строгий контроль на заводе для проверки зерна. Зеленое зерно обжаривается, проходит процесс дегазации и тут же отправляется клиентам. Наши обжарщики прошли обучение в России и за рубежом. </p>
                <p class="roasting__text">У нас свой подход к каждой партии зерна. </p>
                <p class="roasting__text">Мы раскрываем вкус каждого сорта кофе.</p>
                <a href="catalog" class="roasting__button button-1">Перейти в каталог</a>
            </div>
        </section>
        <!-- /roasting -->

        <!-- news -->
        <section class="news">
            <div class="news__container _container">
                <div class="news__top">
                    <h2 class="news__title first-title">Новости компании</h2>
                    <a href="blog#news" class="news__link" data-da=".news__container,991,last">Читать все</a>
                </div>
                <div id="news-slider" class="news__slider swiper-container">
                    <div class="news__content swiper-wrapper">
                        <?php if ( have_posts() ) : query_posts(array('posts_per_page' => 4, 'cat' => 80)); ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <div class="news__item item-news swiper-slide">
                                    <?php if(get_post_thumbnail_id()): ?>
                                        <a href="<?php the_permalink(); ?>" class="item-news__image _ibg">
                                            <img alt="image" src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');?>">
                                        </a>
                                    <?php endif; ?>

                                    <div class="item-news__body">
                                        <h3 class="item-news__title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="item-news__content">
                                            <?php the_content(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="item-news__link _icon-arrow-left"><span>Подробнее</span></a>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- /news -->

        <!-- instagram -->
        <section class="instagram">
            <div class="instagram__container _container">
                <a href="https://www.instagram.com/" target="_blank" class="instagram__title">
                    <h2 class="first-title">Мы в Instagram</h2>
                    <div class="instagram__icon">
                        <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg">
                    </div>
                </a>
                <div class="instagram__content">
                    <div class="instagram__image">
                        <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/iphones.png">
                    </div>
                    <div class="instagram__gallery">
                        <a href="https://www.instagram.com/" target="_blank" class="instagram__item _ibg">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/01.jpg">
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="instagram__item _ibg">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/02.jpg">
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="instagram__item _ibg">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/03.jpg">
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="instagram__item _ibg">
                            <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/04.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /instagram -->

	</main><!-- #main -->

<?php

get_footer();
