<?php
include('base.php');
if($_POST['friend']){
	$q = "insert into owe_Friendlist values('".$_SESSION['username']."','".$_POST['friend']."');";

	$users = mysqli_query($db_conn, $q);
	
	if(mysqli_affected_rows($db_conn) > 0){
		array_push($_SESSION['friends'], $_POST['friend']);
	}
}


?>