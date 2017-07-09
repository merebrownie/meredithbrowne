<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
        display_db_error($error_message);
    }
}

?>
