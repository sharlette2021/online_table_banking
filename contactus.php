<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PESAPAP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="./css/contactus.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/navbar.css">
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
.contact-body{
	height:30vh;
	font-size:14px;
	background:linear-gradient(rgba(0,0,0,0.5)rgba(0,0,0,0.8));
	text-align:center;
	display:flex;
	flex-direction:column;
	padding-top:7%;
	justify-content:center;
	align-items:center;
}
.contact-body h3{
	font-size:1.3rem
	font-weight:400;
}
.contact-body h2{
	font-size:3rem;
	text-transform:uppercase;
	padding:0.1rem 0;
	letter-spacing:4px;
}
.text{
	opacity:1;
	font-weight:300;
}
.contact-body .text{
	margin:0.5rem 0;
}
.contact-content{
	max-width:1320px;
	margin:0 auto;
	padding:1px 1px;
}
.contact-info{
	margin:2rem 0;
	text-align:center;
	padding:2rem 0;
}
.contact-info span{
	display:block;
}
.contact-info div{
	margin:0.8rem 0;
	padding:1rem;
}
.contact-info span i{
	font-size:2rem;
	padding-bottom:0.9rem;
	color:#141c2c;
}
.contact-info div span:nth-child(2){
	font-weight:500;
	font-size:1.1rem;
}
.contact-info .text{
	padding-top:0.5px 0;
	font-size:11px;
	font-style:bolder;
	border-top:1px solid white;
}
.contact-form{
	padding:2rem;
	border-top:1px solid #333;
}
.contact-form form{
	padding-bottom:1rem;
}
.form-control{
	width:100%;
	border:none;
	border-bottom:1px solid #333;
	padding:0.7rem;
	margin:0.6rem 0;
	font-family:'Abel', sans-serif;
	font-size:14px;
	outline:0;
}
.form-control:focus{
	box-shadow:0 6px -3px rgba(48,48,48,1);
}
.contact-form form div{
	display:grid;
	grid-template-columns:repeat(2,1fr);
	column-gap:0.6rem;
}
.send-btn{
	font-size:12px;
	text-transform:uppercase;
	align-items:center;
	text-align:center;
	color:#fff;
	margin:0.5rem 25rem;
	width:50%;
	background:dodgerblue;
	border:none;
	border-radius:10px;
	cursor:pointer;
	padding:0.8rem 1.5rem;
	transition:all .4s ease;
}
.send-btn:hover{
	opacity:0.8;
	background:purple;
	color:black;
}
.contact-form > div img{
	width:100%;
}
.contact-form > div{
	margin:0 auto;
	text-align:center;
}
@media screen and min-width(768px){
	.contact-body .text{
		width:70%;
		margin-left:auto;
		margin-right:auto;
	}
	.contact-info{
		display:grid;
		grid-template-columns:repeat(2,1fr);
	}
}
@media screen and (min-width:992px){
	.contact-body .text{
		width:70%;
	}
	.contact-info{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		align-items:center;
	}
}
@media screen and (min-width:1200px){
	.contact-info{
		grid-template-columns:repeat(4,1fr);
	}
}
	input{
		background:none;
		border: none;
		font-size: 20px;
	}
	a{
		text-decoration:none;
	}
	html{
		font-size: 65%;
	}
</style>
<body>
	<?php include './includes/header.php';?>

	<section class="contact-section">
		<div class="contact-body">
			<h3>Get in Touch with our bank</h3>
			<h2 class="head"><span>Contact us</span></h2>
			<p class="text">Experience Quality services</p>
		</div>

		<div class="contact-content">

			<div class="contact-form">
				<form method="post">
					<div>
						<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
						<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
					</div>
					<div>
						<input type="email" class="form-control" name="email" placeholder="email" required>
						<input type="text" class="form-control" name="phone" placeholder="Phone No" required>
					</div>
					<input placeholder="message" name="content" class="form-control">
					<input type="submit" class="send-btn" name="send_message" value="Send Message">
				</form>
			</div>
		</div>
	</section>
	<?php include './includes/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src="./js/main.js"></script>
</html>