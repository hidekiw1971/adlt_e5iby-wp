<header class="modal__header">
    <h2 class="modal__title" id="modal-1-title">
        タグ（post）
    </h2>
    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
</header>
<main class="modal__content" id="modal-2-content">
    <!-- function -->
    <?php
    // カスタムクエリを作成して投稿タイプが'post'のタグを取得する
    $tags = get_terms(array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
    ));

    // タグが存在する場合にのみ表示する
    if (!empty($tags)) {
        echo '<ul class="tags">';
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag); // タグのリンクを取得する
            echo '<li class="tags-list"><a class="tags-link" href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'タグがありません。';
    }
    ?>
    <!-- /function -->
</main>
<footer class="modal__footer"></footer>