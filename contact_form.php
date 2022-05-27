<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'ann@gmail.com';  //sender's email
	$email_subject = 'Bookings';
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
						
	$to = "ckclement954@gmail.com";    //hotel manager's email
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers); 
	header("Location: connect.php");   //returns to the form's page
?>