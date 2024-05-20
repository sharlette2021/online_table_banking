<?php 
	session_start();
	if(isset($_SESSION['client'])){
		unset($_SESSION['client']);

		header("location:../client_signin.php");
	}
?>