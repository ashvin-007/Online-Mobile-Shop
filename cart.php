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
    body{
      overflow-x: hidden;
    }

    .container {
      width: 50%;
      height: auto;
      /* border: 1px solid; */
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      /* margin: 40px 0px; */
      /* margin-left: 500px; */
    }

    .cartButtons .cart,
    .buy {
      border: none;
      outline: none;
      padding: 4px;
      width: 150px;
      margin: 10px 5px;
      border-radius: 5px;
    }

    .cartButtons .cart {
      color: #001;
      font-weight: 500;
      background-color: rgb(5, 252, 104);
    }

    .cartButtons .buy {
      font-weight: 500;
      color: #fff;
      background-color: red;
    }

    .colorAndStorage {
      margin: 10px;
      display: flex;


    }

    .colorAndStorage .colorContainer {
      width: 20px;
      height: 20px;
      border: 1px solid rgb(5, 252, 104);
      content: "hello";
      padding: 5px 14px;
      margin: 0px 50px;
      border-radius: 3px;
      background-color: rgb(5, 252, 104);
    }

    .colorAndStorage .storageContainer {
      width: 50px;
      height: 17px;
      padding: 5px 29px;
      border: 1px solid;
      margin: 0px 50px;
      border-radius: 3px;
      border-color: rgb(5, 252, 104);
    }

    span {
      font-weight: 500;
    }

    .ram,
    .sim {
      margin: 10px 10px;

    }

    .ram .ramContainer {
      width: 20px;
      height: 20px;
      padding: 5px 6px;
      border: 1px solid;
      margin: 0px 54px;
      border-radius: 3px;
      border-color: rgb(5, 252, 104);
    }

    .about,
    .order {
      margin: 0px 10px;
      display: flex;

    }

    .about {
      margin-top: 10px;
    }

    .about li,
    .order li {
      margin: 0px 54px;
      font-weight: 500;
    }

    .simType {
      margin: 0px 26px;
    }

    .storage,
    .weightContainer,
    .osContainer,
    .refreshRange,
    .batteryContainer,
    .cameraDetails,
    .screenDetails {
      margin: 10px 10px;

    }

    .storage .memory,
    .weightContainer .weight {
      margin: 0px 40px;
    }

    .osContainer .os {
      margin: 0px 75px;

    }

    .refreshRange .refresh {
      margin: 0px 50px;
    }

    .batteryContainer .Battery,
    .cameraDetails .camera {
      margin: 0px 45px;
    }

    .screenDetails .screenSize {
      margin: 0px 74px;
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
    .removeFocus:focus{
      box-shadow: none;
    }
  </style>

</head>

<body>
  <?php
  // session_start();
  include("connection.php");

  // Start the session

  // Initialize the count variable
  $email = $_SESSION["username"];
  $query="SELECT id,name,price,Quantity,email FROM cart WHERE email='$email'";
  $insert=mysqli_query($conn,$query);
  $total=mysqli_num_rows($insert);


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
            <a class="nav-link" href="home.php#brand">Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">ContactUS</a>
          </li>
        </ul>



        <!-- <p>cart=<?php echo $count; ?></p> -->


        <!-- <a href="ViewCart.php"><button name="add" onclick="addCart()">add(<?php echo $count; ?>)</button></a> -->
        <a href="ViewCart.php" name="btnCart"
                    style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;"><ion-icon
                      name="cart"
                      style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon><span class="styleCount" style=" position: absolute;
      top: 12px;"><?php echo $count; ?></span></a>
        <form class="d-flex " style="margin: 0px auto;gap: 20px;">
          <input class="me-2 removeFocus form-control" type="text" placeholder="Search" style="border: none;outline: none;border-bottom: 1px solid lightgrey;border-radius: 0px; ">
          <button class="btn " style="background-color: rgb(5, 252, 104);color: #fff;" type="button"> <i class="fa-solid fa-magnifying-glass fa-flip"></i></button>
        </form>

      </div>
    </div>
  </nav>

  <div class="mobileCards" style="flex-wrap: wrap; margin-top:100px;">

    <?php
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
              <!-- <button type="button" onclick="decrementQuantity()" style="outline:none; border:none;">-</button>
<input type="number" id="quantity" name="quantity" min="1" max="10" value="1" >
<button type="button" onclick="incrementQuantity()" style="outline:none; border:none;">+</button> -->


  
                 </div>
          </div>

    <?php
        }
      }
    }
    ?>
  </div>
  <div class="container">
    <?php

    
    $insert = "SELECT * FROM brandtable WHERE id=$id";
    $result = mysqli_query($conn, $insert);
    $total = mysqli_num_rows($result);
    if ($total > 0) {
      while ($product = mysqli_fetch_array($result)) {
    ?>
        <div class="cartButtons">
          <form action="InsertCart.php" method="POST">
          <button type="button" onclick="decrementQuantity()" style="outline:none; border:none;">-</button>
<input type="number" id="quantity" name="quantity" min="1" max="10" value="1" >
<button type="button" onclick="incrementQuantity()" style="outline:none; border:none;">+</button>
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <input type="hidden" name="title" value="<?php echo $product['title']; ?>">
            <input type="hidden" name="currentPrice" value="<?php echo $product['currentPrice']; ?>">
            <!-- <input type="hidden" name="email" value="<?php echo $product['email']; ?>"> -->
            <button class="cart" name="add_to_cart">Add To Cart</button>
        <?php
      }
    }
        ?>
          </form>
          <!-- <button class="buy" name="btnBuy" onclick="buyfunction(<?php echo $id; ?>)">Buy Now</button>
        </div> -->
        <?php
        if (isset($_GET['id'])) {

          //  echo ''.$_GET['id'];
          $id = $_GET['id'];
          $insert = "select * from product_detail where id=$id";
          $result = mysqli_query($conn, $insert);
          while ($row = mysqli_fetch_array($result)) {
        ?>

            <div class="colorAndStorage">

              <!-- <div><span>Color <span class="colorContainer"></span> </span></div> -->

              <div><span>Storage </span><span class="storageContainer"><?php echo $row['storage'] ?></span> </div>

            </div>
            <div class="ram"><span>Ram</span> <span class="ramContainer"><?php echo $row['ram'] ?></span></div>

            <div class="about"><span>About</span>
              <li><?php echo $row['about'] ?></li>
            </div>

            <div class="order"><span>Order</span>
              <li> <?php echo $row['orders'] ?></li>
            </div>

            <div class="sim"><span>SIM Type</span> <span class="simType"><?php echo $row['sim'] ?></span></div>

            <div class="storage"><span>Expandable <br />Storage</span><span class="memory"><?php echo $row['eStorage'] ?></span></div>

            <div class="weightContainer"><span>Weight</span> <span class="weight"><?php echo $row['weight'] ?></span> </div>

            <div class="osContainer"><span>OS</span><span class="os"><?php echo $row['os'] ?></span></div>

            <div class="refreshRange"><span>Refresh <br /> Range</span><span class="refresh"><?php echo $row['refreshRage'] ?></span></div>

            <div class="batteryContainer"><span>Battery</span><span class="Battery" width="100px;"><?php echo $row['battery'] ?></span></div>

            <div class="cameraDetails"><span>Camera</span><span class="camera"><?php echo $row['camera'] ?></span></div>

            <div class="screenDetails"><span>Screen <br> Size</span><span class="screenSize"><?php echo $row['screenSize'] ?></span></div>





        <?php

          }
        }
        ?>
  </div>




  <footer style=" background-color:  rgb(5, 252, 104);width:100vw;margin-left:-350px;">
    <div class="container-fluid" style="width:100%;">
      <div class="row" style="margin: 0px auto;">
        <div class="col-sm-4 d-flex text-center" style=" flex-direction: column;justify-content: center;gap: 10px; margin: 10px auto; ">
          <h4>Menu</h4>

          <li><a href="home.php">Home</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="home.php#brand">Brand</a></li>
          <li><a href="contact.php">Contact US</a></li>
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
          <h3>Follow Us On </h3>
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




  <script>

function incrementQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentValue = parseInt(quantityInput.value);
    var maxValue = parseInt(quantityInput.getAttribute('max'));
    if (currentValue < maxValue) {
      quantityInput.value = currentValue + 1;
    }
  }

  function decrementQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentValue = parseInt(quantityInput.value);
    var minValue = parseInt(quantityInput.getAttribute('min'));
    if (currentValue > minValue) {
      quantityInput.value = currentValue - 1;
    }
  }
    function buyfunction(product_id) {
      window.location.href = "buy.php?id=" + product_id;

      // function addToCart(){
      // window.location.href = "ViewCart.php";

      // }
    }
  </script>


</body>

</html>