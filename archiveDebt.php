<?php
include('base.php');
if(!empty($_POST['userGet'])){
	$q = "delete from owe_Debt where UserGet = '".$_POST['userGet']."' and UserPay = '".$_POST['userPay']."' and Date = '".$_POST['date']."'";
	$r = mysqli_query($db_conn, $q);
	echo $_POST['userGet']."".$_POST['userPay']."".$_POST['date']."";
}

?>