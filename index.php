<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css"/>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Meredith Browne | Web Development Portfolio</title>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="container-fluid">
        <header class="row">
            <?php include 'view/header.php'; ?>
        </header>
        
        <!-- HOME SECTION -->
        <?php include 'view/home.php'; ?>
        
        <!-- ABOUT SECTION -->
        <?php include 'view/about.php'; ?>
        
        <!-- PROJECTS SECTION -->
        <?php include 'view/projects.php'; ?>
        
        <!-- CONTACT SECTION -->
        <?php include 'view/contact.php'; ?>
        
        <footer class="row">
            <?php include 'view/footer.php'; ?>
        </footer>
        
        <!-- JavaScript -->
        <script src="js/jquery-2.2.0.min-2.js" type="text/javascript"></script>
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/npm.js" type="text/javascript"></script>
        
    </body>
</html>

