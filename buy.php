<?php

require('confing.php');
include "connection.php";

session_start();



$userprofile = $_SESSION["username"];
if ($userprofile == false) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <style>
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
      height: 100vh;
    }

    section .form_container,
    .logo_container {
      width: 50%;
      /* height: 100%; */

      display: flex;
      justify-content: center;
      align-items: center;
    }

    #finalProduct {
      /* width: 35rem; */
      /* height: 35rem; */
      /* padding: 2rem; */
      /* border: 1px solid black; */
      display: flex;
      justify-content: center;
      align-items: center;
      /* margin-top: 100px; */
    }

    #finalProduct .item {
      width: 100%;
      height: 100%;
      /* border: 1px solid black; */
      padding: 1rem;
      transition: all 0.5s;
      cursor: pointer;
      display: flex;
      justify-content: space-around;
      align-items: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #finalProduct .item .item_image img {
      width: 100%;
      /* height: 20rem; */
      object-fit: contain;
    }

    section .finalProduct .item .item_image,
    .item_content {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    section .finalProduct .item .item_content .title {
      font-weight: bold;
      color: black;
    }

    section .finalProduct .item .item_content p {
      margin: 0;
      font-size: 0.8rem;
      color: gray;
    }

    section .finalProduct a {
      text-decoration: none;
    }

    section #finalProduct .quantity input {
      width: 2rem;
    }

    section #finalProduct .quantity button {
      border: none;
      outline: none;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 7px;
      font-size: 1.5rem;
      border-radius: 50%;
      background-color: white;

    }


    @media (max-width: 700px) {

      section .form_container,
      .logo_container {
        width: 100%;
        height: auto;

      }
    }

    .container {
      width: 50%;
      /* border: 1px solid; */

    }

    .form_content {
      box-shadow: 1px 3px 13px rgba(0, 0, 0, 0.4);
      padding: 30px;
      border-radius: 5px;
    }

    .form_title {
      text-align: left;
      /* border: 1px solid; */
      display: flex;
      flex-direction: column;
      margin-right: 200px;


    }

    .form_content {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }


    .names {
      display: flex;
      gap: 10px;
    }

    .form-group input,
    textarea {
      resize: none;
      width: 100%;
      border: none;
      border: none;
      outline: none;
      border-bottom: 1px solid grey;
      margin: 9px auto;
      font-weight: 600;
    }

    .buttonReg {
      margin: 30px auto;
      border: none;
      outline: none;
      background-color: rgb(5, 252, 104);
      font-weight: 600;
      color: #fff;
      padding: 4px;
      border-radius: 4px;

    }

    .form-group input:focus,
    textarea:focus {
      border-bottom: 1px solid rgb(5, 252, 104);
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

    @media (max-width:700px) {
      .formStyle {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
      }

      .fitBcgImage {
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
      }

      .fitBcgImage img {
        width: 100%;

      }
    }

    a {
      text-decoration: none;
      color: #000;
    }

    .fa-brands:hover {
      color: #fff;
    }

    .removeFocus:focus {
      box-shadow: none;
    }
  </style>
</head>

<body>
  <?php
  include "connection.php";
  $email = $_SESSION["username"];
  $query = "SELECT id,name,price,Quantity,email FROM cart WHERE email='$email'";
  $insert = mysqli_query($conn, $query);
  $total = mysqli_num_rows($insert);


  $count = $total;

  ?>

  <nav class="navbar navbar-expand-sm fixed-top" style="background-color:#fff">
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
            <a class="nav-link" href="home.php">Home</a>
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
          <input class="me-2 removeFocus form-control" type="text" placeholder="Search" style="border: none;outline: none;border-bottom: 1px solid lightgrey;border-radius: 0px; ">
          <button class="btn " style="background-color: rgb(5, 252, 104);color: #fff;" type="button"> <i class="fa-solid fa-magnifying-glass fa-flip"></i></button>
        </form>

      </div>
    </div>
  </nav>

  <section>
    <div class="logo_container">
      <div class="mobileCards" style="flex-wrap: wrap; margin-top:100px;display:flex;align-items:center;justify-content:center;">

        <?php
        include("connection.php");
        if (isset($_GET["id"])) {

          $id = $_GET["id"];
          // echo $id;
          $insert = "SELECT * FROM brandtable  WHERE id=$id";
          $result = mysqli_query($conn, $insert);
          $total = mysqli_num_rows($result);
          if ($total > 0) {
            while ($product = mysqli_fetch_array($result)) {
        ?>
              <div class="card1 " style=" margin:20px 0px;">
                <div class="img">
                  <img src="<?php echo $product['imgSrc'] ?>" alt="">
                </div>
                <div class="imgContent1">
                  <h5 class="title">
                    <?php echo $product['title'] ?>
                  </h5>
                  <p>(
                    <?php echo $product['ram'] ?>)
                  </p>
                  <p>
                    <?php echo $product['battery'] ?>
                  </p>
                  <p class="oldprice">
                    <del> ₹
                      <?php echo $product['deletedPrice'] ?>
                    </del>
                  <h4>₹
                    <?php echo $product['currentPrice'] ?>
                  </h4>
                  </p>

                </div>
              </div>

          <?php
          

          ?>
      </div>
      <div class="finalProduct" id="finalProduct"></div>
    </div>
    <div class="container form_container">
      <div class="form_content">
        <div class="form_title">
          <h2>Confirm Order</h2>
          <h6 style="color: rgb(58, 198, 113)">#Free Delivery</h6>
        </div>
        <div class="form_body">
          <form autocomplete="off" method="POST" id="form1" action="#">
            <!-- first name and last name -->
            <div class="names form-group mb-0" id="names">
              <div class="form-group">
                <input type="text" name="fname" id="fname" placeholder="First Name" required />
                <!-- <span class="error"></span> -->
              </div>

              <div class="form-group ml-3">
                <input type="text" name="lname" id="lname" placeholder="Last Name" required />
                <!-- <span class="error"></span> -->
              </div>
            </div>
            <!-- email -->
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Email" required />
              <!-- <span class="error"></span> -->
            </div>
            <!-- phno -->
            <div class="form-group">
              <input type="text" name="phno" id="phno" placeholder="Phone No" required />
              <!-- <span class="error"></span> -->
            </div>
            <!-- address -->
            <div class="form-group">
              <textarea name="address" id="address" placeholder="Address.." required></textarea>
              <!-- <span class="error"></span> -->
            </div>

            <!-- pin -->
            <div class="form-group">
              <input type="text" name="pin" id="pin" placeholder="Pin" required />
              <!-- <span class="error"></span> -->
            </div>
            <div class="form-group">
              <a href="#">
                <button type="submit" class="mt-2" style="all: unset;background-color:rgb(5,252,104);padding:3px 7px;color:#fff;border-radius: 4px;" name="submit">Submit</button>
              </a>

            </div>

          </form>



         
        </div>
        <?php

                  ?>
        <?php

          if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phno = $_POST['phno'];
            $address = $_POST['address'];
            $pin = $_POST['pin'];

            // Assuming your table name is "orders"
            $insert = "INSERT INTO orders (firstName, lastName, email, phoneNo, address, pin) VALUES ('$fname', '$lname', '$email', '$phno', '$address', '$pin')";

            $query = mysqli_query($conn, $insert);
            $result = mysqli_affected_rows($conn); // Use affected_rows to check if the insertion was successful
            echo $result;
            if ($result > 0) {
              // $id = mysqli_insert_id; 
              $id = $product['id'];
              echo "<script>window.location.href='invoice.php?id=$id';</script>";
              // echo "<script>alert(' Success')</script>";
            } else {
              echo "<script>alert('Not Success')</script>";
            }
          }

        ?>



      </div>
    </div>
  <?php

}
}
        }
  ?>
  </section>

  <footer style=" background-color:  rgb(5, 252, 104);">
    <div class="container-fluid" width="100%">
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

<?php


//   $fName = $_POST['fname'];
//   $lName = $_POST['lname'];
//   $email = $_POST['email'];
//   $phone = $_POST['phno'];
//   $address = $_POST['address'];
//   $pin = $_POST['pin'];

//   if ($fName == '' || $lName == '' || $email == '' || $phone == '' || $address == '' || $pin == '') {
//     echo "<script>alert('Fill Detail Record')</script>";
//   } else {

//     $randomNumber = rand(1, 1000);


//     $insert = "INSERT INTO buy_product (fName, lName, email, phone, address, pin, order_number) 
//                    VALUES ('$fName', '$lName', '$email', '$phone', '$address', '$pin', '$randomNumber')";

//     $result = mysqli_query($conn, $insert);

//     if ($result) {
//       echo "<script>alert('Record inserted successfully with order number: $randomNumber')</script>";
//     } else {
//       echo "Error: " . mysqli_error($conn);
//     }
//   }
// }

?>

</html>