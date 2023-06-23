<?php get_header(); ?>

<section class="container">
    <main class="main">
        <!-- 記事内容はここから -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <section class="article">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </section>
        <?php endwhile;
        endif; ?>
        <!-- 記事ナビリンク -->
        <div class="article-pnlink">
            <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="previous">前の記事</a>
            <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="next">次の記事</a>
        </div>
        <!-- /記事ナビリンク -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal-1 お問い合わせ -->
<?php include('modal/modal-1.php'); ?>
<!-- /modal-1 お問い合わせ -->

<!-- modal-2 サイト内検索 -->
<?php include('modal/modal-2.php'); ?>
<!-- /modal-2 サイト内検索 -->

<?php get_footer(); ?>