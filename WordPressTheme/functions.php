<?php

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(220, 165, true); // 幅 220px、高さ 165px、切り抜きモード

function my_script_init()
{
	// WordPressに含まれているjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.0.min.js', array(), '3.7.0', true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '0.0.0', true);
	wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '0.0.0');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/styles.css', array(), '0.0.0');
	wp_enqueue_style('contact-css', get_template_directory_uri() . '/assets/css/contact.css', array(), '0.0.0');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.0', true);
	wp_enqueue_script('polyfill', '//polyfill.io/v3/polyfill.min.js?features=es6', array(), '0.0.0', true);
	wp_enqueue_script('micromodal', '//unpkg.com/micromodal/dist/micromodal.min.js', array(), '0.0.0', true);
	wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css', array(), '1.8.0', 'all');
	wp_enqueue_script('bootstrap4-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), '0.0.0', true);
	wp_enqueue_style('bootstrap4-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '0.0.0');
	wp_enqueue_style('bootstrap4-css-map', get_template_directory_uri() . '/assets/css/bootstrap.css.map', array(), '0.0.0');
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * アイキャッチ画像設置時短
 */
// function catch_that_image()
// {
// 	global $post, $posts;
// 	$first_img = '';
// 	ob_start();
// 	ob_end_clean();
// 	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
// 	$first_img = $matches[1][0];
// 	if (empty($first_img)) {
// 記事内で画像がなかったときのためのデフォルト画像を指定
// 		$first_img = "https://wtb-web.com/wp-content/uploads/2023/04/noimage-1.png";
// 	}
// 	return $first_img;
// }

// 管理画面のカスタム投稿一覧を日付順で表示する
function admin_custom_posttype_order($wp_query)
{
	if (is_admin()) {
		$post_type = $wp_query->query['post_type'];
		if ($post_type == 'news') {
			$wp_query->set('orderby', 'date'); //並べ替えの基準(日付)
			$wp_query->set('order', 'DESC'); //新しい順。古い順にしたい場合はASCを指定
		}
	}
}
add_filter('pre_get_posts', 'admin_custom_posttype_order');
