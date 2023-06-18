<!-- クエリ設定 -->
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
query_posts($args);
?>
<!-- /クエリ設定 -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="cards-gallery-list">
            <a class="card" href="<?php echo get_permalink(); ?>">
                <figure class="card-figure">
                    <img class="card-image" src="<?php the_post_thumbnail(''); ?>" alt="">
                </figure>
                <h2 class="card-title"><?php the_title(); ?></h2>
            </a>
        </li>
<?php endwhile;
endif; ?>
</ul>


<!-- cards-list -->