<!DOCTYPE html>

<!-- 
Events Searched
-->

<html lang="en">
  	
  <head>
    <!-- Meta tag -->
	<meta name= "robots" content="noindex,no follow" />
    <meta charset= "utf-8" />

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/uss.css" />

	<!-- Javascript tags -->
	<script type="text/javascript" src="js/messages.js"></script>

	<!-- Favicon tag --> 
	<link rel="icon" href="images/blueplane.png"/>
	
    <!-- Web Page Title -->
    <title>Home Page</title>
	
  </head>

  <body>
    
	<div id="header">
		<p>
			<a href= "index.php" target="_self">
			<img src="images/uventslogo.png" alt=" uvents"/>
			</a>
		</p>
	</div>	
	
	<div id="navigation">
		<ul> 
			<li><a href="aboutus.htm">About Us</a></li>
			<li><a href="clubs.htm">Clubs</a></li>
			<li><a href="login.htm">Login</a></li>
			<li><a href="contact.htm">Contact Us</a></li>
	</ul>
	</div>

	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted

	/* if (isset($_POST['submitted'])) { */

	//Call on this file to connect to database
	include('local-connect.php');

	//Define variables
	$query = "SELECT * FROM	events WHERE EventName = 'Ball So Hard' "; // Select statement to call data from events category based on the search criteria
	$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process

	//Create a table to display any matching records
	echo "<table>";
	echo"<tr><th>EventName</th>
				  <th>EventDate</th>
				  <th>EventTime</th>
				  <th>EventLocation</th>
				  <th>EventDescription</th>
				  <th>EventCost</th>
				  <th>EventSponsor</th>
				  <th>EventSchool</th>
				  <th>EventImg</th>
				  <th>EventEmail</th>
				  <th>EventPhoneNumber</th>
				  <th>EventWebsiteAddress</th>
				  <th>EventCategory</th>
			</tr>";
		//Create a loop to go through all of the records in the events table and post them on the webpage
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{

			echo "<tr><td>";
			echo $row['EventName'];
			echo "</td><td>";
			echo $row['EventDate'];
			echo "</td><td>";
			echo $row['EventTime'];
			echo "</td><td>";
			echo $row['EventLocation'];
			echo "</td><td>";
			echo $row['EventDescription'];
			echo "</td><td>";
			echo $row['EventCost'];
			echo "</td><td>";
			echo $row['EventSponsor'];
			echo "</td><td>";
			echo $row['EventSchool'];
			echo "</td><td>";
			echo $row['EventImg'];
			echo "</td><td>";
			echo $row['EventEmail'];
			echo "</td><td>";
			echo $row['EventPhoneNumber'];
			echo "</td><td>";
			echo $row['EventWebsiteAddress'];
			echo "</td><td>";
			echo $row['EventCategory'];
			echo "</td></tr>";

		}		
			
	echo "</table>";

	/* } // end of main statement
	 */

	?>

	
	<div id = "footer">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>