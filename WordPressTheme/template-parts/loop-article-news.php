<!-- クエリ設定 -->
<?php
// $post_type = get_query_var('post_type');
$post_type = 'news';
// $category_id = get_query_var('cat');
$category_id = 'news-category';
$tag = get_query_var('tag');
$args = array(
    'post_type' => $post_type,
    'posts_per_page' => 3,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    'cat' => $category_id,
    'tag' => $tag,
    'monthnum' => get_query_var('monthnum'),
    'year' => get_query_var('year')
);
?>
<!-- /クエリ設定 -->

<?php
$query = new WP_Query($args);
if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <li class="cards-gallery-list">
            <a class="card" href="<?php echo get_permalink(); ?>">
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
<?php endwhile;
endif; ?>
<!-- cards-list -->