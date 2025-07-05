<?php 

include 'db.php';

// Sample data to insert
$fname = 'eslam';
$lname = 'ashraf';
$age = 23;

// SQL insert query
$insert = $conn->query("INSERT INTO customer (fname, lname, age) VALUES ('$fname', '$lname', $age)");

if ($insert) {
    echo "Inserted successfully!";
} else {
    echo "Insert failed: ";
}
