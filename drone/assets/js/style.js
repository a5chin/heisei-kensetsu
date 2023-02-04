//ページスクロール
//---------------------------------

window.addEventListener('scroll', function () {
    if (100 < window.scrollY) {
      document.getElementById('header').classList.add('page-scroll');
  
    } else {
      document.getElementById('header').classList.remove('page-scroll');
    }
  });
  
  //テーブルスクロール
  //---------------------------------
  window.addEventListener('DOMContentLoaded', function () {
    new ScrollHint('.js-scrollable', {
      i18n: {
        scrollable: 'スクロールできます'
      }
    });
  
  });
  
  //sdgsアニメーション
  //---------------------------------
  var scrollAnimationClass = 'sa';
  var scrollAnimationShowClass = 'show';
  var triggerMarginDefault = 0;
  
  var scrollAnimationElm = document.querySelectorAll('.' + scrollAnimationClass);
  var scrollAnimationFunc = function () {
    var dataMargin = scrollAnimationClass + '_margin';
    var dataTrigger = scrollAnimationClass + '_trigger';
    var dataDelay = scrollAnimationClass + '_delay';
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = triggerMarginDefault;
      var elm = scrollAnimationElm[i];
      var showPos = 0;
      if (elm.dataset[dataMargin] != null) {
        triggerMargin = parseInt(elm.dataset[dataMargin]);
      }
      if (elm.dataset[dataTrigger]) {
        showPos = document.querySelector(elm.dataset[dataTrigger]).getBoundingClientRect().top + triggerMargin;
      } else {
        showPos = elm.getBoundingClientRect().top + triggerMargin;
      }
      if (window.innerHeight > showPos) {
        var delay = (elm.dataset[dataDelay]) ? elm.dataset[dataDelay] : 0;
        setTimeout(function (index) {
          scrollAnimationElm[index].classList.add('show');
        }.bind(null, i), delay);
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
  
  
  //外部ページ　スムーズスクロール
  //---------------------------------
  ;
  (function ($) {
    var headerHeight = $('.header').outerHeight();
    var urlHash = location.hash;
    if (urlHash) {
      $('body,html').stop().scrollTop(0);
      setTimeout(function () {
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({
          scrollTop: position
        }, 300);
      }, 100);
    }
    $('a[href^="#"]').click(function () {
      var href = $(this).attr("href");
      var target = $(href);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({
        scrollTop: position
      }, 300);
    });
  })(jQuery);
  
  //フォーム
  //---------------------------------
  //複数の要素に動的なidをつける
  var item = Array();
  var moji = 'item';
  var list = document.getElementById("js-form-about");
  var item = list.getElementsByTagName('input');
  var serial_num = 1;
  
  for (var i = 0; i <= item.length - 1; i++) {
    //id追加
    item[i].setAttribute('id', moji + serial_num++);
  }
  
  //複数の要素に動的なidをつける
  window.addEventListener('DOMContentLoaded', function (e) {
    document.querySelector(location.hash).checked = true;
  });
  
  //位置修正
  ;
  (function ($) {
    var headerHeight = $('.header').outerHeight() + 130;
    var urlHash = location.hash;
    if (urlHash) {
      $('#item3').stop().scrollTop(0);
      setTimeout(function () {
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({
          scrollTop: position
        }, 300);
      }, 100);
    }
  })(jQuery);
