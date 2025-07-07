<?php 

include 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">age</th>
        <th scope="col">buttons</th>
      </tr>
    </thead>
    <tbody>
      <?php  $customer = $conn->query("select * from customer");
      while ($row = $customer->fetch_assoc()) { ?>
      <tr>
        <th scope="row"><?php echo $row["id"]; ?></th>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["lname"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td>
          <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a>
          <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
</table>
</body>
</html>