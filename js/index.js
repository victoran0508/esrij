$(document).ready(function() {
  // アコーディオン
  $(".accordion").on("click", function() {
      $(this).next().slideToggle();
      $(this).toggleClass("active")
  });
});
$(document).scroll(function() {
  function getScrollBottom() {
    const body = window.document.body;
    const html = window.document.documentElement;
    const scrollTop = body.scrollTop || html.scrollTop;
    return html.scrollHeight - html.clientHeight - scrollTop;
  }
  // fixed_footer
  const distance = getScrollBottom();

  if (distance < 500) {
    $(".contact").fadeOut();
  } else {
    $(".contact").fadeIn();
  }
});
