<!DOCTYPE html>
<html>

<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <style>
        .login {
            margin-top: 220px;
        }
    </style>
</head>

<body>
    <div class="main">
       

        <div class="login">
            <form method="POST" action="#">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" placeholder="Email" required="" name="loginEmail">
                <input type="password" placeholder="Password" required="" name="loginPassword">
                <button name="login" type="submit" >Login</button>
            </form>
        </div>
    </div>
    <?php
    session_start();
    include "connection.php";
    if (isset($_POST['login'])) {
        $loginEmail = $_POST['loginEmail'];
        $loginPassword = $_POST['loginPassword'];

        $fetch = "SELECT * FROM adminlogin WHERE username='$loginEmail' AND password='$loginPassword'";
        $query = mysqli_query($conn, $fetch);
        $result = mysqli_num_rows($query);

        if ($result >0) {
            $_SESSION["username"] = $loginEmail;
            // echo $loginEmail;
            // echo $_SESSION["username"];
            header('location:admin.php');
        } else {
            echo "Not Success";
        }
    }
    ?>
</body>

</html>