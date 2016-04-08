function showFavs() {
    //function to show hidden popup
    //<!--FAVORITES ARRAY-->
    //var favorites = ["West Deck", "East Deck","Lot 7"];
    //document.getElementById("favorites").innerHTML = favorites.join("<br>");
    
    //for (i = 0; i < favorites.length; i++) {
        //document.getElementById("favorites").write = "<p class='favorite'>" + favorites[i] + "<br></p>";
    //}
    
    var x = document.getElementById("fav");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else
        x.style.visibility="visible";
    
}

function showMenu() {
    var x = document.getElementById("menu");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else
        x.style.visibility="visible";
}

function showRecents() {
    var x = document.getElementById("recents");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else
        x.style.visibility="visible";
}

function editFavs() {
    var x = document.getElementById("add");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else {
        x.style.visibility="visible";
    }
    var y = document.getElementsByClassName("remove");
    for (i = 0; i < y.length; i++) {
        if (y[i].style.display=="inline") {
            y[i].style.display="none";
        } else {
            y[i].style.display="inline";
        }
    }
}

function closeEditFavs() {
    var x = document.getElementById("add");
    var y = document.getElementById("save");
    var z = document.getElementsByClassName("remove");
    if (y.style.visibility=="visible") {
        confirm("Do you want to save?");
        x.style.visibility="hidden";
        y.style.visibility="hidden";
        for (i = 0; i < z.length; i++) {
            z[i].style.visibility="hidden";
        }
    } else {
        
    }
}

function addFav() {
    var x = document.getElementById("addFav");
    if (x.style.visibility!="visible") {
        x.style.visibility="visible";
    } else {
        x.style.visibility="hidden";
    }
}

function save() {
    var x = document.getElementsByClassName("remove");
    for (i = 0; i < x.length; i++) {
        if (x[i].style.display=="none") {
            x[i].style.display="none";
        } else {
            x[i].style.display="none";
        }
    }
    
    var y = document.getElementById("save");
    if (y.style.visibility=="visible") {
        y.style.visibility="hidden";
    }
}

function showSave() {
    var x = document.getElementById("save");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else {
        x.style.visibility="visible";
    }
    document.getElementById("edit").innerHTML == "add";
}

function toggleConfirm() {
    var x=document.getElementById("confirm");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else {
        x.style.visibility="visible";
    }
}
function westDeck() {
    var check = document.getElementById("save");
    if (check.style.visibility=="hidden") {
        var x = confirm("Navigate to West Deck?");
        if (x==true) {
            x="Proceeding to West Deck...";
            var y = confirm("Did you find parking?");
            if (y==true) {
                var z = document.getElementById("confirm");
                if (z.style.visibility=="visible") {
                    z.style.visibility="hidden";
                } else
                    z.style.visibility="visible";
            }
        }
    }   
}
    
function dropFlag() {
    var x=document.getElementById("flag");
    x.style.visibility="visible";
}

function removeItem1() {
    if(confirm("Do you want to remove West Deck from your favorites?")==true) {
        document.getElementById("westDeck").style.display = "none";
    }
}

function removeItem2() {
    if(confirm("Do you want to remove East Deck from your favorites?")==true) {
        document.getElementById("eastDeck").style.display = "none";
    }
}

function removeItem3() {
    if(confirm("Do you want to remove Union Deck from your favorites?")==true) {
        document.getElementById("unionDeck").style.display = "none";
    }
}
