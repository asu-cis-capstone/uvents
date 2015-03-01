<!DOCTYPE html>

<!-- 
Event Created
-->

<html lang="en">
  	
  <head>
    <!-- Meta tag -->
	<meta name= "robots" content="noindex,no follow" />
    <meta charset= "utf-8" />
	
	<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Link tag for CSS -->
	<link href = "bootstrap/css/bootstrap-theme-flat.css" rel = "stylesheet">
	<link href = "bootstrap/css/styles.css" rel = "stylesheet">
	
	
	<!-- Javascript tags -->
	<script type="text/javascript" src="js/messages.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src = "bootstrap/js/bootstrap.js"></script>
	
	<!-- Favicon tag --> 
	<link rel="icon" href="images/uventslogo.png"/>
	
    <!-- Web Page Title -->
    <title>Event Created</title>
	
  </head>

<body>
	<div class = "navbar navbar-default navbar-static-top">
		<div class = "container">
		
			<a href= "index.htm" class = "navbar-brand">uvents</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>	
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li><a href = "index.htm">Home</a></li>	
					<li><a href = "login.htm">Login</a></li>							
					<li class = "active"><a href = "create.php">Create</a></li>				
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
					<li><a href = "aboutus.htm">About Us</a></li>							
				</ul>
			</div>
			
		</div>
	</div>

	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted
	if (isset($_POST['submitted'])) 
	{

		//Call on this file to connect to database
		include('local-connect.php');

		//Define variables
		$eventname = $_POST['ename'];
		$eventdate = $_POST['edate'];
		$eventstart = $_POST['estart'];
		$eventend = $_POST['eend'];
		$eventloc = $_POST['elocation'];
		$eventdes = $_POST['edescription'];
		$eventcost = $_POST['ecost'];
		$eventsponsor = $_POST['esponsor'];
		$eventschool = $_POST['eschool'];
		$eventimg = $_POST['eimg'];
		$eventemail = $_POST['eemail'];
		$eventphone = $_POST['ephone'];
		$eventaddress = $_POST['eaddress'];
		$eventcat = $_POST['ecategory'];
		
		$query = "INSERT INTO events(EventName, EventDate, EventStartTime, EventEndTime, EventLocation, EventDescription, EventCost, EventSponsor, EventSchool, EventImg, EventEmail, EventPhoneNumber, EventWebsiteAddress, EventCategory)" 
					. "VALUES('$eventname','$eventdate', '$eventstart','$eventend','$eventloc','$eventdes','$eventcost','$eventsponsor','$eventschool','$eventimg','$eventemail','$eventphone','$eventaddress','$eventcat')";
		$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
		
		// Close the database connection
		mysqli_close($dbc);
			
	} // end of if statement
	?>

	<div class = "container text-center">
		<div class = "jumbotron text-left">
		<p>Your event was created!</p>
		</div>		
	</div>
	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>