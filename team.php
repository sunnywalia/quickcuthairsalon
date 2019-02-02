<?php include('confige.php'); ?>
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
    height: 900px;
    display: block;
    position: relative;

  }
  .package .col-sm-3{

display: inline-block;
  width: 20%;
  height: 650px;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: white;
  margin-left:3%;
  margin-top: 3%;
  text-align: center;
  padding:0px; 



}

.package .col-sm-3:hover{

   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 40px 15px #aaa;
    -moz-box-shadow: 15px 15px 40px 15px #aaa;
    box-shadow: 15px 15px 40px 15px #aaa;
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
    width: 81px;
    content: "";
    margin: 8px auto 0;
}
.package .col-sm-3 p {
    font-size: 15px;
    text-align: center;
    margin: 20px auto;
    width: 60%;
    color: #5e5e5e;
    line-height: 1.8em;
}
.package .col-sm-3 img {
    width: 100%;
}
.package .col-sm-3 h3 {
    text-align: center;
    margin-top: 20px;
    font-size: 22px;
    color: #000;
    text-transform: capitalize;
    margin-top: 3%;
    font-family: 'Khula', sans-serif;
    font-weight: 700;
}
.package .col-sm-3 h4 {
    text-align: center;
    font-size: 18px;
    margin: 10px 0 0;
    letter-spacing: 1px;
    color: #03A9F4;
    font-weight: normal;
    font-family: 'Khula', sans-serif;
}
.package .col-sm-3 p{

    color: #212121;
    color: #757575;
    line-height: 26px;
    padding: 20px;
    text-align: center;
    margin-left: 20%;
}
.package .col-sm-3 i.fa.fa-twitter {
    color: white;
}
.package .col-sm-3 i.fa.fa-linkedin{
  color:white;


}
.package .col-sm-3 i.fa.fa-pinterest-p{
  color: white;

}
.package .col-sm-3 i.fa.fa-twitter:hover {
    background-color:#1da1f2;
}
.package .col-sm-3 i.fa.fa-linkedin:hover{
  background-color: #1da1f2;  
}
.package .col-sm-3 i.fa.fa-pinterest-p:hover{
background-color: red;
}

 .package .col-sm-3 a i {
    color: #000;
    font-size: 16px;
    border: 1px solid #8a8a8a;
    padding: 10px;
    width: 35px;
    height: 35px;
    line-height: 15px;
}


.package .col-sm-3 .team-social a i {
    color: #000;
    font-size: 16px;
    border: 1px solid #8a8a8a;
    padding: 10px;
    width: 35px;
    height: 35px;
    line-height: 15px;
    margin: 0%;
    background-color: gray;
}
/*.package .col-sm-3 .team-social a i:hover {
    
    background-color: red;
    font-size: 16px;
    border: 1px solid #8a8a8a;
    padding: 10px;
    width: 35px;
    height: 35px;
    line-height: 15px;
    margin: 0%;
}*/
.package .col-sm-3 .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
        text-align: center;
}
.clear{
    clear:both;
}
@media screen and (min-width: 0px) and (max-width: 850px){
    body .package {

    width: 100%;
    padding: 5%;
    background-color: white opacity:0.5%;
    height: 2800px;
    display: block;
    position: initial;

  }
      
  
.w3l_header {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: initial;
    font-weight: 600;
    text-align: center;
}      
  .package .col-sm-3{

display: inline-block;
  width: 100%;
  height: 650px;
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
.package .col-sm-3:hover{

   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 40px 15px #aaa;
    -moz-box-shadow: 15px 15px 40px 15px #aaa;
    box-shadow: 15px 15px 40px 15px #aaa;
}
      
  }
</style>
</head>
<?php include ('header.php'); ?>
<body>
  <div class="package">
          <h3 class="w3l_header"><span>Our</span> Team</h3>
        
      

      
        <div class="col-sm-3">
          <img src="images/t7.jpg" alt="" />
          <h3>Mary louis</h3>
          <h4>Hairstylist</h4>
          <p>Treat yourself to a facial or celebrating a special aromatherapy.</p>
       
        </div>
        <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t8.jpg" alt="" />
          <h3>Evie kerry</h3>
          <h4>Beautician</h4>
          <p>our beauty and skin care services will suit every beauty need.</p>
    
        </div>
        <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t9.jpg" alt="" />
          <h3>Olivia watson</h3>
          <h4>Cosmetologist</h4>
          <p>Experience our new hair styles and hair colors.</p>
      
        </div>
        <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t2.jpg" alt="" />
          <h3>John pret</h3>
          <h4>Cosmetologist</h4>
          <p>Our styling techniques are more professional and unique.</p>
      
        </div>
       <!-- <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t3.jpg" alt="" />
          <h3>james trump</h3>
          <h4>Hair Stylist</h4>
          <p>Treat yourself to a facial or celebrating a special aromatherapy.</p>
          <div class="team-social">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t4.jpg" alt="" />
          <h3>alex jocky</h3>
          <h4>Cosmetologist</h4>
          <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
          <div class="team-social">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="col-sm-3">
          <img src="images/t5.jpg" alt="" />

          <h3>billu barber</h3>
          <h4>Stylelist</h4>
          <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
          <div class="team-social">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>        
        </div>
        <div class="clear"></div>
 --></div>
<div class="clear"></div>
</body>
</html>
<?php include('footer.php'); ?>
