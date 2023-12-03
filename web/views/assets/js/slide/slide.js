$(".jd-slider").jdSlider({
  isLoop: true,
  speed: 1000,
  isAuto: true,
  interval: 4000,
});

/*------------------
    hide slider
--------------------*/
var toogle = false;

$(document).on("click", "#btnSlide", function () {
  if (toogle == false) {
    $(".jd-slider").slideUp("fast");
    $("#btnSlide").html('<i class="fa fa-angle-down templateColor"></i>');
    toogle = true;
  } else {
    $(".jd-slider").slideDown("fast");
    $("#btnSlide").html('<i class="fa fa-angle-up templateColor"></i>');
    toogle = false;
  }
});
