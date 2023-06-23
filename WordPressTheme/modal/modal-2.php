<!-- modal-2 サイト内検索 -->
<div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <div role="document">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        サイト内検索
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    <!-- function -->
                    <!-- <?php get_search_form(); ?> -->
                    <?php include('searchform.php'); ?>
                    <!-- /function -->
                </main>
                <footer class="modal__footer"></footer>
            </div>
        </div>
    </div>
</div>
<!-- /modal-2 サイト内検索 -->