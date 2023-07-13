<?php
$instagram_code = get_post_meta(get_the_ID(), 'instagram_code', true);
if (!empty($instagram_code)) {
    $instagram_code_array = explode(',', $instagram_code);
    foreach ($instagram_code_array as $instagram) {
        if (!empty($instagram)) {
            echo $instagram;
        }
    }
} else {
    echo "Instagramがありません。";
}
