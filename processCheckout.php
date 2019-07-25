<?php 

	require('functions.php');
	

	$adminEmail = 'ishahlewis@gmail.com';
	$customerEmail = $_POST['email'];


	$msg = "Thanks for your order\nSecond line of text\n";


	$total = 0;
	foreach ($cart as $key=>$quantity){

		$product = $products[$key];
		$msg .= $product['title'] . ' | ' . $quantity ."\n";

		$total += $quantity * $product['price'];

	}

	$msg .= ' Total is $' .number_format($total) ."\n";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail($customerEmail.','.$adminEmail,"Order",$msg);

	echo $customerEmail.','.$adminEmail;
	echo $msg;

	unset($_SESSION['cart']);



	//header('Location:notice.php');

	
 ?>