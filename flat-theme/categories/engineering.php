<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>uvents</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
	
		<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head><!--/head-->
<body>


    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
				<img class="img-responsive" src="../images/LogoDone2.png" width = "110" height = "41"alt="">
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html">Home</a></li>
                   <li><a href="../events.php">Events</a></li>
                    <li><a href="../clubs.htm">Clubs</a></li>
                    <li class="active"><a href="../categories.html">Categories</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted
	
		//Call on this file to connect to database
		include('../local-connect.php');

		//Define variables
		$query = "SELECT * FROM	events WHERE EventCategory = 'Engineering'"; // Select statement to call data from events category based on the search criteria
		$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
		$count = 0; // Store the number of times that an event is found with the user's input
		
		//Declare html div body
		echo"<div class = 'container'>";
		echo"<h1>Search Results:</h1>";
			echo"<div class = 'jumbotron text-left'>";
			
			//Create a loop to go through all of the records in the events table and post them on the webpage
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$count++;
				$eventname = $row['EventName']; // store the eventname value in a variable
				$webpage =  str_replace("/", "-", str_replace(" ", "-", ltrim(rtrim($eventname)))); //format,trim, and store the value in a variable
			
			echo"<div = class = 'container'>";
				echo "<p>&#8226<a href = '../events/$webpage.php'>$eventname</a></p>";
			echo"</div>";
			} // end while statement			
			//Display this message if there were no results retrieved from the user's input

			if($count == 0)
			{
				echo"<p><small>There were no events that matched your search input. Press the back button to return to the home page.</small></p>";
				echo"<a href='../index.html' class='btn btn-danger'>Back</a>";
			}
			
			echo "</div>";
		echo "</div>";
		
			
	 // end of if statement
	?>
	
	
	
	
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">uvents</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>