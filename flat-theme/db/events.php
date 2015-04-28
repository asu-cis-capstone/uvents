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
    <link rel="shortcut icon" href="../images/ico/uventzblack.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/uventzblack.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/uventzblack.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/uventzblack.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/uventzblack.png">
	

	<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0"> 

	
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
                <a class="navbar-brand" href="../index.html">
				<img class="img-responsive" src="../images/logotransparent2.png" width = "110" height = "41"alt="">
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html">Home</a></li>
                    <li class = "active"><a href="events.php">Events</a></li>
                    <li><a href="../clubs.htm">Clubs</a></li>
                    <li><a href="../categories.html">Categories</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->  
	  
	  
	<?php
	//Set time zone to arizona mountain standard time
	//if (isset($_POST['submitted'])) {
	date_default_timezone_set('America/Phoenix');
	
	
	//Only want to proceed entering the database if it is safe, that is, the page was submitted

	

	//Call on this file to connect to database
	include('../local-connect.php');

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
						<img src='../$eventimg' alt='ticketmaster' height='25%' width='25%'/>
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

	//}
	?>
		
    </header><!--/header-->	

<!------------------------------------------------------------------------------------------Carousel code begins------------------------------------------------------------------------------------>
	<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.min.js instead for release -->
    <!-- jssor.slider.min.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
	
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 227,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 26, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1009));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            ////responsive code end
			$("img").error(function(){$(this).hide();}); //Will hide the broken image tag if the image directory is broken
        };
    </script>
	<?php
    //-- Jssor Slider Begin -->
	echo"<div class ='container'>
	<h1>9:00 AM</h1>
	
	<!-- Slides Container -->";
		
	
    echo"<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
	<div id='slider1_container' style='position: relative; top: inherit;  left: inherit; width: 1009px; height: 150px; overflow: hidden; '>

        <!-- Loading Screen -->
        <div u='loading' style='position: absolute; top: 0px; left: 0px;'>
            <div style='filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
            <div style='position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
        </div>";

        
        echo"<div u='slides' style='cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1009px; height: 150px; overflow: hidden;'>";
		
			
			//--------------------------------------first row--------------------------------------------------
			$found = false;// reset the found variable to false
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("9:00:00");
				$highrange = strtotime("12:00:00");
				
				if($fmttime >= $lowrange and $fmttime < $highrange)
				{
				$newtime = date("g:i",$fmttime);
				
				echo"<div>								
						<img u= 'image' src='../$img[$i]' alt='' />
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
						</div>";// end of first row
				$found = true;
				} //end of if loop								
			} // end of for loop
					
			
            echo"
        </div>";
        
		
        //--#region Bullet Navigator Skin Begin -->
        //-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        echo"<style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(../images/slider/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
	
        <div u='navigator' class='jssorb03' style='bottom: 4px; right: 6px;'>
            <!-- bullet navigator item prototype -->
            <div u='prototype'><div u='numbertemplate'></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../images/slider/a01.png) no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u='arrowleft' class='jssora03l' style='top: 123px; left: 8px;'>
        </span>
        <!-- Arrow Right -->
        <span u='arrowright' class='jssora03r' style='top: 123px; right: 8px;'>
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style='display: none' href='http://www.jssor.com'>Slider Javascript</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>";
		
		
	if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"
							<div class='card hovercard-invisible'></div>";
			}		
	
		
    echo"</div>
	

    <!-- Jssor Slider End -->";



echo"<h1>12:00 PM</h1>
	
	<!-- Slides Container -->";
		
	
    echo"<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
	<div id='slider2_container' style='position: relative; top: inherit;  left: inherit; width: 1009px; height: 150px; overflow: hidden; '>

        <!-- Loading Screen -->
        <div u='loading' style='position: absolute; top: 0px; left: 0px;'>
            <div style='filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
            <div style='position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
        </div>";

        
        echo"<div u='slides' style='cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1009px; height: 150px; overflow: hidden;'>";
		
			
			//--------------------------------------first row--------------------------------------------------
			$found = false;// reset the found variable to false
			for($i = 0; $i < count($time); $i++)
			{
				//create variables to hold the formatted, low range, and high range of time
				$fmttime = strtotime($time[$i]);
				$lowrange = strtotime("12:00:00");
				$highrange = strtotime("15:00:00");
				
				if($fmttime >= $lowrange and $fmttime < $highrange)
				{
				$newtime = date("g:i",$fmttime);
				
				echo"<div>								
						<img u= 'image' src='../$img[$i]' alt='' />
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
						</div>";// end of first row
				$found = true;
				} //end of if loop								
			} // end of for loop
				
					
			
            echo"
        </div>";
        
		
        //--#region Bullet Navigator Skin Begin -->
        //-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        echo"<style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(images/slider/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
	
        <div u='navigator' class='jssorb03' style='bottom: 4px; right: 6px;'>
            <!-- bullet navigator item prototype -->
            <div u='prototype'><div u='numbertemplate'></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../images/slider/a03.png) no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u='arrowleft' class='jssora03l' style='top: 123px; left: 8px;'>
        </span>
        <!-- Arrow Right -->
        <span u='arrowright' class='jssora03r' style='top: 123px; right: 8px;'>
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style='display: none' href='http://www.jssor.com'>Slider Javascript</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider2_container');
        </script>";
		
	if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"
							<div class='card hovercard-invisible'></div>";
			}		
	
		
    echo"</div>
	

    <!-- Jssor Slider End -->";

//-------------------------------------------------------------------------------------Third row-------------------------------------------------------------	
	echo"<h1>3:00 PM</h1>
	
	<!-- Slides Container -->";
		
	
    echo"<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
	<div id='slider3_container' style='position: relative; top: inherit;  left: inherit; width: 1009px; height: 150px; overflow: hidden; '>

        <!-- Loading Screen -->
        <div u='loading' style='position: absolute; top: 0px; left: 0px;'>
            <div style='filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
            <div style='position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
        </div>";

        
        echo"<div u='slides' style='cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1009px; height: 150px; overflow: hidden;'>";
		
				
				//--------------------------------------first row--------------------------------------------------
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
				
				echo"<div>								
						<img u= 'image' src='../$img[$i]' alt='' />
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
						</div>";// end of first row
				$found = true;
				} //end of if loop								
			} // end of for loop
				
					
			
            echo"
        </div>";
        
		
        //--#region Bullet Navigator Skin Begin -->
        //-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        echo"<style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(../images/slider/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
	
        <div u='navigator' class='jssorb03' style='bottom: 4px; right: 6px;'>
            <!-- bullet navigator item prototype -->
            <div u='prototype'><div u='numbertemplate'></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../images/slider/a03.png) no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u='arrowleft' class='jssora03l' style='top: 123px; left: 8px;'>
        </span>
        <!-- Arrow Right -->
        <span u='arrowright' class='jssora03r' style='top: 123px; right: 8px;'>
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style='display: none' href='http://www.jssor.com'>Slider Javascript</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider3_container');
        </script>";
		
	if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"
							<div class='card hovercard-invisible'></div>";
			}		
	
		
    echo"</div>
	

    <!-- Jssor Slider End -->";

//-----------------------------------------------------------Fourth Row-----------------------------------------------------
	echo"<h1>6:00 PM</h1>";

	echo"<!-- Slides Container -->";
	
    echo"<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
	<div id='slider_container' style='position: relative; top: inherit;  left: inherit; width: 1009px; height: 150px; overflow: hidden; '>

        <!-- Loading Screen -->
        <div u='loading' style='position: absolute; top: 0px; left: 0px;'>
            <div style='filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
            <div style='position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;'>
            </div>
        </div>";

        
        echo"<div u='slides' style='cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1009px; height: 150px; overflow: hidden;'>";
		
				
				//--------------------------------------first row--------------------------------------------------
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
				
				echo"<div class = 'image'>
						<img u= 'image' src='../$img[$i]' alt='' />
								<button type = 'button' class = 'btn btn-invisible' data-toggle='modal' data-target='#modal-$unique[$i]'></button>
						</div>";// end of first row 
						
				
				$found = true;
				} //end of if loop								
			} // end of for loop
				
					
			
            echo"
        </div>";
        	
		
        //--#region Bullet Navigator Skin Begin -->
        //-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        echo"<style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: black;
                font-size: 12px;
                background: url(../images/slider/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
	
        <div u='navigator' class='jssorb03' style='bottom: 4px; right: 6px;'>
            <!-- bullet navigator item prototype -->
            <div u='prototype'><div u='numbertemplate'></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../images/slider/a09.png) no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
			
			
        </style>
        <!-- Arrow Left -->
        <span u='arrowleft' class='jssora03l' style='top: 123px; left: 8px;'>
        </span>
        <!-- Arrow Right -->
        <span u='arrowright' class='jssora03r' style='top: 123px; right: 8px;'>
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style='display: none' href='http://www.jssor.com'>Slider Javascript</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider_container');
        </script>";
		
	if($found == false)			
			{
				//Place an invisible hovercard in the row if there are no results retrieved back from the database
				echo"
							<div class='card hovercard-invisible'></div>";
			}		
	
		
    echo"</div>
	

    <!-- Jssor Slider End -->";
	

	
    echo"</div>";


	
	
?>	

<?php

$days = 3;
$montharray[$days+1];

echo"<section id='portfolio' class='container'>
        <ul class='portfolio-filter'>
            <li><a class='btn btn-primary active' href='#' data-filter='*'>All</a></li>"; 
			for($p=0;$p<$days;$p++)
			{
				// Store the month and day in a string
				$monthday = date("F jS",strtotime("+ $p day")); 
				$montharray[$p] = $monthday; 
				//$monthday = date(" F jS",strtotime("+ $p day")); 
				
				echo"<li><a class='btn btn-default' href='#' data-filter='portfolio item .$monthday'>$monthday</a></li>";
			}
			echo"</ul>";	
		
		echo"<ul class='portfolio-items col-3>";
		for($num=0;$num<$days;$num++)
		{
		
		echo"<li class='portfolio-item $monthday'>
					<div class='item-inner'>
					<img src ='../images/ticketmaster.jpg'>
                    <h5>$montharray[$num]</h5>
					<div>
				</li>";
		}
             
        echo"</ul>
    </section>";
		?>


		
    <footer id="footer" class="concrete">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">uvents</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>+
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
	<script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>