<!DOCTYPE html>

<!-- 
Category: Bars and Restaurants
-->

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
<header class="navbar navbar-inverse navbar-fixed-top concrete" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
				<img class="img-responsive" src="../images/logotransparent2.png" width = "110" height = "41"alt="">
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="clubs.htm">Clubs</a></li>
                    <li><a href="categories.html">Categories</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
	</br>
	


	<?php

		//Call on this file to connect to database
		include('../local-connect.php');

		//Define variables
		$criteria = "Bars";
		$imagename = "bars.jpg";
		$query = "SELECT * FROM	events WHERE EventCategory = '$criteria'"; // Select statement to call data from events category based on the search criteria
		$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
		$count = 0; // Store the number of times that an event is found with the user's input

		//Declare html div body
			echo "<div class=\"container\">";		
				echo "<hgroup class=\"mb20\">";
						echo "<h1>Search Results</h1>";
						echo "<h2 class=\"lead\"><strong class=\"text-danger\"></strong>Here are all the events in your area <strong class=\"text-danger\">Bars and Restaurants</strong></h2>";
				echo "</hgroup>";			
			echo "</div>";		
			//Create a loop to go through all of the records in the events table and post them on the webpage
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				
				$eventname = $row['EventName']; // store the eventname value in a variable
				$webpage =  str_replace("/", "-", str_replace(" ", "-", ltrim(rtrim($eventname)))); //format,trim, and store the value in a variable
				
				$eventdate = $row['EventDate'];
				$eventstart = $row['EventStartTime'];
				$eventend = $row['EventEndTime'];
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
				
				//Format time and date
				$starttime = date("g:i A",strtotime($eventstart));
				$endtime = date("g:i A",strtotime($eventend));
				$date = date("F jS, Y",strtotime($eventdate));
				
				//holds the color of the text-font
				$textcolor = 'text-default';
				$glyphicon = 'glyphicon glyphicon-tags';
				
				echo "<div class=\"container\">";

					echo "<section class=\"col-xs-12 col-sm-6 col-md-12\">";
						echo "<article class=\"search-result row\">";
							echo "<div class=\"col-xs-12 col-sm-12 col-md-3\">";			
								
								if($eventcat == $criteria)								
								{
									echo  "<a href='../events/$webpage.php' title=\"Lorem ipsum\" class=\"thumbnail\"><img src=\"../images/$imagename\" alt=\"\" /></a>";
									$textcolor = 'text-primary';
									$count++;
								}
								// If there is no categories in the database, no image will be displayed. 
								else
								{
									echo  "<a href='../events/$webpage.php' title=\"Lorem ipsum\" class=\"thumbnail\"></a>";
								}								

							echo "</div>";
							echo "<div class=\"col-xs-12 col-sm-12 col-md-2\">";
								echo "<ul class=\"meta-search\">";
									echo "<li><i class=\"glyphicon glyphicon-calendar\"></i> <span>$date</span></li>";
									echo "<li><i class=\"glyphicon glyphicon-time\"></i> <span>$starttime - $endtime</span></li>";
									echo "<li><i class=\"$glyphicon\"></i> <span class = '$textcolor'>$eventcat</span></li>";
									
								echo "</ul>";
							echo "</div>";
							echo "<div class=\"col-xs-12 col-sm-12 col-md-7 excerpet\">";
								echo "<h3>$eventname</h3>";
								echo "<p>$eventdes</p>";						
								echo "<span class=\"plus\"><a href='../events/$webpage.php' title=\"Lorem ipsum\"><i class=\"glyphicon glyphicon-plus\"></i></a></span>";
							echo "</div>";
							echo "<span class=\"clearfix borda\"></span>";
						echo "</article>";

					echo "</section>";
					
				echo "</div>";			
			} // end while statement			
			//Display this message if there were no results retrieved from the user's input
			if($count == 0)
			{	
				echo"<div class = 'container'>";
					echo"<div class = 'jumbotron'>";
						echo"<p><small>There were no events that matched your search input. Press the back button to return to the home page.</small></p>";
						echo"<a href='../categories.html' class='btn btn-danger'>Back</a>";
					echo"</div>";	
				echo"</div>";	
			}
	
	
	
	?>

	
	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
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
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>	
	
</html>