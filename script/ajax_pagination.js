$(document).ready(function() {
  function hideLoading() {
    $("#loading").fadeOut("slow");
  }
  $("#content_container0").load(
    "src/include/tours-date/skiing-date.php?page=1",
    hideLoading()
  );

  $("#paginate0 li").click(function() {
    $("#paginate0 li")
      .css({ border: "solid #dddddd 1px !important" })
      .css({ color: "#0063DC !important" });
    $(this)
      .css({ color: "#FF0084 !important" })
      .css({ border: "none !important" });
    var page_num = this.id;
    $("#content_container0").load(
      "src/include/tours-date/culture-date.php?page=" + page_num,
      hideLoading()
    );
  });

  $("#content_container1").load(
    "src/include/tours-date/skiing-date.php?page=1",
    hideLoading()
  );
  $("#paginate1 li").click(function() {
    $("#paginate1 li")
      .css({ border: "solid #dddddd 1px !important" })
      .css({ color: "#0063DC !important" });
    $(this)
      .css({ color: "#FF0084 !important" })
      .css({ border: "none !important" });
    var page_num = this.id;
    $("#content_container1").load(
      "src/include/tours-date/skiing-date.php?page=" + page_num,
      hideLoading()
    );
  });

  $("#content_container2").load(
    "src/include/tours-date/skiing-date.php?page=1",
    hideLoading()
  );
  $("#paginate2 li").click(function() {
    $("#paginate2 li")
      .css({ border: "solid #dddddd 1px !important" })
      .css({ color: "#0063DC !important" });
    $(this)
      .css({ color: "#FF0084 !important" })
      .css({ border: "none !important" });
    var page_num = this.id;
    $("#content_container2").load(
      "src/include/tours-date/adventure-date.php?page=" + page_num,
      hideLoading()
    );
  });
});
