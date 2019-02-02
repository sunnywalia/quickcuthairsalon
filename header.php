<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quick cut Hair salon</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		
header .leftnav .logo{

	
	position: absolute;
    
    top: 0;
    left: 5%;


}
header .marquee{
  position: absulute;
  bottom: 500px;
	width: 100%;
	font-family: times new roman sans-serif;
	font-size: 1.5em;
	color: red;
	font-weight: 900;
	font-style: all;
	word-spacing: 1px;
	height: auto;
	
	font-variant: small-caps;
}
header .marquee span{


	color:blue;
	font-size: 1em;
	text-transform: uppercase;
}


/*----------------------------------------------menu-----------------------------------------------*/
.dropdown {
    position: relative;
    display: inline-block;
    width: 100%;
    background-color:#232323;
}
 
.dropdown .dropbtn {

	position: relative;
  bottom: 100%;
  right: 0;

    display: none;
    float:none;
    color: white;
    padding: 15px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-align: center;
    background-color:#232323; 
}
.dropdown-content .removebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 48px;
    margin-left: 50px;
    color: white;
}

.dropbtn span i.fa-bars{

   font-size:30px;
   cursor:pointer
   color:gold;
   font-weight:900;
}
span i{

    margin: 3px;
    padding: 3px;
}

.dropdown-content {
   height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
   	left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
   .dropdown-content ul{
                
                margin:0;
                padding:0; 
                list-style:none;
                text-align: center;
              }
.dropdown-content li{margin:15px; text-transform:uppercase;}

.dropdown-content a {
    color: black;
    text-decoration: none;
    display: block;
    color : white;
    padding: 10px;    
}
.dropdown-content a:hover {background-color: #f1f1f1;  color:black;}
/*------------------------------------------------------------------------------------------------------------*/
@media screen and (min-width: 851px) and (max-width: 3000px){
  .dropdown:hover .dropdown-content {
    display: none;

}
.dropdown .dropbtn{
        display: none;
   
    background: transparent;

  position: absolute;
  
  top: 0;
}


}

@media screen and (min-width: 0px) and (max-width: 850px){

	body	header {
    position: sticky;
    width: 100%;
    height: 199px;
    background: url(images/22.jpg) no-repeat;
    background-size: contain;
}
header .marquee{
    
    display:none;
}
.rightnav{

	display: none;
}
   .dropdown:hover .dropdown-content {
    display: block;

}
.dropdown .dropbtn{
        display: inline-block;
   
    background: transparent;

	position: absolute;
  
  top: 0;
}
 .dropdown .removebtn {
    display: block;
/*https://www.w3schools.com/howto/howto_js_off-canvas.asp*/
}
.dropbtn:hover span{
    
    background-color: #232323;
    color: black;
}

}



	</style>
    <script src="js/nav.js"></script>


</head>
<body>

	<header id="header">
    
			<div class="leftnav">
				<!-- <h1><span>Q</span>uick <span>C</span>ut <span>S</span>tyle <span>S</span>alon 
				</h1><h2><span>U</span>nisex <span>S</span>alon</h2> -->
				<a href="index.php"><img class="logo" id="logo" src="images/quickcutsalonlogo.png"  alt="logo"></a>
			</div>
		<div class="rightnav" id="rightnav">
					<ul class="linkEffects linkHoverEffect_12" >
						<li class="first"><a href="index.php"><span>home</span></a></li>
						<li><a href="about.php"><span>about us</span></a></li>
						<li><a href="package.php"><span>packages</span></a></li>
						
						<li><a href="feedback.php"><span>feedback</span></a></li>
						<li><a href="team.php"><span>team</span></a></li>
						<li ><a href="contact.php"><span>contact us</span></a></li>
             <?php if(isset($_SESSION['valid_user'])): ?>
						<li><a href="logout.php"><span>SignOut</span></a></li>
            <?php else: ?>
            <li><a href="login.php"><span>SignIn</span></a></li>
            <?php endif; ?>
					</ul>
		</div>

	
	<div class="dropdown ">
   				<button id="main" class="dropbtn clear"><span onClick="openNav()"><i style=" color:gold;" class="fa fa-bars"></i></span></button>
		 
		  			 <div id="mySidenav" class="dropdown-content">
  	                	<ul>
  	                			<li><a:hover style="background-color: #111;" href="javascript:void(0)" class="removebtn" onclick="closeNav()">&times;</a></li>
								<li><a href="index.php">HOME</a></li>
								<li><a href="about.php">ABOUT US</a></li>
								<li><a href="package.php">PACKAGES</a></li>								
								<li><a href="feedback.php">FEEDBACK</a></li>
								<li><a href="team.php">TEAM</a></li>
								<li><a href="contact.php">CONTACT US</a></li>
                
                <?php if(isset($_SESSION['valid_user'])): ?>
                <li><a href="logout.php">SignOut</a></li>
            <?php else: ?>
            <li><a href="login.php">SignIn</a></li>
            <?php endif; ?>
								

							</ul>
   				
   						</div>
   		<!-- <button class="removebtn clear"><span><i class="glyphicon glyphicon-remove"></i></span></button>		 -->
	</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.display= "block";
}
</script>

			
<div class="clear">
	


	</header>
<div class="clearfix"></div>
</body>
</html>