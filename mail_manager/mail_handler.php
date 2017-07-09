<?php

/* 
 *  by meredith browne
 */

$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed.";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address.";
        }
    }
    
    if (empty($_POST["message"])) {
        $messageErr = "Message is required.";
    } else {
        $message = test_input($_POST["message"]);
        if (!filter_var($message, FILTER_SANITIZE_STRING)) {
            $messageErr = "Invalid message content.";
        }
    }
    
}

function test_input ($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
//    $to = "matt@hardingdesignco.com";
    $to = "merebrownie@me.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Website Inquiry";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message: " . $name . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo 'Mail sent, thank you' . $name . ' we will contact you shortly.';
}