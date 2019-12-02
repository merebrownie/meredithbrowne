<?php
    $dsn = 'mysql:host=localhost;dbname=portfolio_contacts';
    //$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $username = '';
    
    try {
        //$db = new PDO($dsn, $username, $password, $options);
//        $db = new PDO($dsn, $username, $password);
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'errors/database_error.php';
        exit;
    }
    
    function display_db_error ($error_message) {
        global $app_path;
        include 'errors/db_error.php';
        exit;
    }
?>