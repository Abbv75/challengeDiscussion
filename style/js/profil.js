$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "../api/profil.php",
        dataType: "JSON",
        success: function (response) {
            alert(1);
            getUser(response[0].login,response[0].profil);
        }
    });
});




function getUser(login,profil){
    let component='<div class="image">'+
    '<img src="'+profil+'" alt="" class="profile-img" />'+
  '</div>'+
  '<div class="text-data">'+
    '<span class="name">'+login+'</span>'+
  '</div>'+
  '<div class="buttons">'+
    '<button class="button">Modifier</button>'+
  '</div>'+
  '<div class="analytics">'+
    '<div class="data">'+
      '<i class="bx bx-heart"></i>'+
      '<span class="number">3</span>'+
    '</div>'+
    '<div class="data">'+
      '<i class="bx bx-message-rounded"></i>'+
      '<span class="number">5</span>'+
    '</div>'+
    '<div class="data">'+
      '<i class="bx bx-share"></i>'+
      '<span class="number">7</span>'+
    '</div>'+
  '</div>'

  $(".profile-card").append(component);
}