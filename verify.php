<?php
error_reporting(0);
session_start();
require('confige.php');

$qry = mysql_query("select * from registrationmst where email = '".$_POST['email']."' and password = '".$_POST['password']."'");


$val = mysql_fetch_array($qry);
if($val != ''){
	$_SESSION['loginuser']  = $val['user_id'];
	$_SESSION['loginname']  = $val['user_name'];
	$_SESSION['loginemail']  = $val['email'];
	$_SESSION['logincontact']  = $val['contactno'];
	$_SESSION['valid_user']  = $val['email'];


	
	echo '<meta http-equiv="refresh" content="0; url=book.php">';
			exit;
}
else{
	echo '<meta http-equiv="refresh" content="0; url=login.php?wrong=access">';
			exit;
}

?>