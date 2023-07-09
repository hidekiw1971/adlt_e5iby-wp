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
<!-- cards-list -->