<?php
/*
Template Name: blog
*/

get_header();
?>

<main id="primary" class="site-blog">
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

    <section class="blog__tabs tabs-blog">
    
        <div class="tabs-blog__container _container">
            <ul class="tabs-blog__list">
                <li><button class="blog-filter tabs-blog__button filter" data-filter="blog-filter-1">Обучение</button></li>
                <li><button class="blog-filter tabs-blog__button filter" data-filter="blog-filter-2" id="news">Новости</button></li>
                <li><button class="blog-filter tabs-blog__button filter" data-filter="blog-filter-3">Частые вопросы</button></li>
            </ul>

            <div data-filter="blog-filter-1" class="blog-filter-tab tabs-blog__education education-blog">
                <h2 class="education-blog__title single-title">Приготовление кофе разными способами</h2>
                <ul class="education-blog__list">
                    <?php if ( have_posts() ) : query_posts(array( 'cat' => 90)); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li><button class="education-filter education-blog__button filter-education-button filter" data-filter="education-filter-<?php the_field('education_name'); ?>">
                            <?php the_field('education_name'); ?>
                            <img alt="image" class="style-svg" src="<?php echo the_field('education_icon');?>">
                        </button></li>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <?php if ( have_posts() ) : query_posts(array( 'cat' => 90)); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div data-filter="education-filter-<?php the_field('education_name'); ?>" class="education-filter-tab education-blog__content content-education">
                            <h3 class="content-education__title single-title"><?php the_title(); ?></h3>
                            <div class="content-education__text">
                                <?php the_content(); ?>
                            </div>
                            <?php if(get_post_thumbnail_id()): ?>
                            <div class="content-education__image _ibg">
                                <img alt="image" src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');?>">
                            </div>
                            <?php endif; ?>
                        </div>                  
                    <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
            </div>

            <div data-filter="blog-filter-2" class="blog-filter-tab tabs-blog__news news-blog">
                <h2 class="news-blog__title single-title">Новости:</h2>
                <?php if ( have_posts() ) : query_posts(array( 'cat' => 80)); ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="news-blog__item">
                            <?php if(get_post_thumbnail_id()): ?>
                                <a href="<?php the_permalink(); ?>" class="news-blog__image _ibg">
                                    <img alt="image" src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');?>">
                                </a>
                            <?php endif; ?>

                            <div class="news-blog__body">
                                <h3 class="news-blog__subtitle">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="news-blog__content">
                                    <?php the_content(); ?>
                                </div>
                                
                                <div class="news-blog__author">
                                    Автор статьи: <?php the_author(); ?>
                                </div>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="news-blog__link _icon-arrow-left"><span>Подробнее</span></a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
            </div>

            <div data-filter="blog-filter-3" class="blog-filter-tab tabs-blog__faq faq-blog">
                <h2 class="faq-blog__title single-title">Частые вопросы:</h2>

                <div class="faq-blog__body">
                    <div class="faq-blog__image">
                        <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/bg.png">
                    </div>

                    <ul class="faq-blog__list" data-spoilers>
                        <?php if ( have_posts() ) : query_posts(array( 'cat' => 91)); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li>
                                <button class="faq-blog__quest" data-spoiler><?php the_title(); ?><span></span></button>
                                <div class="faq-blog__answer"><?php echo wpautop(the_content()); ?></div>
                            </li>
                            <?php endwhile; ?>
                        <?php endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

get_footer();