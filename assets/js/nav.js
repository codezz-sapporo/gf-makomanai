// カレント表示
// header
$(function () {
  var pageURL = location.pathname,
    pageURLArr = pageURL.split("/"), //パスを分割して配列化する
    pageURLArrCategory = pageURLArr[2]; //パスから第2階層を取得
  console.log(pageURLArrCategory);

  $(".header-nav__link").each(function (i, v) {
    var selfhref = $(v).attr("href"),
      hrefArr = selfhref.split("/"), //href属性の値を分割して配列化する
      hrefArrCategory = hrefArr[4]; //href属性の第4階層を取得

    console.log(hrefArrCategory);

    //パスの第1階層とhref属性の第1階層を比較して同じ値であればcurrentを付与する
    if (pageURLArrCategory === hrefArrCategory) {
      $(v).addClass("header-nav__link_active");
    }
  });
});

// footer
$(function () {
  var pageURL = location.pathname,
    pageURLArr = pageURL.split("/"),
    pageURLArrCategory = pageURLArr[2];
  console.log(pageURLArrCategory);

  $(".footer-nav__link").each(function (i, v) {
    var selfhref = $(v).attr("href"),
      hrefArr = selfhref.split("/"),
      hrefArrCategory = hrefArr[4];

    console.log(hrefArrCategory);

    if (pageURLArrCategory === hrefArrCategory) {
      $(v).addClass("footer-nav__link_active");
    }
  });
});
