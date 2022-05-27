<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'clementhotels');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//check if dates are matching
	if($_POST['cdate'] == $_POST['odate']){
		$_SESSION['message'] = "You cannot check in and check out on the same day!";
	}
	else{
		$cdate = $mysqli->real_escape_string($_POST['cdate']);
		$odate = $mysqli->real_escape_string($_POST['odate']);
		$adults = $mysqli->real_escape_string($_POST['adults']);
		$children = $mysqli->real_escape_string($_POST['children']);
		$rooms = $mysqli->real_escape_string($_POST['rooms']);
		$fname = $mysqli->real_escape_string($_POST['fname']);
		$lname = $mysqli->real_escape_string($_POST['lname']);
		$idnum = $mysqli->real_escape_string($_POST['idnum']);
		$phone = $mysqli->real_escape_string($_POST['phone']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$nationality = $mysqli->real_escape_string($_POST['nationality']);
		
		$_SESSION['cdate'] = $cdate;
		
		$sql = "INSERT INTO bookingform (cdate, odate, adults, children, rooms, fname, lname, idnum, phone, email, nationality) "
		. "VALUES ('$cdate', '$odate', '$adults', '$children', '$rooms', '$fname', '$lname', '$idnum', '$phone', '$email', '$nationality')";
				
		//query success, redirect to index.php
		if($mysqli->query($sql) === true){
			$_SESSION['message'] = 'Booking successful!';
			header("Location: index.php");
		}
		else{
			$_SESSION['message'] = "Booking failed!";
		}
	}

}

?>

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
	<a class="navbar-brand" href="index.html"><img src = "img/logo.png" height = "80" width = "80"></a>
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
			<li class="nav-item">
				<a class="nav-link" href="services.php">Services</a>
			</li>
			<li class="nav-item active">
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
			<img src="img/booking.jpg" >
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
	<div class="col-12">
		<h1 class="display-4">Reserve a hotel room.</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class = "lead">We look forward to hosting you and your loved ones at our hotel. Our rooms have
		amazing interior designs and they are set up with the client's needs in mind. All the ensuite rooms have a
		jacuzzi and a study area which create a perfect ambience for relaxing and reflecting on daily activities </p>
	</div>
	<div class="col-12">
		<p class = "display-8">ENTER YOUR DETAILS BELOW TO MAKE YOUR BOOKING</p>
		<form class="contact-form" method="post" action="bform.php" align="center">
		<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
		<input height="45px" name = "cdate" type="text" class="form-control" placeholder="Check in date: ddmmyyyy" required><br/>
		<input height="45px" name = "odate" type="text" class="form-control" placeholder="Check out date: ddmmyyyy" required><br/>
		<input height="45px" name = "adults" type="text" class="form-control" placeholder="Adults" required><br/>
		<input height="45px" name = "children" type="text" class="form-control" placeholder="Children" required><br/>
		<input height="45px" name = "rooms" type="text" class="form-control" placeholder="Rooms" required><br/>
		<input height="45px" name = "fname" type="text" class="form-control" placeholder="First Name" required><br/>
		<input height="45px" name = "lname" type="text" class="form-control" placeholder="Last Name" required><br/>
		<input height="45px" name = "idnum" type="text" class="form-control" placeholder="ID/ Passport number" required><br/>
		<input height="45px" name = "phone" type="text" class="form-control" placeholder="Phone number" required><br/>
		<input height="45px" name = "email" type="email" class="form-control" placeholder="Your email" required><br/>
		<input height="45px" name = "nationality" type="text" class="form-control" placeholder="Nationality" required><br/>
		<input height="45px" type="submit" class="form-control submit" value="SUBMIT"><br> 
		<a href="http://localhost/clementHotels/mpesa/index.php"><button type="button" class="mpesa">PAY HERE</button></a><br>
	</form>

	</div>
	
</div>
</div>

<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-6">
		<img src = "img/logo.png" height = "60" width = "60">
		<p> </p>
		<h5>CLEMENT HOTELS</h5>
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
		<a href="index.php">Home</a>
	</div>
</div>
</div>
</footer>

</body>
</html>