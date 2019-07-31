<?php 

	require('functions.php');
	

	$productKey = $_GET["product"];

	unset($cart[$productKey]);

	$_SESSION['cart'] = $cart;

	header('Location:cart.php');

	
 ?>