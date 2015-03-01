<!DOCTYPE html>

<!-- 
Clubs Page
-->

<html lang="en">
  	
  <head>
    <!-- Meta tag -->
	<meta name= "robots" content="noindex,no follow" />
    <meta charset= "utf-8" />
	
	<!-- This meta tag allows the mobile version on mobile, tablet on tablet, desktop on desktop -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Link tag for CSS -->
	<link href = "bootstrap/css/bootstrap-theme-flat.css" rel = "stylesheet">
	<link href = "bootstrap/css/styles.css" rel = "stylesheet">	
	<!-- Javascript tags -->
	<script type="text/javascript" src="js/messages.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src = "bootstrap/js/bootstrap.js"></script>
	
	<!-- Favicon tag --> 
	<link rel="icon" href="images/uventslogo.png"/>
	
    <!-- Web Page Title -->
    <title>Create</title>
	
  </head>

  <body>
	<div class = "navbar navbar-default navbar-static-top">
		<div class = "container">
		
			<a href= "index.htm" class = "navbar-brand">uvents</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>	
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li><a href = "index.htm">Home</a></li>	
					<li><a href = "login.htm">Login</a></li>							
					<li class = "active"><a href = "create.php">Create</a></li>				
					<li><a href = "clubs.htm">Clubs</a></li>	
					<li class = "dropdown">
						<a href = "#" class = dropdown-toggle" data-toggle = "dropdown">Categories <b class = "caret"></b></a>	
						<ul class = "dropdown-menu">
							<li><a href = "#">Business</a></li>
							<li><a href = "#">Engineering</a></li>
							<li><a href = "#">Design</a></li>
							<li><a href = "#">Career Events</a></li>
							<li><a href = "#">Free food</a></li>
							<li><a href = "#">Bars and Restaurants</a></li>
							<li><a href = "#">Greek Life</a></li>				
						</ul>
					</li>
					<li><a href = "contact.htm">Contact Us</a></li>
					<li><a href = "aboutus.htm">About Us</a></li>							
				</ul>
			</div>
			
		</div>
	</div>

	
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

