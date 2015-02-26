<!DOCTYPE html>

<!-- 
Home Page
-->

<html lang="en">
  	
  <head>
    <!-- Meta tag -->
	<meta name= "robots" content="noindex,no follow" />
    <meta charset= "utf-8" />
	
	<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/uss.css" />
	<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "bootstrap/css/styles.css" rel = "stylesheet">
	
	<!-- Javascript tags -->
	<script type="text/javascript" src="js/messages.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src = "bootstrap/js/bootstrap.js"></script>
	
	<!-- Favicon tag --> 
	<link rel="icon" href="images/blueplane.png"/>
	
    <!-- Web Page Title -->
    <title>Home Page</title>
	
  </head>

  <body>
	<div class = "navbar navbar-default navbar-static-top">
		<div class = "container">
		
			<a href= "index.php" class = "navbar-brand">uvents</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>	
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li class = "active"><a href = "index.php">Home</a></li>				
					<li><a href = "aboutus.htm">About Us</a></li>
					<li><a href = "clubs.htm">Clubs</a></li>	
					<li class = "dropdown">
						<a href = "#" class = dropdown-toggle" data-toggle = "dropdown">Categories <b class = "caret"></b></a>	
						<ul class = "dropdown-menu">
							<li><a href = "#">Business</a></li>
							<li><a href = "#">Engineering</a></li>
							<li><a href = "#">Design</a></li>
							<li><a href = "#">Career Events</a></li>
							<li><a href = "#">Free food</a></li>
							<li><a href = "#">Bars and Restaurants</a></li>
							<li><a href = "#">Greek Life</a></li>				
						</ul>
					</li>
					<li><a href = "contact.htm">Contact Us</a></li>					
				</ul>
			
			</div>
		</div>
	</div>
  
    
	<div id="header">
		<p>

		</p>
	</div>	
	
	<div class = "container">
	
		<div class = "jumbotron text-center">
			<a href= "index.php" target="_self">			
				<img src="images/uventslogo.png" alt=" uvents"/>
			</a>
			<p>Discover events around your university</p>
			
		<form method = "post" action = "eventlist.php">
			<input type="hidden" name = "submitted" value = "true"/>

				<label><input type = "text" name = "criteria"/></label>

			<input type="submit" value = "Search" />
			
		</form>				


		</div>
	
	</div>
<!--	
	<div id="navigation">
	<ul> 
			<li><a href="aboutus.htm">About Us</a></li>
			<li><a href="clubs.htm">Clubs</a></li>
			<li><a href="login.htm">Login</a></li>
			<li><a href="contact.htm">Contact Us</a></li>
	</ul>
	</div>

<!--When the submit button is clicked, the database results will be posted on the events-searched page-->	

	
	<div id="footer">
		<p>
			<a href="https://www.apple.com/itunes/">
				<img src="images/ios.png" alt="HTML Email Icon" />
			</a>			
			<a href="https://play.google.com/store?hl=en">
				<img src="images/gplay.png" alt="HTML Email Icon" />
			</a>
		<br />
			&copy;2014, uvents
		</p>
	</div>
	
	</body>
</html>

