
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

<body>


  <div class="container" style="width: 70%;">
    <?php
    include "adminNavbar.php";
    

    $query = "select * from product_detail";
    $result = mysqli_query($conn, $query);


    ?>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">

          <thead>
            <tr>

              <!-- <th scope="col">ID</th> -->

              <th scope="col">Id</th>
              <th scope="col">Storage</th>
              <th scope="col">Ram</th>
              <th scope="col">About</th>
              <th scope="col">Orders</th>
              <th scope="col">Sim</th>
              <th scope="col">E_Storage</th>
              <th scope="col">Weight</th>
              <th scope="col">Os</th>
              <th scope="col">refreshRange</th>
              <th scope="col">Battery</th>
              <th scope="col">Camera</th>
              <th scope="col">ScreenSize</th>
              <th scope="col">Product_Id</th>

              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $total = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row["product_id"]; ?></td>
                <td><?php echo $row["storage"]; ?></td>
                <td><?php echo $row["ram"]; ?></td>
                <td><?php echo $row["about"]; ?></td>
                <td><?php echo $row["orders"]; ?></td>
                <td><?php echo $row["sim"]; ?></td>
                <td><?php echo $row["eStorage"]; ?></td>
                <td><?php echo $row["weight"]; ?></td>
                <td><?php echo $row["os"]; ?></td>
                <td><?php echo $row["refreshRage"]; ?></td>
                <td><?php echo $row["battery"]; ?></td>
                <td><?php echo $row["camera"]; ?></td>
                <td><?php echo $row["screenSize"]; ?></td>
                <td><?php echo $row["id"]; ?></td>

                <td>
                  <!-- <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button> -->

                  <!-- <a href= "#?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" name="update"><i class="fas fa-edit"></i></button></a> -->
                  <a href="userUpdate.php?id=<?php echo $row["product_id"]; ?>"> <button type="button" class="btn btn-success">
                      <i class="fas fa-edit"></i>
                    </button></a>


                  <a href="userDelete.php?id=<?php echo $row['id'] ?>"> <button type="button" class="btn btn-danger" name="btnDelete"><i class="far fa-trash-alt"></i></button></a>
                </td>
              </tr>
            <?php
            }
            ?>



          </tbody>

        </table>

        <!-- <button class="btn btn-primary mb-3" style="float: right;">Insert</button> -->
        <a href="#" class="mb-3"> <button type="button" class="btn btn-primary mb-3" style="position: absolute;right:20px;" data-bs-toggle="modal" data-bs-target="#myModal">
            <ion-icon name="add-outline" style="font-size: 20px;"></ion-icon>
          </button></a>
        <!-- Insert Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-center">Product Insert Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form action="#" onsubmit="submitForm();" method="post">
                  <!-- <div class="mb-3 mt-3">
                    <label for="id">Id:</label>
                    <input type="hidden" class="form-control" id="id" name="id" required>
                  </div> -->
                  <div class="d-flex" style="justify-content: space-between;gap:
                  10px;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="storage">Storage:</label>
                      <input type="text" class="form-control" id="storage" name="storage" required>
                    </div>
                    <div class="mb-3" style="width: 45%;">
                      <label for="ram">Ram:</label>
                      <input type="text" class="form-control" id="ram" name="ram" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="about">About:</label>
                    <input type="text" class="form-control" id="about" name="about" required>
                  </div>
                  <div class="mb-3">
                    <label for="orders">Orders:</label>
                    <input type="text" class="form-control" id="orders" name="orders" required>
                  </div>
                  <div class="d-flex" style="justify-content: space-between;gap: 10px;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="sim">Sim:</label>
                      <input type="text" class="form-control" id="sim" name="sim" required>
                    </div>
                    <div class="mb-3" style="width: 45%;">
                      <label for="eStorage">E_Storge:</label>
                      <input type="text" class="form-control" id="eStorage" name="eStorage" required>
                    </div>
                  </div>
                  <div class="d-flex" style="justify-content: space-between;gap: 10px;">
                    <div class="mb-3" style="width: 45%;">
                      <label for="weight">Weight:</label>
                      <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                    <div class="mb-3" style="width: 45%;">
                      <label for="os">Os:</label>
                      <input type="text" class="form-control" id="os" name="os" required>
                    </div>
                  </div>
                  <div class="d-flex" style="justify-content: space-between;gap: 10px;">
                    <div class="mb-3" style="width: 25%;">
                      <label for="refreshRange">RefreshRange:</label>
                      <input type="text" class="form-control" id="refreshRange" name="refreshRange" required>
                    </div>
                    <div class="mb-3" style="width: 65%;">
                      <label for="battery">Battery:</label>
                      <input type="text" class="form-control" id="battery" name="battery" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="camera">Camera:</label>
                    <input type="text" class="form-control" id="camera" name="camera" required>
                  </div>
                  <div class="mb-3">
                    <label for="screenSize">Screen Size:</label>
                    <input type="text" class="form-control" id="screenSize" name="screenSize" required>
                  </div>
                  <div class="mb-3">
                    <label for="productId">Product Id:</label>
                    <input type="text" class="form-control" id="productId" name="productId" required>
                  </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="btnInsert">Insert</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['btnInsert'])) {
    // Retrieve form data
    $storage = $_POST["storage"];
    $ram = $_POST["ram"];
    $about = $_POST["about"];
    $orders = $_POST["orders"];
    $sim = $_POST["sim"];
    $eStorage = $_POST["eStorage"];
    $weight = $_POST["weight"];
    $os = $_POST["os"];
    $refreshRange = $_POST["refreshRange"];
    $battery = $_POST["battery"];
    $camera = $_POST["camera"];
    $screenSize = $_POST["screenSize"];
    $productId = $_POST["productId"];

    // Perform data insertion into the database
    $query = "INSERT INTO product_detail (storage, ram, about, orders, sim, eStorage, weight, os, refreshRage, battery, camera, screenSize, id) VALUES ('$storage', '$ram', '$about', '$orders', '$sim', '$eStorage', '$weight', '$os', '$refreshRange', '$battery', '$camera', '$screenSize', '$productId')";
    $insert = mysqli_query($conn, $query);

    // Check if the insertion was successful
    if ($insert) {
      echo "<script>alert('Specification Inserted')</script>";
    } else {
      // Display error message if insertion failed
      echo "<script>alert('Specification not Inserted: " . mysqli_error($conn) . "')</script>";
    }
  }

  // if (isset($_POST['btnInsert'])) {
  //   $storage = $_POST["storage"];
  //   $ram = $_POST["ram"];
  //   $about = $_POST["about"];
  //   $orders = $_POST["orders"];
  //   $sim = $_POST["sim"];
  //   $eStorage = $_POST["eStorage"];
  //   $weight = $_POST["weight"];
  //   $os = $_POST["os"];
  //   $refreshRange = $_POST["refreshRange"];
  //   $battery = $_POST["battery"];
  //   $camera = $_POST["camera"];
  //   $screenSize = $_POST["screenSize"];
  //   $productId = $_POST["productId"];


  //   $query = "INSERT INTO product_detail(storage,ram,about,orders,sim,eStorage,weight,os,refreshRage,battery,camera,screenSize,id) VALUES('$storage','$ram',' $about','$orders','  $sim','$eStorage','$weight','$os',' $refreshRange','  $battery','  $camera','  $screenSize',' $productId')";
  //   $insert = mysqli_query($conn, $query);
  //   if ($insert) {
  //     echo "<script>alert('Specification Inserted')</script>";
  //   } else {

  //     echo "<script>alert('Specification not  Inserted')</script>";
  //   }
  // }
  ?>
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

  const submitForm = (e) => {
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