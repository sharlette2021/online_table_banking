<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>deposit</title>
		<link rel="stylesheet" href="./css/main.css">
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
			background:#eee;
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
		.profile{
			padding-top:5%;
		}
		.profile img{
			padding-left:30%;
		}
		.table-section{
			
		}
		
		h3{
			color:#000;
		}
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		font-family: 'Oswald', sans-serif;
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
		button .edit{
			background:#0298cf;
		}
		.admin{
			width:100%;
		}
		.admin-header{
			display:flex;
			justify-content:space-between;
			align-items:center;
			padding:20px;
			background:rgb(240,240,240);
		}
		.admin-header p{
			color:#000000;
		}

		.add-new{
			padding:10px 20px;
			color:#fff;
			background:blue;
		}
		.new-admin{
			position:absolute;
			top:28%;
			right:.5rem;
			width:25rem;
			box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
			padding:2rem;
			background:whitesmoke;
			text-align:center;
		}
		.new-admin h3{
			font-size:2rem;
			text-transform:uppercase;
			color:#333;
		}
		.new-admin .form-control{
			margin:.7rem;
			background:#eee;
			border-radius:.5rem;
			padding:1rem;
			font-size:.9rem;
			text-transform:none;
			width:100%;
		}
		form{
			position:absolute;
			padding-left:50%;
			font-weight:normal;
			width:50rem;
			float:right;
			padding:2rem;
			border-radius:.5rem;
			text-align:center;
		}
		input{
		border:1px solid #333;
		border:none;
		background:none;
		border-bottom:1px solid #333;
		display:block;
		width:100%;
		padding-right:0;
		margin-bottom:10px;
		}
		.button{
			margin:1 0rem;
			display:block;
			text-align:center;
			justify-content:center;
			padding:.4rem 5rem;
			font-size:1rem;
			border-radius:.5rem;
			border:.2rem solid #333;
		}
		form.active{
			right:2rem;
			transition:.4s linear;
		}
	</style>
	
	<body>
<?php include './includes/navbar.php';?>

<div class="container">
	
	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM clients WHERE id='$id'";
			$res = mysqli_query($conn, $query);

			$row = mysqli_fetch_array($res);
		}
	?>
	<div class="profile">
		<h2 style="padding-left:45%">CLIENTS</h2>
		<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">CLIENT DETAILS</th>
				</tr>
				
				<tr>
					<td>USERNAME</td>
					<td><?php echo $row['username'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo $row['password'];?></td>
				</tr>
				<tr>
					<td>date registered</td>
					<td><?php echo $row['date_reg'];?></td>
				</tr>
			</table>
			
</div>
</div>

<form action ="" method="post" style="padding-left:30%;">
	<h2>Client Deposits</h2>

	<?php if(isset($_POST['send'])){
		$amount = $_POST['amount'];

		if(empty($amount)){

		}else{
			$uname = $row['username'];
			$phone = $row['phone'];
			
			$query = "INSERT INTO deposits(username, phone, amount, date_deposited)
						VALUES ('$uname','$phone','$amount',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./users.php");
				echo "<script>alert('You have deposited successfully')</script>";
			}
		}
	}
	?>
	<input type="text" name="amount" class="box" placeholder="enter deposited amount" required>
	<input type="submit" class="button" name="send" value="send">
</form>
</body>
</html>