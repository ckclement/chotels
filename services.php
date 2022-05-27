<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clement Hotels</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css"> -->
</head>
<body>
<!-- Navigation -->
<nav class = "navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class = "container-fluid">
	<a class="navbar-brand" href="index.php"><img src = "img/logo.png" height = "80" width = "80"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class ="collapse navbar-collapse" id="navbarResponsive">
		<ul class = "navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="services.php">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="bform.php">Booking Form</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="report.php">Report</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="connect.php">Connect</a>
				<a href="logout.php">log out</a>
			</li>
		</ul>
	</div>
</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class = "carousel-inner">
		<div class="carousel-item active">
			<img src="img/services1.jpeg" >
			
		</div>
		<div class="carousel-item">
			<img src="img/services2.jpeg" >
		</div>
		<div class="carousel-item">
			<img src="img/services3.jpeg" >
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p class="lead">&copy;CLEMENT HOTELS</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		<a href="index.php"><button type="button" class="btn btn-outline-secondary btn-lg">Learn More</button></a>
	</div>
</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12 lead">
		<h1 class="display-4">Clement HOTELS Centre</h1>
	</div>
	<hr>
	<div class="col-12 lead">
		<p></p>
		<p>Our Services are as follows:</p>
		<p><i> </i></p>
		<p><i> </i></p>
		<p><i> </i></p>
		<p><i> </i></p>
	</div>
</div>
</div>

<!--- Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12 lead">
		<h1 class="display-4">Accomodations, Cafeteria, Sports Bart, Casino</h1>
	</div>
	<hr>
	<div class="col-12 lead">
		<p>We have got various experiences for you.</p>
		
	</div>
</div>
<hr class="my-4">
</div>
<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">	
	<div class="col-12">
		<h1 class="display-4">Welcome</h1>
	</div>
	<div class="col-12 lead">	
		<img src="img/desk2.jpg" class="image-fluid" height="250" width="300">
		<br>
		
		<br>
	</div>
</div>
</div>



<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-6">
		<img src = "img/logo.png" height = "60" width = "60">
		<hr class="light">
		<h5>AFRICA</h5>
		<hr class="light">
		<p>Clement Hotels Centre</p>
		<p></p>
		<p>The Hive Nairobi</p>
		<p>0726228330</p>
		<p>clementhotels@gmail.com</p>
		<p>Nairobi, Kenya</p>
	</div>
	
	<div class="col-md-6">
		<hr class="light">
		<h5>Social Media</h5>
		<hr class="light">
		<a href="https://web.facebook.com/"><i class = "fab fa-facebook"></i></a>
		<a href="https://twitter.com/"><i class = "fab fa-twitter"></i></a>
		<a href="https://mail.google.com/"><i class = "fab fa-google-plus-g"></i>
		<a href="https://www.instagram.com/"><i class = "fab fa-instagram"></i></a>
		<a href="https://www.youtube.com/"><i class = "fab fa-youtube"></i></a>
	</div>
	
	<div class="col-12">
		<hr class="light-100">
		<h5>&copy; 2021 CLEMENT HOTELS</h5>
		<a href="index.php"> HOME </a>
	</div>
</div>
</div>
</footer>

</body>
</html>