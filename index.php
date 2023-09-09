<?php

include('connection.php');

?>
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
<br>

<div class="container">

<h1>Add Your Product</h1>
<hr>

<form action="index.php" class="form-group" method ="post" enctype = "multipart/form-data">
    <!-- get request server post -->

<label for="Name">name</label>
<input type="text" name="name" class="form-control">
<br>
<label for="cat">Catagory</label>
<input type="text" name="cat" class="form-control">
<br>
<label for="des">descripition</label>
<input type="text" name="des" class="form-control">
<br>
<label for="img">image</label>
<input type="file" name="img" class="form-control">
<br>
<input type="submit" name="submit" class="btn btn-success">

</form>

<?php 
 
 if (isset($_POST['submit'])) {

    $pname = $_POST['name'];
    $pcat = $_POST['cat'];
    $pdes = $_POST['des'];
    $pimg_name = $_FILES['img']['name'];
    $pimg_tmp_name = $_FILES['img']['tmp_name'];
    $pimg_size = $_FILES['img']['size'];
    
    $query ="INSERT INTO `pro12` ( `name`, `catagory`, `description`, `image`) VALUES ( '$pname', '$pcat', '$pdes', '$pimg_name')";

    $result = mysqli_query($connect , $query);
    
     move_uploaded_file($pimg_tmp_name  , 'images/' . $pimg_name );

}
header("location: fetch.php") ;
    


    ?>
    </div>
</body>
</html>