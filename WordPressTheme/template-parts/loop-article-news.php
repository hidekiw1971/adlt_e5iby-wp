<!-- クエリ設定 -->
<?php
$queried_object = get_queried_object();
$category_id = $queried_object->term_id;
$taxonomy = $queried_object->taxonomy;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'news',
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