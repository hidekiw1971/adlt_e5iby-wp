<?php get_header(); ?>

<section class="container">
    <main class="main">
        <!-- <h2>front-page.php</h2> -->
        <!-- cards-gallery-list -->
        <?php get_template_part('template-parts/loop', 'article') ?>
        <!-- /cards-gallery-list -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal -->
<?php include('modal/modal.php') ?>
<!-- /modal -->

<?php get_footer(); ?>