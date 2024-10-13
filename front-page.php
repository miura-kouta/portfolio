
<?php get_header(); ?>
<main id="main" >
    <div class="goingUp">    
        <div class="goingUp__wrapCircle fade-in2 fade-in-circle">
            <a href="#firstView" class="goingUp__linkCircle">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bottom__thumb--images1.png" alt="円" width="273" height="273" decoding="async">
            </a>
        </div>
        <div class="goingUp__wrapArrow  fade-in2 fade-in-circle">
            <a href="#firstView" class="goingUp__linkArrow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bottom__thumb--images2.png" alt="矢印" width="178" height="316" decoding="async">
            </a>
        </div>
    </div>
    <section id="firstView" class="firstView" >
        <div class="firstView__container">
            <div  class="splide" aria-label="Splideの基本的なHTML">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video1.mp4">
                                </video>
                                <p class="firstView__text">
                                    シンプルさと洗練された技術<br class="firstView__brSp">
                                    <span class="firstView__lineSp">―</span>あなたのサイトを際立たせる<span class="firstView__lineSp">―</span>
                                </p>
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video2.mp4">
                                </video>
                                <p class="firstView__text">
                                    デザインとコーディングの融合<br class="firstView__brSp">
                                    <span class="firstView__lineSp">―</span>
                                    魅力を形にする
                                    <span class="firstView__lineSp">―</span>
                                </p>
                            </div>
                            <!-- /.firstView__wrap -->
                        </li>
                        <li class="splide__slide">
                            <div class="firstView__wrap">
                                <video class="firstView__video" muted autoplay playsinline loop>
                                    <source src="<?php echo get_template_directory_uri(); ?>/images/video3.mp4">
                                </video>
                                <p class="firstView__text">
                                    クリエイティブなアイデアを<br class="firstView__brSp">
                                    <span class="firstView__lineSp">―</span>リアルなウェブに映し出す<span class="firstView__lineSp">―</span>
                                </p>
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
    <section id="works" >
                    <div class="c-headingLv2">
                        <h2 class="c-headingLv2__main">WORKS</h2>
                        <p class="c-headingLv2__sub">制作実績</p>
                    </div>
                    <!-- c-headingLv2./ -->
                    <div class="works__container">
                        <div class="works__item works__extend4">
                            <div class="works__line works__extend">
                                <div class="works__line2 works__extend2">
                                    <a href="https://mk-craft.tokyo/cosme/" class="works__link" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cosme-image.jpg" alt="制作サイトその1" class="works__extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.works__line2 -->
                            </div>
                            <!-- /.works__line -->
                        </div>
                        <!-- /.works__item -->
                        <div class="works__item works__extend4">
                            <div class="works__line works__extend">
                                <div class="works__line2 works__extend2">
                                    <a href="https://www.mk-craft.tokyo/portfolio/" class="works__link line2 " target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/works-image4.jpg" alt="制作サイトその3" class="works__extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.works__line2 -->
                            </div>
                            <!-- /.works__line -->
                        </div>
                        <!-- /.works__item -->

                        <div class="works__item works__extend4">
                            <div class="works__line works__extend">
                                <div class="works__line2 works__extend2">
                                    <a href="https://mk-craft.tokyo/bread/" class="works__link" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/bread.jpg" alt="制作サイトその2" class="works__extend3" width="400" height="240" decoding="async">
                                    </a>
                                </div>
                                <!-- /.works__line2 -->
                            </div>
                            <!-- /.works__line -->
                        </div>
                        <!-- /.works__item -->

                    </div>
                    <div class="works__btn">
                        <a href="<?php echo home_url('/allworks'); ?>" class="works__linkBtn">
                            view more
                        </a>
                    </div>
                    <!-- /.works__btn -->
            </section>
            <section id="services" >    
                <div class="c-headingLv2">
                    <h2 class="c-headingLv2__main">SERVICES</h2>
                    <p class="c-headingLv2__sub">お手伝いできること</p>
                </div>
                <!-- /.c-headingLv2 -->
                    <div class="services__media fade-in fade-in-left">
                        <figure class="services__imgWrap--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image1.jpg" alt="できることその1(PC)" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services__body">
                            <h3 class="level3__heading services__titleMedia">1.Webデザイン</h3>
                            <figure class="services__imgWrap--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image1.jpg" alt="できることその1(SP)" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service__text">
                                お客様のニーズを第一に考え、ユーザーが見やすいデザインを採用します。また、デザインの美しさと機能性のバランスを追求し、ユーザーに感動を与えるWebサイトを実現します。
                            </p>
                        </div>
                        <!-- /.services__body -->
                    </div>
                    <!-- /.services__media -->
                    <div class="services__media fade-in fade-in-right">
                        <figure class="services__imgWrap--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image2.jpg" alt="できることその2(PC)" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services__body">
                            <h3 class="level3__heading services__titleMedia">2.Webサイト制作</h3>
                            <figure class="services__imgWrap--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image2.jpg" alt="できることその2(SP)" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service__text">
                                ご提示頂いたデザインカンプから丁寧にコーディングを行います。JavaScriptによる動きのあるコーディングも可能です。
                            </p>
                        </div>
                        <!-- /.services__body -->
                    </div>
                    <!-- /.services__media -->
                    <div class="services__media fade-in fade-in-left">
                        <figure class="services__imgWrap--pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services-image3.jpg" alt="できることその3(PC)" width="400" height="240" decoding="async">
                        </figure>
                        <div class="services__body">
                            <h3 class="level3__heading services__titleMedia">3.WordPressによるWEBサイト構築</h3>
                            <figure class="services__imgWrap--sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services-image3.jpg" alt="できることその3(SP)" width="400" height="240" decoding="async">
                            </figure>
                            <p class="service__text">
                                ご希望であればWordpressによるオリジナルテーマや既存テーマを用いてWebコーディングも承ります。
                            </p>
                        </div>
                        <!-- /.services__body -->
                    </div>
                    <!-- /.services__media -->                
            </section>
            <section id="about" >
                <div class="c-headingLv2">
                    <h2 class="c-headingLv2__main">ABOUT</h2>
                    <p class="c-headingLv2__sub">私について</p>
                </div>
                <div class="about__media fade-in fade-in-up">
                    <figure class="about__imgWrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-image1.jpg" alt="自分の顔のイメージ" width="400" height="240" decoding="async">
                    </figure>
                    <div class="about__body">
                        <h2 class="level3__heading">三浦　浩太</h2>
                        <p class="about__text TextTyping">
                            初めまして、三浦　浩太と申します。<br>
                            フリーランスでWeb制作を行っています。HTML、CSS、JavaScriptを駆使しモダンで魅力的なサイト構築をお手伝いします。また、お客様のアイデアを具体的な形にするため、お客様とのコミュニケーションを大切にします。<br>
                            ぜひ、お気軽にご相談ください。
                        </p>
                    </div>
                </div>
            </section>
               <section id="inquiry" > 
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
                        <a href="<?php echo home_url('/contact'); ?>" class="inquiry__linkBtn">
                            <div class="inquiry__itemBtn">
                                <div class="inquiry__textBtn">
                                    CONTACT
                                </div>
                                <!-- /.inquiry__textBtn -->
                            </div>
                            <!-- /.inquiry__itemBtn -->
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