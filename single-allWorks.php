<?php get_header(); ?>
<main id="main" class="main u-contentInner">

    <div class="single-work">
        <div class="single-work__inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="single-work__content">
                        <h1 class="single-work__title"><?php the_title(); ?></h1>

                        <div class="single-work__thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="https://placehold.jp/16px/999/ffffff/800x450.png?text=No%20Image" alt="制作実績のサイト">
                            <?php endif; ?>
                        </div>

                        <div class="single-work__meta">
                            <div class="single-work__category">
                                <?php the_category(); ?>
                            </div>

                            <div class="single-work__details">
                                <?php if (get_field('name')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>クライアント名</h3>
                                        <p><?php the_field('name'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>作業内容</h3>
                                        <p><?php the_field('work'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('development')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>開発環境</h3>
                                        <p><?php the_field('development'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('cms')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>CMS</h3>
                                        <p><?php the_field('cms'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('technology')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>使用技術</h3>
                                        <p><?php the_field('technology'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('theme')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>テーマ</h3>
                                        <p><?php the_field('theme'); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('period')): ?>
                                    <div class="single-work__detail-item">
                                        <h3>制作期間</h3>
                                        <p><?php the_field('period'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="single-work__content">
                            <?php the_content(); ?>
                        </div>

                        <div class="single-work__link">
                            <?php if (get_field('website_url')): ?>
                                <a href="<?php the_field('website_url'); ?>" class="button" target="_blank" rel="noopener noreferrer">サイトを見る</a>
                            <?php endif; ?>
                        </div>
                    </article>

                    <div class="single-work__navigation">
                        <div class="prev-post"><?php previous_post_link('%link', '&laquo; 前の制作実績'); ?></div>
                        <div class="archive-link"><a href="<?php echo get_post_type_archive_link('all-works'); ?>">一覧に戻る</a></div>
                        <div class="next-post"><?php next_post_link('%link', '次の制作実績 &raquo;'); ?></div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>