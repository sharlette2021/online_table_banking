<?php 
	session_start();
    include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>client drawings</title>
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		text-transform:uppercase;
		font-family: 'Oswald', sans-serif;
		font-weight:normal;
		box-sizing:border-box;
		}
		a{
			text-decoration:none;
		}
		li{
			list-style:none;
		}
		h1{
			color:#eee;
		}
		.side-menu{
			position:fixed;
			background:#333;
			color:#eee;
			width:20vw;
			top:0;
			display:flex;
			min-height:100vh;
			flex-direction:column;
		}
		.side-menu .brand-name{
			height:10vh;
			display:flex;
			align-items:center;
			justify-content:center;
		}
		.side-menu li{
			font-size:20px;
			padding:10px 20px;
			display:flex;
			align-items:center;
		}
		.side-menu li:hover{
			background:#ADD8E6;
			color:#333;
		}
		.container{
			position:absolute;
			right:0;
			width:80vw;
			height:100vh;
			background:#f1f1f1;
		}
		.container .header{
			position:fixed;
			top:0;
			right:0;
			width:80vw;
			height:10vh;
			background:#333;
			color:#fff;
			display:flex;
			align-items:center;
			justify-content:center;
			box-shadow:0 4px 8px 0 rgba(0,0,0,.2);
		}
		.container .header .nav{
			width:90%;
			display:flex;
			align-items:center;
		}
		.container .header .nav .search{
			flex:3;
			display:flex;
			justify-content:center;
		}
		.container .header .nav .search input[type="text"]{
			border:none;
			background:#f1f1f1;
			padding:10px;
			width:50%;
		}
		.container .header .nav .search button{
			width:40px;
			height:40px;
			border:none;
			align-items:center;
			justify-content:center;
		}
		.container .header .nav .search button i{
			width:30px;
			height:30px;
		}
		.container .header .nav .user{
			flex:1;
			display:flex;
			justify-content:space-between;
			align-items: center;
		}
		.btn{
			background:#333;
			color:#fff;
			padding:5px 10px;
			text-align:center;
		}
		.btn:hover{
			padding:3px 8px;
			cursor:none;
		}
		.container .header .nav .user .img-case{
			position:relative;
			width:80px;
			height:50px;
		}
		.container .header .nav .user img{
			width:40px;
			height:40px;
		}
		.container .header .nav .user .img-case img{
			position:absolute;
			top:0;
			left:0;
			width:100%;

		}
		.container .report{
			position:relative;
			margin-top:10vh;
			min-height:90vh;
		}
		.report{
			padding-top:5%;
			padding-left:5%;
			min-height:90vh;
			display:flex;
			align-items:center;
			justify-content:center;
			padding:20px;
			padding-bottom:60px;
			background:#eee;
		}
		.report form{
			padding:20px;
			border-radius:5px;
			box-shadow:0 5px 10px rgba(0,0,0,.1);
			background:#fff;
			text-align:center;
			width:500px;
		}
		.report form h3{
			font-size: 30px;
			text-transform:uppercase;
			margin-bottom:10px;
			color:#333;
		}
		.report form input{
			width:100%;
			padding:10px 15px;
			font-size:17px;
			margin:8px 0;
		}
		.report form .form-btn{
			background:#fbd0d9;
			color:crimson;
			text-transform:uppercase;
			font-size:20px;
			cursor:pointer;
		}
		.report form .form-btn:hover{
			background:crimson;
			color:#fff;
		}
		h3{
			color:#000;
		}
	</style>
	
	<body>


<div class="side-menu">
	<div class="brand-name">
		<h1>PESAPAP </h1>
	</div>
	<ul>
		<li><a href="./client_index.php" style="color:#fff;text-decoration:none;"><i class="far fa-clipboard"></i>&nbsp;Dashboard</a></li>
		<li><a href="./client_profile.php" style="color:#fff;text-decoration:none;"><i class="fas fa-address-card"></i>&nbsp;my Profile</a></li>
		<li><a href="./client_deposit.php" style="color:#fff;text-decoration:none;"><i class="fas fa-address-card"></i>&nbsp;Deposits</a></li>
		<li><a href="./client_report.php" style="color:#fff;text-decoration:none;"><i class="fas fa-calendar"></i>&nbsp;Reports</a></li>
		<li><a href="./client_reqloan.php" style="color:#fff;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>&nbsp;Request Loan</a></li>
		<li><a href="./loan_invoice.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;Loan Invoice</a></li>
		<li><a href="./withdraw.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;Drawings</a></li>
		<li><a href="./client_drawings.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;Drawings Invoice</a></li>
		<li><a href="./logout.php" class="logout" style="color:#fff;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
	</ul>
</div>

<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
				
			</div>
			<div class="user">
				<a href="#" class="btn" style="background:#333;color:#333;">Add</a>
				<!--<img src="./image.jpg" alt="">-->
				<div class="img-case" style="padding-top:5%;display:flex;">
					<?php

			if(isset($_SESSION['client'])){
			$uname = $_SESSION['client'];
			echo '
				<li><a><i class="far fa-user"></i>'.$uname.'</a></li>
				';
			}else{
				echo '

				';
			}

		?>

	<?php 
			include '../resources/config.php';
			
			$cli = $_SESSION['client'];
			$sel = mysqli_query($conn,"SELECT * FROM clients WHERE username='$cli'");

			$row = mysqli_fetch_array($sel);

			$uname = $row['username'];
			$phone = $row['phone'];

			if(isset($_POST['withdraw'])){
				$amount = $_POST['amount'];

				if(empty($amount)){

				}else{
					$uname = $_SESSION['client'];
					$phone = $row['phone'];

					$query = "INSERT INTO drawings(username,phone,amount,date_withdrew) 
								VALUES ('$uname','$phone','$amount',NOW())";
					$res = mysqli_query($conn, $query);

					if($res){
						echo "<script>alert('You have sent the report sucesfully')</script>";
						header('location:./client_index.php');
					}
				}
			}
		?>
</div>
</div>
</div>
</div>
<div class="report">
	<form method="post">
			<h3>Drawings</h3>
			<input type="text" name="amount" class="form-control" placeholder="enter amount to withdraw" required>

			<input type="submit" class="form-btn" name="withdraw" value="withdraw">
		</form>
	</div>
</div>
	</body>
</html>