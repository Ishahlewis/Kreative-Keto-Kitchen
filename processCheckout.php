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

	$msg = "Thanks for ordering from Kreative Keto! \r\n Displayed below are your details, get in contact with me if you wish to have your tracking number for postage." . "\r\n";
	$msg .= 'You ordered: ' . "\r\n";
	//order list ^
	$msg .= 'Your order specifications are: ' . $text . "\r\n";
	$msg .= 'Your delivery method is ' . $delivery . "\r\n";
	$msg .= 'Delivery address: ' . $subject . "\r\n" . 
	// I think subject is the address form.
	$total = 0;
	foreach ($cart as $key=>$quantity){

		$product = $products[$key];
		$msg .= $product['title'] . ' | ' . $quantity ."\n";

		$total += $quantity * $product['price'];

	}
	$msg .= 'Total price of order (including shipping) is $' .number_format($total) ."\r\n";
	$msg .= 'Please pay the full amount via internet banking to - 020152 - 0046534 - 83.' . "\r\n" . 'Please use your name as a reference when paying and notify me when the payment has been made in order for me to commence baking. While it is not neccessary, a screen shot of the payment is helpful.' . "\r\n";

	// // use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// // send email
	mail($customerEmail.','.$adminEmail,"Order",$msg);

	// echo $customerEmail.','.$adminEmail;
	echo $msg;

	unset($_SESSION['cart']);



	header('Location:index.php');

	
 ?>