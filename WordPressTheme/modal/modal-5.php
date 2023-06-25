<!-- modal-5 カテゴリー -->
<div class="modal micromodal-slide" id="modal-5" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <div role="document">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        アーカイブ
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    <!-- function -->
                    <!-- アーカイブリスト表示（post） -->
                    <div class="archive">
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
            </div>
        </div>
    </div>
</div>
<!-- /modal-5 カテゴリー -->