
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ogp -->
    <head prefix="og: https://ogp.me/ns#">
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ポートフォリオ">
    <meta property="og:description" content="【web制作】ポートフォリオサイトです。コーディング業務を承っています。コーディングに関して少しでもお困りごとや疑問点などございましたらお気軽にお問い合わせください。" />
    <meta property="og:site_name" content="mk craft tokyo" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/index-works-image4.jpg" />
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mk_craft_tokyo" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/ress.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/splide-4.1.3/dist/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
    <title>portfolio</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
        <div class="header__inner">
            <div class="header__container">    
                <div class="header-utilities">
                    <h1 class="level1__heading header-utilities__title">
                        <a href="<?php echo home_url('/'); ?>" class="header-utilities__link">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header__image1.png" alt="ロゴ" class="header-utilities__img" width="140" height="55" decoding="async">
                        </a>
                    </h1>
                </div>

                    <nav class="header-nav">
                        <ul class="header-nav__list">    
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/'); ?>#main" class="header-nav__link">
                                TOP
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/works'); ?>" class="header-nav__link">
                                    WORKS
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/'); ?>#services" class="header-nav__link">
                                    SERVICES
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/'); ?>#about" class="header-nav__link">
                                    ABOUT
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/price'); ?>" class="header-nav__link">
                                    PRICE
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="<?php echo home_url('/contact'); ?>" class="header-nav__link">
                                    CONTACT
                                </a>
                            </li>
                        </ul>
                    </nav>

                <!-- ハンバーガーメニュー -->
                <div class="drawer">
                    <nav class="drawer-nav">
                        <ul class="drawer-nav__list">
                            <li class="drawer-nav__item border1 border-width1">

                                <a href="<?php echo home_url('/'); ?>#main" class="drawer-nav__link font1">
                                    TOP
                                </a>
                            </li>
                            <li class="drawer-nav__item border1 border-width1">
                                <a href="<?php echo home_url('/works'); ?>" class="drawer-nav__link font1">
                                    WORKS
                                </a>
                            </li>
                            <li class="drawer-nav__item border1 border-width2">
                                <a href="<?php echo home_url('/'); ?>#services" class="drawer-nav__link font1">
                                    SERVICES
                                </a>
                            </li>
                            <li class="drawer-nav__item border1 border-width2">
                                <a href="<?php echo home_url('/'); ?>#about" class="drawer-nav__link font1">
                                    ABOUT
                                </a>
                            </li>
                            <li class="drawer-nav__item border1 border-width2">
                                <a href="<?php echo home_url('/price'); ?>" class="drawer-nav__link font1">
                                    PRICE
                                </a>
                            </li>
                            <li class="drawer-nav__item border1 border-width2">
                                <a href="<?php echo home_url('/contact'); ?>" class="drawer-nav__link font1">
                                    CONTACT
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="drawer-menu">
                        <span class="drawer-menu__line"></span>
                        <span class="drawer-menu__line"></span>
                        <span class="drawer-menu__line"></span>
                    </div>
                    <!-- ./drawer-menu -->
                </div>
                <!-- /.drawer -->
            </div>
            
        </div>
        <!-- / .header__inner -->
    </header>
