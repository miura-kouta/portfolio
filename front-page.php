
<?php get_header(); ?>
<main id=main>
    <div class="going-up__wrap">    
        <div class="going-up__icon--circle fade-in2 fade-in-circle">
            <a href="#first-view" class="going-up__link--circle">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bottom__thumb--images1.png" class="going-up__thumb--circle" alt="円" width="273" height="273" decoding="async">
            </a>
        </div>
        <div class="going-up__icon--arrow  fade-in2 fade-in-circle">
            <a href="#first-view" class="going-up__link--arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bottom__thumb--images2.png" class="going-up__thumb--arrow" alt="矢印" width="178" height="316" decoding="async">
            </a>
        </div>
    </div>
    <section id="first-view" >
        <div class="first-view__container">
            <div  class="splide" aria-label="Splideの基本的なHTML">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="first-view__wrap">
                                <video class="first-view__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video1.mp4">
                                </video>
                                <p class="first-view__text ">
                                    シンプルさと洗練された技術<br class="first-view__br--sp">
                                    <span class="first-view__line--sp">―</span>あなたのサイトを際立たせる<span class="first-view__line--sp">―</span>
                                </p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="first-view__wrap">
                                <video class="first-view__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video2.mp4">
                                </video>
                                <p class="first-view__text">
                                    デザインとコーディングの融合<br class="first-view__br--sp">
                                    <span class="first-view__line--sp">―</span>
                                    魅力を形にする
                                    <span class="first-view__line--sp">―</span>
                                </p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="first-view__wrap">
                                <video class="first-view__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video3.mp4">
                                </video>
                                <p class="first-view__text">
                                    クリエイティブなアイデアを<br class="first-view__br--sp">
                                    <span class="first-view__line--sp">―</span>リアルなウェブに映し出す<span class="first-view__line--sp">―</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.splide__track -->
            </div>
            <!-- /.splide -->
        </div>
    </section>
    <section id="works" class="content">
                    <div class="level2__title">
                        <h2 class="level2__heading--en">WORKS</h2>
                        <p class="level2__heading--ja">制作実績</p>
                    </div>
                    <!-- level2__title./ -->
                    <div class="works__container">
                        <div class="works__item extend4">
                            <div class="line extend">
                                <div class="line2 extend2">
                                    <a href="https://mk-craft.tokyo/cosme/" class="works__item__link" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cosme-image.jpg" alt="制作サイトその1" class="works__item__thumb extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.line2 -->
                            </div>
                            <!-- /.line -->
                        </div>
                        <!-- /.works__item -->
                        <div class="works__item extend4">
                            <div class="line extend">
                                <div class="line2 extend2">
                                    <a href="https://www.mk-craft.tokyo/portfolio/" class="works__item__link line2 " target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/works-image4.jpg" alt="制作サイトその3" class="works__item__thumb extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.line2 -->
                            </div>
                            <!-- /.line -->
                        </div>
                        <!-- /.works__item -->

                        <div class="works__item extend4">
                            <div class="line extend">
                                <div class="line2 extend2">
                                    <a href="https://mk-craft.tokyo/bread/" class="works__item__link" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/bread.jpg" alt="制作サイトその2" class="works__item__thumb extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.line2 -->
                            </div>
                            <!-- /.line -->
                        </div>
                        <!-- /.works__item -->

                    </div>
                    <div class="works__btn">
                        <a href="<?php echo home_url('/works'); ?>" class="works__btn__link">
                            view more
                        </a>
                    </div>
                    <!-- /.works__btn -->
            </section>
            <section id="services" class="content">    
                <div class="level2__title">
                    <h2 class="level2__heading--en">SERVICES</h2>
                    <p class="level2__heading--ja">お手伝いできること</p>
                </div>
                <!-- /.level2__title -->
                    <div class="services-media fade-in fade-in-left">
                        <figure class="services-media__img-wrapper--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image1.jpg" alt="できることその1(PC)" class="services-media__img" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services-media__body">
                            <!-- <h3 class="level2__heading services-media__title">1.Webデザイン</h3> -->
                            <h3 class="level3__heading services-media__title">1.Webデザイン</h3>
                            <figure class="services-media__img-wrapper--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image1.jpg" alt="できることその1(SP)" class="services-media__img" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service-media__text">
                                お客様のニーズを第一に考え、ユーザーが見やすいデザインを採用します。また、デザインの美しさと機能性のバランスを追求し、ユーザーに感動を与えるWebサイトを実現します。
                            </p>
                        </div>
                        <!-- /.services-media__body -->
                    </div>
                    <!-- /.services-media -->
                    <div class="services-media fade-in fade-in-right">
                        <figure class="services-media__img-wrapper--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image2.jpg" alt="できることその2(PC)" class="services-media__img" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services-media__body">
                            <h3 class="level3__heading services-media__title">2.Webサイト制作</h3>
                            <figure class="services-media__img-wrapper--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image2.jpg" alt="できることその2(SP)" class="services-media__img" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service-media__text">
                                ご提示頂いたデザインカンプから丁寧にコーディングを行います。JavaScriptによる動きのあるコーディングも可能です。
                            </p>
                        </div>
                        <!-- /.services-media__body -->
                    </div>
                    <!-- /.services-media -->
                    <div class="services-media fade-in fade-in-left">
                        <figure class="services-media__img-wrapper--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image3.jpg" alt="できることその3(PC)" class="services-media__img" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services-media__body">
                            <h3 class="level3__heading services-media__title">3.WordPressによるWEBサイト構築</h3>
                            <figure class="services-media__img-wrapper--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image3.jpg" alt="できることその3(SP)" class="services-media__img" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service-media__text">
                                ご希望であればWordpressによるオリジナルテーマや既存テーマを用いてWebコーディングも承ります。
                            </p>
                        </div>
                        <!-- /.services-media__body -->
                    </div>
                    <!-- /.services-media -->                
            </section>
            <section id="about" class="content">
                <div class="level2__title">
                    <h2 class="level2__heading--en">ABOUT</h2>
                    <p class="level2__heading--ja">私について</p>
                </div>
                <div class="about-media fade-in fade-in-up">
                    <figure class="about-media__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-image1.jpg" alt="自分の顔のイメージ" class="about-media__img" width="400" height="240" decoding="async">
                    </figure>
                    <div class="about__body">
                        <h2 class="level3__heading">三浦　浩太</h2>
                        <p class="about-media__text TextTyping">
                            初めまして、三浦　浩太と申します。<br>
                            フリーランスでWeb制作を行っています。HTML、CSS、JavaScriptを駆使しモダンで魅力的なサイト構築をお手伝いします。また、お客様のアイデアを具体的な形にするため、お客様とのコミュニケーションを大切にします。<br>
                            ぜひ、お気軽にご相談ください。
                        </p>
                    </div>
                </div>
            </section>
            <section id="inquiry" class="content content__pb">    
                <div class="inquiry__inner">
                    <div class="level2__title">
                        <h2 class="level2__heading--en">CONTACT</h2>
                        <p class="level2__heading--ja">お問い合わせ</p>
                    </div>
                    <!-- /.level2__title -->
                    <div class="inquiry__wrapper fade-in">
                        <p class="inquiry__text ">    
                            Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。
                        </p>
                        <a href="<?php echo home_url('/contact'); ?>" class="inquiry__link">
                            <div class="inquiry__item">
                                <div class="inquiry__text-btn">
                                    CONTACT
                                </div>
                                <!-- /.inquiry__text-btn -->
                            </div>
                            <!-- /.inquiry__item -->
                        </a>
                    </div>
                    <!-- /.inquiry__wrapper -->
                </div>
                <!-- /.inquiry__inner" -->
            </section>

    <!-- ローディングアニメーション -->
    <div class="loding__container--whole ">
        <div class="loding__box--move">
            <div class="loding__item--circle"></div>
            <div class="loding__item--circle"></div>
            <div class="loding__item--circle"></div>
            <div class="loding__item--shadow"></div>
            <div class="loding__item--shadow"></div>
            <div class="loding__item--shadow"></div>
            <span class="loding__text--on loding__text--off">Loading</span>
        </div>
    </div>

</main>
<?php get_footer(); ?>