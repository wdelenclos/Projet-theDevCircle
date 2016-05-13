// AUTOFOCUS
function autofocus($status){
    if($status === true){
        $('.autofocus').focus();
    }
    
   
}
autofocus(true); // true => activé

//  --------------------------------

// Zoom dans la div
$("#ZoomIn").click(ZoomIn());

$("#ZoomOut").click(ZoomOut());

function ZoomIn (event) {

   $("#div img").width(
        $("#div img").width() * 1.2
    );

   $("#div img").height(
        $("#div img").height() * 1.2
    );
}

function  ZoomOut (event) {

    $(".map").width(
       $(".map").width() * 0.5
    );

    $(".map").height(
       $(".map").height() * 0.5
    );
}


