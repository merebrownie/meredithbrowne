$(document).ready(function() {
    var popupStatus = 0;
    setTimeout(function() {
            loadPopup();
        }, 500);
    //return false;

    $("div.close").click(function() {
        disablePopup();  // function close pop up
    });

    $("#subscribe").click(function() {
        $("#popupForm").submit(function() {
            disablePopup();
            alert(popupStatus);
        })
    })
    
    $(this).keyup(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
	        disablePopup();  // function close pop up
	}
    });
    
    $("div#unPopup").click(function() {
	disablePopup();  // function close pop up
    });

function loadPopup() {
    //adjust popup location
    var left = (screen.width/2)-115;
    var top = (window.height/2)-100;
    $("#popUp").css('top', top);
    $("#popUp").css('left', left);
    //function that loads the popup
    if (popupStatus == 0) {
        //show the popup if the value is 0
        $("#popUp").fadeIn(500);
        $("#unPopup").css("opacity", ".7");
        $("#unPopup").fadeIn(1);
        popupStatus = 1;
    }
}

function disablePopup() {
    //function to disable the popup
    if (popupStatus == 1) {
        //close the popup if the value is 1
        $("#popUp").fadeOut("normal");
        $("#unPopup").fadeOut("normal");
        popupStatus = 2;
    }
}
})



