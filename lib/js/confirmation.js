
$("#valider").click(function (e) {
  $.ajax({
    type: "POST",
    url: "../../api/inscription/confirmation.php",
    data: {
      codeEntrer: codeEntrer,
    },
    success: function () {
      $("section").addClass("active");
      $(".close-btn").click(function (e) {
        e.preventDefault();
        window.location.href = "connexion.html";
      });
    },
    error: function () {
      $("#titre").text("Erreur");
      $("#corps").text(
        "Le code saisie est incorect veuillez reesayer s'il vous plait"
      );
      $(".close-btn").text("ok");
      $("section").addClass("active");
      $(".close-btn").click(function (e) {
        e.preventDefault();
        $("section").removeClass("active");
      });
    },
  });
  return false;
});
