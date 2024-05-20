<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta chrset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home page</title>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
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
	</style>
	<body>
		<?php include './includes/header.php';?>
		
		<div class="section">
			<div class="text-container">
				<h1>
				NEXT GENERATION IS <br>
				DIGITAL MOBILE BANKING</h1>
				<p>
					Take your financial life online. Your easy bank account <br/>
					Will be a one-stop shop for spending, saving <br/> budgeting, investing, and much more
				</p>
				<button>CREATE ACCOUNT</button>
			</div>

			<div class="img-container">
				<img src="./background.jpeg" alt="header1">
			</div>
		</div>
		<div class="container">
			<section class="why-us">
				<h1>WHY CHOOSE PESAPAP BANK?</h1>
				<p>
					We leverage open banking to turn your bank account into your financial hub. <br>
					Control your finances like never before.
				</p>
			</section>
			<section class="features">
				<div class="features-item">
					<img src="./gallery/pic4.jpeg" alt="image1">
					<h1>ONLINE BANKING</h1>
					<p>
						Our modern web and mobile <br>
						applications allow you to keep <br>
						track of your finances whereever <br>
						you re in the world
					</p>
				</div>
				<div class="features-item">
					<img src="./gallery/pic3.jpeg" alt="image1">
					<h1>SIMPLE BUDGETING</h1>
					<p>
						See exactly where your money <br>
						goes every month. Receive <br>
						notifications when you're close to <br>
						hitting your limits.
					</p>
				</div>
				<div class="features-item">
					<img src="./gallery/pic2.jpeg" alt="image1">
					<h1>FAST ONBOARDING</h1>
					<p>
						We don't do branches. Open your <br>
						account minutes online and start <br>
						taking control of your finances <br>
						right away.
					</p>
				</div>
			</section>

			<section class="blog">
				<h1>CURRENT TRENDS IN M-BANKING</h1>
				<div class="blog-container">
					<div class="article">
						<img src="./gallery/pic17.jpeg" alt="image">
						<div class="content">
							<p>Pesapap admin</p>
							<h4>
								Receive money in any <br>
								currency with no fees 
							</h4>
							<p>
								The world is getting smaller & <br>
								we are becoming more mobile. So, <br>
								Why should you be forced to only <br>
								receive money in a single...
							</p>
						</div>
					</div>
					<div class="article">
						<img src="./gallery/pic16.jpeg" alt="image">
						<div class="content">
							<p>Pesapap admin</p>
							<h4>
								Receive money in any <br>
								currency with no fees 
							</h4>
							<p>
								The world is getting smaller & <br>
								we are becoming more mobile. So, <br>
								Why should you be forced to only <br>
								receive money in a single...
							</p>
						</div>
					</div>
					<div class="article">
						<img src="./gallery/pic14.jpeg" alt="image">
						<div class="content">
							<p>Pesapap admin</p>
							<h4>
								Receive money in any <br>
								currency with no fees 
							</h4>
							<p>
								The world is getting smaller & <br>
								we are becoming more mobile. So, <br>
								Why should you be forced to only <br>
								receive money in a single...
							</p>
						</div>
					</div>
					<div class="article">
						<img src="./gallery/pic13.jpeg" alt="image">
						<div class="content">
							<p>Pesapap admin</p>
							<h4>
								Receive money in any <br>
								currency with no fees 
							</h4>
							<p>
								The world is getting smaller & <br>
								we are becoming more mobile. So, <br>
								Why should you be forced to only <br>
								receive money in a single...
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include './includes/footer.php';?>
	</body>
</html>