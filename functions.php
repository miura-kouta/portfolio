<?php

//アイキャッチ画像
add_theme_support('post-thumbnails');

//css,Splide,Javascript呼び出し
function my_enqueue_scripts()
{
  //css
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/style/setting/ress.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style-name', get_template_directory_uri() . '/style/style.css', array('reset-style'), '1.0.0', false);

  // Splide
  wp_enqueue_style('splide-style', get_template_directory_uri() . '/splide-4.1.3/dist/css/splide.min.css', array(), '4.1.4', 'all');
  wp_enqueue_script('splide-js', get_template_directory_uri() . '/splide-4.1.3/dist/js/splide.min.js', array(), '4.1.4', true);

  // JavaScript
  wp_enqueue_script('main', get_template_directory_uri() . '/javascript/script.js', array('splide-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


/* 投稿アーカイブページの表示設定 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
