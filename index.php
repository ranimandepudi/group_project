
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
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
	    	<form action="home.php" method="post">
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 1</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="1.jpg" alt="" class="img-responsive"></div>
						<p>Realme ,MediaTek Helio G9OT,64gb,4300MAh Rs.16,999</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>		
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 2</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="2.jpg" alt="" class="img-responsive"></div>
						<p>OPPO A3s,2GB RAM,16GB internal storage,Dual rear,8MP selfie Rs.74,900</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 3</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="4.jpg" alt="" class="img-responsive"></div>
						<p>vivo IQOO 3,8GB RAM,128GB internal storage Rs.34,990</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>				
		</div>		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 4</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="3.jpg" alt="" class="img-responsive"></div>
						<p>Samsung Galaxy S20 Plus,6GB RAM,64GB internal storage,Quad rear Rs.73,999</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>		
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 5</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="5.jpg" alt="" class="img-responsive"></div>
						<p>Apple iPhone 11 Pro,Apple A13 Bionic (7 nm ),4GB RAM,Rs.97,900</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 6</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="6.jpg" alt="" class="img-responsive"></div>
						<p>Xiaomi Redmi Note 8 Pro,Qualcomm Snapdragon 665,6GB RAMRs.14,479</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>				
		</div>	
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 7</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="7.jpg" alt="" class="img-responsive"></div>
						<p>Apple iPhone 13,128GB ROM,MLPK3HN/A,Pink,Rs.72,990</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>		
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 8</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="8.jpg" alt="" class="img-responsive"></div>
						<p>OPPO F17 PRO,128 GB,Metallic Blue,8 GB RAM,Rs.18,990</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 9</h4>
					</div>
					<div class="panel-body">
						<div class="thumbnail"><img src="9.jpg" alt="" class="img-responsive"></div>
						<p>REALME 3 PRO LIGHTNING PURPLE, 128GB 6GB RAM REFURBISHEDD,Rs.12,999</p>
						<a href="home.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
