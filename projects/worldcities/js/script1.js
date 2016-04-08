function initialize() {

    var mapProp1 = {
        center: new google.maps.LatLng(31.6346214,-8.0078531),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp2 = {
        center: new google.maps.LatLng(13.3457263,103.8629545),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp3 = {
        center: new google.maps.LatLng(41.0053215,29.0121795),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp4 = {
        center: new google.maps.LatLng(21.0226967,105.8369637),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp5 = {
        center: new google.maps.LatLng(50.0596696,14.4656239),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
              
    var mapProp6 = {
        center: new google.maps.LatLng(51.5286416,-0.1015987),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp7 = {
        center: new google.maps.LatLng(41.9100711,12.5359979),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
               
    var mapProp8 = {
        center: new google.maps.LatLng(-34.6158238,-58.4333203),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
              
    var mapProp9 = {
        center: new google.maps.LatLng(48.8588589,2.3470599),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                
    var mapProp10 = {
        center: new google.maps.LatLng(-33.92217,18.4351665),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
           
    var map1=new google.maps.Map(document.getElementById("googleMap1"), mapProp1);
                
    var map2=new google.maps.Map(document.getElementById("googleMap2"), mapProp2);
                
    var map3=new google.maps.Map(document.getElementById("googleMap3"), mapProp3);
                
    var map4=new google.maps.Map(document.getElementById("googleMap4"), mapProp4);
                
    var map5=new google.maps.Map(document.getElementById("googleMap5"), mapProp5);
                
    var map6=new google.maps.Map(document.getElementById("googleMap6"), mapProp6);
                
    var map7=new google.maps.Map(document.getElementById("googleMap7"), mapProp7);
                
    var map8=new google.maps.Map(document.getElementById("googleMap8"), mapProp8);
                
    var map9=new google.maps.Map(document.getElementById("googleMap9"), mapProp9);
                
    var map10=new google.maps.Map(document.getElementById("googleMap10"), mapProp10);
} 
google.maps.event.addDomListener(window, 'load', initialize);

function prev(location) {
    switch (location) {
        case location1:
            document.getElementById("location1").style.position="absolute";
            document.getElementById("location1").style.left="-100%";
            document.getElementById("location10").style.position="relative";
            document.getElementById("location10").style.left="0%";
            //document.getElementById("location1").style.display="none";
            //document.getElementById("location10").style.display="block";
            //initialize();
            break;
        case location2:
            document.getElementById("location2").style.position="absolute";
            document.getElementById("location2").style.left="-100%";
            document.getElementById("location1").style.position="relative";
            document.getElementById("location1").style.left="0%";
            //document.getElementById("location2").style.display="none";
            //document.getElementById("location1").style.display="block";
            //initialize();
            break;
        case location3:
            document.getElementById("location3").style.position="absolute";
            document.getElementById("location3").style.left="-100%";
            document.getElementById("location2").style.position="relative";
            document.getElementById("location2").style.left="0%";
            //document.getElementById("location3").style.display="none";
            //document.getElementById("location2").style.display="block";
            break;
        case location4:
            document.getElementById("location4").style.position="absolute";
            document.getElementById("location4").style.left="-100%";
            document.getElementById("location3").style.position="relative";
            document.getElementById("location3").style.left="0%";
            //document.getElementById("location4").style.display="none";
            //document.getElementById("location3").style.display="block";
            break;
        case location5:
            document.getElementById("location5").style.position="absolute";
            document.getElementById("location5").style.left="-100%";
            document.getElementById("location4").style.position="relative";
            document.getElementById("location4").style.left="0%";
            //document.getElementById("location5").style.display="none";
            //document.getElementById("location4").style.display="block";
            break;
        case location6:
            document.getElementById("location6").style.position="absolute";
            document.getElementById("location6").style.left="-100%";
            document.getElementById("location5").style.position="relative";
            document.getElementById("location5").style.left="0%";
            //document.getElementById("location6").style.display="none";
            //document.getElementById("location5").style.display="block";
            break;
        case location7:
            document.getElementById("location7").style.position="absolute";
            document.getElementById("location7").style.left="-100%";
            document.getElementById("location6").style.position="relative";
            document.getElementById("location6").style.left="0%";
            //document.getElementById("location7").style.display="none";
            //document.getElementById("location6").style.display="block";
            break;
        case location8:
            document.getElementById("location8").style.position="absolute";
            document.getElementById("location8").style.left="-100%";
            document.getElementById("location7").style.position="relative";
            document.getElementById("location7").style.left="0%";
            //document.getElementById("location8").style.display="none";
            //document.getElementById("location7").style.display="block";
            break;
        case location9:
            document.getElementById("location9").style.position="absolute";
            document.getElementById("location9").style.left="-100%";
            document.getElementById("location8").style.position="relative";
            document.getElementById("location8").style.left="0%";
            //document.getElementById("location9").style.display="none";
            //document.getElementById("location8").style.display="block";
            break;
        case location10:
            document.getElementById("location10").style.position="absolute";
            document.getElementById("location10").style.left="-100%";
            document.getElementById("location9").style.position="relative";
            document.getElementById("location9").style.left="0%";
            //document.getElementById("location10").style.display="none";
            //document.getElementById("location9").style.display="block";
            break;
    }
}

function next(location) {
    switch (location) {
        case location1:
            document.getElementById("location1").style.position="absolute";
            document.getElementById("location1").style.left="-100%";
            document.getElementById("location2").style.position="relative";
            document.getElementById("location2").style.left="0%";
            //document.getElementById("location1").style.display="none";
            //document.getElementById("location2").style.display="block";
            break;
        case location2:
            document.getElementById("location2").style.position="absolute";
            document.getElementById("location2").style.left="-100%";
            document.getElementById("location3").style.position="relative";
            document.getElementById("location3").style.left="0%";
            //document.getElementById("location2").style.display="none";
            //document.getElementById("location3").style.display="block";
            break;
        case location3:
            document.getElementById("location3").style.position="absolute";
            document.getElementById("location3").style.left="-100%";
            document.getElementById("location4").style.position="relative";
            document.getElementById("location4").style.left="0%";
            //document.getElementById("location3").style.display="none";
            //document.getElementById("location4").style.display="block";
            break;
        case location4:
            document.getElementById("location4").style.position="absolute";
            document.getElementById("location4").style.left="-100%";
            document.getElementById("location5").style.position="relative";
            document.getElementById("location5").style.left="0%";
            //document.getElementById("location4").style.display="none";
            //document.getElementById("location5").style.display="block";
            break;
        case location5:
            document.getElementById("location5").style.position="absolute";
            document.getElementById("location5").style.left="-100%";
            document.getElementById("location6").style.position="relative";
            document.getElementById("location6").style.left="0%";
            //document.getElementById("location5").style.display="none";
            //document.getElementById("location6").style.display="block";
            break;
        case location6:
            document.getElementById("location6").style.position="absolute";
            document.getElementById("location6").style.left="-100%";
            document.getElementById("location7").style.position="relative";
            document.getElementById("location7").style.left="0%";
            //document.getElementById("location6").style.display="none";
            //document.getElementById("location7").style.display="block";
            break;
        case location7:
            document.getElementById("location7").style.position="absolute";
            document.getElementById("location7").style.left="-100%";
            document.getElementById("location8").style.position="relative";
            document.getElementById("location8").style.left="0%";
            //document.getElementById("location7").style.display="none";
            //document.getElementById("location8").style.display="block";
            break;
        case location8:
            document.getElementById("location8").style.position="absolute";
            document.getElementById("location8").style.left="-100%";
            document.getElementById("location9").style.position="relative";
            document.getElementById("location9").style.left="0%";
            //document.getElementById("location8").style.display="none";
            //document.getElementById("location9").style.display="block";
            break;
        case location9:
            document.getElementById("location9").style.position="absolute";
            document.getElementById("location9").style.left="-100%";
            document.getElementById("location10").style.position="relative";
            document.getElementById("location10").style.left="0%";
            //document.getElementById("location9").style.display="none";
            //document.getElementById("location10").style.display="block";
            break;
        case location10:
            document.getElementById("location10").style.position="absolute";
            document.getElementById("location10").style.left="-100%";
            document.getElementById("location1").style.position="relative";
            document.getElementById("location1").style.left="0%";
            //document.getElementById("location10").style.display="none";
            //document.getElementById("location1").style.display="block";
            break;
    }
}