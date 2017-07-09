$(document).ready(function() {
    if ($.cookie("visited") == "true") {
        //code to run if cookie exists
        $("#popUp").css("visibility","hidden");
        $("#unPopup").css("visibility","hidden");
    }
    else {
        $.cookie("visited", "true");
        /*$.cookie("visited", "true", { expires: 7, path: '/' });*/
    }
});