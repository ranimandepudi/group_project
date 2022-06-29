
  
<!DOCTYPE html>
<html>
<head>
	<title>about page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		 footer{
    	padding: 10px 0;
		background-color: #101010;
		color:#9d9d9d;
		bottom: 0;
		width: 100%;
    }
   	</style>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">E-Store</a>
			</div>
			<div class="nav navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
					<li><a href="" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<form  action="home.php" method="post">
	      		<div class="modal-header">
	        	    <h4 class="modal-title" id="myModalLabel">Login </h4>
	       			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         		 <span aria-hidden="true">×</span>
	        		</button>
	     		</div>
	     		<div class="modal-body">
	       			<p>Don't have an account?<a href="singup.php">Register</a></p>
	       			<div class="form-group">
	       			 <input type="email" name="email"class=" form-control" placeholder="Email" required="true"><div><?php if(isset($_GET['email_error'])){
      echo $_GET['email_error'];} ?></div> <br>
	       			</div>
	       			<div class="form-group">
	        		 <input type="password" name="password"class=" form-control" placeholder="Password" required="true"><div><?php if(isset($_GET['password_error'])){
      echo $_GET['password_error'];} ?></div><br>
	        		</div>
					 <a href=""> <button class="btn btn-primary">Login</button></a>
	      		</div>
	      		<div class="modal-footer">
	       			<p><a href="##">forget password?</a></p>
	      		</div>
	      	</form>
	    </div>
	  </div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>WHO WE ARE</h4> 
					</div>
					<div class="panel-body">
						<p>E-store is an American electronic commerce company with headquarters in Washington. It is the largest Internet-based retailer in the United States. E- Stare started as an online bldg. but soon diversified. selling mobile phones. E- Store also sells certain low-end products like USB cables and other accessories. E- Store has separate retail websites for United States. United Kingdom & Ireland_ France_ Canada_ Germany_ Italy. Spain. the Netherlands. Australia. Brazil. Japan_ China, India and Mexico_ Amazon also offers international shipping to certain other countries. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>OUR HISTORY </h4> 
					</div>
					<div class="panel-body">
						<p>1998-The company was founded in 1998_ spurred by what Velos called his Initiating framework". which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998. Velos left his employment as president of Mal & Co_ and moved to Seattle. He began to work on a business plan for what would eventually become E- Store.<br> 
                        2002-In January 2002_ E- store has received a funding of 512 million from Venture Partners and Indo-US Venture Partners.<br> 
						2008-In July 2008. the company raised a further S45 million from Bessemer Venture Partners. along with existing investors Venture Partners and Indo-US Venture Partners. <br>
						2015-E- Store received its 3rd round of funding of 5133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4> OPPORTUNITIES </h4> 
					</div>
					<div class="panel-body">
						<p> <h5>Available Roles</h5> 
							1_ JriSr. Web Developer [Full Time Role + also available as a B Months Internship] <br>
							2. Business Apprentice [6 Months Internship] <br>
							3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship] <br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Information</h4>
					<a href="about.php">About Us</a><br>
					<a href="contact.php">Contact Us</a>
				</div>
				<div class="col-md-4">
					<h4>My Account</h4>
					<a href="" data-toggle="modal" data-target="#loginmodal">Login</a><br>
					<a href="signup.php">Sign Up</a>
				</div>
				<div class="col-md-4">
					<h4>Contact Us</h4>
					<p>Contact:+91-123-000000</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>