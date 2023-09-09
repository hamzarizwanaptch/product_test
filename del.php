<?php
require('connection.php');

$user_id = $_GET['id']; 

$del = "update pro12 set status = '0' where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("connection failed");
}

header('location: trash.php');
?>