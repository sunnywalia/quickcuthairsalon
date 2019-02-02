<?php include('confige.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
   body .package {

    width: 100%;
    padding: 5%;
    background-color: white; /*#585f69;*/
    height: auto;
    display: block;
    position: initial;

  }
  .w3l_header {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: inherit;
    font-weight: 600;
    text-align: center;
    background-color: transparent;
}
.w3l_header:after {
    border-top: 2px solid orange;
    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
.w3l_header span {
    color: #545151;
    font-weight: 200;
}
.package .list{

  /*display: inline-block;
  width: 30%;
  height: 600px;
  float: left;
  clear: right;
  border: 1px solid white;
  border-radius: 5px;
  box-shadow: 1px 5px 11px 3px black;
  background-color: #585f69;
  margin-left:3%;
  margin-top: 3%;
  text-align: center;
  padding:0px; */

    display: inline-block;
    width: 45%;
    height: 600px;
    float: left;
    clear: right;
    border: 1px solid white;
    border-radius: 5px;
    box-shadow: 1px 5px 11px 3px black;
    background-color: white;
    margin-left: 3%;
    margin-top: 3%;
    text-align: center;
    padding: 0px;


}
/*.package .list:hover{

display: inline-block;
  width: 30%;
  height: 600px;
  float: left;
  clear: right;
  border: 2px solid black;
  border-radius: 15px;
  box-shadow: 3px 5px 15px 5px white;
  background-color: #585f69;
  margin-left:3%;
  margin-top: 3%;
  color: black !important;



}*/

 .package .list h1{

  color: black;
  background-color: blue;
  width: auto;
  height: auto;
}

.package .list .w3ls-top h3{
    position: inherit;
    color: #ffcc54;
    font-weight: 900;

    margin: 0 auto;
    font-size: 1.8em;
    text-align: left;
    text-transform: uppercase;
    padding: 1em 0em;
    border-radius: 5px 5px 0;
    border-bottom: 2px solid #ffcc54;
}
@media screen and (min-width: 0px) and (max-width: 850px){
.package .list {
    display: inline-block;
    width: 100%;
    height: 600px;
    float: left;
    clear: right;
    border: 1px solid white;
    border-radius: 5px;
    box-shadow: 1px 5px 11px 3px black;
    background-color: white;
    margin-left: 1%;
    margin-top: 3%;
    text-align: center;
    padding: 0px;
}
.package .comment input[type="radio"]{


  line-height: 1.5em;
  
  line-height: 1.5em;
    font-size: 50px;
    width: 50%;
    height: 30px;
    margin-right:5%;

}/*
.package .list:hover{

display: inline-block;
  width: 100%;
  height: 600px;
  float: left;
  clear: right;
  border: 2px solid black;
  border-radius: 15px;
  box-shadow: 3px 5px 15px 5px white;
  background-color: #585f69;
  margin-left:3%;
  margin-top: 3%;
  color: black !important;



}*/
.package .comment input[type="submit"]  {
    display: inline-block;
    font-size: 1.5em;
    
    background: #ffcc54;
    padding: .6em 3em;
    margin-top: .8em;
    margin-left:11%;    
    border-radius: 15px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    color: black;
     font-family: cursive;
}

}
.package .list  .w3ls-top h3{
    font-size: 2.6em;
    font-weight: 400;
    color: #ffcc54;
    text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    /* text-transform: uppercase; */
}
.package .list .w3ls-bottom {
    padding: 0;
}
.package .list   ul {
   
    display: block;
    list-style-type: disc;
    margin: 0px;
    padding:0px; 

}
.package .list .w3ls-bottom ul li {
    
    font-size: 22px;
    /*color: white;*/
    margin-top: 0em;
    padding-top: 1em;
    display: block;

        color: black;
   text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;

}
/*.package .list .w3ls-bottom ul li:hover{

    color: black;
   text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;

}
*/.package .list  h4 {
    font-size: 2.3em;
    font-weight: 500;
    color: #ffcc54;
    position: relative;
    margin-top: 1em;
    text-align: center;
}
.package .list  h4 span.sup {
    vertical-align: text-top;
    font-size: 0.5em;
}

.package .list .more a{
    
    display: inline-block;
    font-size: 1.5em;
    color: black;
    background: #fff;
    padding: .6em 3em;
    margin-top: .8em;
    border: 1px solid black;
    border-radius: 14px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}
/*.package .list .more a {
    display: inline-block;
    font-size: 1.5em;
    color: black;
    background: #fff;
    padding: .6em 3em;
    margin-top: .8em;
    border: 1px solid black;
    border-radius: 14px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}
*/.package .list .more a:hover{

    
    display: inline-block;
    font-size: 1.5em;
    color: black;
    background: #fff;
    padding: .6em 3em;
    margin-top: .8em;
    border: 1px solid black;
    border-radius: 14px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
  box-shadow: 3px 3px 3px 3px black;
  
  text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    
}
.package  .comment{
  display: inline-block;
  width: 100%;
  margin-top: 5%;
  min-height: 250px;
  background-color: white;
  margin-bottom: 5%;

}/*
.package  .comment:hover{
  display: inline-block;
  width: 100%;
  margin-top: 5%;
  min-height: 250px;
  background-color: transparent;
  margin-bottom: 5%;

}*/
.package .comment h3{
    position: relative;
    color: black;
    font-weight: 900;

    margin: 0 auto;
    font-size: 1.8em;
    text-align: left;
    text-transform: uppercase;
    padding: 1em 0em;
    border-radius: 5px 5px 0;
    border-bottom: 2px solid #ffcc54;
}
.clear{

    clear: both;
    margin-bottom: 5%;

}
.package .comment h3 {
    font-size: 2.6em;
    font-weight: 400;
    color: black;
    text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    /* text-transform: uppercase; */
}
.package .comment form{


  width: 100%;
  display: block;
  margin-left: 8%;
}
.package .comment input[type="submit"]  {
    display: inline-block;
    font-size: 1.5em;
    
    background: #ffcc54;
    padding: .6em 3em;
    margin-top: .8em;
    border-radius: 15px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    color: black;
     font-family: cursive;
}
.package .comment input[type="submit"]:hover{


  color: black;
  background: white;
  border: 3px solid white;
  box-shadow: 3px 5px 5px 5px black;
  border-radius: 15px;
  text-transform: capitalize;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    
}
.package .comment input[type="radio"]{


  line-height: 1.5em;
  
  line-height: 1.5em;
    font-size: 50px;
    width: 63px;
    height: 30px;

}
.package .comment span{

    color: black;
    text-align: center;
    font-family: cursive;
    font-weight: bold;
    margin-right: 5%;
        font-size: 25px;
}




</style>
</head>

<?php include ('header.php'); ?>
<body>
 <div>
      <h3 class="w3l_header">Our <span>Packages</span></h3>
      <!-- <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
        and skin care services will suit every beauty need.</p> -->
      </div>   

<div class="package">
  <?php

            $result =mysql_query("select * from package limit 4");
            while($row=mysql_fetch_array($result)){

          ?>
  
  <!--<div class="list box1">
    
                  <div class="w3ls-top">
                    <h3><?php echo $row['pname']; ?></h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> <?php echo $row['price']; ?><span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="book.php">Book Now</a>        
                    </div>
                  
                </div></div><div class="clear"></div>


                 <?php 
                }
              ?>-->
<div class="clear"></div>
               
  <div class="list box1">
    
     <div class="w3ls-top">
                    <h3>Classic</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Men's Hair cutting</li>
                      
                      <li>Hair Wash</li>
                      <li>Hair Cut</li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <h4> 50<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  </div>
  </div><div class="clear"></div>
  <div class="list box1">
     
                  <div class="w3ls-top">
                    <h3>Gold</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Women's Hair Cutting</li>
                      <li>Hair Wash</li>
                      <li>Hair Conditioner</li>
                      <li>hair Cutting</li>
                      <li></li>
                      <li></li>
                    </ul>
                    <h4> 100<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  </div>
                
  </div><div class="clear"></div>

  <div class="list box1">
    
                  <div class="w3ls-top">
                    <h3>Platinum</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <h4> 150<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  
                </div>
  </div><div class="clear"></div>
 <div class="list box1">
    
                  <div class="w3ls-top">
                    <h3>Diamond</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> 200<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
      </div>            
                </div></div><div class="clear"></div>
  <!--<div class="list box1">
    
     <div class="w3ls-top">
                    <h3>Classic</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> 350<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  </div>
  </div><div class="clear"></div>
  <div class="list box1">
     
                  <div class="w3ls-top">
                    <h3>Gold</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> 500<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  </div>
                
  </div><div class="clear"></div>

  <div class="list box1">
    
                  <div class="w3ls-top">
                    <h3>Platinum</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> 800<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  
                </div>
  </div><div class="clear"></div>
  <div class="list box1"> <div class="w3ls-top">
                    <h3>Diamond</h3> 
                  </div>
                  <div class="w3ls-bottom">
                    <ul class="count">
                      <li>Hair Extension</li>
                      <li>Makeup Application</li>
                      <li>Facial</li>
                      <li>Nails</li>
                      <li>Styling</li>
                    </ul>
                    <h4> 200<span class="sup">$</span> </h4>
                    <div class="more">
                      <a href="contact.php">Contact Now</a>        
                    </div>
                  



                </div></div><div class="clear"></div>
 
-->





</div>

<div class="clear"></div>



</body>

</html>
<?php include ('footer.php'); ?>