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
if (isset($_POST['submitted'])) {

//Call on this file to connect to database
include('local-connect.php');

//Define variables
$category = $_POST['category'];
$criteria = $_POST['criteria'];
$query = "SELECT * FROM	events WHERE $category LIKE '%$criteria%'"; // Select statement to call data from events category based on the search criteria
$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process

//Create a loop to go through all of the records in the events table and post them on the webpage
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{

$eventname = $row['EventName'];
/* echo"<a href="events-searched.php">$eventname</a>";
echo"<p></p>"; */
/*echo $row['EventName']; */
echo "<p>$eventname</p>";




}		
		


} // end of main statement


?>
	
	
	<div id = "footer">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>