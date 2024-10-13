    <footer id="footer" class="footer">
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
                            <a href="<?php echo home_url('/allworks'); ?>" class="gnav__link">
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

    <?php wp_footer(); ?>
    </body>

    </html>