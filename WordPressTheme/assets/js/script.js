"use strict";

jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    // 開始
    // swipre-singe
    const swiperSingle = new Swiper('.swiper-single', {
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // cards-swiper
    const cardsSwiper = new Swiper('.cards-swiper', {
        allowTouchMove: false,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // accordion
    window.addEventListener('scroll', function () {
        var button = document.querySelector('.article-svideo');
        if (button) {
            if (window.scrollY > 0) {
                button.classList.add('hidden');
            } else {
                button.classList.remove('hidden');
            }
        }
    });
    // 終了
});
