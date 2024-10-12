    <footer id="footer">
        <div class="outer__container--margin">
            <div class="footer__container whole__container">
                <nav class="gnav">
                    <ul class="gnav__wrap--list">
                        <li>
                            <a href="<?php echo home_url('/'); ?>#main" class="gnav__link">
                                TOP
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/works'); ?>" class="gnav__link">
                                WORKS
                            </a>
                        </li>
                        <li>
                            <a href="#services" class="gnav__link">    
                                SERVICES
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/'); ?>#about" class="gnav__link">
                                ABOUT
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/price'); ?>" class="gnav__link">
                                PRICE
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/contact'); ?>" class="gnav__link">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>

                <p class="footer__text--copyright">© Kota Miura All rights reserved.</p>

            </div>
        </div>




    </footer>

    <!-- splide -->
    <?php if (is_front_page()) : ?>
        <script src="<?php echo get_template_directory_uri(); ?>/splide-4.1.3/dist/js/splide.min.js"></script>
    <?php endif; ?>
    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/javascript/script.js"></script>

<script>
//スムーススクロール
document.addEventListener("DOMContentLoaded", () => {
    const smoothScrollTrigger2 = document.querySelectorAll('a[href^="<?php echo home_url('/'); ?>#"]');
    const smoothScrollTrigger3 = '<?php echo home_url('/'); ?>';

    for (let i = 0; i < smoothScrollTrigger2.length; i++) {
        smoothScrollTrigger2[i].addEventListener("click", (e) => {
            e.preventDefault();

            let href = smoothScrollTrigger2[i].getAttribute("href");
            let targetElement;

            // トップページの場合
            if (document.body.classList.contains('home')) {
                targetElement = document.getElementById(href.replace(smoothScrollTrigger3 + "#", ""));
                if (targetElement) {
                    const rect = targetElement.getBoundingClientRect().top;
                    const offset = window.pageYOffset;
                    const gap = 60;
                    const target = rect + offset - gap;

                    console.log(targetElement);

                    
                    window.scrollTo({
                        top: target,
                        behavior: "smooth",
                    });
                } else {
                    console.log("Target element not found");
                }
            } else {
                // 下層ページの場合、URLにターゲットIDを追加してトップページへリダイレクト
                const targetID = href.replace(smoothScrollTrigger3 + "#", "");
                window.location.href = `${smoothScrollTrigger3}?scrollTo=${targetID}`;
            }
        });
    }

    // トップページでURLのパラメータを解析してスクロール
    const urlParams = new URLSearchParams(window.location.search);
    const scrollTo = urlParams.get('scrollTo');
    if (scrollTo) {
        const targetElement = document.getElementById(scrollTo);
        if (targetElement) {
            const rect = targetElement.getBoundingClientRect().top;
            const offset = window.pageYOffset;
            const gap = 60;
            const target = rect + offset - gap;

            window.scrollTo({
                top: target,
                behavior: "smooth",
            });
        } else {
            console.log("Target element not found");
        }
    }
});

</script>

    <?php wp_footer(); ?>
    </body>

    </html>