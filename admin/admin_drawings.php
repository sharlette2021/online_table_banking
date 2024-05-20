<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Clients Drawings</title>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/sidebar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
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
	</style>
	<body>
		<?php include './includes/navbar.php';
			include '../resources/config.php';
		?>

		<div class="admin">
			<div class="admin-header">
				<p style="padding-left:40%; text-decoration:underline;">Clients Drawings</p>
				<div>
				</div>
			</div>
		</div>
		<?php 
			$query = "SELECT * FROM drawings";
			$res = mysqli_query($conn, $query);

			$output ="
			";
			$output = "
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>username</th>
								<th>phone</th>
								<th>amount</th>
								<th>date withdrew</th>
								
							<tr>
							";
			if(mysqli_num_rows($res) < 1){
				$output .= "<tr><td>No record</td></tr>";
			}
			while($row = mysqli_fetch_array($res)){
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
			$output .="
			</tr>
			</table>";
			echo $output;
		?>

	</body>
</html>