<?php get_header(); ?>
<main>
        <section id="price" class="content">
                <div class="price__title level1__title">
                    <h1 class="price__text--title level1__heading--en">PRICE</h1>
                    <p class="price__text--subtitle level1__heading--ja">料金</p>
                    <div class="price__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/price-image1.png" alt="料金を説明する人" class="price__img" width="400" height="200" decoding="async">
                    </div>
                    <!-- /.price__img-wrapper -->
                </div>
                <!-- /.price__title -->
                <div class="price-table__container">
                    <div class="price-table__area">
                        <div class="price-table__title level2__title">
                            <h2 class="price-table__heading level2__heading--en campaign__font-color">
                                サイトOPEN<br class="price__br-sp">記念価格
                            </h2>
                        </div>
                        <!-- /.price-table__title -->
                        <div class="price-table__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                1.コーディング
                            </h3>
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・TOPページ</h4>
                                <p class="price__text--example-height">最低10000円～(高さ約7000px以下想定)</p>
                            </div>
                            <!-- /.price-table__item -->
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・下層ページ</h4>
                                <p class="price__text--example-height">最低5000円～(高さ約3500px以下想定)</p>
                            </div>
                            <!-- /.price-table__item -->
                        </div>
                        <!-- /.price-table__wrap -->
                        <div class="price-table__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                2.コーディング ＋<br>
                                デザイン or WordPress化のどちらか片方
                            </h3>
                            <!-- <div class="price__wrap--example-title"> -->
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・TOPページ</h4>
                                <p class="price__text--example-height">
                                    最低20000円～(高さ約7000px以下想定)
                                </p>
                            </div>
                            <!-- /.price-table__item -->
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・下層ページ</h4>
                                <p class="price__text--example-height">
                                    最低10000円～(高さ約3500px以下想定)
                                </p>
                            </div>
                            <!-- /.price-table__item -->
                        </div>
                        <!-- /.price-table__wrap -->
                        <div class="price-table__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                3.コーディング ＋<br>
                                デザイン + WordPress化全て
                            </h3>
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・TOPページ</h4>
                                <p class="price__text--example-height">
                                    最低30000円～(高さ約7000px以下想定)
                                </p>
                            </div>
                            <!-- /.price-table__item -->
                            <div class="price-table__item">
                                <h4 class="price__text--example-title">・下層ページ</h4>
                                <p class="price__text--example-height">
                                    最低20000円～(高さ約3500px以下想定)
                                </p>
                            </div>
                            <!-- /.price-table__item -->
                        </div>
                        <!-- /.price-table__wrap -->
                    </div>
                    <!-- /.price-table__area -->
                </div>
                <!-- /.price-table__container -->
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

</main>
<?php get_footer(); ?>