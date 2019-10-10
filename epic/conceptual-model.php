<!doctype html>
<html lang="en">
<head>

	<title>Conceptual Model</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Conceptual Model</h1>
	<h2>Entities & Attributes</h2>
		<h3>Profile</h3>
	<ul>
		<li>ProfileId (primary key)</li>
		<li>ProfileActivation  (for account verification)</li>
		<li>profileEmail</li>
		<li>profileHash (for account password)</li>
		<li>profilePhone</li>
	</ul>

		<h3>Booking</h3>
	<ul>
		<li>bookingId (primary key)</li>
		<li>bookingProfileId (foreign key)</li>
		<li>bookingDate</li>
		<li>bookingTime</li>
	</ul>
		<h3>Appointment</h3>
	<ul>
		<li>ProfileId (foreign key)</li>
		<li>bookingId (foreign key)</li>
		<li>appointmentDate</li>
		<li>appointmentTime</li>
	</ul>

<h3>Relations</h3>
<ul>
	<li>One <strong>Profile</strong>can <strong>Book</strong> Multiple <strong>Appointments</strong> </li>
	<li>Multiple <strong>Accounts</strong> can be <strong>Booked</strong> by mulitipule <strong>Profiles</strong></li>
</ul>

<a href="https://injoyusalon.com">InJoy U Salon LLC</a><br>
<a href="index.php">Back Home</a>
</body>
</html>