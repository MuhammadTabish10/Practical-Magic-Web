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
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
        <link rel="stylesheet" href="custom.css"/>
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="uname" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="upassword" placeholder="Password" id="password" required>
				<input type="submit" name="loginsub" value="Login">

                <?php 
                    if(isset($_REQUEST["err"]))
                        $msg="Invalid username or Password";
                    ?>
                    <p style="color:red;">
                    <?php if(isset($msg))
                    {
                        echo $msg;
                    }
                ?>
			</form>
		</div>
		<div style="color: white; display: flex; justify-content: center; padding-bottom: 155px">
			<p>Don't Have an Account? 
				<a href="signup.php">
					<strong style="color: white">Signup</strong>
				</a>
			</p>
		</div>
	</body>
</html>