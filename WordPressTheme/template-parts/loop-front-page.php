<!-- クエリ設定 -->
<?php
$args = array(
    'posts_per_page' => 10,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
);
$query = new WP_Query($args);
echo "<p>total posts:" . $query->found_posts . "</p>";
?>
<!-- /クエリ設定 -->

<ul class="cards-gallery">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <!-- li -->
            <?php
            $video_title = get_post_meta(get_the_ID(), 'video_title', true);
            $swiper_img = get_post_meta(get_the_ID(), 'swiper_img', true);
            $swiper_img_array = explode(',', $swiper_img);
            // 
            echo "<li class='cards-gallery-list'>
            <a class='swiper cards-swiper' href='" . get_permalink() . "'>
            <!-- card-swiper -->
            <div class='swiper-wrapper'>";
            // 
            foreach ($swiper_img_array as $swiper) {
                // echo $swiper . "<br>";
                echo "
                <div class='swiper-slide'>
                <figure class='swiper-image'>
                <img src='" . $swiper . "' alt='大阪発 大人の遊び方（アダルト）'>
                </figure>
                </div>
                ";
            }
            echo "
            <!-- swiper-slide -->
            </div>
            <!-- /card-swiper -->
            <h2 class='swiper-card-title'>" . $video_title . "</h2>
            </a>
            </li>
            ";
            ?>
            <!-- /li -->
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