//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop(); //スクロール値を取得
  if (scroll >= 600) {
    //200pxスクロールしたら
    $("#floating").css("display", "flex");
    $(".link-area").css("display", "flex");
    $(".link-area").css("bottom", "0");
    $(".humburger").css("display", "flex");
    // if (window.matchMedia('(min-width: 768px) and (max-width: 829px)').matches) {
    //   $(".link-area").css("bottom", "0");
    // }
  } else {
    $("#floating").css("display", "none");
    $(".link-area").css("bottom", "-100px");
    $(".humburger").css("display", "none");
  }

  var wH = window.innerHeight; //画面の高さを取得
  var footerPos = $("#BottomInfo").offset().top; //footerの位置を取得
  if (scroll + wH >= footerPos + 10) {
    var pos = scroll + wH - footerPos + 10; //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
    $("#floating").css("bottom", pos); //#floatingに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする

    if (windowWidth < 767) {
      $(".link-area").css("display", "none");
    } else {
      $(".link-area__list").css("display", "none");
    }
  } else {
    // それ以外は
    $("#floating").css("bottom", "100px");
    $(".link-area").css("display", "flex");
    $(".link-area__list").css("display", "flex");
  }
}
$("#nav-btn").click(function () {
  $(".link-area").css("bottom", "0");
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$("#page-top").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});
