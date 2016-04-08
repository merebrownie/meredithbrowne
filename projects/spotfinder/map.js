function initialize() {
    var myLatLng = new google.maps.LatLng(35.3056438,-80.7347747);
    var mapOptions = {
        zoom: 15,
        center: myLatLng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
    var westDeckLL = new google.maps.LatLng(35.3054696,-80.7366052);
    var westDeck = new google.maps.Marker({
        position: westDeckLL,
        map: map,
        title: 'West Deck',
        icon: 'yellow_w.png',
    })
        
    var eastDeckLL = new google.maps.LatLng(35.30648,-80.72673);
    var eastDeck = new google.maps.Marker({
        position: eastDeckLL,
        map: map,
        title: 'East Deck',
        icon: 'red_e.png',
    })
        
    var unionDeckLL = new google.maps.LatLng(35.309171,-80.735283);
    var unionDeck = new google.maps.Marker({
        position: unionDeckLL,
        map: map,
        titile: 'Union Deck',
        icon: 'green_u.png'
    })
}
      
google.maps.event.addDomListener(window, 'load', initialize);

function dropFlagWD() {
    var westDeckLL = new google.maps.LatLng(35.3054696,-80.7366052);
    var mapOptions = {
        zoom: 15,
        center: westDeckLL
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
    var parkWD = new google.maps.Marker({
        position: westDeckLL,
        map: map,
        title: 'West Deck',
        icon: 'parkinggarage.png',
    })
}

function dropFlagED() {
    var eastDeckLL = new google.maps.LatLng(35.30648,-80.72673);
    var mapOptions = {
        zoom: 15,
        center: eastDeckLL
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
    var parkED = new google.maps.Marker({
        position: eastDeckLL,
        map: map,
        title: 'East Deck',
        icon: 'parkinggarage.png',
    })
}

function dropFlagUD() {
    var unionDeckLL = new google.maps.LatLng(35.309171,-80.735283);
    var mapOptions = {
        zoom: 15,
        center: unionDeckLL
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
    var parkUD = new google.maps.Marker({
        position: unionDeckLL,
        map: map,
        title: 'Union Deck',
        icon: 'parkinggarage.png',
    })
}