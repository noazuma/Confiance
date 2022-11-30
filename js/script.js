jQuery(function($){$(function() {

$('.c-button').on("click",function () 

{//ボタンがクリックされたら

  $('.c-line').toggleClass('open');
    //ボタンにopenクラスを付与
  $('.p-menu').toggleClass('open');
    //ボタン自身に openクラスを付与し
  $('.l-sidebar').toggleClass('nav');
    //open
  $('.c-button').toggleClass('open');
  // 棒動き
  $('body').toggleClass('c-noscroll'); // 追記
});

$('.c-button').on("click",function () 

{//ナビゲーションのリンクがクリックされたら

    // $('.l-sidebar').removeClass('open');

    // $('.p-menu').removeClass('open');

    // $('.c-line').removeClass('open');

    // $('.c-button').removeClass('open');

});

$(window).resize(function(){ //window　ブラウザの幅や高さが変更されたら検知して処理

  
    let width = $(window).width();
  
  
    // 条件を設定する
    if (width >= 1300) {
      $(".c-button").removeClass("open");}

      $('.c-line').removeClass('open');

      $('.p-menu').removeClass('open');

      $('.l-sidebar').removeClass('nav');

      $('.c-button').removeClass('open');
      
      $('body').removeClass('c-noscroll'); // 追記
//tabからpc時へのサイドバーが残らない様にする。

      // else if (width < 1300) {
      // $(".l-sidebar").css("transition", "");}
  }
  
);
});
});