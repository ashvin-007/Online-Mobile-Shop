<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST['quantity'])) {
        $product_quantity = $_POST['quantity'];
        // echo $product_quantity;
    } else {
        echo "Quantity not provided.";
    }

    include "connection.php";
    session_start();
    //  if(isset($_POST['id'], $_POST['title'], $_POST['currentPrice'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['title'];
    //    echo   $product_quantity=$_POST['quantity'];  
    $product_price = $_POST['currentPrice'];
    $email = $_SESSION["username"];


   
    $product_found = false;
    $query = "SELECT * from cart WHERE id='  $product_id' AND email='$email'";
    $result = mysqli_query($conn, $query);
    $total = mysqli_num_rows($result);
    // echo $total . "";
   
    if ($total == 0) {
        $product_found = false;
    } else {
        $product_found = true;

    }

    if (!$product_found) {
        // Insert the product into the database
        $query = "INSERT INTO cart (id, name, price, Quantity,email) VALUES ('$product_id', '$product_name', '$product_price', '$product_quantity','$email')  ";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header('location: ViewCart.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // If the product is already in the cart, display an alert
        echo "<script>alert('This product is already in your cart.')</script>";
        echo "<script>
            setTimeout(function() {
                window.location.href = 'home.php';
            }, 1000); // 1000 milliseconds = 1 second
          </script>";
    }




   


  
    ?>






</body>

</html>