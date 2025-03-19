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
                    'post_type' => 'production', /* 取得したい投稿タイプ */
                    'posts_per_page' => 6, //１ページの表示数
                    'paged' => $paged //何ページ目の情報を取得するかを指定

                );

                $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
                ?>

                <?php ?> <!-- 取得した投稿の表示 -->
                <?php if ($the_query->have_posts()) : ?> <!-- もし、投稿がある場合 -->
                    <ul class="allWorks__container">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?> <!-- 投稿のループ開始 -->
                            <li class="allWorks__card">

                                <a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer">
                                    <div class="allWorks__thumbnail">
                                        <?php if (has_post_thumbnail()) :  ?> <!-- もし、投稿にサムネイルが設定されている場合 -->
                                            <?php the_post_thumbnail(); ?> <!-- 投稿のサムネイルを表示 -->
                                        <?php else :  ?> <!-- もし、サムネイルが設定されていない場合 -->
                                            <img src="https://placehold.jp/16px/999/ffffff/352x198.png?text=No%20Image" alt="制作実績のサイト">
                                        <?php endif; ?> <!-- サムネイルのif文終了 -->
                                    </div>
                                    <!-- /.allWorks__thumbnail -->
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
                        <?php endwhile; ?> <!-- 投稿のループ終了 -->
                    </ul>

                <?php else : ?> <!-- もし、投稿がない場合 -->
                    <p>まだ投稿がありません。</p>
                <?php endif; ?><!-- 投稿の条件分岐を終了 -->
                <?php wp_reset_postdata(); ?> <!-- クエリ(サブループ)のリセット -->


                <!-- ページネーション -->
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
                            // 数字のリンクにクラスを追加
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
        </section>

        <section id="inquiry">
            <div class="inquiry__inner">
                <div class="u-headingLv2__wrap">
                    <h2 class="u-headingLv2__en">CONTACT</h2>
                    <p class="u-headingLv2__ja">お問い合わせ</p>
                </div>
                <!-- /.u-headingLv2 -->


                <div class="inquiry__wrap fade-in">
                    <p class="inquiry__text ">
                        Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。
                    </p>
                    <a href="<?php echo home_url('/contact'); ?>" class="inquiry__itemBtn">
                        <div class="inquiry__textBtn">
                            CONTACT
                        </div>
                        <!-- /.inquiry__textBtn -->
                    </a>

                </div>
                <!-- /.inquiry__wrap -->


            </div>
            <!-- /.inquiry__inner" -->
        </section>
    </div>
    <!-- /.u-contentContainer -->
</main>
<?php get_footer(); ?>