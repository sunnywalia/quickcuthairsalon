<?php
if(isset($_POST['register']))
			{
					

					$qry = mysql_query("insert into registrationmst (`user_name`,`email`,`password`,`contact_no`,`gender`) values ('".$_POST['user_name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contact_no']."','".$_POST['gender']."')");

					if($qry)
					{


						echo "<script> alert('registration sucessfull..!!!')</script>";
					}




			}



?>
