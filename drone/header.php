<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php
    $category_name = get_category_by_slug('voice');
    $category_link = get_category_link($category_name);
    ?>
    <?php
    $browser = strtolower($_SERVER['HTTP_USER_AGENT']);
    if (strstr($browser, 'trident') || strstr($browser, 'msie')) :
    ?>
        <style type="text/css">
            .sns__link--instagram {
                background: none;
            }

            .post-3column__image,
            .blog__image {
                height: auto;
            }

            .hero {
                height: 500px;
            }

            .hero__image {
                height: auto;
            }
        </style>
    <?php endif; ?>
    <?php if (is_front_page()) : ?>
        <script>
            ;
            (function($) {
                $(document).ready(function(){
                    var setImg = '#viewer';
                    var fadeSpeed = 1500;
                    var switchDelay = 5000;

                    $(setImg).children('img').css({
                        opacity: '0'
                    });
                    $(setImg + ' img:first').stop().animate({
                        opacity: '1',
                        zIndex: '20'
                    }, fadeSpeed);

                    setInterval(function() {
                        $(setImg + ' :first-child').animate({
                            opacity: '0'
                        }, fadeSpeed).next('img').animate({
                            opacity: '1'
                        }, fadeSpeed).end().appendTo(setImg);
                    }, switchDelay);
                });
            })(jQuery);
        </script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="header">
        <div class="header-container">
            <div class="header-logo"><a href="<?php echo home_url(); ?>" class="header-logo__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" class="header-logo__image" width="250" height="60">
        </a></div>
            <nav class="gnavi">
                <ul class="gnavi__list">
                    <li class="gnavi__item<?php if (is_page('drone-research')) : ?> menu-on<?php endif; ?>"><a href="<?php echo home_url(); ?>/drone-research" class="gnavi__link">ドローン調査とは？</a></li>
                    <li class="gnavi__item<?php if (is_page('price')) : ?> menu-on<?php endif; ?>"><a href="<?php echo home_url(); ?>/price" class="gnavi__link">料金プラン</a></li>
                    <li class="gnavi__item<?php if (is_page('flow')) : ?> menu-on<?php endif; ?>"><a href="<?php echo home_url(); ?>/flow" class="gnavi__link">調査の流れ</a></li>
                    <li class="gnavi__item<?php if (is_page('company')) : ?> menu-on<?php endif; ?>"><a href="<?php echo home_url(); ?>/company" class="gnavi__link">平成建設について</a></li>
                    <li class="gnavi__item<?php if (is_category('voice')) : ?> menu-on<?php endif; ?>"><a href="<?php echo esc_url($category_link); ?>" class="gnavi__link">お客様の声</a></li>
                    <li class="gnavi__item"><a href="<?php echo home_url(); ?>/contact" class="button gnavi-button">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul class="menu-content__list">
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>" class="menu-content__link">HOME</a></li>
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>/drone-research" class="menu-content__link">ドローン調査とは？</a></li>
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>/price" class="menu-content__link">料金プラン</a></li>
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>/flow" class="menu-content__link">調査の流れ</a></li>
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>/company" class="menu-content__link">平成建設について</a></li>
                        <li class="menu-content__item"><a href="<?php echo esc_url($category_link); ?>" class="menu-content__link">お客様の声</a></li>
                        <li class="menu-content__item"><a href="<?php echo home_url(); ?>/contact" class="menu-content__link">お問い合わせ</a></li>
                        <li class="menu-content__item">
                            <ul class="menu-content-sns__list">
                                <li class="menu-content-sns__item"><a href="https://lin.ee/jAsiouS" class="menu-content-sns__link--line menu-content__link--sns" target="__blank" rel="noopener"><i class="fab fa-line fa-2x"></i></a></li>
                                <li class="menu-content-sns__item"><a href="https://www.instagram.com/drone_research/" class="menu-content-sns__link--instagram menu-content__link--sns" target="__blank" rel="noopener"><i class="fab fa-instagram fa-2x"></i></a></li>
                                <li class="menu-content-sns__item"><a href="https://twitter.com/drone_kariya" class="menu-content-sns__link--twitter menu-content__link--sns" target="__blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
