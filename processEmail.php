<?php 

	require('functions.php');
	


	$customerEmail = $_POST['email'];


	$_SESSION['customerEmail'] = $customerEmail ;



	header('Location:cart.php');

	
 ?>