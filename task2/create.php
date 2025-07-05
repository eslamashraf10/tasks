<?php 

include 'db.php';

$fname = 'eslam';
$lname = 'ashraf';
$age = 23;

$insert = $conn->query("INSERT INTO customer (fname, lname, age) VALUES ('$fname', '$lname', $age)");

if ($insert) {
    echo "Inserted successfully!";
} else {
    echo "Insert failed: ";
}
