<?php 

	require('functions.php');
	
	// print_r($_GET);

	// Array ( [email] => [name] => [text] => [message] => dd [delivery] => 10 [subject] => ee )
	$data = $_GET;
	$adminEmail = 'ishahlewis@gmail.com';
	$customerEmail = $data['email'];
	$name = $data['name'];
	$text = $data['text'];
	$message = $data['message'];
	$delivery = $data['delivery'];
	$subject = $data['subject'];

	$to .= $adminEmail =  


	$msg = "Thanks for ordering from Kreative Keto \r\n Here are your details";


	$total = 0;
	foreach ($cart as $key=>$quantity){

		$product = $products[$key];
		$msg .= $product['title'] . ' | ' . $quantity ."\n";

		$total += $quantity * $product['price'];

	}

	$msg .= ' Total is $' .number_format($total) ."\n";

	$msg .= $message ."\n";
	$msg .= $delivery ."\n";

	// // use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// // send email
	mail($customerEmail.','.$adminEmail,"Order",$msg);

	// echo $customerEmail.','.$adminEmail;
	echo $msg;

	unset($_SESSION['cart']);



	header('Location:index.php');

	
 ?>