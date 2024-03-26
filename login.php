
<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="#">
					<label for="chk" aria-hidden="true">Sign up</label>
					
					<input type="email" name="email" placeholder="Email" >
					<input type="password" name="pswd" placeholder="Password"  >

					<input type="password" name="cpswd" placeholder="Comform Password" >
					<!-- <input type="number" name="mobileNumber" placeholder="Mobile Number" required=""> -->
					<button name="signUp">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="#">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email"  placeholder="Email" required="" name="loginEmail">
					<input type="password"  placeholder="Password" required="" name="loginPassword">
					<button name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>


<?php

include_once "connection.php";

if(isset($_POST['signUp']))
{
	$email = $_POST['email'];
	$password = $_POST['pswd'];
	$cPassword = $_POST['cpswd'];

	if($email==NULL || $password==NULL || $cPassword==NULL|| ($cPassword!=$password)){
		echo "<script>alert('Insert  Valid Record')</script>";
	}
   else{
	$insert = "INSERT INTO usertable(email,password) VALUES('$email','$password')";
	$query = mysqli_query($conn,$insert);
	#$result = mysqli_num_rows($query);
	if($query > 0)
	{
		//echo "Success";
		echo "<script>alert('Register Sucess')</script>";
	}
	else{
		echo "Not Success";
	}
}

}

?>

<?php

include_once "connection.php";
if(isset($_POST['login'])){

	$loginEmail = $_POST['loginEmail'];
	$loginPassword = $_POST['loginPassword'];

	
$fetch = "SELECT * FROM usertable WHERE email='$loginEmail' AND password='$loginPassword'";
$query = mysqli_query($conn,$fetch);
$result = mysqli_num_rows($query);
if($result > 0)
{
	$_SESSION["username"] = $loginEmail;
	// echo $loginEmail;
	// echo $_SESSION["username"];
	header('location:home.php');
}
else{
	echo "Not Success";
}
}
?>