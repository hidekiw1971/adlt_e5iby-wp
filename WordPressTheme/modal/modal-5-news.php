<header class="modal__header">
    <h2 class="modal__title" id="modal-1-title">
        カスタム投稿（news）アーカイブ
    </h2>
    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
</header>
<main class="modal__content" id="modal-2-content">
    <!-- function -->
    <div class="archive">
        <!-- アーカイブリスト表示（post） -->
        <ul class="archive-monthly">
            <?php
            $args = array(
                'type' => 'monthly',
                'post_type' => 'post',
                'show_post_count' => true,
                'echo' => false
            );
            $archives = wp_get_archives($args);
            $archives = str_replace('<li>', '<li class="archive-monthly-list"><i class="bi bi-caret-right-fill"></i>', $archives);
            $archives = str_replace('<a', '<a class="archive-monthly-link"', $archives);
            echo $archives;
            ?>
        </ul>
    </div>
    <!-- /アーカイブリスト表示（post） -->
    <!-- /function -->
</main>
<footer class="modal__footer"></footer>