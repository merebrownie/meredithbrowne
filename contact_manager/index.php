<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('/model/database.php');
require '/model/contact_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

if ($action == 'add_contact') {
    $contact_id = filter_input(INPUT_POST, 'contact_id', FILTER_VALIDATE_INT);
    $contact_name = filter_input(INPUT_POST, 'contact_name', FILTER_SANITIZE_STRING);
    $contact_email = filter_input(INPUT_POST, 'contact_email', FILTER_VALIDATE_EMAIL);
    $contact_message = filter_input(INPUT_POST, 'contact_message', FILTER_SANITIZE_STRING);
    if ($contact_id == NULL || $contact_id == FALSE || $contact_name == NULL || $contact_name == FALSE 
            || $contact_email == NULL || $contact_email == FALSE || $contact_message == NULL 
            || $contact_message == FALSE) {
        $error_message = "You missed something, please complete all fields.";
        
    } else {
        add_contact($contact_id, $contact_name, $contact_email, $contact_message);
    }
}

?>