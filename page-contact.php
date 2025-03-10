<?php get_header(); ?>
<main class="c-contentInner">
    <div class="c-contentContainer">
        <section id="contact" class="contact">
            <div class="c-headingLv1Wrap">
                <h1 class="c-headingLv1__en">CONTACT</h1>
                <p class="c-headingLv1__ja">問い合わせ</p>
                <div class="contact__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contact1.webp" alt="問い合わせに答える人" width="400" height="200" decoding="async">
                </div>
                <!-- /.contact__imgWrap -->
            </div>
            <!-- /.c-headingLv1 -->
            <div class="contact__container">
                <div class="contact__WrapProgress">
                    <div class="contact__boxProgress confirm confirm2 confirm3">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp1.png" media="(max-width: 767px)" type="image/png">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc1.png" alt="内容を入力" class="contact__top-thumb" width="400" height="200" decoding="async">
                        </picture>
                    </div>
                    <!-- /.contact__boxProgress -->
                    <div class="contact__boxProgress confirm confirm2 confirm3">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp2.png" media="(max-width: 767px)" type="image/png">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc2.png" alt="内容を確認" class="contact__top-thumb" width="400" height="200" decoding="async">
                        </picture>
                    </div>
                    <!-- /.contact__boxProgress -->
                    <div class="contact__boxProgress confirm confirm2 confirm3">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact-sp3.png" media="(max-width: 767px)" type="image/png">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-pc3.png" alt="送信完了" class="contact__top-thumb" width="400" height="200" decoding="async">
                        </picture>
                    </div>
                    <!-- /.contact__boxProgress -->
                </div>
                <!-- /.contact__WrapProgress -->
                <div class="contact__containerForm">
                    <?php echo do_shortcode('[contact-form-7 id="8617d68" title="コンタクトフォーム 1"]'); ?>
                </div>
                <!-- /.contact__containerForm -->
                <div class="contact__textRecapcha">
                    This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                    <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                </div>
                <!-- /.contact__textRecapcha -->
            </div>
            <!-- /.contact__container -->
        </section>
    </div>
    <!-- /.c-contentContainer -->
</main>
<?php get_footer(); ?>