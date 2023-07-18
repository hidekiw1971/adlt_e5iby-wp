<?php get_header(); ?>

<section class="container">
    <main class="main">
        <!-- <h2>archive-news.php</h2> -->
        <!-- cards-gallery-list -->
        <ul class="cards-gallery">
            <!-- cards-gallery-list -->
            <?php get_template_part('template-parts/loop', 'article-news-archive') ?>
            <!-- /cards-gallery-list -->
        </ul>
        <!-- /cards-gallery -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal -->
<?php include('modal/modal.php') ?>
<!-- /modal -->

<?php get_footer(); ?>