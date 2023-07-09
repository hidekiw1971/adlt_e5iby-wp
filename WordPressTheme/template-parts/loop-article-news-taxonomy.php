<!-- クエリ設定 -->
<?php
$post_type = get_post_type();

$queried_object = get_queried_object();
$category_id = $queried_object->term_id;
$taxonomy = $queried_object->taxonomy;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    // 'post_type' => 'news',
    'post_type' => $post_type,
    'posts_per_page' => 3,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field' => 'term_id',
            'terms' => $category_id,
        )
    )
);
$query = new WP_Query($args);
?>
<!-- /クエリ設定 -->

<?php
if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <!-- li共通部品 -->
        <?php include('swiper-li-parts.php'); ?>
        <!-- /li共通部品 -->
<?php endwhile;
endif; ?>
<!-- cards-list -->