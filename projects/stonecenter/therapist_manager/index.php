<?php

/*
 * by meredith browne
 */
$loc = $_SERVER['DOCUMENT_ROOT'] . '/projects/stonecenter';
require $loc . '/model/database.php';
require $loc . '/model/therapist_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_none'; // default action
    }
}

if ($action == 'show_none') {
    $therapists = get_therapists();
    include 'therapists.php';
} else if ($action == 'show_therapist') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if ($id === NULL) {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    }
    $selected_therapist = get_therapist_by_id($id);
    $therapists = get_therapists();
    include 'therapists.php';
    
} else if ($action == 'show_all_therpists') {
    $therapists = get_therapists();
    include 'therapists.php';
}
?>