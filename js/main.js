/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getYear() {
    var date = new Date();
    document.getElementById("currentYear").innerHTML = date.getFullYear();
}

function newContact() {
    document.getElementById("contact_form").innerHTML = "Thank you for contacting me, I'll be in touch soon!";
}