<?php 
	include './resources/config.php';

	if(isset($_POST['create'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		$con_pass = $_POST['con_pass'];

		$error = array();

		if(empty($uname)){
			$error['ac'] = "Enter username";
		}else if(empty($email)){
			$error['ac'] = "Enter email";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if($gender == ""){
			$error['ac'] = "Select gender";
		}else if(empty($password)){
			$error['ac'] = "Enter password";
		}else if($con_pass != $password){
			$error['ac'] = "Both passwords do not match";
		}
		if(count($error)==0){
			$query = "INSERT INTO clients (username,email,phone,gender,password,date_reg) 
						VALUES ('$uname','$email','$phone','$gender','$password',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./client_signin.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>clients Signup</title>
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
		min-height:80vh;
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
		background:#fff;
		border:none;
		border-bottom:1px solid #333;
		display:block;
		width:100%;
		height:30px;
		padding-right:0;
		margin-bottom:20px;
	}
	select{
		cursor:pointer;

	}
	select option[value=""][disabled]{
		display:none;
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
		<?php
			include './includes/header.php'; 
		?>
		<div class="signup" style="background-color:linear-gradient(45deg, #E19E63);">
			<form method="post">
				<div class="error">
					<?php ;?>
				</div>
				<div class="form-class">
					<input type="text" name="uname" class="form-control" placeholder="enter username" required>
				</div>
				<div class="form-class">
					<input type="email" name="email" class="form-control" placeholder="enter email" required>
				</div>

				<div class="form-class">
					<input type="text" class="form-control" placeholder="enter phone number" name="phone" required>
				</div>
				<div class="form-class">
				<select name="gender" class="form-control">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
				<div class="form-class">
					<input type="password" class="form-control" name="pass" placeholder="enter password" required>
				</div>
				<div class="form-class">
					<input type="password" class="form-control" name="con_pass" placeholder="confirm password" required>
				</div>
				<input type="submit" name="create" class="button" value="register">
				<p style="font-size:14px; padding-top:2rem;">Already have an account ? <a href="./client_signin.php">login</a></p>
			</form>
	</div>
	<?php include './includes/footer.php';?>
	</body>
</html>