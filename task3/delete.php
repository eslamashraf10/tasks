<?php 

include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = intval($id);

    $delete = $conn->query("DELETE FROM customer WHERE id = $id");

    if ($delete) {  
        echo "deleted successfully!";
    } else {
        echo "Delete failed: " . $conn->error;
    }

}