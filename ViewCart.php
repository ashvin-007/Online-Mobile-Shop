<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap');


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    .active {
      color: rgb(5, 252, 104);
    }

    .nav-link:hover {
      color: rgb(5, 252, 104);
    }

    footer li {
      list-style-type: none;

    }

    a {
      text-decoration: none;
    }



    a {
      text-decoration: none;
      color: #000;
    }

    .fa-brands:hover {
      color: #fff;
    }

    .container {
      padding: 2rem 0rem;
      margin: 100px auto;

    }

    h4 {
      margin: 2rem 0rem 1rem;
    }

    .table-image {

      td,
      th {
        vertical-align: middle;
      }
    }

    @media only screen and (max-width: 600px) {
      .navbar {
        padding: 15px;
        /* Adjust the padding for smaller screens */
      }

      .navbar-brand {
        width: 100%;
        /* Make the logo and text stack on smaller screens */
        text-align: center;
        padding: 0;
      }

      .navbar-toggler {
        margin-right: 15px;
        /* Add some margin to the right of the burger icon */
      }

      .navbar-collapse {
        width: 100%;
        /* Make the navigation links take the full width */
        text-align: center;
        margin-top: 10px;
        /* Add some margin at the top of the navigation links */
      }

      .form-control {
        width: 80%;
        /* Adjust the width of the search input on smaller screens */
      }

      /* Add specific styles for the footer on smaller screens */
      footer li {
        text-align: center;
        padding: 5px;
      }

      .container-fluid {
        padding: 10px;
      }
    }

    .removeFocus:focus {
      box-shadow: none;
    }

    /* @media screen  and (max-width:600px) {
  form{
    width:90%;
    margin:10px auto;
  }
  tr{
    display:flex;
    flex-direction:column;
  }
  th,td{
    width:80%;
    margin:5px auto;
  }
  .classMarginLeft{
    display:flex;
    justify-content:space-between;
    align-items:center;
    border:1px solid;
    width:100%;
    
  }
  .colorSpan{
   
  }
} */
  </style>
</head>
<?php
// session_start();
include("connection.php");
$email = $_SESSION["username"];
$query = "SELECT id,name,price,Quantity,email FROM cart WHERE email='$email'";
$insert = mysqli_query($conn, $query);
$total = mysqli_num_rows($insert);


$count = $total;

?>
<nav class="navbar navbar-expand-sm fixed-top" style="background-color:#fff;">
  <div class="container-fluid classMarginLeft " style="display: flex; align-items: center; justify-content: space-between;  ">
    <a class="navbar-brand" style="display: flex;align-items: center; justify-content: center; gap: 10px; width: 20%; padding-left: 50px;" href="javascript:void(0)">
      <img src="images/logo1.jpg" width="30" alt="LOGO">
      <span style="font-size: 30px;"><span class="colorSpan" style="color: rgb(5, 252, 104);">DB</span>Store</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar" style="width: 80%;">
      <ul class="navbar-nav me-auto text-center ulStyle" style="margin: 0px auto;gap: 30px; display: flex;">
        <li class="nav-item">
          <a class="nav-link " href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#brand">Brand</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">ContactUS</a>
        </li>
      </ul>
      <a href="ViewCart.php" name="btnCart" style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;"><ion-icon name="cart" style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon><span class="styleCount" style=" position: absolute;
      top: 12px;"><?php echo $count; ?></span> </a>
      <form class="d-flex " style="margin: 0px auto;gap: 20px;">
        <form class="d-flex " style="margin: 0px auto;gap: 20px;">
          <input class="me-2 removeFocus form-control" type="text" placeholder="Search" style="border: none;outline: none;border-bottom: 1px solid lightgrey;border-radius: 0px; ">
          <button class="btn " style="background-color: rgb(5, 252, 104);color: #fff;" type="button"> <i class="fa-solid fa-magnifying-glass fa-flip"></i></button>
        </form>

    </div>
  </div>
</nav>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total</th>

              <!-- <th scope="col">Shares</th> -->
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <form id="cartForm" action="InsertCart.php" method="POST">

              <?php
              include "connection.php";
              $total = 0;
              // if(isset($_SESSION['cart'])){


              while ($rows = mysqli_fetch_array($insert)) {

                $productPrice = $rows['price'];
                $productQuantity = $rows['Quantity'];
                $email = $rows['email'];

                // Ensure that both values are numeric before performing the calculation
                if (is_numeric($productPrice) && is_numeric($productQuantity)) {
                  // Perform the calculation
                  $total = $productPrice * $productQuantity;

                  // Convert the result to a numeric value if necessary
                  $total = floatval($total); // Convert to float (decimal) value
                  // Or if you want to convert to integer, you can use intval():
                  // $total = intval($total); // Convert to integer value
                } else {
                  // Handle the case where one or both values are not numeric
                  $total = 0; // Set total to 0
                }

                // echo $total; // Output the total


              ?>
                <tr>
                  <th scope="row">
                    <!-- <input type="text" name="id" value="<?php echo $rows['productId'] ?>"> -->
                    <?php echo $rows['id'] ?>
                  </th>
                  <td>
                    <!-- <input type="text" name="title" value="<?php echo $rows['productName'] ?>"> -->
                    <?php echo $rows['name'] ?>
                  </td>
                  <td>
                    <!-- <input type="text" name="title" value="<?php echo $rows['productQuantity'] ?>"> -->
                    <?php echo $rows['Quantity'] ?>
                  </td>
                  <td>
                    <!-- <input type="text" name="currentPrice" value="<?php echo $rows['productPrice'] ?>"> -->
                    <?php echo $rows['price'] ?>
                  </td>
                  <td>
                    <?php echo $total ?>
                  </td>
                  <td>
                    <a href="buy.php?id=<?php echo $rows['id'];?>">
                      <button type="button" class="btn btn-success">
                      <i class="fa-solid fa-cart-shopping"></i>
                      </button>
                    </a>

                    <!-- onclick="updateCartItem('<?php echo $rows['name']; ?>')" -->

                    <form id="cartForm" action="DeleteCart.php" method="POST">

                      <button type="button" class="btn btn-danger" onclick="removeCartItem(<?php echo $rows['id']; ?>)">
                        <i class="far fa-trash-alt"></i>
                      </button>
                  </td>
                  <input type="hidden" name="item" value="<?php echo $rows['name'] ?>">

                </tr>
              <?php
              }
              // }
              ?>
              <!-- <input type="hidden" id="itemToUpdate" name="itemToUpdate" value="<?php echo $rows['id'] ?>"> -->

              <!-- Hidden input field for the item to remove -->
              <!-- Your HTML form to send the item ID to PHP -->
              <!-- Hidden input field to store the item ID to be removed -->
              <input type="hidden" id="itemToRemove" name="itemToRemove">
              <!-- Other form elements if any -->
            </form>


            </form>
          </tbody>
          <script>
           
            const removeCartItem = (id) => {
              // alert("Hello");
              console.log("Removing item with ID: " + id); // Log the item ID
              // Set the value of the hidden input field to the item ID
              document.getElementById("itemToRemove").value = id;
              // Submit the form
              document.getElementById("cartForm").submit();
              window.location.href = "DeleteCart.php?id=" + id;

            }


         
          </script>



        </table>
      </div>
    </div>
  </div>

  <footer style=" background-color:  rgb(5, 252, 104);width:100vw;margin:0px auto;">
    <div class="container-fluid">
      <div class="row" style="margin: 0px auto;">
        <div class="col-sm-4 d-flex text-center" style=" flex-direction: column;justify-content: center;gap: 10px; margin: 10px auto; ">
          <h4>Menu</h4>

          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Brand</a></li>
          <li><a href="#">Contact US</a></li>
        </div>

        <div class="col-sm-4 d-flex" style="flex-direction: column;justify-content: center;align-items: center;gap: 10px;margin: 10px auto;">
          <h4>Services</h4>
          <span>FullFillMent Services</span>
          <span>Partener Services</span>
          <span>Packaging Services</span>
          <span>Account Management</span>
        </div>
        <div class="col-sm-4 d-flex" style="flex-direction: column;align-items: center;gap: 10px;margin: 10px auto; ;">
          <h4>Contact US</h4>
          <span>parmarashvin9280@gmail.com</span>
          <span>maulikprajapati722004@gmail.com</span>
          <span>+91 99791 59341</span>
          <span>+91 79843 335855</span>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5">
      <div class="row text-center" style="gap:20px;">
        <div class="col-sm-12">
          <h3>Follow Us On</h3>
        </div>
        <div class="col-sm-12">
          <i class="fa-brands fa-instagram fa-spin fa-2x" style="margin: 0px 10px; "></i>
          <i class="fa-brands fa-facebook fa-spin fa-2x" style="margin: 0px 10px; "></i>
          <i class="fa-brands fa-telegram fa-spin fa-2x" style="margin: 0px 10px; "></i>
        </div>
        <div class="col-sm-12" style="font-size: 20px;">
          <p>&copy; 2023-24 DBStore All Rights Reserved</p>
        </div>
      </div>
    </div>

  </footer>




</body>

</html>