function toggleFavs() {
    var x = document.getElementById("fav");
    if (x.style.visibility=="visible") {
        hideFavs();
    } else {
        showFavs();
    }
}

function showFavs() {
    var x = document.getElementById("fav");
    var y = document.getElementById("newFavName").innerHTML;
    var z = document.getElementById("newFav");
    x.style.visibility="visible";
    showEdit();
    /*if ((y.trim())!="New Fav") {
        z.style.visibility="visible";
    } else {
        prompt(y.innerHTML);
    }*/
}

function hideFavs() {
    var x = document.getElementById("fav");
    var y = document.getElementById("newFav");
    x.style.visibility="hidden";
    hideEdit();
    if (y.style.visibility=="visible") {
        y.style.visibility="hidden";
    }
}

function showEdit() {
    var x = document.getElementById("edit");
    x.style.visibility="visible";
    x.style.display="inline";
}

function hideEdit() {
    var x = document.getElementById("edit");
    x.style.visibiltiy="hidden";
    x.style.display="none";
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
    var w = document.getElementById("edit");
    var x = document.getElementById("add");
    var y = document.getElementById("save");
    var z = document.getElementsByClassName("remove");
    if (y.style.visibility=="visible") {
        if (confirm("Do you want to save?")==true) {
            x.style.visibility="hidden";
            y.style.visibility="hidden";
            w.style.visibility="hidden";
        
            for (i = 0; i < z.length; i++) {
                z[i].style.visibility="hidden";
            }
    if (w.style.visibility=="visible") {
        w.style.visibility="hidden";
    }
        }
    }
}

function showAddFav() {
    var x = document.getElementById("addFav");
    var y = document.getElementById("add");
    var z = document.getElementById("edit");
    if (x.style.visibility!="hidden") {
        x.style.visibility="visible";
        y.style.visibility="visible"
        z.style.visibility="visible";
    }
}

function hideAddFav() {
    //var w = document.getElementById("newFav");
    var x = document.getElementById("addFav");
    var y = document.getElementById("add");
    var z = document.getElementById("edit");
    if (x.style.visibility=="visible") {
        //w.style.visibility="hidden";
        x.style.visibility="hidden";
        y.style.visibility="hidden";
        z.style.visibility="hidden";
    }
}

function addFav() {
    var w = document.getElementById("newFavName");
    var x = document.getElementById("newFav");
    var y = document.getElementById("deck");
    var z = document.getElementById("fav");
    
    z.style.visibility="visible";
    w.innerHTML=y.value;
    x.style.visibility="visible";
    
    return false;
};

function save() {
    var x = document.getElementsByClassName("remove");
    for (i = 0; i < x.length; i++) {
        if (x[i].style.display=="none") {
            x[i].style.display="none";
        } else {
            x[i].style.display="none";
        }
    }
    
    var y = document.getElementById("edit");
    if (y.style.display=="none" || y.style.visibility=="hidden") {
        y.style.visibility="visible";
        y.style.display="inline";
    }
    else {
        y.style.visibility="hidden";
        y.style.display="none";
    }
    
    var z = document.getElementById("save");
    if (z.style.visibility=="visible") {
        z.style.visibility="hidden";
        document.getElementById("add").style.visibility="hidden";
    } else {
        z.style.visibility="visible";
    }
    return false;
}

function showSave() {
    var x = document.getElementById("save");
    var y = document.getElementById("add");
    x.style.visibility="visible";
    y.style.display="inline";
    hideEdit();
}

function hideSave() {
    var x = document.getElementById("save");
    var y = document.getElementById("add");
    x.style.visibility="hidden";
    y.style.display="none";
    showEdit();
}

function toggleProfile() {
    var x = document.getElementById("profile");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else {
        x.style.visibility="visible";
    }
}

function setUsername() {
    var username = prompt("Choose a username: ");
    if (username != null) {
        document.getElementById("username").innerHTML = username;
    }
}

function toggleConfirm() {
    var x=document.getElementById("confirm");
    if (x.style.visibility=="visible") {
        x.style.visibility="hidden";
    } else {
        x.style.visibility="visible";
    }
}

function confirmLocation(location) {
    toggleConfirm();
    var x=document.getElementById("question");
    x.innerHTML="How full was " + location + "?"
    if (location=="West Deck") {
        dropFlagWD();
    } else if (location=="East Deck") {
        dropFlagED();
    } else if (location=="Union Deck") {
        dropFlagUD();
    }
}

function westDeck() {
    var check = document.getElementById("remove1");
    if (check.style.display=="inline") {
        removeItem1();
    } else {
        alert("Proceding to West Deck...");
        confirmLocation("West Deck");
    }
    return false;
}

function eastDeck() {
    var check = document.getElementById("remove2");
    if (check.style.display=="inline") {
        removeItem2();
    } else {
        alert("Proceding to East Deck...");
        confirmLocation("East Deck");
    }
    return false;
}

function unionDeck() {
    var check = document.getElementById("remove3");
    if (check.style.display=="inline") {
        removeItem3();
    } else {
        alert("Proceding to Union Deck...");
        confirmLocation("Union Deck");
    }
    return false;
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

function removeItem4() {
    var x = document.getElementById("newFavName").innerHTML;
    if (confirm("Do you want to remove" + newFavName + "from your favorites?")==true) {
        document.getElementById("newFav").style.display="none";
    }
}