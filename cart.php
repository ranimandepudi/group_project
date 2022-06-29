
  
<!DOCTYPE html>
<html>
<head>
	<title>cart page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
				<a href="home.php" class="navbar-brand">E-Store</a>
			</div>
			<div class="nav navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Item Number</th>
							<th>Item Price</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>
