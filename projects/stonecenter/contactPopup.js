$(document).ready(function() {
    $(".popupLink").click(function() {
	loadPopup();
    })
    
    $("div.close").click(function() {
        disablePopup();  // function close pop up
    });

    $(".popupForm").submit(function() {
	if(validateCommentForm()) {
	    disablePopup();
	    return true;
	}
	else {
	    return false;
	}
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
    var left = (screen.width/2)-150;
    var top = (window.height/2)-150;
    $("#popUp").css('top', top);
    $("#popUp").css('left', left);
    //function that loads the popup
    $("#popUp").fadeIn(500);
    $("#unPopup").css("opacity", ".7");
    $("#unPopup").fadeIn(1);
}

function disablePopup() {
    //function to disable the popup
    $("#popUp").fadeOut("normal");
    $("#unPopup").fadeOut("normal");
}

//function validateCommentForm() {
    //validate popup comment form
//}


