<!DOCTYPE html>

<!-- 
Home Page
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
		<p class="sh1">Uvents<span class="sh1a">&reg;</span></p>
	</div>	
	
	<div id="navigation">
		<p><a href="aboutus.htm">About Us</a></p>
		<p><a href="clubs.htm">Clubs</a></p>
		<p><a href="login.htm">Login</a></p>
		<p><a href="contact.htm">Contact Us</a></p>

	</div>
	
	<div id="sponsor">
		<p>Sponsors</p>
		<p>
		<a href= "http://www.asu.edu/" target="_blank">
			<img src="images/asu.jpg" alt=" tripadvisor"/>
		</a>
		<p>Arizona State University</p>		
		</p>
	</div>

<!--When the submit button is clicked, the database results will be posted on the same page-->	
<form method = "post" action = "index.php">
<input type="hidden" name = "submitted" value = "true"/>


<label>Search Parameter:
<!--A drop down list of search parameters to chose from-->
<select name= "category">
	<option value="EventName">Event Name</option>
	<option value="EventCategory">Event Category</option>
</label>

<label>Search Criteria: <input type = "text" name = "criteria"/></label>

<input type="submit"/>

</form>

<?php
//Only want to proceed entering the database if it is safe, that is, the page was submitted
if (isset($_POST['submitted'])) {

//Call on this file to connect to database
include('local-connect.php');

//Define variables
$category = $_POST['category'];
$criteria = $_POST['criteria'];
$query = "SELECT * FROM	events WHERE $category = '$criteria'"; // Select statement to call data from events category based on the search criteria
$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process

//Create a table to display any matching records
echo "<table>";
echo"<tr><th>EventId</th><th>EventName</th><th>EventDate</th><th>EventTime</th>
		<th>EventLocation</th><th>EventDescription</th><th>EventCost</th>
		<th>EventSponsor</th><th>EventSchool</th><th>EventImg</th>
		<th>EventEmail</th><th>EventPhoneNumber</th><th>EventWebsiteAddress</th>
		<th>EventCategory</th></tr>";
//Create a loop to go through all of the records in the events table and post them on the webpage
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
echo "<tr><td>";
echo $row['EventId'];
echo "</td><td>";
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

} // end of main statement


?>
	
	
	<div id = "footer">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>
