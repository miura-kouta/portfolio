<?php get_header(); ?>
<main class="main">
  <section id="notFound" class="notFound">
    <h1 class="u-headingLv1__en">404 Page Not Found</h1>
    <p>お探しのページは見つかりませんでした</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="notFound__button">トップに戻る</a>
  </section>
</main>
<?php get_footer(); ?>