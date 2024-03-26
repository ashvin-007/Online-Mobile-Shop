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

// if(isset($_POST['itemToRemove'])) {
//     echo "fgg"; // Check if this message is displayed, indicating that the condition is met
//     $itemToRemove = $_POST['itemToRemove'];
//     // Debugging: Output the received item to ensure it's correct
//     echo "Item to remove: " . $itemToRemove;
    
//     // Debugging: Output the current session cart before removing the item
//     // var_dump($_SESSION['cart']); 

//     // Remove the item from the cart session variable
//     // foreach ($_SESSION['cart'] as $key => $value) {
//     //     if ($value['productName'] === $itemToRemove) {
//     //         unset($_SESSION['cart'][$key]);
//     //         break; // Assuming each item is unique, we can break out of the loop once found
//     //     }
//     // }

//        $query="DELETE FROM cart WHERE id=$itemToRemove";
//        $insert=mysqli_query($conn,$query);
//           if($insert){
//             header('Location: ViewCart.php');

//           }
//           else{
//                echo "f";



//           }

//     // Debugging: Output the session cart after removing the item
//     // var_dump($_SESSION['cart']);

//     // // Re-index the session array
//     // $_SESSION['cart'] = array_values($_SESSION['cart']);
    
//     // // Debugging: Output a message to ensure the header() function is being reached
//     // echo "Redirecting...";

//     // Redirect to the cart view page
//     exit();
// }
?>

     
</body>
</html>