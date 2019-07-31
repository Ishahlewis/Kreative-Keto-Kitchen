<?php 

	require('functions.php');
	

	$productKey = $_POST["product-key"];
	$quantity = $_POST["Quantity"];


	if(isset($cart[$productKey]) == false){
		$cart[$productKey] = $quantity;
	}else{
		$cart[$productKey] += $quantity;
	}

	 $_SESSION['cart'] = $cart;


	header('Location:cart.php');

	
 ?>