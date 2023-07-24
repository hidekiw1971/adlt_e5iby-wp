<!-- クエリ設定 -->
<?php
$post_type = get_post_type();
$category_name = get_query_var('category_name');
$tag = get_query_var('tag');
// *
$args = array(
    'post_type' => $post_type,
    'category_name' => $category_name,
    'tag' => $tag,
    'posts_per_page' => 15,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    'groupby' => 'MONTH(post_date)',
    'monthnum' => get_query_var('monthnum'),
    'year' => get_query_var('year')
);
$query = new WP_Query($args);
?>
<!-- /クエリ設定 -->

<ul class="cards-gallery">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <!-- li共通部品 -->
            <?php include('swiper-li-parts.php'); ?>
            <!-- /li共通部品 -->
    <?php endwhile;
    endif; ?>
</ul>
<!-- wp-pagenavi -->
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $query));
} else {
    echo "ページナビゲーションプラグインが正しく設定されていません。";
}; ?>
<!-- /wp-pagenavi -->
<!-- cards-list -->