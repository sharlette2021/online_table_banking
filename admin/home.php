<?php
	session_start(); 

?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>ADMIN SECTION</title>
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>

		<?php include './includes/navbar.php';?>

			<h3 class="name"><i class="fas fa-chalkboard"></i>DASHBOARD</h3>
			<div class="info">

				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./users.php">
							<span>Clients List</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./client_deposit.php">
							
							<span>Deposits List</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./admin_drawings.php">
							<span>drawings List</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./admin_activeloans.php">
							
							<span>Active Loans</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./all_loans.php">
							<span>All Loans</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./admin_report.php">
							<span>Reports</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./admin_pendingloan.php">
							
							<span>Pending Loans</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./admin_pendingloan.php">
							
							<span>Pending Loans</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	
	</body>
</html>