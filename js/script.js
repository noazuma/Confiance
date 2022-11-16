$(function() {

$('.c-button').on("click",function () 

{//ボタンがクリックされたら

  $('.c-line').toggleClass('open');
    //ボタンにopenクラスを付与
  $('.p-menu').toggleClass('open');
    //ボタン自身に openクラスを付与し
  $('.l-sidebar').toggleClass('nav');
    //open
  $('.c-button').toggleClass('open');
  // バツ動き1
  $('.c-line__menu2').toggleClass('open');
  // バツ動き2
  $('body').css('overflow','hidden');
  // メイン固定
});

$('.c-button').on("click",function () 

{//ナビゲーションのリンクがクリックされたら

    $('.l-sidebar').removeClass('open');
    //ボタンの activeクラスを除去し
    $('.c-cover').removeClass('active');
    //オーバーレイのactiveクラスも除去
    $('.c-line__menu1').removeClass('open');
    // バツ動き1　除去
    $('.c-line__menu2').removeClass('open');
    // バツ動き2 除去
    $('body').css('overflow','visible');
    // 初期値に戻す
});

$(window).resize(function(){

  
    let width = $(window).width();
  
  
    // 条件を設定する
    if (width >= 1025) {
      $(".l-sidebar").css("transition", "none");}

    else if (width < 1024) {
      $(".l-sidebar").css("transition", "");}
  }
  
);
});
