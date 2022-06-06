<?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['adults'], $_POST['children'], $_POST['room_pref'])) {
	//$responses[] = 'Email is not valid!';
	// Process form data
	// Assign POST variables
$arrival = htmlspecialchars($_POST['arrival'], ENT_QUOTES);
$departure = htmlspecialchars($_POST['departure'], ENT_QUOTES);
$first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
$last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
$adults = htmlspecialchars($_POST['adults'], ENT_QUOTES);
$children = htmlspecialchars($_POST['children'], ENT_QUOTES);
$room_pref = htmlspecialchars($_POST['room_pref'], ENT_QUOTES);
				
// Validate email adress
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$responses[] = 'Email is not valid!';
}
// First name must contain only alphabet characters.
if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
	$responses[] = 'First name must contain only characters!';
}
// Last name must contain only alphabet characters.
if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
	$responses[] = 'Last name must contain only characters!';
}

// If there are no errors
if (!$responses) {
	// Where to send the mail? It should be your email address
	$to      = $email;
	// Mail from smtp server
	$from    = 'kipngetich.c001@gmail.com';
	// Mail subject
	$subject = 'Clement Hotels Guest Reservation';
	// Mail headers
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	// Capture the email template file as a string
	ob_start();
	include 'email-template.php';
	$email_template = ob_get_clean();
	// Try to send the mail
	if (mail($to, $subject, $email_template, $headers)) {
		// Success
		$responses[] = 'Thank you for your reservation!';	

		$mysqli = new mysqli('localhost', 'root', '', 'clementhotels');

		//check if dates are matching
	if($_POST['arrival'] == $_POST['departure']){
		$responses[] = "You cannot check in and check out on the same day!";
	}
	else{
		$arrival = $mysqli->real_escape_string($_POST['arrival']);
		$departure = $mysqli->real_escape_string($_POST['departure']);
		$first_name = $mysqli->real_escape_string($_POST['first_name']);
		$last_name = $mysqli->real_escape_string($_POST['last_name']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$phone = $mysqli->real_escape_string($_POST['phone']);
		$adults = $mysqli->real_escape_string($_POST['adults']);
		$children = $mysqli->real_escape_string($_POST['children']);
		$room_pref = $mysqli->real_escape_string($_POST['room_pref']);
		
		$sql = "INSERT INTO bform (arrival, departure, first_name, last_name, email, phone, adults, children, room_pref) "
		. "VALUES ('$arrival', '$departure', '$first_name', '$last_name', '$email', '$phone', '$adults', '$children', '$room_pref')";
				
		//query success
		if($mysqli->query($sql) === true){
			$responses[] = 'Booking successful!';
			$responses[] = 'Proceed to Payment!';
			//header("Location: index.php");
		}
		else{
			$responses[] = "Booking failed!";
		}
	}

	} else {
		// Fail; problem with the smtp(simple mail transfer protocol) mail server...
		$responses[] = 'Message could not be sent! Please check your mail server settings!';
	}
}

}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clement Hotels</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link href="style1.css" rel="stylesheet">
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

<!--- Clement Hotels Reservation Form -->
<form class="hotel-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>Reservation Form</h1>
			<div class="fields">
				<!-- Input Elements -->

				<div class="wrapper">
	<div>
		<label for="arrival">Arrival</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Departure</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
</div>

<div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Last Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
</div>

<label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email" placeholder="example@gmail.com" required>
</div>

<label for="phone">Phone</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" placeholder="254700000011" required>
</div>

<div class="wrapper">
	<div>
		<label for="adults">Adults</label>
		<div class="field">
			<select id="adults" name="adults" required>
				<option disabled selected value="">--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="children">Children</label>
		<div class="field">
			<select id="children" name="children" required>
				<option disabled selected value="">--</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>
	</div>
</div>

<label for="room_pref">Room Preference</label>
<div class="field">
	<select id="room_pref" name="room_pref" required>
		<option disabled selected value="">--</option>
		<option value="Standard">Standard</option>
		<option value="Deluxe">Deluxe</option>
		<option value="Suite">Suite</option>
	</select>
</div>

<?php if ($responses): ?>
<p class="responses"><?php echo implode('<br>', $responses); ?></p>
<?php endif; ?>
<input type="submit" value="Reserve">
<div>
<a href="http://localhost/clementHotels/mpesa/index.php"><button type="button" class="mpesa">PAY HERE</button></a><br>
</div>

			</div>
		</form>

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