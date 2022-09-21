<?php
/*
Template Name: contacts
*/

get_header();
?>

<main id="primary" class="site-contacts">
    <section class="contacts__breadcrumbs breadcrumbs-contacts _header-placeholder">
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

    <section class="contacts__tabs tabs-contacts">
    
        <div class="tabs-contacts__container _container">
            <ul class="tabs-contacts__list">
                <li><button class="contacts-filter tabs-contacts__button filter _active" data-filter="contacts-filter-1">Контакты</button></li>
                <li><button class="contacts-filter tabs-contacts__button filter" data-filter="contacts-filter-2">Наши магазины</button></li>
            </ul>

            <div class="tabs-contacts__body body-contacts">
                <div data-filter="contacts-filter-1" class="contacts-filter-tab body-contacts__connect _active">

                    <ul class="body-contacts__list">
                        <li>
                            <h3 class="body-contacts__title">Связаться с нами:</h3>
                            <a href="" class="body-contacts__link">+7 (401) 237 53 43</a>
                            <a href="" class="body-contacts__link">Import@kldrefine.com</a>
                        </li>

                        <li>
                            <h3 class="body-contacts__title">Юридический адрес:</h3>
                            <div class="body-contacts__text">Российская, Федерация, 238310, Калининградская область, Гурьевский район, поселок Васильково, улица Шатурская, дом 4А</div>
                        </li>

                        <li>
                            <h3 class="body-contacts__title">Адрес склада:</h3>
                            <div class="body-contacts__text">Московская область, Балашиха, Западная промзона, Шоссе энтузиастов 1</div>
                        </li>
                    </ul>

                </div>

                <div data-filter="contacts-filter-2" class="contacts-filter-tab body-contacts__shops">

                    <ul class="body-contacts__list">
                        <li>
                            <h3 class="body-contacts__title">Наши магазины г. Санкт-Петербург</h3>
                            <ul class="body-contacts__adresses">
                                <li>Гороховая</li>
                                <li>Московский</li>
                            </ul>
                        </li>

                        <li>
                            <h3 class="body-contacts__title">Наши магазины Калининградская обл.</h3>
                            <ul class="body-contacts__adresses">
                                <li>Советск, Гончарова</li>
                                <li>Черняховск, Пионерская</li>
                                <li>Ульяны-Громовой</li>
                                <li>Гурьевск, Каштановаяг</li>
                                <li>Панина</li>
                            </ul>
                        </li>
                    </ul>
                
                </div>

                <div class="tabs-contacts__map" id="yandex-map">
                    <?php echo do_shortcode('[shmMap id="301"]'); ?>
                </div>

            </div>
        </div>

    </section>
</main>

<?php

get_footer();