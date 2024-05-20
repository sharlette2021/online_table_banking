<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>drawings</title>
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
			width:100px;
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
		.container .content{
			position:relative;
			margin-top:10vh;
			min-height:90vh;
		}
		.container .content .cards{
			padding:20px 15px;
			display:flex;
			align-items:center;
			justify-content:space-between;
			flex-wrap:wrap;
		}
		.container .content .cards .card{
			width:250px;
			height:150px;
			background:white;
			margin:20px 10px;
			display:flex;
			align-items:center;
			justify-content:space-around;
			box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)
		}
		.container .content .cards .card .box i{
			font-size: 25px;
			text-align:center;
			color:blue;
		}
		h3{
			color:#000;
		}
		.table-section{
			height:auto;
			overflow:auto;
		}
		table{
			width:100%;
			table-layout:fixed
			min-width:1000px;
			border-collapse:collapse;
		}
		thead th{
			position:sticky;
			top:0;
			background:#333;
			color:#fff;
			font-size:15px;
		}
		th,td{
			border-bottom:1px solid #dddddd;
			padding:10px 20px;
			word-break:break-all;
			text-align:center;
		}
		tr:hover td{
			color:#0298cf;
			cursor:pointer;
			background:#f6f9fc;
		}
		button{
			outline:none;
			border:none;
			border-radius:6px;
			cursor:pointer;
			padding:10px;
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
				<li><a>'.$uname.'</a></li>
				';
			}else{
				echo '

				';
			}

		?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="profile">
		<div class="profile">
		<h2 style="padding-left:50%">My Invoices</h2>
		<?php
           $client = $_SESSION['client'];
           $query ="SELECT * FROM clients WHERE username='$client'";
   
           $res = mysqli_query($conn, $query);
           $row = mysqli_fetch_array($res);
           $uname = $row['username'];
   
           $querys = mysqli_query($conn, "SELECT * FROM drawings WHERE username='$uname'");
           $output = "";

		$output .="
			<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>username</th>
							<th>Phone</th>
							<th>amount</th>
							<th>date withdrew</th>
							
							</tr>
							";
		if(mysqli_num_rows($querys)< 1){
				$output .= "<tr><td>No record</td></tr>";
		}
		while($row = mysqli_fetch_array($querys)){

		    	$id = $row['id'];
				$username = $row['username'];
				$phone = $row['phone'];
				$amount = $row['amount'];
                $date_withdrew = $row['date_withdrew'];
					$output .="
						<tbody>
							<tr>
								<td>$id</td>
								<td>$username</td>
								<td>$phone</td>
								<td>$amount</td>
                                <td>$date_withdrew</td>
								
			";
		}
		$output .="</tr></table>";
		echo $output;
	?>
	</div>
</div>
	</div>
	</body>
</html>