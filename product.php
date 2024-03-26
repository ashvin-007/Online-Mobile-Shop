<?php
session_start();
include("connection.php");

$userprofile = $_SESSION["username"];
if ($userprofile == false) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

    /* @media (max-width:700px) {
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
    } */

    a {
      text-decoration: none;
      color: #000;
    }

    .fa-brands:hover {
      color: #fff;
    }



    
    .products {

      width: 100%;
      height: auto;
      display: flex;
      font-family: 'Poppins', sans-serif;
      margin-top: 80px;
      /* overflow-x: hidden ; */
    }

    .products .left_content {
      margin: 15px 0px 0px 20px;
      border: 1px solid lightgrey;
      /* height:auto; */
      /* position: fixed;
      top: 30px;
      left: 30px; */
      width: 40vh;
      height: 1200px;
    }

    .products .left_content h2 {
      padding: 10px 15px;
      font-weight: 500;
    }

    hr {
      width: 90%;
      margin: 10px auto;
    }

    .products .left_content .brandText {
      padding: 10px 15px;
      font-weight: 500;
      /* margin: 10px 0px; */

    }

    .checkBoxesFilters {
      /* border: 1px solid; */
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 10px 15px;
    }



    .right_content {
      width: 100%;
      margin-top: 30px;
    }

    .mobileCards {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-evenly;
      /* height: 100vh; */
      height: auto;
      gap: 10px;
      margin-bottom: 25px;
      /* border: 1px solid; */

      /* ***************change space evenly****** */
    }

    .mobileCards .card1 {
      height: 600px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-top: 40px;
      flex-wrap: wrap;
      /* border: 1px solid; */
      /* border: 1px solid; */
    }

    .mobileCards .imgContent1 p,
    h4,
    h5,
    del {
      margin-bottom: 4px;
    }

    .mobileCards .card1 img {
      width: 251px;
      height: 230px;
      /* border: 1px solid; */
      margin-bottom: 20px;
    }

    .mobileCards .card1:hover {
      box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.2);
    }

    .btnFilter {
      background-color: rgb(5, 252, 104);
      color: #fff;
      border: none;
      outline: none;
      border-radius: 4px;

    }

   
   

    /* Existing styles */

/* Add the following media query for smaller screens */
@media (max-width: 767px) {
  .navbar {
    padding: 10px; /* Adjust padding for smaller screens */
  }
  

  /* Stack elements vertically on smaller screens */
  /* .container-fluid.classMarginLeft {
    flex-direction: column; 
  } */

   /* Move the toggle button to the top for better mobile navigation */
 /* .navbar-toggler {
    order: -1;        
  } */

  .ulStyle {
    flex-direction: column;
    text-align: center; /* Center-align navigation links on smaller screens */
  }

  .formStyle {
    flex-direction: column;
    align-items: center;
  }

  .fitBcgImage {
    width: 100%; /* Make the background image full width on smaller screens */
  }

  .products .left_content {
    width: 100%; /* Make the filter section full width on smaller screens */
    margin: 10px 0;
  }

  .checkBoxesFilters {
    padding: 10px; /* Adjust padding for smaller screens */
  }

  .right_content {
    margin-top: 10px;
  }

  .mobileCards .card1 {
    width: 100%; /* Make the cards full width on smaller screens */
    margin-top: 20px;
  }
  footer {
      text-align: center;
      padding: 10px;
      background-color: rgb(5, 252, 104);
      margin-right: 0;
      /* display: flex; */
    }

    footer .container-fluid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      /* flex-direction: row; */
    }

    footer .row {
      width: 100%;
      /* display: flex; */
      /* flex-direction: column;
      align-items: center;
      justify-content: center; */
    }

    footer .col-sm-4 {
      /* flex: 0 0 100%; */
      margin-bottom: 20px;
    }

    @media (max-width: 767px) {
      footer .container-fluid {
        text-align: center;
      }

      footer .col-sm-4 {
        flex: 0 0 100%;
        margin-bottom: 20px;
      }
    }
 

}
.removeFocus:focus{
  box-shadow: none;
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
<nav class="navbar navbar-expand-sm fixed-top" style="background-color:#fff">
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
          <a class="nav-link " href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:rgb(5, 252, 104); " href="product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#brand">Brand</a>
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
  <div class="products">
    <div class="left_content">
      <h2>Filters</h2>
      <hr>
      <span style="color: rgb(50, 198, 113);" class="brandText">Brand</span>
      <form method="post">
        <div class="checkBoxesFilters" id="checkBoxesFilters">
          <span><input type="checkbox" name="brands[]" value="samsung" <?php echo (isset($_POST['brands']) && in_array('samsung', $_POST['brands'])) ? 'checked' : ''; ?>> Samsung</span>
          <span><input type="checkbox" name="brands[]" value="mi" <?php echo (isset($_POST['brands']) && in_array('mi', $_POST['brands'])) ? 'checked' : ''; ?>> Mi</span>
          <span><input type="checkbox" name="brands[]" value="vivo" <?php echo (isset($_POST['brands']) && in_array('vivo', $_POST['brands'])) ? 'checked' : ''; ?>> Vivo</span>
          <span><input type="checkbox" name="brands[]" value="Apple" <?php echo (isset($_POST['brands']) && in_array('Apple', $_POST['brands'])) ? 'checked' : ''; ?>> Apple</span>
          <span><input type="checkbox" name="brands[]" value="RealMe" <?php echo (isset($_POST['brands']) && in_array('RealMe', $_POST['brands'])) ? 'checked' : ''; ?>> RealMe</span>
          <span><input type="checkbox" name="brands[]" value="OnePlus" <?php echo (isset($_POST['brands']) && in_array('OnePlus', $_POST['brands'])) ? 'checked' : ''; ?>> OnePlus</span>
          <span><input type="checkbox" name="brands[]" value="Oppo" <?php echo (isset($_POST['brands']) && in_array('Oppo', $_POST['brands'])) ? 'checked' : ''; ?>> Oppo</span>
          <button type="submit" class="btnFilter">Apply Filters</button>
        </div>
      </form>
    </div>
    <div class="right_content">
      <div class="mobileCards">
        <?php


        if (isset($_GET['price_id'])) {
          $price_id = $_GET['price_id'];

          $detailsQuery = "SELECT * FROM brandtable WHERE price_id = $price_id";
          $detailsResult = mysqli_query($conn, $detailsQuery);
          $total = mysqli_num_rows($detailsResult);
          if ($total > 0) {

            while ($detailsRow = mysqli_fetch_assoc($detailsResult)) {
              ?>
              <div class="card1" onclick="redirectToCart(<?php echo $detailsRow['id']?>)">
                <div class="img">
                  <img src="<?php echo $detailsRow["imgSrc"] ?>" alt="">
                </div>
                <div class="imgContent1">
                  <h5 class="title">
                    <?php echo $detailsRow["title"] ?>
                  </h5>
                  <p>
                    <?php echo $detailsRow["ram"] ?>
                  </p>
                  <p>
                    <?php echo $detailsRow["battery"] ?>
                  </p>
                  <p class="oldprice">
                    <del> ₹
                      <?php echo $detailsRow["deletedPrice"] ?>
                    </del>
                  <h4>₹
                    <?php echo $detailsRow["currentPrice"] ?>
                  </h4>
                  </p>
                  

                </div>
              </div>
              <?php
            }
          } else {
            echo "This range Product Not Found";
          }
         
        } else {



          $filteredBrands = isset($_POST['brands']) ? $_POST['brands'] : array();


          if (!empty($filteredBrands)) {
           
            foreach ($filteredBrands as $brand) {
              $query = "SELECT * FROM brandtable  WHERE brandName='$brand'";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($result)) {
               
                ?>
                <div class="card1" onclick="redirectToCart(<?php echo $row['id']?>)">
                  <div class="img">
                    <img src="<?php echo $row["imgSrc"] ?>" alt="">
                  </div>
                  <div class="imgContent1">
                    <h5 class="title">
                      <?php echo $row["title"] ?>
                    </h5>
                    <p>
                      <?php echo $row["ram"] ?>
                    </p>
                    <p>
                      <?php echo $row["battery"] ?>
                    </p>
                    <p class="oldprice">
                      <del> ₹
                        <?php echo $row["deletedPrice"] ?>
                      </del>
                    <h4>₹
                      <?php echo $row["currentPrice"] ?>
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
                      <!-- <button class="likeBtn"><ion-icon name="heart-outline"></ion-icon></button> -->
                      <button class="cartBtn"
                        style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:50px;height:30px;"><ion-icon
                          name="cart" style="font-size:30px;"></ion-icon></button>
                    </div>

                  </div>
                </div>
                <?php
              }
            }
            // echo '</ul>';
          } else {
            ?>

            <?php

            $query = "SELECT * FROM brandtable ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="card1" style="" onclick="redirectToCart(<?php echo $row['id']?>)">
                <div class="img">
                  <img src="<?php echo $row["imgSrc"] ?>" alt="">
                </div>
                <div class="imgContent1">
                  <h5 class="title">
                    <?php echo $row["title"] ?>
                  </h5>
                  <p>
                    <?php echo $row["ram"] ?>
                  </p>
                  <p>
                    <?php echo $row["battery"] ?>
                  </p>
                  <p class="oldprice">
                    <del> ₹
                      <?php echo $row["deletedPrice"] ?>
                    </del>
                  <h4>₹
                    <?php echo $row["currentPrice"] ?>
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
                                    <a href="cart.php?id=<?php echo $row['id']?>" name="btnCart" style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:30px;height:30px;"><ion-icon name="cart" style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon></a>
                                    </div>
                </div>

              </div>
              <?php

            }
          }

        }
        ?>


      </div>
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
  function redirectToCart(id){
    window.location.href=("cart.php?id="+id)
  }
  </script>
</html>