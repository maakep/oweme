<?php
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {

	$to = $_POST['email'];
	$subject = "Activating OweMe account";
	$url = 'http://hajkep.se/oweme/activate.php?user='.$_POST['username'].'&email='.$_POST['email'].'&key='. md5($_POST['password']);

	$message ="Hello, thank you for using OweMe. \r\n\r\nTo Activate your account please follow the following link: \r\n\r\n ".$url."\r\n\r\n Regards,\r\nThe OweMe Team" ;

	$from = "From: OweMe <noreply@hajkep.se>";
	
	mail($to, $subject, $message, $from);

	header('Location: thankyou.php');
}

?>