<?php

require("connection.php");
// require("header.php");

$fetch = "select * from `pro12` where status = '0' ";

$data = mysqli_query($connect , $fetch);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<table class = "table table-bordered text-center">
    <thead class = "table table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Descripition</th>
        <th>Image</th>
        <th>Delete</th>
        
    </thead>
    <tbody>

        <?php
while ($row = mysqli_fetch_assoc($data)) {
        ?>

        <tr>
            <td><?php echo $row ['id']?></td>
            <td><?php echo $row ['name']?></td>
            <td><?php echo $row ['catagory']?></td>
            <td><?php echo $row ['description']?></td>
            <td> <img src="<?php echo 'images/' . $row['image']?>" alt="" height="50px" width="50px"> </td>
            <td> <a href="delete.php?id=<?php echo $row['id'];?>" class = "btn btn-danger" >DELETE</a></td>
            

        <?php
}

// header("location: fetch.php");

        ?>

    </tbody>
</table>


</body>
</html>