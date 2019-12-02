<?php

/* 
 * by meredith browne
 */
    $loc = $_SERVER['DOCUMENT_ROOT'] . '/projects/stonecenter';
    $dsn = 'mysql:host=localhost;dbname=stepping_stones';
    $username = $_SERVER['DB_USER'];
    $password = $_SERVER['DB_PASS'];
    try {
       $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include $loc . '/errors/database_error.php';
        exit;
    }
?>