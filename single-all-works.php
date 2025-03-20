<?php get_header(); ?>
<main id="main" class="main u-contentInner">
    <div class="u-contentContainer">
        <section id="price" class="price">
            <?php if (have_posts()) : ?>
                <ul class="loop__contentsWrapper loop__contentsWrapper--left">
                    <?php while (have_posts()) : the_post(); ?>

                        <li class="loop__contentItem">
                            <a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer">
                                <div class="singleAllWorks__imgWrap">
                                <?php the_post_thumbnail(); ?>
                                </div>

                                <p class="allWorks__text">
                                    <?php the_field('name'); ?>
                                </p>
                                <p class="allWorks__text ">
                                    作業内容：<?php the_field('work'); ?>
                                </p>
                                <p class="allWorks__text">
                                    <?php the_field('development'); ?>
                                </p>
                                <p class="allWorks__text">
                                    <?php the_field('cms'); ?>
                                </p>
                                <p class="allWorks__text">
                                    <?php the_field('technology'); ?>
                                </p>
                                <p class="allWorks__text">
                                    <?php the_field('theme'); ?>
                                </p>
                                <p class="allWorks__text">
                                    <?php the_field('period'); ?>
                                </p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>記事が見つかりません</p>
            <?php endif; ?>

            <?php get_template_part('components/inquiry'); ?>
        </section>
    </div>
    <!-- /.u-contentContainer -->
</main>
<?php get_footer(); ?>