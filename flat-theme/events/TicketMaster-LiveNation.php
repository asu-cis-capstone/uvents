<!DOCTYPE html>

<!-- 
Events Searched
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


    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">
								<img class="img-responsive" src="../images/LogoDone2.png" width = "110" height = "41"alt="">
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active"><a href="../events.php">Events</a></li>
                    <li><a href="../clubs.htm">Clubs</a></li>
                    <li><a href="../categories.html">Categories</a></li>
                </ul>
            </div>
        </div>
    </header>
	
	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted

	/* if (isset($_POST['submitted'])) { */

	//Call on this file to connect to database
	include('../local-connect.php');

	//Define variables
	$query = "SELECT * FROM	events WHERE EventId = 1 "; // Select statement to call data from events category based on the search criteria
	$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		//Store event columns in variables
		$eventname = $row['EventName'];
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
	
		echo 
		"<div class = 'container'>	
			<h1>$eventname</h1>
		</div>
			
			<div class = 'container'>
				<div class = 'jumbotron text-left'>
					<img src='../$eventimg' alt='ticketmaster' height='45%' width='45%'/>
					<h5><strong>Date: </strong>$eventdate</h5>
					<h5><strong>Time: </strong>$eventstart-$eventend</h5>
					<h5><strong>Location: </strong>$eventloc</h5>
					<h5><strong>Sponsored by: </strong>$eventsponsor</h5>
					<h5><strong>Affiliated with: </strong>$eventschool</h5>
					<p><strong>Description: </strong></p>
					<p>$eventdes</p>
					<h5><strong>Email: </strong>$eventemail</h5>
					<h5><strong>Phone Number: </strong>$eventphone</h5>
					<h5><strong>Website: </strong>$eventweb</h5>	
				</div>
			</div>";
	} // end while statement

	?>

	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>