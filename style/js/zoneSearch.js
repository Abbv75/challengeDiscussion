
 let inputBox = document.querySelector(".input-box"),
searchIcon = document.querySelector(".icon"),
closeIcon = document.querySelector(".close-icon");

searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
  
let inputVal=$(".searchVal").val(); 


$(".searchVal").change(function (e) { 
    e.preventDefault();
    inputVal=$(".searchVal").val();
    return false;
});

$('#searchbtn').click(function (e) { 
    if(inputVal!=''){
        alert(inputVal)
       recherche(inputVal)
    }
    return false;
});

function recherche(nom){
    $.ajax({
        type: "POST",
        url: "../api/rechercheUser.php",
        data: {
            "nom":nom
        },
        dataType: "JSON",
        success: function (response) {
            for(let res of response){
                alert(res.login);
                $("#login").text(res.login);
                $("#profilImage").attr(src, res.profil);
            }
        },
        error: function(){

        }
    });
}

