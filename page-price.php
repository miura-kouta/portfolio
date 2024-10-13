<?php get_header(); ?>
<main>
        <section id="price" class="c-contentContainer" >
                <div class="headingLv1">
                    <h1 class="headingLv1__main">PRICE</h1>
                    <p class="headingLv1__sub">料金</p>
                    <div class="price__imgWrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/price-image1.png" alt="料金を説明する人"  width="400" height="200" decoding="async">
                    </div>
                    <!-- /.price__imgWrap -->
                </div>
                <!-- /.headingLv1 -->
                <div class="priceTable__container">
                    <div class="priceTable__area">
                        <div class="priceTable__title level2__title">
                            <h2 class="priceTable__heading level2__heading--en campaign__font-color">
                                サイトOPEN<br class="price__br--sp">記念価格
                            </h2>
                        </div>
                        <!-- /.priceTable__title -->
                        <div class="priceTable__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                1.コーディング
                            </h3>
                            <div class="priceTable__item">
                                <h4 >・TOPページ</h4>
                                <p >最低10000円～(高さ約7000px以下想定)</p>
                            </div>
                            <!-- /.priceTable__item -->
                            <div class="priceTable__item">
                                <h4 >・下層ページ</h4>
                                <p >最低5000円～(高さ約3500px以下想定)</p>
                            </div>
                            <!-- /.priceTable__item -->
                        </div>
                        <!-- /.priceTable__wrap -->
                        <div class="priceTable__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                2.コーディング ＋<br>
                                デザイン or WordPress化のどちらか片方
                            </h3>
                            <!-- <div class="price__wrap--example-title"> -->
                            <div class="priceTable__item">
                                <h4 >・TOPページ</h4>
                                <p >
                                    最低20000円～(高さ約7000px以下想定)
                                </p>
                            </div>
                            <!-- /.priceTable__item -->
                            <div class="priceTable__item">
                                <h4 >・下層ページ</h4>
                                <p >
                                    最低10000円～(高さ約3500px以下想定)
                                </p>
                            </div>
                            <!-- /.priceTable__item -->
                        </div>
                        <!-- /.priceTable__wrap -->
                        <div class="priceTable__wrap">
                            <h3 class="level3__heading level3__heading--align-left">
                                3.コーディング ＋<br>
                                デザイン + WordPress化全て
                            </h3>
                            <div class="priceTable__item">
                                <h4 >・TOPページ</h4>
                                <p >
                                    最低30000円～(高さ約7000px以下想定)
                                </p>
                            </div>
                            <!-- /.priceTable__item -->
                            <div class="priceTable__item">
                                <h4 >・下層ページ</h4>
                                <p >
                                    最低20000円～(高さ約3500px以下想定)
                                </p>
                            </div>
                            <!-- /.priceTable__item -->
                        </div>
                        <!-- /.priceTable__wrap -->
                    </div>
                    <!-- /.priceTable__area -->
                </div>
                <!-- /.priceTable__container -->
        </section>
        <section id="inquiry" >    
                <div class="inquiry__inner">
                    <div class="level2__title">
                        <h2 class="level2__heading--en">CONTACT</h2>
                        <p class="level2__heading--ja">お問い合わせ</p>
                    </div>
                    <!-- /.level2__title -->
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

</main>
<?php get_footer(); ?>