<?php 

	$hostname = "localhost";
	$username = "quickcut_user";
	$password = "Mit@96312!";
	
	$db_handle = mysql_connect($hostname , $username ,$password) or die("unable to connect mysql");
	$selected = mysql_select_db("quickcut_hair",$db_handle) or die("could not connect DB");
	/*if($selected)
	{

		echo "<script> alert('connected'); </script>";
	}*/
	
?>
	 