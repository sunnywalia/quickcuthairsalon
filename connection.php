<?php
error_reporting(0);
session_start();
require('confige.php');

if($_SESSION['loginuser']==''){
	echo '<meta http-equiv="refresh" content="0; url=login.php">';
			exit;
}
else{
	$qry = mysql_query("select * from registrationmst where user_id = '".$_SESSION['loginuser']."' ");
	if(mysql_num_rows($qry)>=1){
	
	}
	else{
			echo '<meta http-equiv="refresh" content="0; url=login.php">';
			exit;
	}
}

?>
