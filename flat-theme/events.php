<!DOCTYPE html>
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	

	<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0"> 
        <link rel="apple-touch-icon" href="img/branding/netflix.png"/>
        
        <!-- styles -->
        <link rel="stylesheet" href="netflix-ui-master/css/main.css">
	
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
				<img class="img-responsive" src="images/LogoDone2.png" width = "110" height = "41"alt="">

				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                   <li class="active"><a href="events.php">Events</a></li>
                    <li><a href="clubs.htm">Clubs</a></li>
                    <li><a href="categories.html">Categories</a></li>
                </ul>
            </div>
        </div>

    </header><!--/header-->
	
      
	  	<?php
	//Set time zone to arizona mountain standard time
	date_default_timezone_set('America/Phoenix');
	
	
	//Only want to proceed entering the database if it is safe, that is, the page was submitted

	/* if (isset($_POST['submitted'])) { */

	//Call on this file to connect to database
	include('/local-connect.php');

	//Define variables
	$query = "SELECT * FROM  events WHERE EventstartTime BETWEEN '9:00' AND '21:00' "; // Select all events where the event starts between 9:00 AM and 9:00 PM
	$result =  mysqli_query($dbc, $query) or die('error obtaining data'); // Store the results in a variable unless there was in error in the process
	$unique =  array();
	$img =  array();
	
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		//Store event columns in variables
		$eventid = $row['EventId'];
		$eventname = $row['EventName'];
		$eventdate = $row['EventDate'];
		$eventstart = $row['EventStartTime']; // will need to create an array to split into rows
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
		
		$unique[] = $eventid;
		$img[] = $eventimg;
		$time[] = $eventstart;
		$starttime = date("g:i A",strtotime($eventstart));
		$endtime = date("g:i A",strtotime($eventend));
		$date = date("l, F jS, Y",strtotime($eventdate));
		//Call to the database and create modals
		echo"<div class ='modal fade' id='modal-$eventid'>
			<div class='modal-dialog modal-lg'>
				<div class='modal-content'>
					<div class ='modal-header'>
						<button type ='button' class ='close' data-dismiss='modal'>&times;</button>
						<h1 class='modal-title'>$eventname</h1>
						<h1> $array[$count] </h1>
					</div>
						
						<div class ='modal-body'>
						<img src='$eventimg' alt='ticketmaster' height='45%' width='45%'/>
					<h5><strong>Date: </strong>$date</h5>
					<h5><strong>Time: </strong>$starttime - $endtime</h5>
					<h5><strong>Location: </strong>$eventloc</h5>
					<h5><strong>Sponsored by: </strong>$eventsponsor</h5>
					<h5><strong>Affiliated with: </strong>$eventschool</h5>
					<p><strong>Description: </strong></p><p>$eventdes</p>						
						</div>
						
						<div class='modal-footer'>
						<h5><strong>Email: </strong>$eventemail</h5>
					<h5><strong>Phone Number: </strong>$eventphone</h5>
					<h5><strong>Website: </strong>$eventweb</h5>	
						</div>
				</div>
			</div>
		</div>";
			
	} // end while statement


$found =  false; // boolean to allow or disallow an invisible spacing between each row, if no events fall between that time range

echo"<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
		<div class='container'>
			<div class='row'>";
			
			//--------------------------------------first row--------------------------------------------------
			echo"<h1>9:00 AM events</h1>";
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("9:00:00");
				$highrange = strtotime("12:00:00");
				
				if($fmttime >= $lowrange and $fmttime < $highrange)
				{
				$newtime = date("g:i",$fmttime);
				echo"<div class='col-lg-2 col-sm-1'>
					<div class='card hovercard'>
						<div class='cardheader'>
						<a href='#'><img src='$img[$i]' alt='' /></a>
						<div class='portfolio-item'>
							<img class='img-responsive' src='$img[$i]'  alt=''/>
								<div class='overlay'>
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
								</div>
							</div>   
						</div>
						<div class='info'>
						</br>
							<div class='desc'>$newtime</div>
						</div>
					</div>
				</div>";
				$found = true;
				} //end of if loop
			} // end of for loop
			if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"<div class='col-lg-2 col-sm-1'>
							<div class='card hovercard-invisible'></div>
						</div>";
			}
			echo"</div>";// end of first row
			
			
			//--------------------------------------second row---------------------------------------------
			echo"<div class='row'>"; 
			echo"<h1>12:00 PM events</h1>";
			$found = false;// reset the found variable to false
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("12:00:00");
				$highrange = strtotime("15:00:00");
				
				if($fmttime >= $lowrange and $fmttime < $highrange)
				{
				$newtime = date("g:i A",$fmttime);
				echo"<div class='col-lg-2 col-sm-1'>
					<div class='card hovercard'>
						<div class='cardheader'>
						<a href='#'><img src='$img[$i]' alt='' /></a>
						<div class='portfolio-item'>
							<img class='img-responsive' src='$img[$i]'  alt=''/>
								<div class='overlay'>
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
								</div>
							</div>   
						</div>
						<div class='info'>
						</br>
							<div class='desc'>$newtime</div>
						</div>
					</div>
				</div>";
				$found ==true;
				} //end of if loop
			} // end of for loop
			if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"<div class='col-lg-2 col-sm-1'>
							<div class='card hovercard-invisible'></div>
						</div>";
			}			
			echo"</div>";// end of second row
			
			
			//----------------------------------------third row---------------------------------------------
			echo"<div class='row'>"; 
			echo"<h1>3:00 PM events</h1>";
			$found = false;// reset the found variable to false
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("15:00:00");
				$highrange = strtotime("18:00:00");
				
				if($fmttime >= $lowrange and $fmttime < $highrange)
				{
				$newtime = date("g:i",$fmttime);
				echo"<div class='col-lg-2 col-sm-1'>
					<div class='card hovercard'>
						<div class='cardheader'>
						<a href='#'><img src='$img[$i]' alt='' /></a>
						<div class='portfolio-item'>
							<img class='img-responsive' src='$img[$i]'  alt=''/>
								<div class='overlay'>
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
								</div>
							</div>   
						</div>
						<div class='info'>
						</br>
							<div class='desc'>$newtime</div>
						</div>
					</div>
				</div>";
				$found = true;
				} //end of if loop
			} // end of for loop
			if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"<div class='col-lg-2 col-sm-1'>
							<div class='card hovercard-invisible'></div>
						</div>";
			}					
			echo"</div>"; // end of third row
			
			
			//--------------------------------------fourth row---------------------------------------------
			echo"<div class='row'>"; 
			echo"<h1>6:00 PM events</h1>";
			$found = false;// reset the found variable to false
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("18:00:00");
				$highrange = strtotime("21:00:00");
				
				if($fmttime >= $lowrange and $fmttime <= $highrange)
				{
				$newtime = date("g:i",$fmttime);
				echo"<div class='col-lg-2 col-sm-1'>
					<div class='card hovercard'>
						<div class='cardheader'>
						<a href='#'><img src='$img[$i]' alt='' /></a>
						<div class='portfolio-item'>
							<img class='img-responsive' src='$img[$i]'  alt=''/>
								<div class='overlay'>
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
								</div>
							</div>   
						</div>
						<div class='info'>
						</br>
							<div class='desc'>$newtime</div>
						</div>
					</div>
				</div>";
				$found = true;
				} //end of if loop								
			} // end of for loop
			if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"<div class='col-lg-2 col-sm-1'>
							<div class='card hovercard-invisible'></div>
						</div>";
			}					
			echo"</div>"; // end of fourth row	
echo"</div>"; // end of container

	
/* echo"<div id='container'>
	<div id='header'></div>
		<div id='main' role='main'>
				<div id='browser'>
                    <div class='categoryTitle'><h1>9:00 events</h1></div>
                    <div class='category'>
                        <ul class='categoryRow clearfix'>";
						
						for($j = 0; $j < 2;$j++)
						{
							if(strtotime($time[$i]) <= strtotime("15:00") and strtotime($time[$j]) >= strtotime("14:00"))
							{
								
							
						
								for($i = 0; $i < 2; $i++)
								{
								
									echo"<li class='movie'>
											<div class='portfolio-item'>
											<img class='img-responsive' src='../$img[$i]'  alt=''/>
													<div class='overlay'>
													<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
													</div>
											</div>                                   
										</li>";
								}
						
							}
						}
						
						
						
							echo"</ul>
				</div>
				
				
				
				<div class='categoryTitle'><h1>12:00 events</h1></div>
				<div class='category'>
                        <ul class='categoryRow clearfix'>";
					for($i = 0; $i <$count; $i++)
					{
					
                           echo"<li class='movie'>
								<div class='portfolio-item'>
								<img class='img-responsive' src='../$img[$i]' width='150' height='214'  alt=''/>
										<div class='overlay'>
										<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
                                        </div>
								</div>                                   
                            </li>";
					}
							
							echo"</ul>
				</div>
				
				
				
				<div class='categoryTitle'><h1>3:00 events</h1></div>
				<div class='category'>
                        <ul class='categoryRow clearfix'>";
					for($i = 0; $i <$count; $i++)
					{
					
                           echo"<li class='movie'>
								<div class='portfolio-item'>
								<img class='img-responsive' src='../$img[$i]' width='150' height='214'  alt=''/>
										<div class='overlay'>
										<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
                                        </div>
								</div>                                   
                            </li>";
					}
							
							echo"</ul>
				</div>
				
				
				<div class='categoryTitle'><h1>6:00 events</h1></div>
				<div class='category'>
                        <ul class='categoryRow clearfix'>";
					for($i = 0; $i <$count; $i++)
					{
					
                           echo"<li class='movie'>
								<div class='portfolio-item'>
								<img class='img-responsive' src='../$img[$i]' width='150' height='214'  alt=''/>
										<div class='overlay'>
										<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
                                        </div>
								</div>                                   
                            </li>";
					}
							
							echo"</ul>
				</div>
				
				
				
			</div>
		</div>
	</div>"; */
	
	?>
		
    </header><!--/header-->	
	

        <!-- Add your site or application content here -->
        <script src="netflix-ui-master/js/app.js"></script>
        <script>  
            //Kick start app
            App.startup();
        </script> 
		
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
</body>
</html>