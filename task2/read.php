<?php 


include 'db.php';

$customer = $conn->query("select * from customer");

while ($row = $customer->fetch_assoc()) {
    echo $row["fname"] ." ". $row["lname"] ." ". $row["age"] . "<br>" ;
}