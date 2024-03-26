<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM brandtable WHERE id=$id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {


  ?>

      <div class="container">
        <h2>Update Product Data</h2>
        <form class="form-horizontal" action="#" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-2" for="id">Id:</label>
            <div class="col-sm-10">
              <input type="number"  class="form-control" value="<?php echo $row['id']; ?>" id="id" placeholder="" name="id">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="brandName">Brand Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['brandName']; ?>" id="brandName" placeholder="" name="brandName">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="imgSrc">Img Src:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['imgSrc']; ?>" id="imgSrc" placeholder="" name="imgSrc">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['title']; ?>" id="title" placeholder="" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="ram">Ram:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['ram']; ?>" id="ram" placeholder="" name="ram">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="battery">Battery:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['battery']; ?>" id="battery" placeholder="" name="battery">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="deletedPrice">Deleted Price:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['deletedPrice']; ?>" id="deletedPrice" placeholder="" name="deletedPrice">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="currentPrice">Current Price:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $row['currentPrice']; ?>" id="currentPrice" placeholder="" name="currentPrice">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
            </div>
          </div>
        </form>
      </div>
  <?php
    }
  }
  ?>

  <!-- update product data -->

  <?php
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $brandName = $_POST['brandName'];
    $imgSrc = $_POST['imgSrc'];
    $title = $_POST['title'];
    $ram = $_POST['ram'];
    $battery = $_POST['battery'];
    $deletedPrice = $_POST['deletedPrice'];
    $currentPrice = $_POST['currentPrice'];

    $query = "UPDATE brandtable SET brandName='$brandName',imgSrc='$imgSrc',title='$title',ram='$ram',battery='$battery',deletedPrice='$deletedPrice',currentPrice='$currentPrice' WHERE id=$id ";

    if (mysqli_query($conn, $query)) {
      echo "<script>alert('Record updated successfully.')</script>";
      echo "<script>window.location.href='adminProduct.php';</script>";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }


  ?>

</body>

</html>