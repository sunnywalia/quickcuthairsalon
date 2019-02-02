<!DOCTYPE html>
<?php
  
    include('confige.php');
?>

<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
   body .package {

    width: 100%;
    padding: 1%;
    background-color: white opacity:0.5%;
    height: 550px;
    display: block;
    position: relative;

  }
  .package .login{

display: inline-block;
  width: 90%;
  height: 380px;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  margin-left:5%;
  margin-top: 3%;
  text-align: center;
  padding:0px; 



}
.w3l_header {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: relative;
    font-weight: 600;
    text-align: center;
}
.w3l_header span {
    color: #545151;
    font-weight: 200;
}
.w3l_header:after {
    border-top: 2px solid #ffcc54;
    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
.package .login label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .login  input[type="text"],input[type="date"],select,option,.package .login  input[type="email"] {
    width: 100%;
    color: #999;
    float: left;
    background: none;
    outline: none;
    font-size: 1em;
    padding: .85em 1em;
    margin-bottom: 20px;
    border: solid 1px #c7c7c7;
    -webkit-appearance: none;
    display: inline-block;
}


/* contact form */
.package .login  input[type="text"],input[type="password"],.package .login  input[type="email"] {
    width: 100%;
    color: #999;
    float: left;
    background: none;
    outline: none;
    font-size: 1em;
    padding: .85em 1em;
    margin-bottom: 20px;
    border: solid 1px #c7c7c7;
    -webkit-appearance: none;
    display: inline-block;
}
.package  form{

  width: 60%;
  margin:5% 20%;

}
.package .login  input[type="submit"] {
    outline: none;
    color: #fff;
    padding: .5em 2em;
    margin-left: 15px;
    font-size: 1em;
    -webkit-appearance: none;
    background: #ffcc54;
    border: none;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
    /* width: 100%; */
    letter-spacing: 1px;
}
.package .login  input[type="submit"]:hover {
    background: #000;
  color:#fff;
}
.package .login  h3,.ser-top h3,.w3ls-heading h3,.agileits_w3layouts_head h3,.customer h3{
    text-transform: uppercase;
    text-align: center;
  font-size:30px;
  color:#000;
  margin-bottom:2em;
}
.package .login label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .login .form-control {
    border: none;
    box-shadow: none;
}
/* //contact form */

@media screen and (min-width: 0px) and (max-width: 850px){
body .package {

    width: 100%;
    padding: 5%;
    height: 460px;
    display: block;
    position: initial;

  }
  .package form {
    width: 80%;
    margin: 5% 10%;
}
 .package .login{

display: inline-block;
  width: 100%;
  height: auto;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  margin-left:0%;
  margin-top: 3%;
  text-align: center;
  padding:0px; 
  position:initial;



}

.w3l_header {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: initial;
    font-weight: 600;
    text-align: center;
}

}
</style>
</head>
<?php  include('header.php');?>
<body>



<div class="package">
          <h3 class="w3l_header">Login  <span>Here</span></h3>
          <div class="login">
          <form action="verify.php" method="post">
          
          
            <div class="f-control"> 
              <label class="header">User Email <span>:</span></label>
              <input type="text" name="email" placeholder="Name" required="">
            </div>
            <div class="f-control"> 
              <label class="header">Password <span>:</span></label>
              <input type="password" class="email" name="password" placeholder="Type Password" required="">
            </div>
         
            
            
          
          <div class="clearfix"> </div> 
          <input type="submit" name="login" value="Login">
        <div class="clearfix"> </div> 
        <div class="f-control"> 
              <label style="width: 100%; text-align: center;">Create An Account.? <span><a href="membership.php">Click Here</a></span></label>
              
        </div>
        </form>
        


        </div>
</div>
<?php
error_reporting(0);
if($_GET['wrong']=='access'){
  echo "Username/Password mismatch !!!";
}
?>




</body>
<?php  include('footer.php');?>
</html>

