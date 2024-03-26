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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>


<body>


    <div class="container" style="width: 70%;">
        <?php
        include "adminNavbar.php";

        $query = "select * from contact";
        $result = mysqli_query($conn, $query);


        ?>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">

                    <thead>
                        <tr>

                            <!-- <th scope="col">ID</th> -->

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>


                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["name"]; ?></td>

                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["message"]; ?></td>



                                <td>

                                    <!-- <a href="#?id=<?php echo $row['id']; ?>"> <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" name="showUpdate">
                                            <i class="fas fa-edit"></i>
                                        </button></a> -->
                                    <a href="commentDelete.php?id=<?php echo $row['id'] ?>"> <button type="submit" class="btn btn-danger" name="btnDelete"><i class="far fa-trash-alt"></i></button></a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Product Details</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->


                                    <div class="modal-body">
                                        <form action="#" method="GET">

                                            <?php
                                            if (isset($_GET['id'])) {

                                                $id = $_GET['id'];



                                                $query = "SELECT * FROM contact WHERE id=$id";
                                                $result = mysqli_query($conn, $query);

                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    $html = '<input type="text" id="itemName" class="form-control" value="' . $row["name"] . '">';
                                                    $html .= '<input type="text" id="itemDescription" class="form-control" value="' . $row["email"] . '">';


                                                    echo $html;

                                            ?>



                                                    <div class="mb-3 mt-3">
                                                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row["id"]; ?>">

                                                        <label for="name">Name:</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row["name"]; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"]; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message">Message:</label>
                                                        <input type="text" class="form-control" id="message" name="message" value="<?php echo $row["message"]; ?>">
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="update">Update</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </tbody>

                </table>

            </div>
        </div>

    </div>

    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "UPDATE contact SET name='$name',email='$email',message='$message' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('updated')</script>";
    ?>
            <meta http-equiv="refresh" content="1">

    <?php
            // header("location:adminContact.php");
        }
    }
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


    // setTimeout(function() {
    //     location.reload();
    // }, 1000); // Reload after 5 seconds
</script>

</html>