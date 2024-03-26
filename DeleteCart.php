<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include "connection.php";
session_start();

  if(isset ($_GET['id'])){
     $id=$_GET['id'];
    //  echo $id;
     $query="DELETE FROM cart WHERE id=$id";
     $result=mysqli_query($conn,$query);
     if($result){
           header('location:ViewCart.php');
     }

  }
?>

     
</body>
</html>