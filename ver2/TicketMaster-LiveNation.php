<!DOCTYPE html>

<!-- 
Events Searched
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
	<link rel="icon" href="images/blueplane.png"/>
	
    <!-- Web Page Title -->
    <title>TicketMaster/LiveNation</title>
	
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
					<li class = "active"><a href = "index.htm">Home</a></li>				
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

	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted

	/* if (isset($_POST['submitted'])) { */

	//Call on this file to connect to database
	include('local-connect.php');

	//Define variables
	$query = "SELECT * FROM	events WHERE EventId = 1 "; // Select statement to call data from events category based on the search criteria
	$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		//Store event columns in variables
		$eventname = $row['EventName'];
		$eventdate = $row['EventDate'];
		$eventtime = $row['EventTime'];
		$eventloc = $row['EventLocation'];
		$eventdes = $row['EventDescription'];
		$eventcost = $row['EventCost'];
		$eventsponsor = $row['EventSponsor'];
		$eventschool = $row['EventSchool'];
		$eventimg = $row['EventImg'];
		$eventemail = $row['EventEmail'];
		$eventphone = $row['EventPhoneNumber'];
		$eventweb = $row['EventWebsiteAddress'];
		$eventcat = $row['EventCategory'];
	
		echo "<div class = 'container'>";	
			echo"<h1>$eventname</h1>";
		echo "</div>";
		
		echo "<div class = 'container'>";
			echo"<div class = 'jumbotron text-left'>";
				echo"<img src='images/ticketmaster.jpg' alt='ticketmaster'/>";
				echo"<h5><strong>Date: </strong>$eventdate</h5>";
				echo"<h5><strong>Time: </strong>$eventtime</h5>";
				echo"<h5><strong>Location: </strong>$eventloc</h5>";
				echo"<h5><strong>Sponsored by: </strong>$eventsponsor</h5>";
				echo"<h5><strong>Affiliated with: </strong>$eventschool</h5";
				echo"<p></p>";
				echo"<p><strong>Description: </strong>$eventdes</p>";
				echo"<h5><strong>Email: </strong>$eventemail</h5>";
				echo"<h5><strong>Phone Number: </strong>$eventphone</h5>";
				echo"<h5><strong>Website: </strong>$eventweb</h5>";
				
			echo"</div>";
		echo"</div>";
	} // end while statement

	?>

	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>