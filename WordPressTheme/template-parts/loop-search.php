<!-- クエリ設定 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged,
    's' => get_search_query() // 検索クエリ
);
$custom_query = new WP_Query($args);
?>
<!-- /クエリ設定 -->

<?php if (get_search_query() === '') : ?>
    <p>キーワードを入力して検索してください。</p>
<?php elseif ($custom_query->have_posts()) : ?>
    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <!-- li共通部品 -->
        <?php include('swiper-li-parts.php'); ?>
        <!-- /li共通部品 -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>検索結果はありませんでした。</p>
<?php endif; ?>
<!-- cards-list -->