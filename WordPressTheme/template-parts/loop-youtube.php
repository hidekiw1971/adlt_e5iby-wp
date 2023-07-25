<ul class="youtube">
    <?php
    $official_youtube_channel_name = get_post_meta(get_the_ID(), 'official_youtube_channel_name', true);
    $official_youtube_channel_url = get_post_meta(get_the_ID(), 'official_youtube_channel_url', true);
    $official_youtube_channel_name_array = explode(',', $official_youtube_channel_name);
    $official_youtube_channel_url_array = explode(',', $official_youtube_channel_url);
    if (!empty($official_youtube_channel_name)) {
        foreach ($official_youtube_channel_name_array as $key => $youtube_ch_name) {
            if (!empty($youtube_ch_name)) {
                $youtube_ch_url = isset($official_youtube_channel_url_array[$key]) ? $official_youtube_channel_url_array[$key] : '';
                echo "
                <li class='youtube-list'>
                    <a href='" . $youtube_ch_url . "' target='_blank'>" . $youtube_ch_name . "</a>
                </li>
                ";
            }
        }
    } else {
        echo "公式youtubeチャンネルはありません。";
    }
    ?>
</ul>