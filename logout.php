<?php include('base.php'); 
//töm session-array på sina variabler genom att sätta den till en tom array och avsluta sessionen
$_SESSION = array(); session_destroy();
header('Location: login.php');
?>