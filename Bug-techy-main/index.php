<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Home | tourism_management</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
		<div class="col-xs-12 home">
		
			<!-- HEADER SECTION STARTS -->
				
			<div class="col-sm-12">
				
				<div class="header">
					
					<?php
					
					if(!isset($_SESSION["username"])) {
						include("common/headerTransparentLoggedOut.php");
					}
					else {
						include("common/headerTransparentLoggedIn.php");
					}
					
					?>
				
				</div> <!-- header -->
			
			</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
	
			<!-- carousel -->
		
			<div class="col-xs-12 banner">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		  	
			  	<ol class="carousel-indicators">
			   		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   		<li data-target="#myCarousel" data-slide-to="1"></li>
			   		<li data-target="#myCarousel" data-slide-to="2"></li>
			  	</ol>
			
			   	<div class="carousel-inner">
			   	
			    	<div class="item active">
			    	  <img src="images/carousel/image1.jpg" alt="Image1">
			    	</div>
			    	
			    	<div class="item">
			    	  <img src="images/carousel/image2.jpg" alt="Image2">
			    	</div>
				
			    	<div class="item">
			    	  <img src="images/carousel/image3.jpg" alt="Image3">
			    	</div>
			    
			  	</div>
				
			   	<a href="#myCarousel" class="left carousel-control" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a href="#myCarousel" class="right carousel-control" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			    
			</div>
			
		</div> <!-- banner -->
		
			


			

				<!--popular destinations-->
			
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
					
						Popular Destinations
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="map2.php">
							<img src="images/popularDestinations/a.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						
						<div class="col-xs-12 heading">
							Pantal Bridge
							<p>
							is an iconic Dagupan man-made structure located in the legendary Pantal River. 
							</p>
							<!DOCTYPE html>

							<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>

							
						</div>
						
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="map4.php">
							<img src="images/popularDestinations/b.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						    
						<div class="col-xs-12 heading">
							Korean Palace
							<p>
							Experience high quality of unlimeted Korean bbq buffet in Dagupan.
							<p>
							<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate Product</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
								
						</div>
						
						
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<a href="map5.php">
							<img src="images/popularDestinations/c.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						<div class="col-xs-12 heading">
							Tondaligan Blue Beach
							
							<p>the Tondaligan Beach in Dagupan City is one of the most visited places in the area.</p>
							<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
						</div>
						
					</div>

					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="map6.php">
							<img src="images/popularDestinations/d.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						<div class="col-xs-12 heading">
							MadKart
							<p>
							MadKart in Pangasinan is a new indoor electric karting track with a 500+ meter track, safety features.
							</p>
							<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
						</div>
						
						
					</div>

					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="map7.php">
							<img src="images/popularDestinations/e.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						<div class="col-xs-12 heading">
					       Assada Square
						 
						   <p>
						   the newest commercial hub at the heart of dagupan city.
						   </p>
						   <html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
						</div>
						
						
					</div>

					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="map8.php">
							<img src="images/popularDestinations/f.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						<div class="col-xs-12 heading">
						    CSI Stadia
							
							<p>
							is North Luzon's premier sports and events venue
							</p>
							<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
						</div>
					
					</div>

					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
						    <a href="revCenter.php">
							<img src="images/popularDestinations/g.jpg" alt="Click me" class="picDim text-center"/>
				            </a>
						</div>
						
						<div class="col-xs-12 heading">
							SM Center Dagupan
							</p>
						    it is a shopping mall in dagupan city
							<P>
							<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smiley Face Rating Pop-up</title>
<style>
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7); /* semi-transparent black background */
}

.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.smiley-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smiley-container .smiley {
    font-size: 36px;
    cursor: pointer;
    margin: 0 10px; /* Adjust spacing between smileys */
}
</style>
</head>
<body>

<button id="rateButton" class="rateButton">Rate Places</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Rate</h2>
        <div class="smiley-container">
            <div class="smiley" onclick="submitRating(5)">😄</div>
            <div class="smiley" onclick="submitRating(4)">😊</div>
            <div class="smiley" onclick="submitRating(3)">😐</div>
            <div class="smiley" onclick="submitRating(2)">😕</div>
            <div class="smiley" onclick="submitRating(1)">😞</div>
        </div>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function submitRating(rating) {
    closePopup();
    // Handle the rating submission here, e.g., send it to the server
    alert("You rated with " + rating + " stars.");
}

document.getElementById("rateButton").addEventListener("click", openPopup);
</script>

</body>
</html>
							
							
							
							</div>
						</div>
						
						
						
					</div>

					
					
					
					
				</div>
				
			</div>
			
		</div> <!-- home -->
		
		<!-- FOOTER SECTION STARTS -->
					
				<div class="footerMod col-sm-12">
					
					<div class="col-sm-4">
						
						<div class="footerHeading">
							Contact Us
						</div>
							
						<div class="footerText">
							Pangasinan <br> Philippines
						</div>
				
						<div class="footerText">
							E-mail: info@gmail.com
						</div>
						
					</div>
					
					<div class="col-sm-4">	
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							Social Links
						</div>
						
						<div class="socialLinks">
						
							<div class="fb">
								facebook.com/info.com
							</div>
						
							<div class="gp">
								plus.google.com/info.com
							</div>
						
							<div class="tw">
								twitter.com/info.com
							</div>
						
							<div class="in">
								linkedin.com/info.com
							</div>
						
						</div> <!-- social links -->
						
					</div>
						
					<div class="col-sm-12">
					<div class="copyrightContainer">
						<div class="copyright">
						Copyright &copy; blank
						</div>
					</div>
					</div>
							
				</div> <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
		
	</body>
	
</html>