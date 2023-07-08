"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // 開始
  // swipre-singe
  const swiper = new Swiper('.swiper-single', {
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

  // スクロール中はcontentsを非表示にする
  $(function () {
    $(window).on("scroll touchmove", function () { //スクロール中に判断する
      $(".article-svideo").stop(); //アニメーションしている場合、アニメーションを強制停止
      $(".article-svideo").css('display', 'none').delay(500).fadeIn('fast');
      //スクロール中は非表示にして、500ミリ秒遅らせて再び表示
    });
  });
  // 終了
});