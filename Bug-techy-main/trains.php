<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blockedBooking.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Trains | tourism_management</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript">
		
			$(function () {
				
                $('#datetimepicker3').datetimepicker({
					format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
				});
				
				$('#datetimepicker3').on('dp.change',function(e){
					console.log(e.date.format('dddd'));
					$('#dayTrain').val(e.date.format('dddd'));
				});
            });
		
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="trains col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<a href="hotels.php"><li>Hotels</li></a>
								<a href="resto.php"><li>Resto</li></a>
								<li class="selected">Trains</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- TRAIN SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search">
   					
    					<div class="content">
    					
    					<form action="trainSearch.php" method="POST">
    					
    						<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="originTrain">Origin:<p> </p></label>
     
      								<select id= "originTrain"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin Station" name="origin" required>
       									<option value="Pangasinan" data-subtext="PA" data-tokens="PA Pangasinan">Pangasinan</option>
        								<option value="Cavite" data-subtext="CE" data-tokens="CE Cavite">Cavite</option>
       									<option value="Laguna" data-subtext="LG" data-tokens="LG Laguna">Laguna</option>
        								<option value="Paranaque" data-subtext="PQ" data-tokens="PQ Paranaque">Paranaque</option>
        								<option value="Laspinas" data-subtext="LP" data-tokens="LP Laspinas">Laspinas</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destinationTrain">Destination:<p> </p></label>
     
									<select id= "Destination"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination Station" name="Destination" required>
       									<option value="Pangasinan" data-subtext="PA" data-tokens="PA Pangasinan">Pangasinan</option>
        								<option value="Cavite" data-subtext="CE" data-tokens="CE Cavite">Cavite</option>
       									<option value="Laguna" data-subtext="LG" data-tokens="LG Laguna">Laguna</option>
        								<option value="Paranaque" data-subtext="PQ" data-tokens="PQ Paranaque">Paranaque</option>
        								<option value="Laspinas" data-subtext="LP" data-tokens="LP Laspinas">Laspinas</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime3">Select Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker3">
                						<input id="datetime3" type="text" class="inputDate form-control" placeholder="Select Date" name="date" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
	
							<label for="class">Select Class: <p> </p></label>
    							<div class="form-group">
    								<select id= "class" class="selectpicker form-control" data-size="5" title="Select Class" name="class" required>
  										<option value="1AC">First AC</option>
  										<option value="2AC">Second AC</option>
  										<option value="3AC">Third AC</option>
  										<option value="SL">Sleeper</option>
  										<option value="CC">AC Chair Car</option>
									</select>
								</div>
							</div>
            			
							<div class="col-sm-3">
	
							<label for="adults">No. of adults:<p> </p></label>
    							<div class="form-group">
    								<select id= "adults" class="selectpicker form-control" data-size="5" title="Aged 18 and above" name="adults" required>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-3">
							
							<label for="children">No. of children:<p> </p></label>
								<div class="form-group">
   									<select id= "children" class="selectpicker form-control" data-size="5" title="Aged upto 17" name="children" required>
  										<option value="0">0</option>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
									</select>
								</div>
							</div>
           			
           					<input type="hidden" name="day" value="null" id="dayTrain"/>
            			
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchTrains" value="Search Trains">
            				
            				</div>
            				
            				</form>

    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			<div class="footer col-sm-12">
		</div>
			
			
			<!-- FOOTER SECTION STARTS -->
					
				<div class="footer col-sm-12">
					
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
						Copyright &copy; Blank
						</div>
					</div>
					</div>
							
				</div> <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>