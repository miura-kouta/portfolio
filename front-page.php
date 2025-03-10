<?php get_header(); ?>
<main id="main" class="c-contentInner main">
    <div class="goingUp">
        <div class="goingUp__wrapCircle fade-in2 ">

            <a href="#firstView" class="goingUp__linkCircle">
                <img src="<?php echo get_template_directory_uri(); ?>/images/page-top.webp" alt="円" width="273" height="273" decoding="async">
            </a>
        </div>
        <div class="goingUp__wrapArrow  fade-in2">
            <a href="#firstView" class="goingUp__linkArrow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/page-top2.webp" alt="矢印" width="178" height="316" decoding="async">
            </a>
        </div>
    </div>
    <section id="firstView" class="firstView">
        <div class="firstView__container">
            <div class="splide" aria-label="Splideの基本的なHTML">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video1.mp4">
                                </video>
                                <strong class="firstView__text">
                                    シンプルさと洗練された技術<br class="firstView__brSp">

                                    <span class="firstView__lineSp">―</span>あなたのサイトを際立たせる<span class="firstView__lineSp">―</span>
                                </strong>
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video2.mp4">
                                </video>
                                <strong class="firstView__text">
                                    デザインとコーディングの融合<br class="firstView__brSp">
                                    <span class="firstView__lineSp">―</span>
                                    魅力を形にする
                                    <span class="firstView__lineSp">―</span>
                                </strong>
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video3.mp4">
                                </video>
                                <strong class="firstView__text">
                                    クリエイティブなアイデアを<br class="firstView__brSp">
                                    <span class="firstView__lineSp">―</span>リアルなウェブに映し出す<span class="firstView__lineSp">―</span>
                                </strong>
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                    </ul>
                </div>
                <!-- /.splide__track -->
            </div>
            <!-- /.splide -->
        </div>
    </section>

    <div class="c-contentContainer">
        <section id="topWorks">
            <div class="c-headingLv2">
                <h2 class="c-headingLv2__main">WORKS</h2>
                <p class="c-headingLv2__sub">制作実績</p>
            </div>
            <!-- c-headingLv2./ -->

            <?php
            $args = array(
                'post_type'      => 'production',
                'posts_per_page' => 3,
                'paged'          => $paged
            );

            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <ul class="topWorks__container">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                        <li class="topWorks__item ">

                            <h3 class="topWorks__headingLv3">
                                <?php the_field('work'); ?>
                            </h3>

                            <a href=" <?php the_field('url'); ?>" class="topWorks__link" target="_blank" rel="noopener noreferrer">
                                <div class="topWorks__thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="https://placehold.jp/16px/999/ffffff/352x198.png?text=No%20Image" alt="制作実績のサイト">
                                    <?php endif; ?>
                                </div>
                                <?php the_category(); ?>
                            </a>
                        </li>

                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>まだ投稿がありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="topWorks__btn">
                <a href="<?php echo home_url('/allworks'); ?>" class="topWorks__linkBtn">
                    view more
                </a>
            </div>
            <!-- /.works__btn -->
        </section>
        <section id="services">
            <div class="c-headingLv2">
                <h2 class="c-headingLv2__main">SERVICES</h2>
                <p class="c-headingLv2__sub">お手伝いできること</p>
            </div>
            <figure class="services__media fade-in fade-in-left">
                <h3 class="c-headingLv3 services__titleMedia">1.Webデザイン</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services1.webp" alt="できることその1" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        お客様のニーズを第一に考え、常にユーザー視点でのデザインを心掛けます。ただ美しいだけでなく、直感的に操作できる分かりやすさや、使い心地の良さを重視し、訪れた人が迷うことなく目的を達成でき、訪れるたびに新たな発見や感動があるようなWebサイトを提供します。
                    </p>
                </figcaption>
            </figure>
            <figure class="services__media fade-in fade-in-right">
                <h3 class="c-headingLv3 services__titleMedia">2.Webサイト制作</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services2.webp" alt="できることその2" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        レイアウトの正確な再現はもちろん、デザイン意図を最大限に尊重し丁寧にコーディングを行います。
                        さらに、JavaScriptを活用し、ユーザーの操作に応じたアニメーションやエフェクトを加えるなど、より印象に残るWebサイトを実現できます。
                        また、レスポンシブデザインにも対応し、ユーザーにとって使いやすいサイトを構築いたします。
                    </p>
                </figcaption>
            </figure>
            <figure class="services__media fade-in fade-in-left">
                <h3 class="c-headingLv3 services__titleMedia">3.WordPressによるWEBサイト構築</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services3.webp" alt="できることその3" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        完全オリジナルのテーマを一から作成するだけでなく、運用のしやすさを重視し管理画面からも簡単に更新できるような設定にするように心がけています。
                        また、既存のWordPressテーマを活用しながら、必要に応じて設定を行うことも可能です。WordPressを活用した柔軟なWebサイト制作について、お気軽にご相談ください。
                    </p>
                </figcaption>
            </figure>

        </section>
        <section id="about">
            <div class="c-headingLv2">
                <h2 class="c-headingLv2__main">ABOUT</h2>
                <p class="c-headingLv2__sub">私について</p>
            </div>
            <!-- /.c-headingLv2 -->
            <figure class="about__media fade-in fade-in-up">

                <div class="about__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image1.webp" alt="自分の顔のイメージ" class="about__img" width="400" height="240" decoding="async">
                </div>
                <!-- /.about__imgWrap -->
                <figcaption class="about__body">
                    <h4 class="c-headingLv4">自己紹介</h4>
                    <p class="about__text TextTyping">
                        初めまして、三浦　浩太と申します。<br>
                        フリーランスでWeb制作を行っています。HTML、CSS、JavaScriptを駆使しモダンで魅力的なサイト構築をお手伝いします。また、お客様のアイデアを具体的な形にするため、お客様とのコミュニケーションを大切にします。<br>
                        ぜひ、お気軽にご相談ください。
                    </p>
                </figcaption>
            </figure>
        </section>
        <section id="inquiry">
            <div class="inquiry__inner">
                <div class="c-headingLv2">
                    <h2 class="c-headingLv2__main">CONTACT</h2>
                    <p class="c-headingLv2__sub">お問い合わせ</p>
                </div>
                <!-- /.c-headingLv2 -->
                <div class="inquiry__wrap fade-in">
                    <p class="inquiry__text ">
                        Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。
                    </p>
                    <a href="<?php echo home_url('/contact'); ?>" class="inquiry__itemBtn">
                        <div class="inquiry__textBtn">
                            CONTACT
                        </div>
                        <!-- /.inquiry__textBtn -->
                    </a>

                </div>
                <!-- /.inquiry__wrap -->
            </div>
            <!-- /.inquiry__inner" -->
        </section>
    </div>
    <!-- /.c-contentContainer -->

    <!-- ローディングアニメーション -->
    <div class="loding__container">
        <div class="loding__box">
            <div class="loding__circle"></div>
            <div class="loding__circle"></div>
            <div class="loding__circle"></div>
            <div class="loding__shadow"></div>
            <div class="loding__shadow"></div>
            <div class="loding__shadow"></div>
            <span class="loding__text loding__text--disyplayBlock">Loading</span>
        </div>
        <!-- /.loding__box -->
    </div>
    <!-- /.loding__container -->

</main>
<?php get_footer(); ?>