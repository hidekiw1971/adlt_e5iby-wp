<li class="cards-gallery-list">
    <a class="swiper cards-swiper" href="<?php echo get_permalink(); ?>">
        <!-- card-swiper -->
        <div class="swiper-wrapper">
            <?php
            $swiper_images = get_post_meta(get_the_ID(), 'swiper-img', true);
            $swiper_images_array = explode(',', $swiper_images);
            foreach ($swiper_images_array as $image_url) {
            ?>
                <div class="swiper-slide">
                    <figure class="swiper-image">
                        <img src="<?php echo $image_url; ?>" alt="大阪発 大人の遊び方（アダルト）">
                    </figure>
                </div>
            <?php } ?>
            <!-- swiper-slide -->
        </div>
        <!-- /card-swiper -->
        <h2 class="swiper-card-title"><?php the_title(); ?></h2>
    </a>
</li>