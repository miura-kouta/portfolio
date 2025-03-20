<?php get_header(); ?>
<main class="u-contentInner">
    <div class="u-contentContainer">
        <section id="allWorks" class="allWorks">
            <div class="u-headingLv1Wrap">
                <h1 class="u-headingLv1__en">WORKS</h1>
                <p class="u-headingLv1__ja">制作実績一覧</p>
                <div class="allWorks__imgWrap ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/allWorks1.webp" alt="制作実績のサイトを紹介する人達" width="400" height="200" decoding="async">
                </div>
                <!-- /.allWorks__imgWrap -->
            </div>
            <!-- /.u-headingLv1 -->

            <div class="allWorks__inner">
                <?php
                $args = array(
                    'post_type' => 'all-works',
                    'posts_per_page' => 6,
                    'paged' => $paged

                );

                $the_query = new WP_Query($args);
                ?>

                <?php ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="allWorks__container">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                            <li class="allWorks__card">
                                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                    <div class="allWorks__thumbnail">
                                        <?php if (has_post_thumbnail()) :  ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else :  ?>
                                            <img src="https://placehold.jp/16px/999/ffffff/352x198.png?text=No%20Image" alt="制作実績のサイト">
                                        <?php endif; ?>
                                    </div>
                                    <?php the_category(); ?>
                                    <div class="allWorks__body">

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
                                    </div>
                                    <!-- /.allWorks__body -->
                                </a>

                            </li>
                        <?php endwhile; ?>
                    </ul>

                <?php else : ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

                <div class="allWorks__wrapPagination">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'type' => 'array',
                        'current' => $paged,
                        'total' => $the_query->max_num_pages,
                        'prev_text' => '<',
                        'next_text' => '>',
                    );
                    $pagination_links = paginate_links($args);

                    if ($pagination_links) {
                        echo '<ul class="pagination">';
                        foreach ($pagination_links as $link) {
                            if (strpos($link, 'current') !== false) {
                                echo '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
                            } else {
                                echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
                            }
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
                <!-- /.allWorks__wrapPagination -->

            </div>
            <!-- /.allWorks__inner -->

            <?php get_template_part('components/inquiry'); ?>
        </section>

    </div>
    <!-- /.u-contentContainer -->
</main>
<?php get_footer(); ?>