<?php get_header(); ?>

<section class="container">
    <main class="main">
        <ul class="cards-gallery">
            <!-- cards-gallery-list -->
            <?php get_template_part('template-parts/loop', 'article') ?>
            <!-- /cards-gallery-list -->
        </ul>
        <!-- /card -->
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