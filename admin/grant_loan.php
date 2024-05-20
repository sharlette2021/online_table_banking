<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Client loan grant</title>
		<link rel="stylesheet" href="./css/main.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>

		
<?php include './includes/navbar.php';?>
<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
				
			</div>
			
		</div>
	</div>
	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM loans WHERE id='$id'";
			$res = mysqli_query($conn, $query);

			$row = mysqli_fetch_array($res);
		}
	?>
	<div class="profile">
		<h2 style="padding-left:45%">LOANS</h2>
		<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">CLIENT LOAN DETAILS</th>
				</tr>
				
				<tr>
					<td>USERNAME</td>
					<td><?php echo $row['username'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><?php echo $row['amount'];?></td>
				</tr>
				<tr>
					<td>status</td>
					<td><?php echo $row['status'];?></td>
				</tr>
				<tr>
					<td>date requested</td>
					<td><?php echo $row['date_requested'];?></td>
				</tr>
			</table>
			
</div>
</div>

<form action ="" method="post" style="padding-left:30%;">
	<h2>LOAN GRANT</h2>

	<?php if(isset($_POST['send'])){
		$amount = $_POST['amount'];

		if(empty($amount)){

		}else{
			$uname = $row['username'];
			$phone = $row['phone'];
			
			$query = "INSERT INTO active_loans(username, phone, amount, interest, date_granted) VALUES ('$uname','$phone','$amount','10',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				echo "<script>alert('You have sent the invoice')</script>";
				mysqli_query($conn, "UPDATE loans SET status='Active' WHERE id='$id'");
			}
		}
	}
	?>
	<input type="text" name="amount" class="box" placeholder="enter amount" required>
	<input type="submit" class="button" name="send" value="send">
</form>
</body>
</html>