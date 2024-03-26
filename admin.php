<?php
   include "connection.php";
   session_start();

   if($_SESSION["username"]==NULL){
    header('location:adminLogin.php');

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap');

    /* * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    } */

    .container {
      width: 80%;

      /* border: 1px solid grey; */
      margin: 30px auto;
      margin-left: 240px;
    }

    .container h4 {
      margin: 10px;
    }

    .row {
      margin: 20px auto;
      display: flex;
      justify-content: space-around;
      gap: 10px;
    }

    .col {
      display: flex;
      flex-direction: column;
      /* height: 160px; */
      color: #fff;
      gap: 30px;
      border-radius: 5px;
    }

    .col .data {
      display: flex;
      justify-content: space-between;
      /* margin: 0px auto; */
      padding: 4px 7px;
    }

    .col .data .in-data {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .col:first-child {
      background-color: #007bff;

    }

    .col:nth-child(2) {
      background-color: #ffc107;
    }

    .col:last-child {
      background-color: #dc3545;
      display: flex;
      gap: 36px;
    }

    .moreInfo {
      /* border: 1px solid; */
      /* text-align: center; */
      display: flex;
      width: 100%;
      gap: 10px;
      justify-content: center;
      align-items: center;
      margin: 0px;
      background-color: rgba(0, 0, 0, .1);
    }

    .incSizeIcon {
      font-size: 80px;
      color: #000;
      opacity: 0.3;
    }

    .incSizeIcon:hover {
      transform: scale(1.1, 1.1);
    }
a{
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
    .arrowIcon {
      margin-top: 10px;
      
      font-size: 25px;
      cursor: pointer;
      /* border: 1px solid; */
      /* line-height: 15px; */
      

    }
  </style>
</head>

<body>


  <div class="container">
    <?php
    include "adminNavbar.php";
  
    ?>
    <h4>Dashboard</h4>
    <div class="row">
      <div class="col">
        <div class="data">
          <div class="in-data">
          <?php
           $query = "SELECT * FROM orders";
           $result = mysqli_query($conn,$query);
           $total = mysqli_num_rows($result);
           $count = $total;
          ?>
            <h3><?php echo  $count; ?></h3>
            <span>New Orders</span>
          </div>
          <div>
            <ion-icon class="incSizeIcon" name="bag-handle-outline"></ion-icon>

          </div>
        </div>
        <div class="moreInfo">
          <a href="adminOrders.php">
          <span>More Info </span>
          <span class="arrowIcon"><ion-icon name="arrow-forward-circle-outline"></ion-icon></span>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="data">
          <div class="in-data">
          <?php
            $query="SELECT * FROM usertable";
            $result=mysqli_query($conn,$query);
            $total=mysqli_num_rows($result);
            $count=$total;
          ?>
             <h3><?php echo $count; ?></h3>
           
            <span>User Registrations</span>
          </div>
          <div>
            <ion-icon class="incSizeIcon" name="person-add-outline"></ion-icon>

          </div>
        </div>
        <div class="moreInfo">
          <a href="adminUser.php">
            <span>More Info </span>
            <span class="arrowIcon"><ion-icon name="arrow-forward-circle-outline"></ion-icon></span>
            </a>
        </div>
      </div>
      <div class="col">
        <div class="data">
          <div class="in-data">
          <?php
            $query="SELECT * FROM contact";
            $result=mysqli_query($conn,$query);
            $total=mysqli_num_rows($result);
            $count=$total;
          ?>
             <h3><?php echo $count; ?></h3>
            <span>Comments</span>
          </div>
          <div>
            <i class="fa-regular fa-comment incSizeIcon"></i>

          </div>
        </div>
        <div class="moreInfo">
          <a href="adminContact.php">
          <span>More Info </span>
          <span class="arrowIcon"><ion-icon name="arrow-forward-circle-outline"></ion-icon></span>
          </a>
        </div>
      </div>

    </div>
  </div>


</body>

</html>