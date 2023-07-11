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
                echo "<p>AV女優名がセットされてません。</p>";
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
            if (!empty($video_maker)) {
                echo "<p>" . $video_maker . "</p>";
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

            <!-- twitter -->
            <?php echo "<h2>twitter</h2>"; ?>
            <!-- /twitter -->

            <!-- instagram -->
            <?php echo "<h2>instagram</h2>"; ?>
            <!-- /instagram -->

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