<?php 

include 'db.php';

$id = 4;

$delete = $conn->query("DELETE FROM customer WHERE id = $id");

if ($delete) {
    echo "deleted successfully!";
} else {
    echo "Delete failed: " . $conn->error;
}
