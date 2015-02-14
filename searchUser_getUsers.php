<?php
include('base.php');
if($_POST['search']){
	$username = ucfirst(strtolower($_POST['search']));
	$q = "select * from owe_User where Username like '%".$username."%'";

	$users = mysqli_query($db_conn, $q);
	if(empty($users)){
		echo 'No users with that name';
		exit();
	}
	echo '<table style="width:50%" class="table">';
	while($user = mysqli_fetch_array($users)){
		echo '<tr>
				<td><strong>'.$user["Username"].'</strong></td><td> <button class="btn btn-default" id="btn'.$user["Username"].'" onclick="addFriend(\''.$user["Username"].'\');">Add</button></td>
			</tr>
			';
	}
	echo '</table>';

}


?>