<ul class="blog">
    <?php
    $official_blog = get_post_meta(get_the_ID(), 'official_blog', true);
    $official_blogname = get_post_meta(get_the_ID(), 'official_blogname', true);
    $official_blog_array = explode(',', $official_blog);
    $official_blogname_array = explode(',', $official_blogname);
    if (!empty($official_blog)) {
        foreach ($official_blog_array as $key => $blog) {
            if (!empty($blog)) {
                $blogname = isset($official_blogname_array[$key]) ? $official_blogname_array[$key] : '';
                echo "
                    <li class='blog-list'>
                        <a href='" . $blog . "' target='_blank'>" . $blogname . "</a>
                    </li>
                ";
            }
        }
    } else {
        echo "official_blogはありません。";
    }
    ?>
</ul>