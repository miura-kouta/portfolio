<?php get_header(); ?>
<header class="header">
  <h1 class="entry-title" itemprop="name"><?php the_archive_title(); ?></h1>
  <div class="archive-meta" itemprop="description"><?php if ('' != get_the_archive_description()) {
                                                      echo esc_html(get_the_archive_description());
                                                    } ?></div>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('entry'); ?>
<?php endwhile;
endif; ?>
<?php get_template_part('nav', 'below'); ?>
<?php get_footer(); ?>



<!-- sims-code -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- ヘッドタグ読み込み -->
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="body-whole_wrapper --front-page">

    <!-- ヘッダーパーツ読み込み -->
    <?php get_template_part('includes/header-parts'); ?>

    <main class="l-main">
      <!-- パン屑リスト -->
      <div class="breadcrumb-wrapper">
        <div class="breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb-a">ホーム</a>
          <div class="breadcrumb-layer"></div>
          <a href="<?php echo esc_url(home_url('/')); ?>/news" class="breadcrumb-a">お知らせ</a>
        </div>
      </div>

      <!-- タイトルセクション -->
      <section class="page-title-section">
        <!-- H1タグ -->
        <h1 class="c-page-h1">お知らせ</h1>
      </section>

      <section class="base-section">
        <div class="base-container">

          <!-- お知らせ一覧 -->
          <ul class="news-info_wrapper">
            <?php
            // ページ番号の取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'post', //投稿タイプ
              'posts_per_page' => 10, //１ページの表示数
              'paged' => $paged //何ページ目の情報を取得するかを指定
            );

            // 以下、ループ構造
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php
                $cat = get_the_category(); // カテゴリの配列を返すテンプレートタグ
                $catslug = $cat[0]->slug; // カテゴリslugの変数
                $cat_name = $cat[0]->name; // カテゴリ名の変数
                ?>

                <li class="news-row_wrapper">
                  <div class="news-date_wrapper">
                    <!-- 投稿日表示 -->
                    <div class="news-date"><?php the_time('Y年n月j日') ?></div>
                    <!-- カテゴリ名表示（カテゴリ名slugでクラス付与・リンクなし) -->
                    <div class="news-classification">
                      <div class="<?php echo esc_attr($catslug); ?>"><?php echo esc_html($cat_name); ?></div>
                    </div>
                  </div>
                  <div class="news-content">
                    <!-- お知らせ内容表示 -->
                    <p><?php the_content(); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif;
            ?>
          </ul>

          <!-- ページネーション全体 -->
          <div class="news-pagination-wrapper">
            <?php
            $args = array(
              'type' => 'list',
              'current' => $paged,
              'total' => $the_query->max_num_pages,
              'prev_text' => '<',
              'next_text' => '>',
            );
            echo paginate_links($args);
            ?>
          </div>

        </div>
      </section>
    </main>

    <!-- フッターパーツ読み込み -->
    <?php get_template_part('includes/footer-parts'); ?>
  </div>
  <!-- フッター読み込み -->
  <?php get_footer(); ?>