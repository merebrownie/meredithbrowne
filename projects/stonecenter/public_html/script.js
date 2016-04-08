function validateCommentForm() {
    
    //code to validate the general question/comment form
    if (document.commentForm.comment.value == "") {
        document.commentForm.comment.value = "Please enter your question/comment";
        document.commentForm.comment.focus();
        return false;
    }
    else if (document.commentForm.email.value == "" && document.commentForm.phone.value == "") {
        alert("Please enter either an e-mail address or telephone number in order for us to contact you.");
        return false;
    }
    else {
        return true;
    }
}

function validateForm() {
    var formValid = true;
    
    //code to validate appointment request form
    if (document.apptRequest.self[0].checked == false && document.apptRequest.self[1].checked == false) {
        formValid = false;
    }
    if (document.apptRequest.self[1].checked == true && document.apptRequest.clientName.value == "") {
        //make client name field required if the answer is no
        document.getElementById("clientNameLabel").setAttribute("class", "required");
        formValid = false;
    }
    if (document.apptRequest.fullName.value == "") {
        formValid = false;
    }
    //relationship is not a required field
    if (document.apptRequest.email.value == "") {
        formValid = false;
    }
    if (document.apptRequest.gender[0] == false && document.apptRequest.gender[1] == false) {
        formValid = false;
    }  
    if (document.apptRequest.DOB.value == "") {
        formValid = false;
        }
    if (document.apptRequest.address.value == "") {
        formValid = false;
    }
    if (document.apptRequest.zip.value == "") {
        formValid = false;    
    }
    if (document.apptRequest.primTel.value == "") {
        formValid = false;
    }
    if (document.apptRequest.availability.value == "") {
        formValid = false;
    }
    if (document.apptRequest.reason.value == "") {
        formValid = false;
    }
    
    if (!formValid) {
        alert("Missing Required Information");
    }
    else {
        alert("Form Successfully Submitted");
    }
    return formValid;
}

function validateSubscription() {
    var formValid = true;
    
    if (document.subscribe.name.value == "") {
        document.getElementById("nameLabel").setAttribute("class", "required");
        formValid = false;
    }
    if (document.subscribe.email.value == "") {
        document.getElementById("emailLabel").setAttribute("class", "required");
        formValid = false;
    }
    
    if (!formValid) {
        alert("Missing Required Information");
    }
    else {
        alert("Thanks for subscribing!");
    }
    
    return formValid;
}

function validatePopupSubscription() {
        var formValid = true;
    
    if (document.popUp.name.value == "") {
        document.getElementById("nameLabel").setAttribute("class", "required");
        formValid = false;
    }
    if (document.popUp.email.value == "") {
        document.getElementById("emailLabel").setAttribute("class", "required");
        formValid = false;
    }
    if (!formValid) {
        alert("Missing Required Information");
    }
    else {
        alert("Thanks for subscribing!");
    }
    
    return formValid;
}
