<?php

$name = "";
$email = "";
$subject = "";
$message = "";
$error = "";
if (empty($_POST["name"]) || $_POST["name"] == '') {
    $error = "Name is required.";
} else {
    $name = stripData($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error = "Only letters & whitespace allowed.";
    }
}
if (empty($_POST["email"]) || $_POST["email"] == '') {
    $error = "Email is required.";
} else {
    $email = stripData($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        $error = "Invalid email address.";
    }
}
if (empty($_POST["subject"]) || $_POST["subject"] == '') {
    $subject = "Designer-Rehab Website Request";
} else {
    $subject = stripData($_POST["subject"]);
}
if (empty($_POST["message"]) || $_POST["message"] == '') {
    $error = "Message is required.";
} else {
    $message = stripData($_POST["message"]);
}

if ($error == "") {
    
    if ( !($name == '') && !($email == '') && !($subject == '') && !($message == '') ) {
        $header = $name . "<" . $email . ">";
        $headers = "Designer-Rehab.com";
        $msg = "Hello $name! Thank you for contacting Designer-Rehab.
        Name: $name
        Email: $email
        Subject: $subject
        Message: $message
        
        This is a confirmation email. We will contact you as soon as possible.";
        try {
            echo "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message<br><br>";
            if(mail($email, $headers, $msg) && mail("merebrownie@me.com", $subject . $header, $message)){
                echo "Success";
            } else {
                echo "Failure";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message";
    }
} else {
    echo $error;
}

function stripData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>