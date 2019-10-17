$(function() {
  // click button turnoff view video
  $(".button-close").click(function() {
    // hide video box
    $(".video-box").hide();
    // hide video box
    $("iframe").attr("src", $("iframe").attr("src"));
    //xoa class hide-wapper
    $(".video-box").removeClass("active");
    s;
  });

  // click ngoai turnoff view video
  $(".video-box").click(function() {
    // hide video box
    $(".video-box").hide();

    // hide video box
    $("iframe").attr("src", $("iframe").attr("src"));

    //xoa class hide-wapper
    $(".video-box").removeClass("active");
  });

  //click open view video
  $(".button-play").click(function() {
    $(".video-box").show();
    $(".video-box").addClass("active");
    console.log("da click");
  });

  //click toggle phim

  $(".title-top").click(function() {
    $(this)
      .next()
      .next()
      .toggle(2000);
  });
});
