<?php
//function get_products_by_category($category_id) {
//    global $db;
//    $query = 'SELECT * FROM products
//              WHERE products.categoryID = :category_id
//              ORDER BY productID';
//    $statement = $db->prepare($query);
//    $statement->bindValue(":category_id", $category_id);
//    $statement->execute();
//    $products = $statement->fetchAll();
//    $statement->closeCursor();
//    return $products;
//}

//function get_product($product_id) {
//    global $db;
//    $query = 'SELECT * FROM products
//              WHERE productID = :product_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(":product_id", $product_id);
//    $statement->execute();
//    $product = $statement->fetch();
//    $statement->closeCursor();
//    return $product;
//}

//function delete_product($product_id) {
//    global $db;
//    $query = 'DELETE FROM products
//              WHERE productID = :product_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':product_id', $product_id);
//    $statement->execute();
//    $statement->closeCursor();
//}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}

function add_contact($contact_id, $contact_name, $contact_email, $contact_message) {
    global $db;
    $query = "INSERT INTO contact_submission (id, name, email, message) "
            . "VALUES (:contact_id, :contact_name, :contact_email, :contact_message)";
    $statement = $db->prepare($query);
    $statement->bindValue(':contact_id', $contact_id);
    $statement->bindValue(':contact_name', $contact_name);
    $statement->bindValue(':contact_email', $contact_email);
    $statement->bindValue(':contact_message', $contact_message);
    $statement->execute();
    $statement->closeCursor();
}
?>