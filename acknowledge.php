<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//if (isset($_POST['contact_form'])) {
//    $to = 'merebrownie@meredithbrowne';
//    $subject = 'Web Portfolio Contact';
//    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
//    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
//    $message .= 'Message: ' . $_POST['message'];
//    
//    $headers = "From: merebrownie@meredithbrowne\r\n";
//    $headers .= 'Content-Type: text/plain; charset=utf-8';
//    $verifyTrusted = '-fmeredithbrowne@me.com';
//    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//    if ($email) {
//        $headers .= "\r\nReply-To: $email";
//    }
////    $success = mail($to, $subject, $message, $headers, '-fmeredithbrowne@me.com');
//    $success = mail($to, $subject, $message);
//}

?>
<html>
    <body>
        <?php if (isset($success) && $success) { ?>
        <h1>Thank you</h1>
        <p>Your message has been sent.</p>
        <?php } else { ?>
        <h1>Oops!</h1>
        <p>Sorry, there was a problem sending your message.</p>
        <?php } ?>
    </body>
</html>

