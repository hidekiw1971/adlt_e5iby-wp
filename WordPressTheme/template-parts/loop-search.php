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
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>検索結果はありませんでした。</p>
<?php endif; ?>
<!-- cards-list -->