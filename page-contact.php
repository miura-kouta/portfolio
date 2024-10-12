<?php get_header(); ?>
<main>

        <section id="contact" class="content">
        <!-- <div class="contact__container"> -->
                <div class="contact--title">
                    <h1 class="level1__heading--en">CONTACT</h1>
                    <p class="level1__heading--ja">問い合わせ</p>
                    <div class="contact--img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contact1.png" alt="問い合わせに答える人" class="contact--img" width="400" height="200" decoding="async">
                    </div>
                    <!-- /.contact--img-wrapper -->
                </div>
                <!-- /.contact--title -->
                <div class="contact__wrapper">
                    <div class="confirmImgWrapper">
                        <div class="contact__situation confirm confirm2 confirm3">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp1.png" media="(max-width: 767px)" type="image/png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc1.png" alt="内容を入力" class="contact__top-thumb" width="400" height="200" decoding="async">
                            </picture>
                        </div>
                        <!-- /.contact__situation -->
                        <div class="contact__situation confirm confirm2 confirm3">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp2.png" media="(max-width: 767px)" type="image/png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc2.png" alt="内容を確認" class="contact__top-thumb" width="400" height="200" decoding="async">
                            </picture>
                        </div>
                        <!-- /.contact__situation -->
                        <div class="contact__situation confirm confirm2 confirm3">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp3.png" media="(max-width: 767px)" type="image/png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc3.png" alt="送信完了" class="contact__top-thumb" width="400" height="200" decoding="async">
                            </picture>
                        </div>
                        <!-- /.contact__situation -->
                    </div>
                    <!-- /.confirmImgWrapper -->
                    <div class="contact__container--form">
                        <?php echo do_shortcode('[contact-form-7 id="8617d68" title="コンタクトフォーム 1"]'); ?>
                    </div>
                    <!-- /.contact__container--form -->
                    <div class="contact__text--recapcha">
                        This site is protected by reCAPTCHA and the Google
                        <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                    </div>
                    <!-- /.contact__text--recapcha -->
                </div>
                <!-- /.contact__wrapper -->
        </section>

</main>
<?php get_footer(); ?>