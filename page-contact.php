<?php get_header(); ?>
<main class="u-contentInner">
    <section id="contact" class="contact">
        <div class="u-headingLv1Wrap">
            <h1 class="u-headingLv1__en">CONTACT</h1>
            <p class="u-headingLv1__ja">問い合わせ</p>
            <div class="contact__imgWrap">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact1.webp" alt="問い合わせに答える人" width="400" height="200" decoding="async">
            </div>
            <!-- /.contact__imgWrap -->
        </div>
        <!-- /.u-headingLv1 -->
        <div class="contact__container u-contentContainer">
            <ul class="contact__stepFlowMenu">
                <li class="contact__stepFlowItem confirm contact__stepFlowActive "><span class="bubble"></span>入力</li>
                <li class="contact__stepFlowItem confirm2"><span class="bubble"></span>内容を確認</li>
                <li class="contact__stepFlowItem confirm3"><span class="bubble"></span>送信完了</li>
            </ul>
            <?php echo do_shortcode('[contact-form-7 id="8617d68" title="コンタクトフォーム 1"]'); ?>
            <div class="contact__RecapchaWrap">
                This site is protected by reCAPTCHA<br>and the Google
                <a href="https://policies.google.com/privacy" class="contact__RecapchaLink" target="_blank">Privacy Policy</a><br class="contact__brSp"> and
                <a href="https://policies.google.com/terms" class="contact__RecapchaLink" target="_blank">Terms of Service</a> apply.
            </div>
            <!-- /.contact__textRecapchaWrap -->
        </div>
        <!-- /.contact__container -->
    </section>
</main>
<?php get_footer(); ?>