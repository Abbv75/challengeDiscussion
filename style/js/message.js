function loadAllMessage(idReceiver){
    $('.messageZone').text("");
    $.ajax({
        url: "../api/message/loadAllMessage.php",
        type: "GET",
        dataType:"JSON",
        data: {
            "idReceiver":idReceiver,
        },
        
        success: function (response) {
            for(let i=0; i<response.length; i++){
                if(response[i].id_receiver == idReceiver){
                    createMessageFromUs(response[i].message);
                }
                else{
                    createMessageFromOther(response[i].message);
                }
            }
        },
        error: function(){
            alert("Une erreur est survenue");
        }
    });

    function createMessageFromUs(message){
        let component= `<div class="messageFrom messageFromUs">
            <div class="userInfo">
                <span>Younouss</span>
                <div class="profilPic">
                    <img src="../res/images/users/mbappe.jpeg" alt="">
                </div>
            </div>

            <div class="message">
                <p>
                    ${message}
                </p>
            </div>
        </div>`;

        $('.messageZone').prepend(component);
    }
    
    function createMessageFromOther(message){
        let component= `<div class="messageFrom messageFromOther">
            <div class="userInfo">
                <span>Younouss</span>
                <div class="profilPic">
                    <img src="../res/images/users/mbappe.jpeg" alt="">
                </div>
            </div>

            <div class="message">
                <p>
                    ${message}
                </p>
            </div>
        </div>`;

        $('.messageZone').prepend(component);
    }
}

function sendMessage( idReceiver, message){
    $.ajax({
        url: "../api/message/sendMessage.php",
        type: "GET",
        data: {
            "idReceiver":idReceiver,
            "message":message
        },
        
        success: function () {
            createMessageFromUs();
        },
        error: function(){
            alert("Une erreur est survenue");
        }
    });

    function createMessageFromUs(){
        let component= `<div class="messageFrom messageFromUs">
            <div class="userInfo">
                <span>Younouss</span>
                <div class="profilPic">
                    <img src="../res/images/users/mbappe.jpeg" alt="">
                </div>
            </div>

            <div class="message">
                <p>
                    ${theMessage}
                </p>
            </div>
        </div>`;

        $('.messageZone').prepend(component);
    }
}

loadAllMessage(2);

let theMessage;
$('textarea').change(function () { 
    theMessage=$('textarea').val();
});

$('.sendMessage').click(function () { 
    sendMessage(2, theMessage);
    return false;
});