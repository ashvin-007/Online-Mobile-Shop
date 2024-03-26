
<?php
include "connection.php";
session_start();
if ($_SESSION["username"] == NULL) {
    header('location:adminLogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>

</head>

<body>




  <div class="container" style="width: 70%;">
    <div style="margin: 44px auto;width:100%; display: flex;justify-content: end;gap: 10px;">
    <form action="#" method="post">
      <input type="text" name="searchBox" id="" placeholder="Enter Name For Search" style="all: unset;border-bottom: 1px solid #000;">
      <button class="btn" name="btnSearch" style="background-color: rgb(5, 252, 104); color: #fff;" type="submit">
        <i class="fa-solid fa-magnifying-glass fa-flip"></i>
      </button>
    </form>
    </div>
    <?php

use Stripe\Terminal\Location;

    include "adminNavbar.php";


    

    ?>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">

          <thead>
            <tr>

              <!-- <th scope="col">ID</th> -->

              <th scope="col">Id</th>
              <th scope="col">BrandName</th>
              <th scope="col">ImgSrc</th>
              <th scope="col">Title</th>
              <th scope="col">Ram</th>
              <th scope="col">Battery</th>
              <th scope="col">DeletedPrice</th>
              <th scope="col">CurrentPrice</th>

              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(isset($_POST['btnSearch'])){
                $searchBox=$_POST['searchBox'];
                $query = "SELECT * FROM  brandtable WHERE brandName LIKE '$searchBox%' ";
                $result = mysqli_query($conn, $query);

                $total = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <?php
                    // session_start();
                    //  $_SESSION['id'] = $row["id"];
    
                    ?>
                    <td><?php echo $row["brandName"]; ?></td>
                    <td><?php echo $row["imgSrc"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["ram"]; ?></td>
                    <td><?php echo $row["battery"]; ?></td>
                    <td><?php echo $row["deletedPrice"]; ?></td>
                    <td><?php echo $row["currentPrice"]; ?></td>
    
                    <td>
                     
                      <a href="userProductUpdate.php?id=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" name="update">
                          <i class="fas fa-edit"></i>
                        </button>
                      </a>
    
    
    
                      <a href="userDelete.php?id=<?php echo $row['id'] ?>"> <button type="button" class="btn btn-danger" name="btnDelete"><i class="far fa-trash-alt"></i></button></a>
                    </td>
                  </tr>
    
                <?php
                }

              }             
              else
              {
            $query = "select * from brandtable";
            $result = mysqli_query($conn, $query);
        
            $total = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row["id"]; ?></td>
                <?php
                // session_start();
                //  $_SESSION['id'] = $row["id"];

                ?>
                <td><?php echo $row["brandName"]; ?></td>
                <td><?php echo $row["imgSrc"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["ram"]; ?></td>
                <td><?php echo $row["battery"]; ?></td>
                <td><?php echo $row["deletedPrice"]; ?></td>
                <td><?php echo $row["currentPrice"]; ?></td>

                <td>
                 
                  <a href="userProductUpdate.php?id=<?php echo $row['id'] ?>">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" name="update">
                      <i class="fas fa-edit"></i>
                    </button>
                  </a>



                  <a href="userDelete.php?id=<?php echo $row['id'] ?>"> <button type="button" class="btn btn-danger" name="btnDelete"><i class="far fa-trash-alt"></i></button></a>
                </td>
              </tr>

            <?php
            }
          }
            ?>
            <!-- The Update Modal start -->

          

            <!-- The Update Modal end-->

          </tbody>

        </table>
        <a href="#" class="mb-3"> <button type="button" class="btn btn-primary mb-3" style="position: absolute;right:20px;" data-bs-toggle="modal" data-bs-target="#myModal">
            <ion-icon name="add-outline" style="font-size: 20px;"></ion-icon>
          </button></a>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Product Insert Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form action="#" onsubmit="submitForm();" method="post"  enctype="multipart/form-data">
                  <!-- <div class="mb-3 mt-3">
                    <label for="id">Id:</label>
                    <input type="number" class="form-control" id="id" name="id">
                  </div> -->
                  <div class="d-flex" style="gap: 10px;justify-content: space-between;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="brandName">Brand Name:</label>
                      <input type="text" class="form-control" id="brandName" name="brandName" required>
                    </div>
                    <div class="mb-3" style="width: 45%;">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="imgSrc">Image Src:</label>
                    <input type="file" class="form-control" id="imgSrc" name="imgSrc" required>
                  </div>

                  <div class="d-flex" style="justify-content: space-between;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="ram">Ram:</label>
                      <input type="text" class="form-control" id="ram" name="ram" required>
                    </div>
                    <div class="mb-3">
                      <label for="battery" style="width: 45%;">Battery:</label>
                      <input type="text" class="form-control" id="battery" name="battery" required>
                    </div>
                  </div>
                  <div class="d-flex" style="justify-content: space-between;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="deletedPrice">Deleted Price:</label>
                      <input type="text" class="form-control" id="deletedPrice" name="deletedPrice" required>
                    </div>
                    <div class="mb-3" style="width: 45%;">
                      <label for="currentPrice">Current Price:</label>
                      <input type="text" class="form-control" id="currentPrice" name="currentPrice" required>
                    </div>

                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="insert">Insert</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>

              <?php
            
             if (isset($_POST['insert'])) {
                 // Debugging: Check the contents of the $_FILES array
                 var_dump($_FILES);
             
                 // Retrieve form data
                 $brandName = $_POST['brandName'];
                 $title = $_POST['title'];
                 $ram = $_POST['ram'];
                 $battery = $_POST['battery'];
                 $deletedPrice = $_POST['deletedPrice'];
                 $currentPrice = $_POST['currentPrice'];
             
                 // Check if imgSrc index exists in $_FILES array
                 if (isset($_FILES["imgSrc"])) {
                     $imgSrc = $_FILES["imgSrc"]["name"];
                     $temp_name = $_FILES["imgSrc"]["tmp_name"];
                     $folder = "uploads/" . $imgSrc; // Specify the directory where you want to store uploaded images
             
                     // Check if file was successfully uploaded
                     if (move_uploaded_file($temp_name, $folder)) {
                         // Insert data into the database
                         $query = "INSERT INTO brandtable (brandName, imgSrc, title, ram, battery, deletedPrice, currentPrice) VALUES ('$brandName', ' $folder', '$title', '$ram', '$battery', '$deletedPrice', '$currentPrice')";
                         $result = mysqli_query($conn, $query);
             
                         if ($result) {
                             echo "<script>alert('Success');</script>";
                             header("location:adminProduct.php");
                         } else {
                             echo "Error: " . mysqli_error($conn);
                         }
                     } else {
                         echo "Error uploading file.";
                     }
                 } else {
                     echo "Image file not found in form data.";
                 }
             }
             
             
               
              ?>

              <!-- Modal footer -->


            </div>
          </div>
        </div>





      </div>
    </div>
  </div>
</body>
<script>
  const html = document.documentElement;
  const body = document.body;
  const menuLinks = document.querySelectorAll(".admin-menu a");
  const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
  const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
  const switchInput = document.querySelector(".switch input");
  const switchLabel = document.querySelector(".switch label");
  const switchLabelText = switchLabel.querySelector("span:last-child");
  const collapsedClass = "collapsed";
  const lightModeClass = "light-mode";

  const submitForm = (e) =>{
      e.preventDefault();
  }

  /*TOGGLE HEADER STATE*/
  collapseBtn.addEventListener("click", function() {
    body.classList.toggle(collapsedClass);
    this.getAttribute("aria-expanded") == "true" ?
      this.setAttribute("aria-expanded", "false") :
      this.setAttribute("aria-expanded", "true");
    this.getAttribute("aria-label") == "collapse menu" ?
      this.setAttribute("aria-label", "expand menu") :
      this.setAttribute("aria-label", "collapse menu");
  });

  /*TOGGLE MOBILE MENU*/
  toggleMobileMenu.addEventListener("click", function() {
    body.classList.toggle("mob-menu-opened");
    this.getAttribute("aria-expanded") == "true" ?
      this.setAttribute("aria-expanded", "false") :
      this.setAttribute("aria-expanded", "true");
    this.getAttribute("aria-label") == "open menu" ?
      this.setAttribute("aria-label", "close menu") :
      this.setAttribute("aria-label", "open menu");
  });

  /*SHOW TOOLTIP ON MENU LINK HOVER*/
  for (const link of menuLinks) {
    link.addEventListener("mouseenter", function() {
      if (
        body.classList.contains(collapsedClass) &&
        window.matchMedia("(min-width: 768px)").matches
      ) {
        const tooltip = this.querySelector("span").textContent;
        this.setAttribute("title", tooltip);
      } else {
        this.removeAttribute("title");
      }
    });
  }

  /*TOGGLE LIGHT/DARK MODE*/
  if (localStorage.getItem("dark-mode") === "false") {
    html.classList.add(lightModeClass);
    switchInput.checked = false;
    switchLabelText.textContent = "Light";
  }

  switchInput.addEventListener("input", function() {
    html.classList.toggle(lightModeClass);
    if (html.classList.contains(lightModeClass)) {
      switchLabelText.textContent = "Light";
      localStorage.setItem("dark-mode", "false");
    } else {
      switchLabelText.textContent = "Dark";
      localStorage.setItem("dark-mode", "true");
    }
  });
</script>

</html>