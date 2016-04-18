<html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/main.js" type="text/javascript"></script>
        <title>Meredith Browne</title>
    </head>
    <body>
        <h2>Contact</h2>
        <!--<form action="index.php#contact" method="post" id="add_contact_form" name="contact-form">-->
        <form action="acknowledge.php" method="post" id="add_contact_form" name="contact-form">
            <input type="hidden" name="action" value="add_contact">
            <input type="text" name="name" placeholder="Name" id="contact_name" required="">
            <input type="email" name="email" placeholder="Email" id="contact_email" required=""><br>
            <textarea name="message" placeholder="Message" id="contact_message" required="" rows="5"></textarea><br>
            <button type="submit" name="send" value="send" class="right btn btn-default" onclick="newContact()">Send</button>
        </form>
    </body>
</html>