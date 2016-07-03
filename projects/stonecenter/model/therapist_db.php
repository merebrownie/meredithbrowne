<?php

/*
 * by meredith browne
 */

function get_therapist_by_id($id) {
    global $db;
    $query = "SELECT * FROM therapists "
            . "WHERE id = :id";
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $therapist = $statement->fetch();
        $statement->closeCursor();
        return $therapist;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../errors/database_error.php';
//        display_db_error($error_message);
    }
}

function get_therapists() {
    global $db;
    $query = "SELECT * FROM therapists";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $therapists = $statement->fetchAll();
        $statement->closeCursor();
        return $therapists;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include '../errors/database_error.php';
//        display_db_error($error_message);
    }
}

?>
