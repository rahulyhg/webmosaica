$(document).ready(function() {

    //Main navigation open/close;
    var toggleMenu = $(".toggle-menu");
    var mainNavigation = $(".primary-nav")

    toggleMenu.on("click", function() {
      mainNavigation.slideToggle();
    });

    //ajax send mail
  $(".form").submit(function(event) {
    event.preventDefault();
    var form = $(this);
    var formData = form.serialize();
    $.ajax({
      type: "POST",
      url: "post.php",
      data: formData,
      success: function() {
        form.trigger("reset");
        form.find(".btn").val("sended");
      },
      beforeSend: function() {
        form.find(".btn").val("sending...");
      },
      complete: function() {
        form.find(".btn").val("next");
      },
      timeout: 3000
    });
  });



});