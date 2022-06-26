/* アコーディオン */
$(function () {
  $(".bl_faq_item_answer:first").show(); //ひとつ目は最初から
  $(".bl_faq_list .bl_faq_item_question").click(function () {
    $(this).next(".bl_faq_item_answer").slideToggle(300);
    $(this).toggleClass("open");
  });
});

/* drawer */
$(function () {
  $(".bl_drawerBtn").on("click", function () {
    $(this).toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});
$(function () {
  //.bl_drawer_itemを押すとついてたactiveが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item").on("click", function () {
    $(".bl_drawerBtn").toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});
$(function () {
  //.bl_drawer_item a を押すとついてたactiveが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item a").on("click", function () {
    $(".bl_drawerBtn").toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});

/* スクロールヒント */
new ScrollHint(".js-scrollable");

/* AOS */
$(document).ready(function () {
  /* animation */
  AOS.init({
    duration: 1000,
    once: true,
  });
});

/* 浮遊アニメーション */
// $(function () {
//   setTimeout("rect()"); //アニメーションを実行
// });

// function rect() {
//   $(".bl_intro_item.bubble.bubble__left")
//     .animate(
//       {
//         marginTop: "-=10px",
//         marginBottom: "+=10px",
//       },
//       800
//     )
//     .animate(
//       {
//         marginTop: "+=10px",
//         marginBottom: "-=10px",
//       },
//       800
//     );
//   setTimeout("rect()", 1600); //アニメーションを繰り返す間隔
//   $(".bl_intro_item.bubble.bubble__center")
//     .animate(
//       {
//         marginTop: "-=10px",
//         marginBottom: "+=10px",
//       },
//       1000
//     )
//     .animate(
//       {
//         marginTop: "+=10px",
//         marginBottom: "-=10px",
//       },
//       1000
//     );
//   setTimeout("rect()", 1600); //アニメーションを繰り返す間隔
//   $(".bl_intro_item.bubble.bubble__right")
//     .animate(
//       {
//         marginTop: "-=10px",
//         marginBottom: "+=10px",
//       },
//       1200
//     )
//     .animate(
//       {
//         marginTop: "+=10px",
//         marginBottom: "-=10px",
//       },
//       1200
//     );
//   setTimeout("rect()", 1600); //アニメーションを繰り返す間隔
// }
