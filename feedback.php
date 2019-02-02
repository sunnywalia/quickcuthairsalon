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
  .package .list{

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
.package .list label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .list  input[type="text"],select,option,.package .list  input[type="email"] {
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
.package .list select option{

  padding: 9px;
}

/* contact form */
.package .list  input[type="text"],.package .list  input[type="email"] {
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
.package .list  textarea {
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
.package .list  input[type="submit"] {
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
.package .list  input[type="submit"]:hover {
    background: #000;
  color:#fff;
}
.package .list  h3,.ser-top h3,.w3ls-heading h3,.agileits_w3layouts_head h3,.customer h3{
    text-transform: uppercase;
    text-align: center;
  font-size:30px;
  color:#000;
  margin-bottom:2em;
}
.package .list label.header {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    text-align: justify;
    text-transform: capitalize;
    float: left;
    margin-bottom: 8px;
}
.package .list .form-control {
    border: none;
    box-shadow: none;
}
/* //contact form */
@media screen and (min-width: 0px) and (max-width: 850px){
    body .package {

    width: 100%;
    padding: 5%;
    background-color: white opacity:0.5%;
    height: 1650px;
    display: block;
    position: initial;

  }
      
  
  .package form {
    width: 80%;
    margin: 5% 10%;
}
  .package .list{

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
          <h3 class="w3l_header">Client Feedback <span>Form</span></h3>
          <p style="width:80%; margin-left: 8%; text-align: center;">
        
Our aim is to provide a quality client focused service where treatments are of the highest possible standard. We are continuously striving to improve the salon and as a client, your feedback, suggestions and comments are an integral part of achieving this.
      </p>
          <div class="list">
          <form action="feedback.php" method="post">
          
          
            <div class="f-control"> 
              <label class="header">User Name <span>:</span></label>
              <input type="text" name="user_name" placeholder="Name" required="">
            </div>
            <div class="f-control"> 
              <label class="header">How would you rate your treatment experience<span>?</span></label>
              <textarea type="text" name="comment1" placeholder="Type Here...." required=""></textarea>
              
            </div>
            <div class="f-control">

              <label class="header"> How would you rate the appearance and comfort of our treatment rooms<span>?</span></label>
              <textarea type="text" name="comment2" placeholder="Type Here...." required=""></textarea>
              
            </div>  
        
            
            <div class="f-control">

              <label class="header">How would you rate the manner and helpfulness of our staff<span>?</span></label>
              <textarea type="text" name="comment3" placeholder="Type Here...." required=""></textarea>
              
            </div>  

            <!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
           
         
            
              <!-- <label class="header">Gender <span>:</span></label>
              <select name="gender">

                <option value="male">Male</option>
                <option value="Female">Female</option>
                
              </select>
             -->
            
          
          <div class="clearfix"> </div> 
          <input type="submit" name="submit" value="Submit">
        

        </form>

        </div>
</div>

<?php
if(isset($_POST['submit']))
      {
            
          

          $qry = mysql_query("insert into feedbackonservice (`user_name`,`treatmentexperience`,`comfortofourtreatment`,`helpfulnessofourstaff`) values ('".$_POST['user_name']."','".$_POST['comment1']."','".$_POST['comment2']."','".$_POST['comment3']."')");

          if($qry)
          {


            echo "<script> alert('Thanks For Your Feedback..!!!')</script>";
          }




      }



?>

</body>
<?php  include('footer.php');?>
</html>

