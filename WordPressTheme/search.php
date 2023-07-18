<?php get_header(); ?>

<section class="container">
    <main class="main">
        <!-- <h2>search.php</h2> -->
        <!-- function -->
        <h2><?php the_search_query(); ?>の検索結果</h2>
        <!-- cards-gallery-list -->
        <ul class="cards-gallery">
            <!-- cards-gallery-list -->
            <?php get_template_part('template-parts/loop', 'search') ?>
            <!-- /cards-gallery-list -->
        </ul>
        <!-- /cards-gallery -->
        <!-- /function -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal -->
<?php include('modal/modal.php') ?>
<!-- /modal -->

<?php get_footer(); ?>