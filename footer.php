    <footer id="footer" class="footer">
            <div class="footer__inner">
                <nav class="footer-listNav">
                    <ul class="footer-listMenu">
                        <li class="footer-listItem">
                            <a href="<?php echo home_url('/'); ?>#main" class="footer-listLink">
                                TOP
                            </a>
                        </li>
                        <li class="footer-listItem">
                            <a href="<?php echo home_url('/allworks'); ?>" class="footer-listLink">
                                WORKS
                            </a>
                        </li>
                        <li class="footer-listItem">
                            <a href="#services" class="footer-listLink">    
                                SERVICES
                            </a>
                        </li>
                        <li class="footer-listItem">
                            <a href="<?php echo home_url('/'); ?>#about" class="footer-listLink">
                                ABOUT
                            </a>
                        </li>
                        <li class="footer-listItem">
                            <a href="<?php echo home_url('/price'); ?>" class="footer-listLink">
                                PRICE
                            </a>
                        </li>
                        <li class="footer-listItem">
                            <a href="<?php echo home_url('/contact'); ?>" class="footer-listLink">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="footer__textCopyright">© Kota Miura All rights reserved.</p>
            </div> 
            <!-- /.footer__inner -->
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