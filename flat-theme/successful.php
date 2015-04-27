<!DOCTYPE html>

<!-- 
Event Created
-->

<html lang="en">
  	
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>uvents</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/uventz1.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
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
                <a class="navbar-brand" href="index.html">uvents</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                   <li><a href="create.php">Create</a></li>
                    <li><a href="clubs.htm">Clubs</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

	<?php
	//Only want to proceed entering the database if it is safe, that is, the page was submitted
	if (isset($_POST['submitted'])) 
	{

		//Call on this file to connect to database
		include('local-connect.php');

		//Define variables
		$eventname = $_POST['ename'];
		$eventdate = $_POST['edate'];
		$eventstart = $_POST['estart'];
		$eventend = $_POST['eend'];
		$eventloc = $_POST['elocation'];
		$eventdes = $_POST['edescription'];
		$eventcost = $_POST['ecost'];
		$eventsponsor = $_POST['esponsor'];
		$eventschool = $_POST['eschool'];
		$eventimg = $_POST['eimg'];
		$eventemail = $_POST['eemail'];
		$eventphone = $_POST['ephone'];
		$eventaddress = $_POST['eaddress'];
		$eventcat = $_POST['ecategory'];
		
		$query = "INSERT INTO events(EventName, EventDate, EventStartTime, EventEndTime, EventLocation, EventDescription, EventCost, EventSponsor, EventSchool, EventImg, EventEmail, EventPhoneNumber, EventWebsiteAddress, EventCategory)" 
					. "VALUES('$eventname','$eventdate', '$eventstart','$eventend','$eventloc','$eventdes','$eventcost','$eventsponsor','$eventschool','$eventimg','$eventemail','$eventphone','$eventaddress','$eventcat')";
		$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
		
		// Close the database connection
		mysqli_close($dbc);
			
	} // end of if statement
	?>

	<div class = "container text-center">
		<div class = "jumbotron text-left">
		<p>Your event was created!</p>
		</div>		
	</div>
	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>