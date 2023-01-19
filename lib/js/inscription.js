let email = $("#email").val();
let profil = $("#profil").val();

$("#email").on("change", function (e) {
  email = $("#email").val();
});
$("#profil").on("change", function (e) {

  profil = $("#profil").val();
});

$("#valider").click(function (e) {
    $.ajax({
      type: "POST",
      url: "../../api/authentification/verifierLogin.php",
      data: {
        user_email: email,
        user_profil: profil
      },
      dataType: "JSON",
      success: function (response) {
        envoyerMail(response[0].code);
        window.location.href = "confirmation.html";
      },
      error: function () {
        alert("Cet addresse E-mail existe déja ");
      },
    });