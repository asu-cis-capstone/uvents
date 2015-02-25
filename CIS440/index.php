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

<!--When the submit button is clicked, the database results will be posted on the events-searched page-->	
<form method = "post" action = "events-searched.php">
<input type="hidden" name = "submitted" value = "true"/>


<label>Search Parameter:
<!--A drop down list of search parameters to chose from-->
<select name= "category">
	<option value="EventName">Event Name</option>
</label>

<label>Search Criteria: <input type = "text" name = "criteria"/></label>

<input type="submit"/>

</form>	
	
	<div id = "footer">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>

