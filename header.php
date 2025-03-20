<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="三浦浩太のポートフォリオ｜Webデザインとコーディングの実績紹介">
    <meta property="og:description" content="Webコーダー三浦浩太のポートフォリオサイトです。コーディングやデザイン業務を承っています。コーディングやデザインに関して少しでもお困りごとや疑問点などございましたらお気軽にお問い合わせください。" />
    <meta name="keywords" content="ポートフォリオ, ホームページ制作, みうら こうた, コーディング, Webコーダー">
    <meta property="og:site_name" content="mk craft tokyo" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/index-works-image4.jpg" />
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mk_craft_tokyo" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.webp">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KRHR28RF');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRHR28RF"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header">
        <!-- <div class="header__inner"> -->
        <div class="header__container">
            <div class="header__logo">
                <h1 class="header__logoTitle ">
                    <a href="<?php echo home_url('/'); ?>" class="header__logoLink">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/header__image1.webp" alt="三浦浩太のポートフォリオ" width="140" height="55" decoding="async">
                    </a>
                </h1>
            </div>

            <nav class="header-listNav">
                <ul class="header__listMenu">
                    <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    ?>

                    <li class="header__listItem">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__listLink">
                            TOP
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo esc_url(home_url('/all-works')); ?>" class="header__listLink <?php if (is_page('all-works') || is_post_type_archive('all-works') || is_singular('all-works')) {
                                                                                                                echo 'navActive';
                                                                                                            } ?>">
                            WORKS
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo home_url('/'); ?>#services" class="header__listLink">
                            SERVICES
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo home_url('/'); ?>#about" class="header__listLink">
                            ABOUT
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="header__listLink <?php if (is_page('price')) {
                                                                                                            echo 'navActive';
                                                                                                        } ?>">
                            PRICE
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__listLink <?php if (is_page('contact')) {
                                                                                                            echo 'navActive';
                                                                                                        } ?>">
                            CONTACT
                        </a>
                    </li>
                    <li class="header__listItem">
                        <a href="<?php echo home_url('/blog'); ?>" target="_blank" class="header__listLink">
                            BLOG
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- ハンバーガーメニュー -->
            <div class="header__hamburger">
                <nav class="header__hamburgerNav">
                    <ul class="header__hamburgerMenu">
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/'); ?>#main" class="header__hamburgerLink ">
                                TOP
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/all-works'); ?>" class="header__hamburgerLink ">
                                WORKS
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/'); ?>#services" class="header__hamburgerLink ">
                                SERVICES
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/'); ?>#about" class="header__hamburgerLink ">
                                ABOUT
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/price'); ?>" class="header__hamburgerLink ">
                                PRICE
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/contact'); ?>" class="header__hamburgerLink ">
                                CONTACT
                            </a>
                        </li>
                        <li class="header__hamburgerItem  ">
                            <a href="<?php echo home_url('/blog'); ?>" class="header__hamburgerLink " target="_blank">
                                BLOG
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header__hamburgerBox">
                    <span class="header__hamburgerLine"></span>
                    <span class="header__hamburgerLine"></span>
                    <span class="header__hamburgerLine"></span>
                </div>
                <!-- ./header__hamburgerBox -->
            </div>
            <!-- /.header__hamburger -->
        </div>

        <!-- </div> -->
        <!-- / .header__inner -->
    </header>