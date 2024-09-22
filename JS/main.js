// Share Button

var ShareModule = (function () {

  var $el = $(".share"),
    $plus = $el.find(".plus"),
    $header = $el.find(".share__header"),
    $content = $el.find(".share__content"),
    $contentitem = $el.find(".item");
  togglestatus = false;

  $plus.on("click", reveal);

  function reveal() {
    togglestatus = !togglestatus;
    if (togglestatus) {
      var heightVal = parseInt($el.css("height")) + $content.outerHeight() + 30;
      $plus.addClass("rotate");
      $(".item").each(function (index) {
        var elem = this;
        (function (i, elem) {
          setTimeout(function () {
            $(elem).addClass("reveal");
          }, i * 150);
        })(index, elem);
      });

      $header.addClass("active");
      $el.css("height", heightVal + "px");
    } else {
      $header.removeClass("active");
      $(".item").removeClass("reveal");
      $plus.removeClass("rotate");
      $el.css("height", "47px");
    }
  }
})();
