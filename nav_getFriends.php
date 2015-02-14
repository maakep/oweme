<?php
include('base.php');

if($_SESSION['username']){

	$q = "select * from owe_Friendlist where Username = '".$_SESSION['username']."'";

	$r = mysqli_query($db_conn, $q);

	while($friend = mysqli_fetch_array($r)){
		echo '<li id="'.$friend["Friend"].'">
                <a style="float:left" onclick="document.getElementById(\'usernameOwes\').value=this.text; validateUser(this.text);">'.$friend["Friend"].'</a> <span style="float:right;padding:3px 20px; display:block" onclick="deleteFriend(\''.$friend["Friend"].'\')"><img width="20" height="20" alt="delete friend" title="delete friend" src="http://hocnvivo.com/images/x-icon.png"></span>
                    </li>';
	}
}
?>