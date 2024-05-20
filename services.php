<!DOCTYPE html>
<html lan='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Comptible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PESA PAP SERVICES</title>
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
	font-family: 'Abel', sans-serif;

}
	section{
		padding:2rem 9%;
	}
	.services .services-container{
		cursor:pointer;
		display:grid;
		grid-template-columns:repeat(auto-fit,minmax(30rem,2fr));
		gap:2rem;
	}
	.services .services-container .services-box{
		background:#fff;
		border-radius:.5rem;
		border:.2rem solid blue;
		padding:3rem;
	}
	.services .services-container .services-box i{
		font-size:3.5rem;
		padding-bottom:.5rem;
		color:dodgerblue;
	}
	.services .services-container .services-box h3{
		color:#333;
		font-size:2rem;
		padding:1rem 0;
	}
	.services .services-container .services-box p{
		font-size:1.2rem;
		line-height:2;
		color:#333;
	}
	</style>
	<body>
		<?php include './includes/header.php';?>

		<section class="services">
			<div class="services-container">
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>ONLINE DEPOSITS</h3>
					<p>
						
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>ONLINE WITHDRAWALS</h3>
					<p>
						
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>ONLINE ACCOUNT MONITORING</h3>
					<p>
						
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>TRANSACTION STATEMENT REQUEST</h3>
					<p>
						
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>INSTANT ONLINE LOANSS</h3>
					<p>
						
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-money-bill"></i>
					<h3>FLEXIBLE & REASONABLE INTEREST</h3>
					<p>
						
					</p>
				</div>
			</div>
		</section>
		<?php include './includes/footer.php';?>
	</body>
</html>