<?php
    include "connection.php";

    if(isset($_GET['email'])) {
        $email=$_GET['email'];
        $insert="delete from usertable where email='$email'";
        $query=mysqli_query($conn,$insert);
        if($query){
            header('location:adminUser.php');
            exit;
        }
    }

    if(isset($_GET['id'])){
        $id=$_GET['id'];

      
        // Then delete the row in brandtable
        $deleteBrand = "delete from brandtable where id='$id'";
        $queryBrand = mysqli_query($conn, $deleteBrand);

        if($queryBrand){
            header('location:adminProduct.php');
            exit;
        }
    }

    // if(isset($_GET['id'])){
    //     $id=$_GET['id'];
        
    //     $insert="delete from contact where id='$id'";
    //     $query=mysqli_query($conn,$insert);
    //     if($query){
    //         header('location:adminContact.php');
    //         exit;
    //     }
    // }

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $insert="delete from product_detail where id='$id'";
        $query=mysqli_query($conn,$insert);
        if($query){
            header('location:adminSpecification.php');
            exit;
        }
    }
?>
