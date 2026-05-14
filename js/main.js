$(function () {
  /*=================================================
  ハンバーガーメニュー
  ===================================================*/
  // ハンバーガーメニューのクリックイベント
    $(".toggle_btn").on("click", function () {
      $("header").toggleClass("open");
    });

  // メニューが表示されている時に画面をクリックした場合
    $('#mask').on('click', function () {
    // openクラスを削除して、メニューを閉じる
      $('header').removeClass('open');
    });

    $('.menu-list a').on('click', function () {
      $('header').removeClass('open');
    });

  function fadeAnime() {
    $(".fadeUpTrigger").each(function () {
      var elemPos = $(this).offset().top - 30;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("fadeUp");
      } else {
        $(this).removeClass("fadeUp");
      }
    });
  }

  // 初回読み込み時
  fadeAnime();

  // スクロール時
  $(window).on("scroll", function () {
    fadeAnime();
  });

$(function () {
  if (!$('body').hasClass('gallery-filter-page')) return;

  $('.sort-btn li').on('click', function () {
    $('.sort-btn li').removeClass('active');
    $(this).addClass('active');

    const filter = $(this).data('filter');
    const $cards = $('.gallery-filter-page .gallery-card');

    $cards.each(function () {
      const categories = $(this).data('category').split(' ');
      const match = filter === 'all' || categories.includes(filter);

      if (match) {
        $(this).removeClass('is-hidden-temp').show(0, function () {
          $(this).removeClass('is-hide');
        });
      } else {
        $(this).addClass('is-hide');
        setTimeout(() => {
          $(this).addClass('is-hidden-temp');
        }, 300);
      }
    });
  });
});

$('.faq-question').on('click', function () {
    const $thisItem = $(this).parent('.faq-item');
    const $answer = $(this).next('.faq-answer');

    if ($thisItem.hasClass('active')) {
      $thisItem.removeClass('active');
      $answer.stop().slideUp(300);
    } else {
      $('.faq-item').removeClass('active');
      $('.faq-answer').stop().slideUp(300);

      $thisItem.addClass('active');
      $answer.stop().slideDown(300);
    }
  });

   let pageTop = $(".page-top");
  // 最初に画面が表示された時は、トップに戻るボタンを非表示に設定
  pageTop.hide();

  // スクロールイベント（スクロールされた際に実行）
  $(window).scroll(function () {
    // スクロール位置が700pxを超えた場合
    if ($(this).scrollTop() > 700) {
      // トップに戻るボタンを表示する
      pageTop.fadeIn();

      // スクロール位置が700px未満の場合
    } else {
      // トップに戻るボタンを非表示にする
      pageTop.fadeOut();
    }
  });

  // クリックイベント（ボタンがクリックされた際に実行）
  pageTop.click(function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
  });

  return false;
});

})