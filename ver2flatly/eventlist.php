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
	<link rel="icon" href="images/uventslogo.png"/>
	
    <!-- Web Page Title -->
    <title>Search Results</title>
	
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
					<li><a href = "create.php">Create</a></li>				
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
		$criteria = $_POST['criteria'];
		$query = "SELECT * FROM	events WHERE EventName LIKE '%$criteria%'"; // Select statement to call data from events category based on the search criteria
		$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
		$count = 0; // Store the number of times that an event is found with the user's input
		
		//Declare html div body
		echo "<div class = 'container'>";
		echo"<h1>Search Results:</h1>";
			echo"<div class = 'jumbotron text-left'>";
			
			//Create a loop to go through all of the records in the events table and post them on the webpage
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$count++;
				$eventname = $row['EventName']; // store the eventname value in a variable
				$webpage =  str_replace("/", "-", str_replace(" ", "-", ltrim(rtrim($eventname)))); //format,trim, and store the value in a variable
				
				//Will grab the eventname based on the search input and create a hyperlink to it's proper page
				echo "<p>$count <a href = '$webpage.php' class = 'btn btn-success'>$eventname</a></p>"; 
			
			} // end while statement	
			
			//Display this message if there were no results retrieved from the user's input

			if($count == 0)
			{
				echo"<p><small>There were no events that matched your search input. Press the back button to return to the home page.</small></p>";
				echo"<a href='index.htm' class='btn btn-danger'>Back</a>";
			}
			
			echo "</div>";
		echo "</div>";
			
	} // end of if statement
	?>

	
	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>