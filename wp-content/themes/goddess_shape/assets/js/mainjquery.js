jQuery( document ).ready(function ($) {
  $('a[href^="#home_our_products"]').click(function (e) {
    e.preventDefault();
    var target = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top,
      },
      2800
    );
  });
});
