<!DOCTYPE html>

<!-- 
Clubs Page
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
		<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

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

	
	<div class = "container">
	<h1>Create an event</h1>
			
	<div class ="jumbotron text-center">
	
		<form method ="post" action = "successful.php" class="form-horizontal">
	      <fieldset>
		    <legend>Fill out the following information to create your event</legend>
			
		      <div class="form-group">
		        <label class="col-lg-2 control-label">Name</label>
		          <div class="col-lg-10">
					<input type="hidden" name = "submitted" value = "true"/>
			        <input type="text" class="form-control" placeholder="Event Name" name = "ename">
		          </div>
			 </div>
				
			 <div class="form-group">
		       <label class="col-lg-2 control-label">Date</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Date" name = "edate">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Start Time</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Start Time" name = "estart">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">End Time</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event End Time" name = "eend">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Location</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Location" name = "elocation">
		         </div>
			</div>
			
			<div class="form-group">
			  <label for="textArea" class="col-lg-2 control-label">Description</label>
			    <div class="col-lg-10">
				  <input type="hidden" name = "submitted" value = "true"/>
				  <textarea class="form-control" rows="3" id="textArea" name = "edescription"></textarea>
				  <span class="help-block">Please enter a description about your event. A maximum of 1000 characters is accepted.</span>
			    </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Cost</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Cost" name = "ecost">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Sponsor</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Sponsor" name = "esponsor">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">School</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event School" name = "eschool">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Image</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Image" name = "eimg">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Email</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Email" name = "eemail">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Phone Number</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Phone Number" name = "ephone">
		         </div>
			</div>
			
			<div class="form-group">
		       <label class="col-lg-2 control-label">Website Address</label>
		         <div class="col-lg-10">
				   <input type="hidden" name = "submitted" value = "true"/>
			       <input type="text" class="form-control" placeholder="Event Website Address" name = "eaddress">
		         </div>
			</div>
			
			<div class="form-group">
      <label for="select" class="col-lg-2 control-label">Category</label>
      <div class="col-lg-10">
		<input type="hidden" name = "submitted" value = "true"/>
        <select class="form-control" id="select" name = "ecategory">
          <option>Business</option>
          <option>Engineering</option>
          <option>Design</option>
          <option>Career Events</option>
          <option>Free Food</option>
          <option>Bars and Restaurants</option>
          <option>Greek Life</option>
        </select>
        <br>
      </div>
    </div>
			
			<div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

			
	      </fieldset>
	    </form>
		
		</div>

		</div>
	
	</div>
	
	<div class = "container text-center">
			<p>&copy;2015, Uvents</p>
			<p></p>
	</div>
 
	</body>
</html>

