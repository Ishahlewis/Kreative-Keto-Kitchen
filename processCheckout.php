<?php 
	//Import the PHPMailer class into the global namespace
	use PHPMailer\PHPMailer\PHPMailer;

	require 'mailer/PHPMailer.php';
	// require 'mailer/SMTP.php';

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

	$deliveryCost = substr($delivery, strpos($delivery, '$')+1, -1);
	$subject = $data['subject'];

	$msg = "<p>Thanks for ordering from Kreative Keto! \r\n Displayed below are your details, get in contact with me if you wish to have your tracking number for postage.</p>" . "\r\n";
	$msg .= '<p>You ordered: </p>' . "\r\n";
	//order list ^
	$msg .= '<p>Your order specifications are: ' . $text . '</p>'."\r\n";
	$msg .= '<p>Your delivery method is ' . $delivery . '</p>'. "\r\n";
	$msg .= '<p>Delivery address: ' . $subject . '</p>'. "\r\n";
	// I think subject is the address form.
	$total = 0;
	foreach ($cart as $key=>$quantity){

		$product = $products[$key];
		$msg .= '<p>'. $product['title'] . ' x ' . $quantity . '</p>'."\n";

		$total += $quantity * $product['price'];

	}
	$msg .= 'Total price of order (including shipping) is $' .number_format($total+$deliveryCost,2) ."\r\n";
	$msg .= 'Please pay the full amount via internet banking to - 020152 - 0046534 - 83.' . "\r\n" . 'Please use your name as a reference when paying and notify me when the payment has been made in order for me to commence baking. While it is not neccessary, a screen shot of the payment is helpful.' . "\r\n";

	// // use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// // send email
	// mail($customerEmail.','.$adminEmail,"Order",$msg);
	// echo $msg;




	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Set who the message is to be sent from
	$mail->setFrom($adminEmail, 'Kreative Keto Kitchen');
	//Set an alternative reply-to address
	$mail->addReplyTo($adminEmail, 'Kreative Keto Kitchen');
	//Set who the message is to be sent to
	$mail->addAddress($customerEmail, $name);
	$mail->addAddress($adminEmail, 'Kreative Keto Kitchen');
	//Set the subject line
	$mail->Subject = 'Order from ' . $name;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($msg);

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}



	// echo $msg;

	unset($_SESSION['cart']);
	header('Location:index.php');

	
 ?>