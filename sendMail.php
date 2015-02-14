<?php
if($_POST['message']){
	$from = $_POST['from'];
	$to = "schon.fredrik@gmail.com";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	mail($to, $subject, $message, "from: ".$from);

	header("Location: thankyou.php");
}

echo "something went wrong";
?>