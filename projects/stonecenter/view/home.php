<?php

/* 
 * by meredith browne
 */

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>The Stone Center for Counseling and Leadership</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="jquery/css/custom-theme/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/popupCookie.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="jquery/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="jquery/js/jquery-ui-1.10.4.custom.js"></script>
</head>

<body>
    <div id="wrap">
    
        <?php include 'header.php'; ?>
        <h2></h2>
        <div id="about">
            <p>
            <img src="media/building.jpg" alt="Stone Center Front">
            <span class="emphasize">The Stone Center for Counseling & Leadership</span> is a private practice dedicated to providing professional counseling and consultation services to children, adolescents, adults, couples and families.</p>
            <p>
            Our skilled therapists bring many years of experience from a wide variety of specialty areas.
            </p>
        </div>

        <div class="sidebar">
            <h3>Join Our Newsletter:</h3>
            <form name="subscribe" onsubmit="return validateSubscription()">
                <label for="name" id="nameLabel">Name</label>
                    <input type="text" name="name" id="name"><br>
                <label for="email" id="emailLabel">Email</label>
                    <input type="email" name="email" id="email"><br>
                <input type="submit" value="Subscribe">
            </form>
            
            <div class="therapists">
                <h3>Our Therapists</h3>
                <ul>
                    <li><a href="therapist_manager/index.php?action=show_therapist&id=1">Leslie Petruk</a></li>
                    <li><a href="therapist_manager/index.php?action=show_therapist&id=2">Andrea Miller</a></li>
                    <li><a href="therapist_manager/index.php?action=show_therapist&id=3">Kathryn Burnett</a></li>
                </ul>
            </div>
        </div>
        
        
    <p><span id="validate"><a href="http://validator.w3.org/check?uri=referer">Validate HTML</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a></span></p> 
    </div>
    <?php include 'view/footer.php'; ?>
</body>
</html>
