<html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/main.js" type="text/javascript"></script>
        <title>Meredith Browne</title>
    </head>
    <body>
        <h2>Contact</h2>
        <!--<form action="index.php#contact" method="post" id="add_contact_form" name="contact-form">-->
        <form action="/contact_manager/index.php" method="post" id="add_contact_form">
            <input type="hidden" name="action" value="add_contact">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <textarea name="message" placeholder="Message"></textarea><br>
            <input type="submit" value="send" class="btn btn-default">
            <!--<input type="submit" name="send" value="send" class="right btn btn-default" onclick="newContact()">-->
        </form>
    </body>
</html>