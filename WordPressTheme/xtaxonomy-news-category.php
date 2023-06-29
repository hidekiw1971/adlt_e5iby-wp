<?php get_header(); ?>

<section class="container">
    <main class="main">
        <h2>taxonomy-news-category.php</h2>
        <!-- cards-gallery-list -->
        <ul class="cards-gallery">
            <!-- cards-gallery-list -->
            <?php get_template_part('template-parts/loop', 'article-news') ?>
            <!-- /cards-gallery-list -->
        </ul>
        <!-- /cards-gallery -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal-1 お問い合わせ -->
<?php include('modal/modal-1.php'); ?>
<!-- modal -->
<?php include('modal/modal.php') ?>
<!-- /modal -->

<?php get_footer(); ?>