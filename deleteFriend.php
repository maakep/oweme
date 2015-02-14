<?php
include('base.php');

if($_POST['friend']){

	$q = "delete from owe_Friendlist where Username = '".$_SESSION['username']."' and Friend ='".$_POST['friend']."'";

	$r = mysqli_query($db_conn, $q);

	$array = $_SESSION['friends'];
	$i = array_search($_POST['friend'], $array);

	unset($array[$i]);

	$_SESSION['friends'] = $array;

	echo $_POST["friend"] . ' deleted.';
}
?>