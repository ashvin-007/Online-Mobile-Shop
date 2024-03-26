<?php
include("connection.php");

session_start();



$userprofile = $_SESSION["username"];
if ($userprofile == false) {
  header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mobile Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <style>
    a{
      text-decoration: none;
      color: #000;
    }li{
      list-style-type: none;

    }
  </style>


 

</head>

<body>
<?php
   $email = $_SESSION["username"];
   $query="SELECT id,name,price,Quantity,email FROM cart WHERE email='$email'";
   $insert=mysqli_query($conn,$query);
   $total=mysqli_num_rows($insert);
 
 
     $count = $total;
 
?>
  <nav class="navbar navbar-expand-sm fixed-top text-text-center" style="background-color:#fff;">
    <div class="container-fluid classMarginLeft "
      style="display: flex; align-items: center; justify-content: space-between;  ">
      <a class="navbar-brand"
        style="display: flex;align-items: center; justify-content: center; gap: 10px; width: 20%; padding-left: 50px;"
        href="javascript:void(0)">
        <img src="images/logo1.jpg" width="30" alt="LOGO">
        <span style="font-size: 30px;"><span class="colorSpan" style="color: rgb(5, 252, 104);">DB</span>Store</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar" style="width: 80%;">
        <ul class="navbar-nav me-auto text-center ulStyle" style="margin: 0px auto;gap: 30px; display: flex;">
          <li class="nav-item">
            <a class="nav-link " style="color:rgb(5, 252, 104); " href="#">Home</a>
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
        
        <a href="ViewCart.php" name="btnCart"
                    style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;"><ion-icon
                      name="cart"
                      style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon><span class="styleCount" style=" position: absolute;
      top: 12px;"><?php echo $count; ?></span> </a>
        
                      <form action="search.php" method="POST" class="d-flex" style="margin: 0px auto; gap: 20px;">
    <input class="me-2 removeFocus form-control" name="searchBox" type="text" placeholder="Search"
        style="border: none; outline: none; border-bottom: 1px solid lightgrey; border-radius: 0px;">
    <button class="btn" name="btnSearch" style="background-color: rgb(5, 252, 104); color: #fff;" type="submit">
        <i class="fa-solid fa-magnifying-glass fa-flip"></i>
    </button>
</form>


      </div>
    </div>
  </nav>

  <div class="container-fluid mt-3 fitBcgImage"
    style="background-image: url('images/samsung2.jpeg');
height: 80vh; background-size: cover; border-radius: 20px; margin: 10px auto;width: 90%;display: flex;justify-content: center; flex-direction: column;">


    <h2>Order Your Dream</h2>
    <h2>Smart Phone</h2>
    <h5 style="color: rgb(5, 252, 104);">#Free Delivery</h5>


  </div>


  <!--****************************** our latest produt *************************-->
 
  <form action="#" method="post" >
    <section class="ourProducts">
      <div class="flexContent">
        <p>Our Latest Products</p>
        <a href="product.php" style="color:black;font-weight:600;">View All</a>
      </div>

      <div class="mobileCards" style="flex-wrap: wrap;" name="mobileDiv"
       >
        <?php

        $insert = "SELECT * FROM brandtable  WHERE id<=6 ORDER BY id ASC";
        $result = mysqli_query($conn, $insert);
        $total = mysqli_num_rows($result);
        if ($total > 0) {
          while ($product = mysqli_fetch_array($result)) {
            ?>
            <div class="card1 " onclick="redirectToCart(<?php echo $product['id']; ?>)">
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
                <div class="likeAndCartButton" style="width:1.87rem;
                                        height:1.87rem;
                                        outline:none;
                                        border:none;
                                        padding:0.4rem;
                                        border-radius:50%;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;">
                
                  <a href="cart.php?id=<?php echo $product['id'] ?>" name="btnCart"
                    style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:30px;height:30px;"><ion-icon
                      name="cart"
                      style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon></a>
                </div>
              </div>
            </div>

            <?php
          }
        }
        ?>
      </div>



    </section>
  </form>
  <!-- ***************************brand product*********************** -->
  <p class="brandTitle" id="brand" style="width:90%;">Shop By Brand</p>
  <div class="container mt-5" style="text-align: center;gap: 20px;">

    <div class="row brand-row">
      <?php
      $insert = "SELECT * FROM brand_product ORDER BY brand_id ASC";
      $result = mysqli_query($conn, $insert);
      $total = mysqli_num_rows($result);
      if ($total > 0) {
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="col-sm-4 brand-img">
            <a href="#"><img src="<?php echo $row['brand_image'] ?>" alt="1"></a>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>




  <p class="priceTitle">Shop By Price</p>
  <div class="container mt-5" style="text-align: center;gap:20px;">

    <div class="row">

      <?php
      $insert = "SELECT * FROM price_product ORDER BY price_id ASC";
      $result = mysqli_query($conn, $insert);
      $total = mysqli_num_rows($result);
      if ($total > 0) {
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="col-sm-4  shopebyprice w-10" style=" margin-bottom:20px; padding-bottom:20px;" name="shopByPrice">
            <a href="product.php?price_id=<?php echo $row['price_id'] ?>" name="price_id"><img
                src="<?php echo $row['price_image'] ?>" alt="1" width="250px"></a>
          </div>
          <?php
        }
      }
      ?>

    </div>
  </div>




  <footer style=" background-color:  rgb(5, 252, 104);width:100vw;margin:0px auto;">
    <div class="container-fluid">
      <div class="row" style="margin: 0px auto;">
        <div class="col-sm-4 d-flex text-center"
          style=" flex-direction: column;justify-content: center;gap: 10px; margin: 10px auto; ">
          <h4>Menu</h4>
          <li><a href="home.php">Home</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="home.php#brand">Brand</a></li>
          <li><a href="contact.php">Contact US</a></li>
        </div>

        <div class="col-sm-4 d-flex"
          style="flex-direction: column;justify-content: center;align-items: center;gap: 10px;margin: 10px auto;">
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
<script>
  function redirectToCart(id) {
    window.location.href = "cart.php?id=" + id;
  }
  const searchButton = () =>{
    // window.location.href = "search.php";
  }
</script>

</html>