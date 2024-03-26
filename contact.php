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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap');

    .contactUS {
      width: 100%;
      display: flex;
      margin-top: 60px;

    }

    .contactUS .left_content {
      width: 50%;
      /* border: 1px solid; */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    }

    .contactUS .left_content i {
      /* border: 1px solid; */
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-color: #000;
      color: #fff;
    }

    .contactUS .left_content div {
      width: 330px;
      /* gap: 20px; */
      margin: 10px auto;
    }

    .contactUS .left_content .address,
    .contactUS .left_content .phone,
    .contactUS .left_content .email {
      display: flex;
      gap: 10px;
      justify-content: center;
      align-items: center;
    }

    .contactUS .left_content .address .addressText,
    .contactUS .left_content .phone .phoneText,
    .contactUS .left_content .email .emailText {
      display: flex;
      flex-direction: column;
      width: 300px;
      /* text-align: center; */
    }

    .contactUS .left_content .address .addressText span:first-child,
    .contactUS .left_content .phone .phoneText span:first-child,
    .contactUS .left_content .email .emailText span:first-child {
      font-weight: 500;
      color: rgb(5, 252, 104);
    }


    .contactUS .right_content {
      width: 50%;
      display: flex;
      flex-direction: column;
      height: auto;
      margin: 40px 0px;
    }

    .contactUS .right_content div {
      width: 500px;
      box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.4);
      height: auto;
      margin-bottom: 20px;
    }

    .contactUS .right_content h2 {
      margin-top: 20px;
      margin-left: 20px;
      font-weight: 500;
    }

    .contactUS .right_content form {
      display: flex;
      flex-direction: column;
      /* border: 1px solid; */
      width: 500px;
      align-items: center;
      /* gap: 20px; */
      margin: 20px auto;
    }

    .contactUS .right_content form input,
    textarea {
      width: 70%;
      margin: 10px auto;
      border: none;
      outline: none;
      border-bottom: 2px solid lightgray;
      resize: none;

    }

    .contactUS .right_content form button {
      display: flex;
      align-items: start;
      justify-content: left;
      margin: 10px auto;
      padding: 3px 9px;
      border: none;
      outline: none;
      color: #fff;
      background-color: rgb(5, 252, 104);
      border-radius: 4px;
      font-weight: 500;
    }

    @media screen and (max-width:1024px) {
      .contactUS {
        flex-direction: column;
      }

      .contactUS .left_content {
        width: 100%;
      }

      .contactUS .right_content {
        width: 100%;
        justify-content: center;
        align-items: center;
      }

    }

    /* ***************footer**************** */
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

    @media screen and (max-width:768px) {
      .contactUS .right_content div {
        width: 370px;
      }

      .contactUS .right_content form {
        width: 100%;
      }
    }

    .gradient-border {
      --border-width: 3px;

      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 90%;
      height: 500px;
      font-family: Lato, sans-serif;
      font-size: 2.5rem;
      text-transform: uppercase;
      color: white;
      /* margin: 10px auto; */
      /* background: #222; */
      border-radius: var(--border-width);

      &::after {
        position: absolute;
        content: "";
        top: calc(-1 * var(--border-width));
        left: calc(-1 * var(--border-width));
        z-index: -1;
        width: calc(100% + var(--border-width) * 2);
        height: calc(100% + var(--border-width) * 2);
        background: linear-gradient(60deg,
            hsl(224, 85%, 66%),
            hsl(269, 85%, 66%),
            hsl(314, 85%, 66%),
            hsl(359, 85%, 66%),
            hsl(44, 85%, 66%),
            hsl(89, 85%, 66%),
            hsl(134, 85%, 66%),
            hsl(179, 85%, 66%));
        background-size: 300% 300%;
        background-position: 0 50%;
        border-radius: calc(2 * var(--border-width));
        animation: moveGradient 4s alternate infinite;
      }
    }

    @keyframes moveGradient {
      50% {
        background-position: 100% 50%;
      }
    }

    .removeFocus:focus {
      box-shadow: none;
    }
  </style>
</head>

<body>
  <?php
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
            <a class="nav-link " href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#brand">Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(5, 252, 104);" href="contact.php">ContactUS</a>
          </li>
        </ul>
        <a href="ViewCart.php" name="btnCart" style="  background-color:rgb(189, 247, 214);
                                        color:rgb(50,198,113);border:none;border-radius:50%;margin-top:5px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;"><ion-icon name="cart" style="font-size:25px; display:flex; justify-content:center; align-items:center;"></ion-icon><span class="styleCount" style=" position: absolute;
      top: 12px;"><?php echo $count; ?></span> </a>
        <form action="search.php" method="POST" class="d-flex" style="margin: 0px auto; gap: 20px;">
          <input class="me-2 removeFocus form-control" name="searchBox" type="text" placeholder="Search" style="border: none; outline: none; border-bottom: 1px solid lightgrey; border-radius: 0px;">
          <button class="btn" name="btnSearch" style="background-color: rgb(5, 252, 104); color: #fff;" type="submit">
            <i class="fa-solid fa-magnifying-glass fa-flip"></i>
          </button>
        </form>

      </div>
    </div>
  </nav>


  <section class="contactUS">
    <div class="left_content">
      <div>
        <div class="address">
          <i class="fa-solid fa-location-dot "></i>
          <div class="addressText">
            <span>Address</span>
            <span>Sujanpur,Ta:Siddhpur
              Dist:Patan,State:Gujarat
            </span>
          </div>
        </div>
        <div class="phone">
          <i class="fa-solid fa-phone "></i>
          <div class="phoneText">
            <span>Phone</span>
            <span>+91 1234566775</span>
          </div>
        </div>
        <div class="email">
          <i class="fa-solid fa-envelope "></i>
          <div class="emailText">
            <span>Email</span>
            <span>abc@gmail.com</span>
          </div>
        </div>
      </div>
    </div>
    <div class="right_content">
      <div>
        <h2>Send Message</h2>
        <form action="#" autocomplete="off" method="post">
          <input type="text" name="fullName" id="fullName" placeholder="Full Name">
          <input type="email" name="email" id="email" placeholder="Email">
          <textarea name="message" cols="20" rows="3" placeholder="Type Your Message"></textarea>
          <button type="submit" name="send">Send</button>
        </form>
      </div>
    </div>
  </section>
  <div class="gradient-border" style="margin: 10px auto;display:flex;justify-content: center;">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58336.17549424731!2d72.31818026376494!3d23.96005228215702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf5fffcfd7fa1%3A0xe3200f89d8a6482d!2sMasum%20Mobile!5e0!3m2!1sen!2sin!4v1709095517443!5m2!1sen!2sin" width="100%" height="500px" style="border-radius: 5px;padding:4px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7292.013298315157!2d72.35286713863978!3d23.96020501845703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf361b4747d63%3A0x6847c32cda8dd97c!2sSujanpur%2C%20Gujarat%20384151!5e0!3m2!1sen!2sin!4v1711102840811!5m2!1sen!2sin" width="100%" height="500px" style="border-radius:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  <footer style=" background-color:  rgb(5, 252, 104);">
    <div class="container-fluid" width="100%">
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


<?php
// Include the file containing database connection details
include("connection.php");

if (isset($_POST["send"])) {
  $name = mysqli_real_escape_string($conn, $_POST["fullName"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);

  if (empty($name) || empty($email) || empty($message)) {
    echo "<script>alert('Please fill in all fields')</script>";
  } else {
    $insert = "INSERT INTO contact(name, email, message) VALUES('$name', '$email', '$message')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
      echo "Message inserted successfully";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}
?>