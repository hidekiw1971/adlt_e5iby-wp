<ul class="youtube">
    <?php
    $twitter_name = get_post_meta(get_the_ID(), 'twitter_name', true);
    $twitter_name_array = explode(',', $twitter_name);
    $twitter_url = get_post_meta(get_the_ID(), 'twitter_url', true);
    $twitter_url_array = explode(',', $twitter_url);
    if (!empty($twitter_name)) {
        foreach ($twitter_name_array as $key => $twitterName) {
            if (!empty($twitterName)) {
                $twitterUrl = isset($twitter_url_array[$key]) ? $twitter_url_array[$key] : '';
                echo "
                <li class='twitter-list'>
                    <a href='" . $twitterUrl . "' target='_blank'>" . $twitterName . "</a>
                </li>
                ";
            }
        }
    } else {
        echo "公式twitterはありません。";
    }
    ?>
</ul>