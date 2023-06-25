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
            <a class="card" href="<?php the_permalink(); ?>">
                <figure class="card-figure">
                    <?php if (has_post_thumbnail()) :
                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    ?>
                        <img class="card-image" src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>">
                    <?php else :
                        $catch_image = catch_that_image();
                    ?>
                        <img class="card-image" src="<?php echo $catch_image; ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                </figure>
                <h2 class="card-title"><?php the_title(); ?></h2>
            </a>
        </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>検索結果はありませんでした。</p>
<?php endif; ?>
<!-- cards-list -->