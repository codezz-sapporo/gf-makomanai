// スライダー
var windowWidth = $(window).width();
var windowS = 767;

if (windowWidth <= windowS) {
  $(document).ready(function () {
    $(".slick01").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
    });
  });
} else {
}

$(document).ready(function () {
  $(".slick-point").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    dots: true,
  });
});

$(document).ready(function () {
  $(".slick-area").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
  });
});

if (windowWidth < windowS) {
  $(document).ready(function () {
    $(".slick03").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
    });
  });
} else if (windowWidth >= windowS) {
  $(function () {
    $(".life-info__main-img")
      .before(
        $(".prev").on("click", function () {
          var tn = $(this).closest(".mainimage").next(".thumbnail").find("img");
          var idx = tn.index(tn.filter(".active"));
          idx = 0 ? tn.length - 1 : idx - 1;
          tn.eq(idx).trigger("click");
        })
      )
      .after(
        $(".next").on("click", function () {
          var tn = $(this).closest(".mainimage").next(".thumbnail").find("img");
          var idx = tn.index(tn.filter(".active"));
          idx = tn.length - 1 == idx ? 0 : idx + 1;
          tn.eq(idx).trigger("click");
        })
      );
    $(".thumbnail img").on("click", function () {
      $(this)
        .closest(".thumbnail")
        .prev(".mainimage")
        .find("img")
        .attr({
          src: $(this).attr("src"),
          alt: $(this).attr("alt"),
        });

      var imgName = $(this).attr("alt");
      var imgInfo = $(this).attr("title");

      console.log(imgName);
      $(".life-info__main-name").text(imgName);

      console.log(imgInfo);
      $(".life-info__main-info").text(imgInfo);

      $(this).closest("ul").find("img").removeClass("active");
      $(this).addClass("active");
    });
    $(".thumbnail").each(function () {
      $(this).find("img").eq(0).trigger("click");
    });
  });
}

// mvのheightをアドレスバー除いたvhで
function setHeight() {
  let vh = window.innerHeight * 0.01;
  console.log(vh);

  document.documentElement.style.setProperty("--vh", `${vh}px`);
}
// 2.初期化
setHeight();
// 3.ブラウザのサイズが変更された時・画面の向きを変えた時に再計算する
window.addEventListener("resize", setHeight);

// sp版メニュー開閉挙動

let WindowVh = window.innerHeight;
let LinkAreaH = $(".link-area").outerHeight();
let BgH = WindowVh - LinkAreaH;
console.log(WindowVh);
console.log(LinkAreaH);
console.log(BgH);

function noscroll(e) {
  e.preventDefault();
}
$("#nav-btn").click(function () {
  $(this).toggleClass("scroll-on");

  if ($(this).hasClass("scroll-on")) {
    document.addEventListener("touchmove", noscroll, { passive: false });
    document.addEventListener("wheel", noscroll, { passive: false });
  } else {
    document.removeEventListener("touchmove", noscroll);
    document.removeEventListener("wheel", noscroll);
  }
  $("#floating").css("display", "none");

  $(".header-nav__list").css("height", BgH);
  $(".header-nav__list").css("min-height", BgH);
});

// 下層ページ共通タブ切り替え
$(function () {
  // パラメータ取得
  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // ページ読み込み時のタブ切り替え
  let tabPram = [
    "tab-1",
    "tab-2",
    "tab-3",
    "tab-4",
    "tab-5",
    "tab-6",
    "tab-7",
    "tab-8",
    "tab-9",
    "tab-10",
    "tab-11",
    "tab-12",
    "tab-13",
    "tab-14",
    "tab-15",
  ];
  let pram = getParam("active-tab");
  if (pram && $.inArray(pram, tabPram) !== -1) {
    $(".js-tab-cts,.js-tab-switch").removeClass("is-active");
    $('[data-tab="' + pram + '"]').addClass("is-active");
  }

  // ロード後のタブ切り替え
  $(".js-tab-switch").on("click", function () {
    let dataPram = $(this).data("tab");
    $(".js-tab-cts,.js-tab-switch").removeClass("is-active");
    $('[data-tab="' + dataPram + '"]').addClass("is-active");
  });
  $(".js-tab-switch_bottom").on("click", function () {
    const greenTop = $("#intro").offset().top;
    console.log(greenTop);
    $("html").animate({ scrollTop: greenTop });
  });
});

// 全ページ共通header出現、スクロールで背景表示
$(document).scroll(function () {
  var scroll = $(window).scrollTop();
  console.log(scroll);
  if (windowWidth > windowS) {
    if (scroll >= 600) {
      //150pxスクロールすると起動
      $(".header").css("background", "var(--green)");
      $(".header").css("filter", "drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.4))");
    } else {
      //スクロールしていないときは起動しない
      $(".header").css("background", "rgba(255, 255, 255, 0.1)");
      $(".header").css("filter", "unset");
    }
  }
});

// 間取り閉じるボタンPC用ID削除
if (windowWidth > windowS) {
  $(function () {
    $(".detail-label").removeAttr("id");
  });
} else {
}
