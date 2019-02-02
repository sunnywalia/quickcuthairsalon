<?php
  
    include('confige.php');
?>
<!DOCTYPE html>
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
    height: 1500px;
    display: block;
    position: relative;

  }
  .package .col-sm-11{

display: inline-block;
  width: 90%;
  height: auto;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  margin-left:5%;
  margin-top: 0%;
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
.package .col-sm-11 label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .col-sm-11  input[type="text"],select,option,.package .col-sm-11  input[type="email"] {
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
.package .col-sm-11 select option{

  padding: 9px;
}

/* contact form */
.package .col-sm-11  input[type="text"],.package .col-sm-11  input[type="email"] {
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
.package .col-sm-11  textarea {
    resize: none;
    width: 100%;
    float: left;
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
  margin:0% 20%;

}
.map-home a {
    color: #000;
}
.map-home a:hover {
    color: #146eb4;
}
.package .col-sm-11  input[type="submit"],.package .col-sm-11  button[type="submit"] {
    outline: none;
    color: #fff;
    padding: .5em 2em;
    margin-left: 15px;
    font-size: 1em;
    margin-top: 5%;
    -webkit-appearance: none;
    background: #ffcc54;
    border: none;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
    /* width: 100%; */
    letter-spacing: 1px;
}
.package .col-sm-11  input[type="submit"]:hover ,.package .col-sm-11  button[type="submit"]:hover {
    background: #000;
  color:#fff;
}
.package .col-sm-11  h3,.ser-top h3,.w3ls-heading h3,.agileits_w3layouts_head h3,.customer h3{
    text-transform: uppercase;
    text-align: center;
  font-size:30px;
  color:#000;
  margin-bottom:1em;
}
.package .col-sm-11 label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .col-sm-11 .form-control {
    border: none;
    box-shadow: none;
}
.wthree_head_section p {
    width: 100%;
/* //contact form */
}

.contact ul li i.fa-map-marker{ color: black; 
font-size: 25px;}
.contact ul li i.fa-volume-control-phone{color: green;
font-size: 25px;}
.contact ul li i.fa-envelope{color: red;
font-size: 25px;}

ul.top-links li a i.fa {
    color: #f53753;
    color: #fff;
    font-size: 15px;
    background: #656565;
    padding: 0.7em 0;
    width: 35px;
    height: 35px;

    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    line-height: 14px;
    text-align: center;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
}
.top-links i.fa.fa-instagram {
    background: pink;
}
.top-links i.fa.fa-instagram:hover {
    background: #fff;
    color: pink;
}
.top-links i.fa.fa-google-plus {
    background: #dd4b39;
}
.top-links i.fa.fa-google-plus:hover {
    background: #fff;
    color: #dd4b39;
}
.top-links i.fa.fa-twitter {
    background: #0087da;
}
.top-links i.fa.fa-twitter:hover {
    background: #fff;
    color: #0087da;
}
.top-links i.fa.fa-linkedin {
    background: #0077b5;
}
.top-links i.fa.fa-linkedin:hover {
    background: #fff;
    color: #0077b5;
}
h3.connect {
    margin-top: 43px;
}
.contact{

}
.contact h3,h3{

  font-weight: 900;
  font-family: times New roman;

}
.package .col-sm-11 .contact ul,.package .col-sm-11 .contact ul li{

  text-decoration: none;
  display: inline-block;
  text-align: center;

}
.package .col-sm-11  ul,.package .col-sm-11  ul li{

  text-decoration: none;
  display: inline-block;
  text-align: center;

}
.package .col-sm-11 .contact ul li{
  width: 100%;
  margin-right: 5%;
  margin-bottom: 5%;
}
.package .col-sm-11 .contact ul li i{
  margin-right: 5%;
  margin-bottom: 5%;


}
@media screen and (min-width: 0px) and (max-width: 850px){
    body .package {

    width: 100%;
    padding: 5%;
    background-color: white opacity:0.5%;
    height: 1400px;
    display: block;
    position: initial;

  }
      
  .package form {
    width: 80%;
    margin: 5% 10%;
}

  .package .col-sm-11{

display: inline-block;
  width: 100%;
  height: auto;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  position:initial;
  margin-top: 3%;
  text-align: center;
  padding:0px;
  margin-left:0%;



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
          <div class="col-sm-11">
  <div class="container">
    <div class="wthree_head_section">
      <h3 class="w3l_header">Contact <span>Us</span></h3>
      
      </div>    
    
        <div class="contact-w3ls">
          <form method="Get">
          <div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
          
            <div class="f-control"> 
              <label class="header">Full Name <span>:</span></label>
              <input type="text" name="fname" placeholder="Name" required="">
            </div>
            
            <div class="f-control"> 
              <label class="header">Email <span>:</span></label>
              <input type="email" class="email" name="email" placeholder="Email" required="">
            </div>
            
            <div class="f-control">
              <label class="header">Mobile Number <span>:</span></label>
              <input type="text" name="contactno" placeholder="Mobile Number" required="">
            </div>  
            <!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
          </div> 
          <div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
            
              <label class="header">Message <span>:</span></label>
              <textarea type="text" name="message" placeholder="Message" required=""></textarea>
            
            
          </div>
          <div class="clearfix"> </div> 
         <!--  <input type="submit" name="contact" value="send"> -->
          <button type="submit" name="send" class="btn">send</button>
        </form>
        </div>
        <div class="clearfix"></div>
</div>
<div class="contact">

    <h3>Contact Us</h3>
          <ul>
            <li style="font-size: 15px;"><i style="margin-right: 5%; display: block;" class="fa fa-map-marker" aria-hidden="true"><br></i>9 railway Street Gatton 4343,
 <span>Australia.</span></li>
            <li><i style="margin-right: 5%; display: block;" class="fa fa-volume-control-phone" aria-hidden="true"><br></i>+0402575755, +0450798123</li>
            <li><i style="margin-right: 5%; display: block;" class="fa fa-envelope" aria-hidden="true"><br></i>Quickcuthairsalon@gmail.com</li>
            
          </ul>
</div>

  <h3 class="connect">Get Connected</h3>
          <ul class="top-links">
            <li></li>
            <li></li>
            <li><a href="https://www.instagram.com/quickcuthairsalon/"><i class="fa fa-instagram"></i></a></li>
             <li></li>
            <li></li>
          </ul>
</div>

</div>
  

</div>
  <?php
if(isset($_GET['send']))
      {

          $qry = mysql_query("insert into contact_tb(`user_name`, `user_email`, `user_message`, `contact_no`) values ('".$_GET['fname']."','".$_GET['email']."','".$_GET['message']."','".$_GET['contactno']."') ");
          if($qry)
          {


            echo "<script> alert('Message send sucessfull..!!!')</script>";
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
            
          }

          else
          {


            echo "<script> alert('Message send not sucessfull..!!!')</script>";
            echo '<meta http-equiv="refresh" content="0; url=contact.php">';
            
          }



      }



?>

</body>
<?php  include('footer.php');?>
</html>

