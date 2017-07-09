<?php

/* 
 *  by meredith browne
 */

$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if (!empty($_POST)) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "  *Name is required.";
        } else {
            $name = filter_var(test_input($_POST["name"]), FILTER_SANITIZE_STRING);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "  *Only letters and spaces allowed.";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "  *Email is required.";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "  *Invalid email address.";
            }
        }

        if (empty($_POST["message"])) {
            $messageErr = "  *Message is required.";
        } else {
            $message = filter_var(test_input($_POST["message"]), FILTER_SANITIZE_STRING);
            if (!filter_var($message, FILTER_SANITIZE_STRING)) {
                $messageErr = "  *Invalid message content.";
            }
        }
    }
}

//$to = "matt@hardingdesignco.com";
$to = "merebrownie@me.com";
$from = $email;
$subject = "Website Inquiry";
$subject2 = "Copy of your form submission";
$message1 = $name . " wrote the following:" . "\n\n" . $message;
$message2 = "Here is a copy of your message: " . $name . "\n\n" . $message;
    
$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to, $subject, $message1, $headers);
mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
if (!empty($_POST)) {
    echo 'Mail sent, thank you ' . $name . ', we will contact you shortly.';
}

function test_input ($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



//if (isset($_POST['submit'])) {
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
    
?>

<!--<form action="../mail_manager/mail_handler.php" method="post"/>-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"/>
    <fieldset class="form-group">
        <label for="name">Name</label><span class="error"><?php echo $nameErr; ?></span>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"/>
        
    </fieldset>
    <fieldset class="form-group">
        <label for="email">Email Address</label><span class="error"><?php echo $emailErr; ?></span>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"/>
        
    </fieldset>
    <fieldset class="form-group">
        <label for="message">Message</label><span class="error"><?php echo $messageErr; ?></span>
        <textarea name="message" class="form-control"><?php echo $message; ?></textarea>
        
    </fieldset>
    <fieldset class="form-group">
        <button type="submit" value="Submit" class="btn btn-flat">Submit</button>
    </fieldset>
</form>