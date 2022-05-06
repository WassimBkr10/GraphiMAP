<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: /GRAPHICOM/index.html');
	exit();
}
?>


  <!DOCTYPE html>
  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Save Files</title>
  
  		<!-- Bootstrap CSS -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		<!-- Google Fonts -->
  		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
  		<!-- Font Awesome -->
  		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  		<!-- Style -->
  		<link href='style.css' rel='stylesheet' type='text/css'>
  
  		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  		<![endif]-->
  	</head>
	

  	<body>
  		<nav class="navbar navbar-default" role="navigation">
  			<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" >Graphicom</a>
  				</div>
  		
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse navbar-ex1-collapse">
  					<ul class="nav navbar-nav navbar-right">
  						<li><a href="http://localhost/GRAPHICOM/index_Style_DELEG.php">Back</a></li>
						<li><a href="/GRAPHICOM/logout.php">Logout</a></li>
  						<li class="dropdown">
  				</div><!-- /.navbar-collapse -->
  			</div>
  		</nav>
		
		<!-- START SECTION -->
  		<div class="section hero text-center background-dark dark-bg">
  			<div class="background-image" style="background: url(images/earth2.jpg) no-repeat center center; background-size: cover; opacity: .2;"></div>
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
  						<h2>Files Management</h2>
  						<p class="lead"></p>
  						<ul class="list-inline">
  							<li><a href="Upload File.php" title="Learn More" class="btn btn-md btn-info">Save Files</a></li>
  							<li><a href="Files Liste.php" title="Learn More" class="btn btn-md btn-primary">Files List</a></li>
  						</ul>

  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/.section -->

  		<!-- START SECTION -->
  		<div class="section background-light">

  	


  		
  
  		<!-- jQuery -->
  		<script src="//code.jquery.com/jquery.js"></script>
  		<!-- Bootstrap JavaScript -->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  	</body>
  </html>