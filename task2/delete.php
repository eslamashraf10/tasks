<?php 

include 'db.php';

$id = 4; // ID of the customer to delete

$delete = $conn->query("DELETE FROM customer WHERE id = $id");

if ($delete) {
    echo "deleted successfully!";
} else {
    echo "Delete failed: " . $conn->error;
}
