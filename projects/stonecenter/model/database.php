<?php

/* 
 * by meredith browne
 */
    $loc = $_SERVER['DOCUMENT_ROOT'] . '/projects/stonecenter';
    $dsn = 'mysql:host=localhost;dbname=stepping_stones';
//    $username = 'merebrownie';
//    $password = 'brow4780';
    //$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $username = 'root';
    
    try {
        //$db = new PDO($dsn, $username, $password, $options);
//        $db = new PDO($dsn, $username, $password);
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include $loc . '/errors/database_error.php';
        exit;
    }
    
//    function display_db_error ($error_message) {
//        global $app_path;
//        include '../errors/db_error.php';
//        exit;
//    }
?>