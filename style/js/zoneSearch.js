
 let inputBox = document.querySelector(".input-box"),
searchIcon = document.querySelector(".icon"),
closeIcon = document.querySelector(".close-icon");

searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
  
let inputVal=$(".searchVal").val(); 


$(".searchVal").change(function (e) { 
    e.preventDefault();
    inputVal=$(".searchVal").val();
    alert(inputVal) 
    return false;
});

$("search-icon").click(function (e) { 
    e.preventDefault();
    alert(inputVal)
});

function recherche(nom){
    $.ajax({
        type: "POST",
        url: "../api/rechercheUser.php",
        data: nom,
        dataType: "JSON",
        success: function (response) {
            
        },
        error: function(){

        }
    });
}
