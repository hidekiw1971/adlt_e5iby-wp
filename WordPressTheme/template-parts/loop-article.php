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
    'posts_per_page' => 5,
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
            <li class="cards-gallery-list">
                <a class="swiper cards-swiper" href="<?php echo get_permalink(); ?>">
                    <!-- card-swiper -->
                    <div class="swiper-wrapper">
                        <?php
                        $swiper_images = get_post_meta(get_the_ID(), 'swiper-img', true);
                        $swiper_images_array = explode(',', $swiper_images);
                        foreach ($swiper_images_array as $image_url) {
                        ?>
                            <div class="swiper-slide">
                                <figure class="swiper-image">
                                    <img src="<?php echo $image_url; ?>" alt="">
                                </figure>
                            </div>
                        <?php } ?>
                        <!-- swiper-slide -->
                    </div>
                    <!-- /card-swiper -->
                    <h2 class="swiper-card-title"><?php the_title(); ?></h2>
                </a>
            </li>
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