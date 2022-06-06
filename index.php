<?php session_start();?>
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
		<li class="nav-item active">
				<a class="nav-link" a href="login.php">login</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item">
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
	</ul>
	<div class = "carousel-inner">
		<div class="carousel-item active">
			<img src="img/photo1.jpg">
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">The Clement Hotels</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class = "lead">Welcome to Clement Hotels,  
LUXURY CITY HOTEL IN NAIROBI CITY, KENYA&copy;. We look forward to making your stay worth while. We take pride in being the best in offering the perfect fusion of luxury in Kenyan hospitality industry, The clement Hotel is a unique destination where guests can spend good time relaxing and working.

You will also find exquisite dining opportunities here. Our dining selection includes Cafeteria and Restaurant, lobby lounge; Sports Bar; and our Levant-style hospitality.The hotel also has a grand ballroom and The Spa.</p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	
</div>
<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">	
	<div class="col-12">
		<h1 class="display-4">What we offer</h1>
		<hr>
		<p>Welcome to the world of The Clement Hotels. We offer quite a lot of services, these includes, Accomodation, meeting and events, culinary, swimming pool, sports bar & Spa.
		based on your choices and preferences.</p>
	</div>
	<div class="col-md-6 lead">	
		<h3>Regular Suite</h3>
		<p> </p>
		<img src="img/room1.jpg" class="image-fluid" height="400" width="450">
		<p> </p>
		<p>Our regular suit is designed to be as functional and accomodating as possible. This beautifully designed room is fitted with a double bed to give more room for extra space offering at KES3000 per day. Kindly note to multiply payment amount by the number of days of your stay.  </p>
		<a href="bform.php" class="btn btn-primary">BOOK HERE</a>
		<br>
	</div>

	<div class="col-md-6 lead">	
		<h3>Executive Suite</h3>
		<p> </p>
		<img src="img/room3.jpg" class="image-fluid" height="300" width="550">
		<p> </p>
		<p>The executive suit is well equiped to support corporate guests. Thanks to the addition of working space-the perfect base away from the office. This is beautifully separated from the living and sleeping area and comes with a king-sized bed, luxurious bathroom and a balcony. A KES4500 budget gets you accomodation in the Executive suit. Click on Book button to make your reservation. Note to multiply amount to pay by the number of your days to stay. Welcome!</p>
		<a href="bform.php" class="btn btn-primary">BOOK HERE</a>
		<br>
	</div>
</div>
</div>
<hr class="my-4">

<!--- Meet the team -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Flexible Payment</h1>
		<hr>
	</div>
	<div class="col-12">
		<p class = "lead">Make your payment via our mpesa Till Numbers by clicking on the button below.</p>
		<a href="/mpesa/index.php" class="btn btn-primary">MAKE PAYMENT</a>
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
	</div>
</div>
</div>
</footer>

</body>
</html>