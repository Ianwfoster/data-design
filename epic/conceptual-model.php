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
		<li>calendarSlots</li>
		<li>calendarDay</li>
		<li>calendarMonth</li>
		<li>calendarYear</li>
	</ul>
		<h3>Appointment</h3>
	<ul>
		<li>appointmentProfileId (foreign key)</li>
		<li>appointmentCalendarId (foreign key)</li>
	</ul>

<h3>Relations</h3>
<ul>
	<li>One <strong>Profile</strong> can <strong>Book</strong> multiple <strong>Appointments.</strong> <strong>(1-to-n)</strong></li>
	<li>Multiple <strong>Appointments</strong> events can be <strong>Booked</strong> by one <strong>Calendar.</strong> <strong>(n-to-1)</strong></li>
</ul>

<img src="data-design-coceptual-model.drawio-3.png" alt="coceputal Model">

<a href="index.php">Back Home</a>
</body>
</html>