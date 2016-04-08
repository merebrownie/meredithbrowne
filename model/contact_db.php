<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function add_contact($contact_name, $contact_email, $contact_message) {
    global $db;
    $query = "INSERT INTO contact_submission (name, email, message) "
            . "VALUES (:contact_name, :contact_email, :contact_message)";
    $statement = $db->prepare($query);
//    $statement->bindValue(':contact_id', $contact_id);
    $statement->bindValue(':contact_name', $contact_name);
    $statement->bindValue(':contact_email', $contact_email);
    $statement->bindValue(':contact_message', $contact_message);
    $statement->execute();
    $statement->closeCursor();
    error_log($statement);
}

?>
