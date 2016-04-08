$(document).ready(function() {
    $(".leslie").click(function() {
        $("#leslieHeadshot").show("slow");
        $("#andreaHeadshot").hide("slow");
        $("#katieHeadshot").hide("slow");
        $("#elenaHeadshot").hide("slow");
        $("#details").show();
        $("#leslieBio").show("slow");
        $("#andreaBio").hide("slow");
        $("#katieBio").hide("slow");
        $("#elenaBio").hide("slow");
    })
    $(".andrea").click(function() {
        $("#leslieHeadshot").hide("slow");
        $("#andreaHeadshot").show("slow");
        $("#katieHeadshot").hide("slow");
        $("#elenaHeadshot").hide("slow");
        $("#details").show();
        $("#leslieBio").hide("slow");
        $("#andreaBio").show("slow");
        $("#katieBio").hide("slow");
        $("#elenaBio").hide("slow");
    })
    
    $(".katie").click(function() {
        $("#leslieHeadshot").hide("slow");
        $("#andreaHeadshot").hide("slow");
        $("#katieHeadshot").show("slow");
        $("#elenaHeadshot").hide("slow");
        $("#details").show();
        $("#leslieBio").hide("slow");
        $("#andreaBio").hide("slow");
        $("#katieBio").show("slow");
        $("#elenaBio").hide("slow");

    })
    
    $(".elena").click(function() {
        $("#leslieHeadshot").hide("slow")
        $("#andreaHeadshot").hide("slow");
        $("#katieHeadshot").hide("slow");
        $("#elenaHeadshot").show("slow");
        $("#details").show();
        $("#leslieBio").hide("slow");
        $("#andreaBio").hide("slow");
        $("#katieBio").hide("slow");
        $("#elenaBio").show("slow");
    })
    
    $("#button").click(function() {
        $("#leslieHeadshot").show("slow");
        $("#andreaHeadshot").show("slow");
        $("#katieHeadshot").show("slow");
        $("#elenaHeadshot").show("slow");
    })
})