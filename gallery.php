<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OUR GALLERY</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/gallery.css">
		<!--fontawesome cdn-->
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
.gallery{
	position:relative;
	padding-top:1%;
	min-height:100vh;
	background:#ddd;
}
.gallery h1{
	font-size:30px;
	font-weight:normal;
	padding:10px;
	color:#333;
	text-align:center;
	text-transform:capitalize;
}
.gallery .image-container{
	display:flex;
	flex-wrap:wrap;
	gap:10px;
	justify-content:center;
	padding:10px;
}
.gallery .image-container .image{
	height:250px;
	width:350px;
	border:10px solid #ffff;
	box-shadow:0 5px 15px rgba(0,0,0,.1);
	overflow:hidden;
	cursor:pointer;
}
.gallery .image-container .image img{
	height:100%;
	width:100%;
	object-fit:cover;
	transition:.2s linear;
}
.gallery .image-container .image:hover img{
	transform:scale(1.1);
}
.gallery .popup-image{
	position:fixed;
	top:8%;
	left:0;
	background:rgba(0,0,0,0.9);
	height:100%;
	width:100%;
	z-index:100;
	display:none;
}
.gallery .popup-image span{
	position:absolute;
	top:0;
	right:10px;
	font-size:60px;
	font-weight:bolder;
	color:#fff;
	cursor:pointer;
	z-index:100;
}
.gallery .popup-image img{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	border:5px solid #fff;
	border-radius:5px;
	width:750px;
	object-fit:cover;
}
@media(max-width:760px){
	.gallery .popup-image img{
		width:95%;
	}
}
	</style>
	<body>
		<?php include './includes/header.php';?>

		<div class="gallery">
			<h1 class="head">PESAPAP GALLERY</h1>
			<div class="image-container">
				<div class="image"><img src="./gallery/pic1.jpeg"></div>
				<div class="image"><img src="./gallery/pic2.jpeg"></div>
				<div class="image"><img src="./gallery/pic3.jpeg"></div>
				<div class="image"><img src="./gallery/pic4.jpeg"></div>
				<div class="image"><img src="./gallery/pic5.png"></div>
				<div class="image"><img src="./gallery/pic6.jpeg"></div>
				<div class="image"><img src="./gallery/pic7.jpeg"></div>
				<div class="image"><img src="./gallery/pic8.jpeg"></div>
				<div class="image"><img src="./gallery/pic9.jpeg"></div>
				<div class="image"><img src="./gallery/pic10.jpeg"></div>
				<div class="image"><img src="./gallery/pic11.jpeg"></div>
				<div class="image"><img src="./gallery/pic12.jpeg"></div>
				<div class="image"><img src="./gallery/pic13.jpeg"></div>
				<div class="image"><img src="./gallery/pic14.jpeg"></div>
				<div class="image"><img src="./gallery/pic15.jpeg"></div>
				
				
			</div>
				<div class="popup-image">
					<span>&times;</span>
				<div class="image"><img src="./blog/profile16.jpg"></div>
				</div>
				</div>
				<?php include './includes/footer.php';?>
		
		<script>
			document.querySelectorAll('.image-container img').forEach(image =>{
				image.onclick=()=>{
					document.querySelector('.popup-image').style.display='block';
					document.querySelector('.popup-image img').src = image.getAttribute('src');
				}
			});
			document.querySelector('.popup-image span').onclick = ()=>{
				document.querySelector('.popup-image').style.display='none';
			}
		</script>
	</body>
</html>