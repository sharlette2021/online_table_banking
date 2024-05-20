<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>view Report</title>
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
			background:royalblue;
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
			background:#eee;
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
		.profile{
			padding-top:5%;
		}
		.profile img{
			padding-left:30%;
		}
		.table-section{
			padding-left:30%;
			padding-top:10px;
		}
		
		h3{
			color:#000;
		}
		*{
		font-family: 'Oswald', sans-serif;
		}
		.table-section{
			height:auto;
			overflow:auto;
		}
		table{
			width:100%;
			table-layout:fixed;
			min-width:1000px;
			border-collapse:collapse;
		}
		thead th{
			position:sticky;
			top:0;
			background:#0298cf;
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

	
		<h1>bank client</h1>

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

    <div class="content">
					<a href="./client_profile.php">
                    <h3>my profile</h3>
                    </a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
                 <a href="./client_index.php">
                    <h3>main page</h3>
                 </a>
				</div>
			<div class="card">
                 <a href="./client_reqloan.php">
                    <h3>Request loan</h3>
                 </a>
				</div>

				<div class="icon-case">
					
				</div>
			</div>
			<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
                 <a href="./client_deposit.php">
                    <h3>my deposit</h3>
                 </a>
				</div>
			<div class="card">
                <a href="./loan_invoice.php">
                    <h3>my loan</h3>
                 </a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
				<div class="card">
            <a href="./withdraw.php">
                    <h3>withdraw</h3>
                 </a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			</div>

			<div class="card">
            <a href="./client_report.php">
                    <h3>send report</h3>
                 </a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
            <a href="./report_invoice.php">
                    <h3>my reports</h3>
                 </a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
		<h2>My sent Reports</h2>
		<?php

		$cli = $_SESSION['client'];
		$query ="SELECT * FROM clients WHERE username='$cli'";

		$res = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($res);
		$uname = $row['username'];

		$querys = mysqli_query($conn, "SELECT * FROM report WHERE username='$uname'");
		$output = "";

		$output .="
			<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Message</th>
							<th>username</th>
							<th>Date sent</th>
							<tr>
							";
		if(mysqli_num_rows($querys)< 1){
				$output .= "<tr><td>No record</td></tr>";
		}
		while($row = mysqli_fetch_array($querys)){

			    $id = $row['id'];
				$title = $row['title'];
				$message = $row['message'];
				$username = $row['username'];
				$date_sent = $row['date_sent'];
					$output .="
						<tbody>
							<tr>
								<td>$id</td>
								<td>$title</td>
								<td>$message</td>
								<td>$username</td>
								<td>$date_sent</td>
								<td>
								</td>
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