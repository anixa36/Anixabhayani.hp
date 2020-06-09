
<?php 
include("db.php");
 if(!isset($_SESSION['user_login']))
		header("location: user_login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WelCome</title>
	<link rel="stylesheet" type="text/css" href="css\style1.css">
	<link rel="stylesheet" type="text/css" href="css\footer.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\s.css">

	<style type="text/css">
	
	.text{
		background-image: url('16.jpg');
		background-size: cover;
	}
	
   .mySlides {display:none;}

   #b1{
			background-color: #6495ed;
			border:none;
			font-size: 12px;
			font-weight: bold;
			text-transform: uppercase;
			line-height: 40px;
			width: 150px;
			font-family: 'montserrat', sans-serif;
			margin-top: 25px;
			border:3px solid white
			;
		}
		
   
	
	</style>
</head>
<body>
	<div class="bgimage">
		
		
		<div class="menu">
		
			<div class="leftmenu">
			
				<h4>DigitalNoteBookpoint</h4>
				

			</div>
			<div class="rightmenu">
				<ul>
					<li ><a id="li1" href="index.php"> HOME </a></li>
					<li><a href="laptop.php"> LAPTOP </a></li>
					<li><a href="mobile.php"> MOBILE </a></li>
					<li><a href="order.php"> My ORDER </a></li>
					<li><a href="aboutus.php"> ABOUT US </a></li>
					<li><a href="contactus.php"> CONTACT US </a></li>&nbsp;&nbsp;&nbsp;
					<a id="li1" href="user_logout.php">LOGO UT</a>
				</ul>
			</div>
		</div>
	
			<div class="text">
				<h4> WE ARE THE MOST FORTUNATE PEOPLE</h4>
				<h1>CREATIVE & EXPERIENCES</h1>
				<h3>WE ARE THE ONE WORLD'S TOP </h3>
				<a href="registerform.php"><input type="submit" id="b1" value="Registration"></a>
				
				
			</div>
			<div class="image">
				<div class="i1">

			<div class="w3-container">
			 	</div>

			<div class="w3-content w3-section" style="max-width:90%">
			  <img class="mySlides w3-animate-top" src="h8.jfif" style="width:100%">
			  <img class="mySlides w3-animate-bottom" src="h7.jpg" style="width:100%">
			  <img class="mySlides w3-animate-top" src="h8.jfif" style="width:100%">
			  <img class="mySlides w3-animate-bottom" src="h7.jpg" style="width:100%">
			</div>

						
				</div>
		
			</div>
	</div>
   
     	<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Something</h1>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Online</a>
        </li>

        <li>
          <a href="#">Print</a>
        </li>
            
        <li>
          <a href="#">Alternative Ads</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Technology</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Hardware Design</a>
        </li>
        
        <li>
          <a href="#">Software Design</a>
        </li>
        
        <li>
          <a href="#">Digital Signage</a>
        </li>
        
        <li>
          <a href="#">Automation</a>
        </li>
        
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        
        <li>
          <a href="#">IoT</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Something. All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
    </div>
  </div>
</footer>
    
	 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

</body>
</html>