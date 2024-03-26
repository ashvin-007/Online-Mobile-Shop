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
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query = "SELECT * FROM product_detail WHERE product_id=$id";
        $result = mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result))
        {
    
?>

<div class="container">
  <h2>Update Specification Data Form</h2>
  <form class="form-horizontal" action="#" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2"  for="id">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $row['product_id'] ?>" id="id" placeholder="" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"  for="storage">Storage:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $row['storage'] ?>" id="storage" placeholder="" name="storage">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="ram">Ram:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['ram'] ?>" id="ram" placeholder="" name="ram">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="about">About:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['about'] ?>" id="about" placeholder="" name="about">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="orders">Orders:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['orders'] ?>" id="orders" placeholder="" name="orders">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="sim">Sim:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['sim'] ?>" id="sim" placeholder="" name="sim">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="eStorage">E_Storage:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['eStorage'] ?>" id="eStorage" placeholder="" name="eStorage">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="weight">Weight:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['weight'] ?>" id="weight" placeholder="" name="weight">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="os">Os:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['os'] ?>" id="os" placeholder="" name="os">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="refreshRange">RefreshRange:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['refreshRage'] ?>" id="refreshRange" placeholder="" name="refreshRange">
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="battery">Battery:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="battery" value="<?php echo $row['battery'] ?>" placeholder="" name="battery">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="camera">Camera:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="camera" value="<?php echo $row['camera'] ?>" placeholder="" name="camera">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="screenSize">Screen Size:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="screenSize" value="<?php echo $row['screenSize'] ?>" placeholder="" name="screenSize">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="productId">Product_Id:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="productId" value="<?php echo $row['id'] ?>" placeholder="" name="productId">
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

<!-- update data -->



<?php
// Assuming you have already established a database connection

if(isset($_POST['update'])) {
    $id = $_POST['id']; // Assuming 'id' is the primary key of your table
    $storage = $_POST['storage'];
    $ram = $_POST['ram'];
    $about = $_POST['about'];
    $orders = $_POST['orders'];
    $sim = $_POST['sim'];
    $eStorage = $_POST['eStorage'];
    $weight = $_POST['weight'];
    $os = $_POST['os'];
    $refreshRange = $_POST['refreshRange'];
    $battery = $_POST['battery'];
    $camera = $_POST['camera'];
    $screenSize = $_POST['screenSize'];
    $productId = $_POST['productId'];

    // Perform the update query
    $sql = "UPDATE product_detail SET 
            storage = '$storage',
            ram = '$ram',
            about = '$about',
            orders = '$orders',
            sim = '$sim',
            eStorage = '$eStorage',
            weight = '$weight',
            os = '$os',
            refreshRage = '$refreshRange',
            battery = '$battery',
            camera = '$camera',
            screenSize = '$screenSize',
            id = '$productId' 
            WHERE product_id = $id";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record updated successfully.')</script>";
        echo "<script>window.location.href='adminSpecification.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>






</body>
</html>
