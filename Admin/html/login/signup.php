<?php
// Session starts
// session_start();
// $username = $_POST["username"];
 
// if(isset($_POST["Login"])) {
 
//     // Session Variables are created
//     $_SESSION["user"] = $username;  
 
//     // Login time is stored in a session variable
//     $_SESSION["login_time_stamp"] = time(); 
//     header("Location:../about_panal.php");
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign up</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
        <link rel="stylesheet" href="custom.css"/>
		<style>
			.login form input[type="email"] {
				width: 310px;
				height: 50px;
				border: 1px solid #dee0e4;
				margin-bottom: 20px;
				padding: 0 15px;
			}
			.already div p{
				color: white;
				display: block;
			}
		</style>
	</head>
	<body>
		<div class="login">
			<h1>Sign up</h1>
			<form action="authenticate.php" method="post">
				<input type="text" name="firstname" placeholder="Firstname" required>
				<input type="text" name="lastname" placeholder="Lastname" required>
				<input type="text" name="username" placeholder="Username" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" name="signup_sub" value="Sign Up">
			</form>
		</div>
		<div style="color: white; display: flex; justify-content: center; padding-bottom: 155px">
			<p>Already Have an Account? 
				<a href="login.php">
					<strong style="color: white">Login</strong>
				</a>
			</p>
		</div>
	</body>
</html>