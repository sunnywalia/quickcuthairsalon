<?php include('confige.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  
@media only screen and (min-width: 0px) and (max-width: 450px)  {
.slider1{

      background-repeat: no-repeat; 
      width: 100%;
      height: 180px;
      animation: slide 30s infinite;
      background-size: contain;
    margin-top:16%;  
}	
}

    .service h2 {
    display: block;
    color: #00a4e4;
    font-size: 2.5em;
    position: inherit;
    padding-bottom: .5em;
    text-align: center;
    margin-top: 1%;
    text-shadow: 2px 2px 5px black;
}

.more a {
    display: inline-block;
    font-size: 1.5em;
    color: #fff;
    background: #ffcc54;
    padding: .6em 3em;
    margin-top: .8em;
    margin-bottom: 5%;
    border-radius: 4px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}
.more a:hover{


  color: black;
  background: white;
  /*border: 3px solid white;*/
  box-shadow: 3px 5px 5px 5px black;
  border-radius: 15px;
  text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    box-sizing: border-box;
    
}



#slider12{

  display: block;
  width: 100%;
  background-color: transparent;
  position: relative;
  height: 500px;
}

  </style>


</head>
<?php include('header.php'); ?>

 
  <?php include('header1.php'); ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
   <div class="clear"></div>
	<div class="clearfix"></div>

  <div class="service">
   


      <!--<img src="images/about.jpg">-->

			<h2>Welcome To Our Salon</h2>
			<p style="width:80%; margin-left: 10%; text-transform: lowercase; font-weight: 500;">
				QUICK CUT STYLE UNISEX SALON IS A ONE PLACE FOR ALL YOUR BEAUTY NEEDS. WITH DIFFERENT BEAUTY SERVICES; BEST STANDARDS IN CLEANLINESS AND SANITIZATION, BEST SERVICE TECHNIQUES; QUICK CUT STYLE UNISEX SALON COULD DRAW AN EDGE IN THE BEAUTY MARKET. OUR SERVICES INCLUDE BUT NOT LIMITED TO NAIL THERAPY, MANICURE & PEDICURE, HAIR TREATMENT, SCULPTURE CUT, SHAPING AND STYLING, HAIR COLORING, SKIN TREATMENT AND THERAPY, ALL PERFORMED BY AN EXPERT AND FRIENDLY TEAMS.
			</p>
			<div class="clear"></div>

			<h2>Our Customer With Their New Style</h2>
	
		</div>



<div class="container-fluid text-center bg-grey">


		<div class="row text-center">
              <?php

            $result =mysql_query("select * from content");
            while($row=mysql_fetch_array($result)){

          ?>
              <div class="col-sm-4"style="margin-left: 3%; margin-bottom:5%; box-sizing: border-box;">
                <div class="thumbnail">
                  <img src="images/<?php echo $row['image']; ?>" alt="GRP pipes" width="400" height="300">
                  <p><strong><?php echo $row['job']; ?></strong></p>
                  <p><?php echo $row['description']; ?></p>
                  <div class="more">
                      <a href="book.php">Book Now</a>        
                    </div>
                </div>
              </div>

              <?php 
                }
              ?>
    </div>

</div>
<?php include 'footer.php'; ?>

</body>

</html>
<!-- <div class="col-sm-4">
      <div class="thumbnail">
        <img <s></s>rc="images/2.jpg" alt="Mouldtrusion products" width="400" height="300">
        <p><strong>Straight Hair products</strong></p>
        <p> Yes, we provide material for  Straight Hair</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/3.jpg"  alt="Pultrusion optical fibre cable" width="400" height="300">
        <p><strong>Haircut</strong></p>
        <p>New Hair Style</p>
      </div>
    </div>
  </div><br>
  <div class="row text-center ">
    <div class="col-sm-4" style="margin-left: 5%">
      <div class="thumbnail">
        <img src="images/5.jpg" alt="RTM" width="400" height="300">
        <p><strong>Hair Color</strong></p>
        <p>Yes, we provide material for  Hair Color</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/6.jpg" alt="SMC Water Tank" width="400" height="300">
        <p><strong>Trim Hair And Style</strong></p>
        <p> Trim hair and style</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/7.jpg" alt="Wood coating" width="400" height="300">
        <p><strong>Haircut</strong></p>
        <p>New Hair Style and Shave </p>
      </div>
    </div>
  </div><br>
  <div class="row text-center ">
    <div class="col-sm-4" style="margin-left: 5%">
      <div class="thumbnail">
        <img src="images/8.jpg" alt="Automotive refinish" width="400" height="300">
        <p><strong> back and side HairCut </strong></p>
        <p>New Back And Side Style</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/9.jpg" alt="Can coating" width="400" height="300">
        <p><strong>shave</strong></p>
        <p> New Shave Style</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/5.jpg" alt="Can coating" width="400" height="300">
        <p><strong>Simple Hair Cut  Touch up</strong></p>
        <p> Hair Cut  Touch up</p>
      </div>
    </div> -->