<?php 
	session_start();
	include './resources/config.php';

	if(isset($_POST['login'])){

		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		if(empty($uname)){
			echo "<script>alert('Enter username')</script>";
		}else if(empty($pass)){
			echo "<script>alert('enter password')</script>";
		}else{
			$query = "SELECT * FROM clients WHERE username='$uname' AND password='$pass'";
			$res = mysqli_query($conn, $query);

			if(mysqli_num_rows($res) == 1){
				header("location:./clients/client_index.php");
				$_SESSION['client'] = $uname;
			}else{
				echo "<script>alert('Invalid ')</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Client Signin</title>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
*{
	font-family: 'Quicksand', sans-serif;
	padding:0;
	margin:0;
	box-sizing:border-box;
}
body{
	line-height:1.5;

}
	.signup{
		min-height:50vh;
		display:flex;
		align-items:center;
		justify-content:center;

	}
	form{
		width:100%;
		padding-top:5px;
		padding-left:40%;
		padding-right:30%;
	}
	.form-class{
		position:relative;
	}
	.form-control{
		border:1px solid #333;
		text-transform:none;
		background:#fff;
		border:none;
		border-bottom:1px solid #333;
		display:block;
		width:100%;
		height:30px;
		padding-right:0;
		margin-bottom:20px;
	}
	.button{
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
		<?php include './includes/header.php';?>

		<div class="signup">
			<form method="post">
				<div class="form-class">
					<input type="text" name="uname" class="form-control" placeholder="enter username" required>
				</div>
				<div class="form-class">
					<input type="password" class="form-control" name="pass" placeholder="enter password" required>
				</div>
				<input type="submit" name="login" class="button" value="login">
				<p style="font-size:14px; padding-top:2rem;">I don't have an account ? <a href="./client_reg.php">create account</a></p>
			</form>
		</div>
	</div>
	<?php include './includes/footer.php';?>
		
	</body>
</html>