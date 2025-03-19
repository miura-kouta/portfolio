<?php get_header(); ?>
<main id="main" class="u-contentInner main">
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
                                <div class="firstView__textBox">
                                    <strong class="firstView__maintText">シンプルさと洗練された技術</strong>
                                    <p class="firstView__subText">あなたのサイトを際立たせる</p>
                                </div>
                                <!-- /.firstView__textBox -->
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video2.mp4">
                                </video>
                                <div class="firstView__textBox">
                                    <strong class="firstView__maintText">デザインとコーディングの融合</strong>
                                    <p class="firstView__subText">魅力を形にする</p>

                                </div>
                                <!-- /.firstView__textBox -->
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video3.mp4">
                                </video>
                                <div class="firstView__textBox">
                                    <strong class="firstView__maintText">クリエイティブなアイデアを</strong>
                                    <p class="firstView__subText">リアルなウェブに映し出す</p>
                                </div>
                                <!-- /.firstView__textBox -->
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

    <div class="u-contentContainer">
        <section id="topWorks">
            <div class="u-headingLv2__wrap">
                <h2 class="u-headingLv2__en">WORKS</h2>
                <p class="u-headingLv2__ja">制作実績</p>
            </div>
            <!-- u-headingLv2__wrap./ -->

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
                        <li class="topWorks__item">
                            <h3 class="topWorks__headingLv3">
                                <?php the_field('work'); ?>
                            </h3>
                            <a href=" <?php the_field('url'); ?>" class="topWorks__link  " target="_blank" rel="noopener noreferrer">
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
            <div class="u-headingLv2__wrap">
                <h2 class="u-headingLv2__en">SERVICES</h2>
                <p class="u-headingLv2__ja">お手伝いできること</p>
            </div>
            <figure class="services__media fade-in fade-in-left">
                <h3 class="u-headingLv3 services__titleMedia">1.Webデザイン</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services1.webp" alt="できることその1" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        お客様のニーズを第一に考え、常にユーザー視点でのデザインを心掛けます。ただ美しいだけでなく、直感的に操作できる分かりやすさや、使い心地の良さを重視し、訪れた人が迷うことなく目的を達成できるようなWebサイトを提供します。
                    </p>
                </figcaption>
            </figure>
            <figure class="services__media fade-in fade-in-right">
                <h3 class="u-headingLv3 services__titleMedia">2.Webサイト制作</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services2.webp" alt="できることその2" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        デザインカンプを正確に再現し丁寧にコーディングを行います。
                        さらに、JavaScriptを活用し、ユーザーの操作に応じたアニメーションを加えるなど、より印象に残るWebサイトを実現できます。
                        また、レスポンシブデザインにも対応し、ユーザーにとって使いやすいサイトを構築いたします。
                    </p>
                </figcaption>
            </figure>
            <figure class="services__media fade-in fade-in-left">
                <h3 class="u-headingLv3 services__titleMedia">3.WordPress</h3>
                <div class="services__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services3.webp" alt="できることその3" width="400" height="240" decoding="async">
                </div>
                <figcaption>
                    <p class="services__text">
                        オリジナルのテーマを一から作成するだけでなく、運用のしやすさを重視し管理画面からも簡単に更新できるような設定にするように心がけています。
                        WordPressを活用した柔軟なWebサイト制作について、お気軽にご相談ください。
                    </p>
                </figcaption>
            </figure>

        </section>
        <section id="about">
            <div class="u-headingLv2__wrap">
                <h2 class="u-headingLv2__en">ABOUT</h2>
                <p class="u-headingLv2__ja">私について</p>
            </div>
            <!-- /.u-headingLv2__wrap -->
            <figure class="about__media fade-in fade-in-up">

                <div class="about__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image1.webp" alt="自分の顔のイメージ" class="about__img" width="400" height="240" decoding="async">
                </div>
                <!-- /.about__imgWrap -->
                <figcaption class="about__body">
                    <h4 class="u-headingLv4">自己紹介</h4>
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
                <div class="u-headingLv2__wrap">
                    <h2 class="u-headingLv2__en">CONTACT</h2>
                    <p class="u-headingLv2__ja">お問い合わせ</p>
                </div>
                <!-- /.u-headingLv2__wrap -->
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
    <!-- /.u-contentContainer -->

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