<?php
//    $dsn = 'mysql:host=localhost;dbname=portfolio_contacts';
//    $servername = "www.meredith-browne.com";
    $servername = '162.243.23.200';
    $username = 'merebrownie';
    $password = 'brow4780';
    $db = "portfolio_contacts";
    
    $mysqli = mysqli_connect($servername, $username, $password, $db);
    if(!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully";
    
    if (mysqli_connect_errno($mysqli)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        $res = mysqli_query($mysqli, "SELECT name AS _name FROM contact_submission");
        $row = mysqli_fetch_assoc($res);
        echo $row['_name'];
    }

    try {
//        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>