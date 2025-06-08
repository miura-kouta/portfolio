<?php get_header(); ?>
<main id="main" class="main u-contentInner">
    <div class="u-contentContainer">
        <section id="singleAllWorks" class="singleAllWorks">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <h1 class="singleAllWorks__headingLv1">
                        <?php the_field('name'); ?>
                    </h1>

                    <div class="singleAllWorks__imgWrap">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <ul class="singleAllWorks__menu">

                        <li class="singleAllWorks__item">
                            <p class="allWorks__text ">
                                作業内容：<?php the_field('work'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('development'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('cms'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('technology'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('theme'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('period'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('target'); ?>
                            </p>
                        </li>
                        <li class="singleAllWorks__item">
                            <p class="allWorks__text">
                                <?php the_field('overview'); ?>
                            </p>
                        </li>

                        <li class="singleAllWorks__item">
                            <a href="<?php the_field('url'); ?>" class="singleAllWorks__link" target="_blank" rel="noopener noreferrer">
                                URL：<?php the_field('url'); ?>
                            </a>
                        </li>
                    </ul>
                <?php endwhile; ?>
            <?php else : ?>
                <p>記事が見つかりません</p>
            <?php endif; ?>

            <?php get_template_part('components/inquiry'); ?>
        </section>
    </div>
    <!-- /.u-contentContainer -->
</main>
<?php get_footer(); ?>