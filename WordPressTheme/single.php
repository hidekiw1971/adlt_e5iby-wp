<?php get_header(); ?>

<section class="container">
    <main class="main">
        <!-- 記事内容はここから -->
        <section class="article">
            <h1><?php the_title(); ?></h1>

            <div class="swiper swiper-single">
                <div class="swiper-wrapper">
                    <?php
                    $swiper_images = get_post_meta(get_the_ID(), 'swiper_img', true);
                    $swiper_images_array = explode(',', $swiper_images);
                    foreach ($swiper_images_array as $image_url) {
                    ?>
                        <div class="swiper-slide">
                            <figure class="swiper-image">
                                <img src="<?php echo $image_url; ?>" alt="">
                            </figure>
                        </div>
                    <?php } ?>
                    <!-- swiper-slide -->
                </div>
                <!-- /card-swiper -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- /swiper-sigle -->


            <!-- 作品タイトルセット -->
            <?php echo "<h2>作品タイトル</h2>"; ?>
            <?php
            $video_title = get_post_meta(get_the_ID(), 'video_title', true);
            if (!empty($video_title)) {
                echo "<p>" . $video_title . "</p>";
            } else {
                echo "<p>タイトルがセットされてません。</p>";
            }
            ?>
            <!-- 作品タイトルセット -->

            <!-- 作品概要セット -->
            <?php echo "<h2>作品概要</h2>"; ?>
            <?php
            $video_overview = get_post_meta(get_the_ID(), 'video_overview', true);
            if (!empty($video_overview)) {
                echo "<blockquote>" . $video_overview . "</blockquote>";
            } else {
                echo "<blockquote>概要がセットされてません。</blockquote>";
            }
            ?>

            <?php
            $video_overview_url = get_post_meta(get_the_ID(), 'video_overview_url', true);
            $video_overview_url_before = get_post_meta(get_the_ID(), 'video_overview_url_before', true);
            $video_overview_url_after = get_post_meta(get_the_ID(), 'video_overview_url_after', true);
            if (!empty($video_overview_url)) {
                echo "<a href='" . $video_overview_url . "' target=_blank class='url'>";
                echo "引用先：" . $video_overview_url_before . "<span></span>" . $video_overview_url_after . "</a>";
            } else {
                echo "<blockquote>引用先urlがセットされてません。</blockquote>";
            }
            ?>
            <!-- 作品概要セット -->

            <!-- 主観的感想をセット -->
            <?php echo "<h2>主観的感想</h2>" ?>
            <?php
            $video_subjectivity = get_post_meta(get_the_ID(), 'video_subjectivity', true);
            if (!empty($video_subjectivity)) {
                echo "<p>" . $video_subjectivity . "</p>";
            } else {
                echo "<p>主観的感想がセットされてません。</p>";
            }
            ?>
            <!-- /主観的感想セット -->

            <!-- レビュー抜粋 -->
            <?php
            $review_excerpt = get_post_meta(get_the_ID(), 'review_excerpt', true);
            $review_excerpt_array = explode(',', $review_excerpt);
            echo "<h2>参考になったレビュー抜粋</h2>";

            if (!empty($review_excerpt)) {
                echo "<ul class='review'>";
                foreach ($review_excerpt_array as $review) {
                    echo "
                    <li class='review-list'>
                    <a href='" . $video_overview_url . "' target=_blank>" . $review . "</a>
                    </li>
                    ";
                }
                echo "</ul>";
                // 
            } else {
                echo "<p>参考になるレビューはまだありません。</p>";
                // 
            }
            ?>
            <!-- /レビュー抜粋 -->

            <!-- コラボ原作同人誌作品をセット -->
            <?php
            $manga_img = get_post_meta(get_the_ID(), 'manga_img', true);
            $manga_img_array = explode(',', $manga_img);
            echo "<h2>原作同人誌とのコラボ</h2>";
            if (!empty($manga_img)) {
                echo "
                <div class='swiper swiper-single'>
                    <div class='swiper-wrapper'>
                ";
                foreach ($manga_img_array as $manga_img_url) {
                    echo "
                    <div class='swiper-slide'>
                        <figure class='swiper-image'>
                            <img src='" . $manga_img_url . "' alt=''>
                        </figure>
                    </div>
                    ";
                }
                // 
            } else {
                echo "<p>同人誌とのコラボはありません。</p>";
                // 
            }
            ?>
            <?php
            echo "
                </div>
            </div>
            ";
            ?>
            <!-- /コラボ原作同人誌作品をセット -->

            <!-- エロ漫画のタイトル -->
            <?php
            $manga_title = get_post_meta(get_the_ID(), 'manga_title', true);
            $manga_url = get_post_meta(get_the_ID(), 'manga_url', true);
            if (!empty($manga_title)) {
                echo "<h2>エロ漫画タイトル</h2>";
                echo "<a class='url' href='" . $manga_url . "' target=_blank'>" . $manga_title . "</a>";
                // 
            } else {
                // echo "エロ漫画タイトルなし";
                // 
            }
            ?>
            <!-- /エロ漫画のタイトル -->

            <!-- エロ漫画の発行者（サークル） -->
            <?php
            $manga_hakkousha = get_post_meta(get_the_ID(), 'manga_hakkousha', true);
            if (!empty($manga_hakkousha)) {
                echo "<h2>エロ漫画の発行者（サークル）</h2>";
                echo "<p>" . $manga_hakkousha . "</p>";
                // 
            } else {
                // 
            }
            ?>
            <!-- /エロ漫画の発行者（サークル） -->

            <!-- エロ漫画の作画者 -->
            <?php
            $manga_sakuga = get_post_meta(get_the_ID(), 'manga_sakuga', true);
            if (!empty($manga_sakuga)) {
                echo "<h2>エロ漫画の作画者</h2>";
                echo "<p>" . $manga_sakuga . "</p>";
                // 
            } else {
                // 
            }
            ?>
            <!-- /エロ漫画の作画者 -->

            <!-- AV女優について -->
            <?php echo "<h2>AV女優名について</h2>"; ?>
            <?php
            $video_av_actress = get_post_meta(get_the_ID(), 'video_av_actress', true);
            $video_av_actress_array = explode(',', $video_av_actress);
            if (!empty($video_av_actress)) {
                foreach ($video_av_actress_array as $video_av_actress) {
                    echo "<p><strong>$video_av_actress</strong></p>";
                }
            } else {
                echo "<p>AV女優名は不明です。</p>";
            }
            ?>
            <!-- /AV女優について -->

            <!-- シリーズ -->
            <?php echo "<h2>シリーズ</h2>"; ?>
            <?php
            $video_series = get_post_meta(get_the_ID(), 'video_series', true);
            if (!empty($video_series)) {
                echo "<p>" . $video_series . "</p>";
            } else {
                echo "<p>シリーズが設定されてません。</p>";
            }
            ?>
            <!-- /シリーズ -->

            <!-- メーカー -->
            <?php echo "<h2>メーカー</h2>"; ?>
            <?php
            $video_maker = get_post_meta(get_the_ID(), 'video_maker', true);
            $video_maker_official = get_post_meta(get_the_ID(), 'video_maker_official', true);
            if (!empty($video_maker)) {
                echo "<a href='" . $video_maker_official . "' target=_blank>" . $video_maker . "</a>";
            } else {
                echo "<p>メーカー名が設定されてません。</p>";
            }
            ?>
            <!-- /メーカー -->

            <!-- レーベル -->
            <?php echo "<h2>レーベル</h2>"; ?>
            <?php
            $video_label = get_post_meta(get_the_ID(), 'video_label', true);
            if (!empty($video_label)) {
                echo "<p>" . $video_label . "</p>";
            } else {
                echo "<p>レーベル名が設定されてません。</p>";
            }
            ?>
            <!-- /レーベル -->

            <!-- sample video -->
            <?php echo "<h2>無料サンプル動画</h2>"; ?>
            <?php
            $video_sample_url = get_post_meta(get_the_ID(), 'video_sample_url', true);
            if (!empty($video_sample_url)) {
                echo "<video src='" . $video_sample_url . "' controls autoplay muted playsinline loop></video>";
            } else {
                echo "<p>無料サンプル動画はありません。</p>";
            }
            ?>
            <!-- /sample video -->

            <!-- accordion(sns) -->
            <nav class="accordion-menu">
                <div class="accordion-menu-item">
                    <div class="accordion-menu-item-btn">
                        <h2>twitter</h2>
                    </div>
                    <ul>
                        <li>
                            <!-- accordion contents -->
                            <div class="twitter-wrapper">
                                <!-- twitter1 -->
                                <?php
                                $twitter_code = get_post_meta(get_the_ID(), 'twitter_code', true);
                                $twitter_code_array = explode(',', $twitter_code);
                                foreach ($twitter_code_array as $twitter) {
                                    if (!empty($twitter)) {
                                        echo $twitter;
                                    } else {
                                        echo "twitterはありませんでした。";
                                    }
                                }
                                ?>
                                <!-- /twitter1 -->
                            </div>
                            <!-- twitter-wrapper -->
                            <!-- /accordion contents -->
                        </li>
                    </ul>
                </div>
                <div class="accordion-menu-item">
                    <div class="accordion-menu-item-btn">
                        <h2>instagram</h2>
                    </div>
                    <ul>
                        <li>
                            <!-- accordion contents -->
                            <div class="instagram">
                                <?php
                                get_template_part('template-parts/loop', 'instagram');
                                ?>
                            </div>
                            <!-- instagram -->
                            <!-- /accordion contents -->
                        </li>
                    </ul>
                </div>
                <div class="accordion-menu-item">
                    <div class="accordion-menu-item-btn">
                        <h2>blog</h2>
                    </div>
                    <ul>
                        <li>
                            <!-- accordion contents -->
                            <div class="blog">
                                <?php
                                get_template_part('template-parts/loop', 'blog');
                                ?>
                            </div>
                            <!-- instagram -->
                            <!-- /accordion contents -->
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /accordion(sns) -->

            <!-- その他 -->
            <?php echo "<h2>その他</h2>"; ?>
            <?php
            $content = get_the_content();
            if (!empty($content)) {
                echo "$content";
                // 
            } else {
                echo "<p>特になし。</p>";
                // 
            }
            ?>
            <!-- /その他 -->

            <!-- article-button -->
            <button class="article-svideo">
                <?php
                $video_overview_url = get_post_meta(get_the_ID(), 'video_overview_url', true);
                echo "<a href='" . $video_overview_url . "' target=_blank'>本編はこちら</a>";
                ?>
            </button>
            <!-- /article-button -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php endwhile;
            endif; ?>
            <!-- 記事ナビリンク -->
            <div class="article-pnlink">
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="previous">前の記事</a>
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="next">次の記事</a>
            </div>
            <!-- /記事ナビリンク -->
        </section>
        <!-- /article -->
    </main>
    <aside class="sidebar">
        <?php include('sidebar.php'); ?>
    </aside>
</section>
<!-- modal -->
<?php include('modal/modal.php') ?>
<!-- /modal -->

<?php get_footer(); ?>