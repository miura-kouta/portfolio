<?php get_header(); ?>
<main class="main">
<div class="not-found__container">
  <h1 class="not-found__text--title">404 Page Not Found</h1>
  <p>お探しのページは見つかりませんでした</p>
  <?php // トップに戻るボタン ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-top__button">トップに戻る</a>
</div>

<?php get_footer(); ?>