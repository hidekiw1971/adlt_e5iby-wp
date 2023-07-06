"use strict";


jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  // 開始
  const swiper = new Swiper('.swiper', {
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
  // 終了
});
