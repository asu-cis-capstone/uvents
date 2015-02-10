<!DOCTYPE html>

<!-- 
confirm8.php
Jorge Delgado
-->

<?php
	//Connect to MySQL database
	include('local-connect.php');
	
	//Define and initialize PHP variables to hold data entered on the Registration Form
	$name2 = $_POST['name'];
	$name = mysqli_real_escape_string($dbc, $name2);
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$prob = $_POST['probation'];
	$email = $_POST['email'];
	$hot = $_POST['hotornot'];
	$smart = $_POST['smartornot'];
	$beers = $_POST['beers'];
	$cons = $_POST['consider'];
	$cons = mysqli_real_escape_string($dbc, $cons);
	if	
 	
	// Build the query to populate our hw7 table
	$query =
	"INSERT INTO hw7(name, uname, pword, prob, email, hot, smart, beers, cons)" .
	"VALUES('$name', '$uname', '$pword', '$prob','$email', '$hot', '$smart', '$beers', '$cons' )";
	
	// Run the query we just built
	$result = mysqli_query($dbc, $query) or die('Unable to write to database!');
	
	// Close the database connection
	mysqli_close($dbc);
	
	
	
?>

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
	
	<div id = "searchform">
			<form id="joinform" action="confirm8.php" method="post">
			<p>
			<input type="text" id= "fname" name = "fname" autofocus required title="4-30 characters, u/l case, - and ' only!" pattern="[a-zA-Z-' ]{4,30}" onfocus="namemsg()"/>
			<br />
			</p>
</div>	
	
	<div id = "footer">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>

