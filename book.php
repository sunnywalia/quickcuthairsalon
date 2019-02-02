<?php require('connection.php'); ?>

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
    height: 1800px;
    display: block;
    position: relative;

  }
  .package .login{

display: inline-block;
  width: 90%;
  height: 850px;
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
.package .login select option{

  padding: 9px;
}

/* contact form */
.package .login  input[type="text"],.package .login  input[type="email"] {
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
.package .login  textarea {
    resize: none;
    width: 100%;
    background: none;
    color: #999;
    font-size: 1em;
    outline: none;
    padding: 1em .8em;
    border: solid 1px #c7c7c7;
    min-height: 17em;
    -webkit-appearance: none;
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
    background-color: white opacity:0.5%;
    height: 850px;
    display: block;
    position: initial;

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

  .package form {
    width: 80%;
    margin: 5% 10%;
}

.w3l_header {
    font-size: 2em;
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
          <h3 class="w3l_header">Book An  <span>Appoinment</span></h3>
          <div class="login">
          <form action="book.php" method="post">
          
          
            <div class="f-control"> 
              <label class="header">User Name <span>:</span></label>
              <input type="text" name="username" placeholder="Name" value="<?php echo $_SESSION['loginname']; ?>" readonly="" required="">
            </div>
             <div class="f-control"> 
              <label class="header">User Email <span>:</span></label>
              <input type="text" name="useremail" placeholder="Email" value="<?php echo $_SESSION['loginemail']; ?>" readonly="" required="">
            </div>
            <div class="f-control"> 
              <label class="header">Contact No <span>:</span></label>
              <input type="text" class="email" name="contactno"  placeholder="Contact No" required="">
            </div>
            <div class="f-control">
              <label class="header">package <span>:</span></label>

              <select name="package">
          <?php

            $result =mysql_query("select * from package");

            while($row=mysql_fetch_array($result)){


          ?>
                <option value="<?php echo $row['pname'];echo $row['price'];  ?>"><?php echo "Package:<b>" . $row['pname']."</b>"; echo "    Price:<b>" . $row['price']. "</b>";  ?></option>
                
                
                 <?php
                                                 
                }
              ?>

              </select>
            </div>  
           <div class="f-control">
              <label class="header">Stylist <span>:</span></label>
              <select name="stylist">

                 <?php

            $result =mysql_query("select * from team");
            while($row=mysql_fetch_array($result)){

          ?>
                <option value="<?php echo $row['sname']; ?>"><?php echo $row['sname']; ?></option>
                
                
                 <?php 
                }
              ?>
              </select>
            </div>
            <div class="f-control"> 
              <label class="header">Date <span>:</span></label>
              <input type="date" name="bookdate">
            </div>  

            <!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
           
         
            
            
          
          <div class="clearfix"> </div> 
          <input type="submit" name="book" value="Book">
        

        </form>

        </div>
</div>

<?php
if(isset($_POST['book']))
      {
            
          

          $qry = mysql_query("insert into book (`username`, `contactno`, `package`,`stylist`, `date`)values ('".$_POST['username']."','".$_POST['contactno']."','".$_POST['package']."','".$_POST['stylist']."','".$_POST['bookdate']."')");

          if($qry)
          {


                  session_unset();
                  session_destroy();
                  echo "<script> alert('Appoinment sucessfull..!!!')</script>";
                  
                  echo '<meta http-equiv="refresh" content="0; url=index.php">';




          }




      }



?>

</body>
<?php  include('footer.php');?>
</html>

