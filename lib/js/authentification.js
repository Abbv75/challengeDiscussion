let pseudo = $("#pseudo").val();
$("#pseudo").on("change", function () {
  pseudo = $("#pseudo").val();
});
l

$("#connexion").click(function (e) {
  $.ajax({
    type: "POST",
    url: "../../api/inscription/traitementAuthentification.php",
    data: {
      pseudo: pseudo, 
    },
    success: function () {
      window.location.href="../../index.html";
    },
    error: function () {
      $('section').addClass("active");

      $('.container').css("opacity","0");
      $('.close-btn').on('click', function(){
        $('section').removeClass('active');
        $('.container').css("opacity","1");

      })
    },
  });
  return false;
});
