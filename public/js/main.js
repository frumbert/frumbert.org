

$(function() {

  var $body = $("body");

  var players = $(".audio-player").click(function (e) {
    e.preventDefault();
    var _this = $(this),
      _src = _this.attr("href"),
      _playing = _this.hasClass("playing");

    if (_playing) {
      _this.removeClass("playing");
      $("audio").remove();
      _this.find("i").removeClass("fa-play-circle").addClass("fa-play-circle-o");
    } else {
      $("audio").remove();
      $("i", ".audio-player").each(function() {
        $(this).removeClass("fa-play-circle").addClass("fa-play-circle-o");
      });
      _this.addClass("playing");
      _this.find("i").removeClass("fa-play-circle-o").addClass("fa-play-circle");
      $body.append("<audio src='" + _src.replace(/[+]/g,'%20') + "' autoplay='true' preload='true' style='display:none'>");
  }

  });

});
