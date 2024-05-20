<?php 
	session_start();
	include("../resources/config.php");

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$error = array();

		if(empty($username)){
			$error['admin'] = "Kindly enter username";
		}else if(empty($password)){
			$error['admin'] = "KIndly enter password";
		}
		if(count($error)==0){
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn, $query);

			if(mysqli_num_rows($result)==1){
				echo "<script>alert('Successfully logged in as administrator')</script>";
				$_SESSION['admin'] = $username;
				header("location:./home.php");
			}else{
				echo "<script>alert('Invalid credentials')";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>ADMIN SECTION</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		form{
		width:100%;
		padding-top:5px;
		padding-left:40%;
		padding-right:30%;
	}
	.form-group{
		position:relative;
	}
	.form-control{
		border:1px solid #333;
		text-transform:none;
		background:#fff;
		border:none;
		border-bottom:1px solid #333;
		display:block;
		width:30%;
		height:30px;
		padding-right:0;
		margin-bottom:20px;
	}
	.btn{
	padding:12px 20px;border:none;
	outline:none;
	outline-width:0;
	color:#fff;
	background-image:linear-gradient(120deg, hsl(192,70%,51%),hsl(136,65%,51%));
	border-radius:24px;
	cursor:pointer;
	}

	</style>
	<body>


		<div class="login-container">
		<form method="post">
			<h3>Administrator Login</h3>
			<div class="error">
				<?php 
					if(isset($error['admin'])){

						$show = $error['admin'];
					}else{
						$show = "";
					}
					echo $show;
				?>
			</div>
			<div class="form-group">
				<input type="text" name="username" class="form-control" autocomplete="off" placeholder="enter username">
			</div>

			<div class="form-group">
				<input type="password" id="myInput" class="form-control" name="password" placeholder="enter password">
				
			</div>
			<input type="submit" class="btn" name="login" value="login">
		</form>
	</div>
	</body>
</html>