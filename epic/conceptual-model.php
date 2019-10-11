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
		<li>profileId (primary key)</li>
		<li>profileName</li>
		<li>profileEmail</li>
		<li>profilePhoneNumber</li>
	</ul>

		<h3>Calendar</h3>
	<ul>
		<li>calendarId (primary key)</li>
		<li>calendarProfileId (foreign key)</li>
		<li>calendarDatetime</li>
	</ul>
		<h3>Appointment</h3>
	<ul>
		<li>profileId (foreign key)</li>
		<li>calendarId (foreign key)</li>
	</ul>

<h3>Relations</h3>
<ul>
	<li>One <strong>Profile</strong> can <strong>Book</strong> One <strong>Appointments.</strong> </li>
	<li>Multiple <strong>Calendar</strong> events can be <strong>Booked</strong> by mulitipule <strong>Profiles.</strong></li>
</ul>

<img src="https://www.draw.io" alt="coceputal Model">

<a href="index.php">Back Home</a>
</body>
</html>