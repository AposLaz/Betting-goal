<?php

ini_set('display_errors', '1');
session_start();
				


require_once('config.php');

$login = $password = '';
$login_err = $password_err = $login_pass_err =  '';

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["login2"]))
	{
		if(empty(trim($_POST["username"])))
		{
			$login_err = "Enter your Username";
		}
		elseif(empty(trim($_POST["pwd"])))
		{
			$password_err = "Enter the password";
		}
		else
		{
			$login = trim($_POST["username"]);
			$password = trim($_POST["pwd"]);
			$sql_u = "SELECT * FROM users WHERE USERNAME = '$login' && PASSWORD = '$password' ";
			$res_u = mysqli_query($link, $sql_u) or die(mysqli_error($link));
			
			if(mysqli_num_rows($res_u) > 0)
			{
				$_SESSION['username']=$_POST["username"];
				if(isset($_SESSION['username']))
				{
					header("Location: ../index.php");
				}

			}
			else
			{
				$login_pass_err = "Invalid Username or Password.";
			}

		}
	}

}

mysqli_close($link);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="limiter">
			<div class="container-login100" style="background-image:url('back.jpg');background-repeat:no-repeat;    background-size: cover;background-position: top;">
				<div class="wrap-login100">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-26">
							Welcome my bro
						</span>

						<!--username-->
						<div class="wrap-input100 validate-input <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
							<input class="input100" type="text" name="username">
							<span class="focus-input100" data-placeholder="Username"></span>
						</div>
						<span style="color:red;font-size:12px;position:absolute;margin-top:-35px;"><?php echo $login_err; ?></span>

						<!--password-->
						<div class="wrap-input100 validate-input <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="pwd">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>
						<span style="color:red;font-size:12px;position:absolute;margin-top:-35px;"><?php echo $password_err; ?></span>

						<!--login-->
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" name="login2">
									Login
								</button>

							</div>
							<span style="color:red;font-size:12px;"><?php echo $login_pass_err; ?></span>
						</div>

					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
	</form>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>