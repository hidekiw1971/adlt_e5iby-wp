<!-- modal-3 カテゴリー -->
<div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <div role="document">
                <!-- header/main/footer -->
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        カテゴリー
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    <!-- function1 -->
                    <?php
                    // カテゴリー一覧を取得
                    $args = array(
                        'taxonomy'     => 'category', // カテゴリータクソノミーのスラッグ
                        'hide_empty'   => 0, // 空のカテゴリーも表示する場合は 0、非表示にする場合は 1
                    );
                    // $categories = get_terms($args);
                    $categories = get_categories($args);

                    if (!empty($categories)) {
                        echo '<ul class="categories">';

                        // カテゴリーごとにループ
                        foreach ($categories as $category) {
                            // カテゴリーのリンクを表示
                            echo '<li class="categories-list"><a class="categories-link" href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
                        }

                        echo '</ul>';
                    } else {
                        echo 'カテゴリーがありません。';
                    }
                    ?>
                    <!-- /function1 -->
                </main>
                <footer class="modal__footer"></footer>
                <!-- /header/main/footer -->

                <!-- header/main/footer -->
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        カスタム投稿・カテゴリー
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    <!-- function2 -->
                    <?php
                    // カテゴリー一覧を取得
                    $args = array(
                        'taxonomy'     => 'news-category', // カテゴリータクソノミーのスラッグ
                        'hide_empty'   => 0, // 空のカテゴリーも表示する場合は 0、非表示にする場合は 1
                    );
                    // $categories = get_terms($args);
                    $categories = get_categories($args);

                    if (!empty($categories)) {
                        echo '<ul class="categories">';

                        // カテゴリーごとにループ
                        foreach ($categories as $category) {
                            // カテゴリーのリンクを表示
                            echo '<li class="categories-list"><a class="categories-link" href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
                        }

                        echo '</ul>';
                    } else {
                        echo 'カテゴリーがありません。';
                    }
                    ?>
                    <!-- /function2 -->
                </main>
                <footer class="modal__footer"></footer>
                <!-- /header/main/footer -->
            </div>
        </div>
    </div>
</div>
<!-- /modal-3 カテゴリー -->