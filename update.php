<?php

require('connection.php');

$userid = $_POST['id'];
$username = $_POST['name'];
$usercat = $_POST['catagory'];
$userdes = $_POST['description'];
$pimg_name = $_FILES['img']['name'];
$pimg_tmp_name = $_FILES['img']['tmp_name'];
$pimg_size = $_FILES['img']['size'];

$update = "update pro12 set Name = '$username' , Catagory = '$usercat', Description = '$userdes',image ='$pimg_name' where id = $userid";

move_uploaded_file($pimg_tmp_name  , 'images/' . $pimg_name );

$res = mysqli_query($connect , $update);
if (!$res) {
     die("connection failed");
}

header('location: fetch.php');

?>