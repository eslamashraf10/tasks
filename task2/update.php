<?php 

include 'db.php';

$id = 2;
$new_fname = 'Ahmed';
$new_lname = 'Fayed';
$new_age = 23;

$update = $conn->query("UPDATE customer SET fname='$new_fname', lname='$new_lname', age=$new_age WHERE id=$id");

if ($update) {
    echo "updated successfully!";
} else {
    echo "Update failed: " . $conn->error;
}
