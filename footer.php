    <footer id="footer" class="footer">
        <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="footer__privacyLink">
            プライバシーポリシー
        </a>
        <p class="footer__copyRightText">© Kota Miura All rights reserved.</p>
    </footer>
    <?php if (is_front_page()) : ?>
    <?php endif; ?>
    <?php wp_footer(); ?>
    </body>

    </html>