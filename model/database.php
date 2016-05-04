<?php
    $dsn = 'mysql:host=localhost;dbname=portfolio_contacts';
    $username = 'merebrownie';
    $password = 'brow4780';
    //$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try {
        //$db = new PDO($dsn, $username, $password, $options);
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../errors/database_error.php';
        exit;
    }
    
    function display_db_error ($error_message) {
        global $app_path;
        include 'errors/db_error.php';
        exit;
    }
?>