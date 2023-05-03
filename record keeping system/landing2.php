<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>Student Attendance Tracker</h1>
	<form action="submit.php" method="POST">
		<label for="name">Student Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="date">Date:</label>
		<input type="date" id="date" name="date"><br><br>
		<label for="time">Time:</label>
		<input type="time" id="time" name="time"><br><br>
		<label for="status">Status:</label>
		<select id="status" name="status">
			<option value="present">Present</option>
			<option value="absent">Absent</option>
			<option value="late">Late</option>
		</select><br><br>
		<input type="submit" value="Submit">
	</form>
</body>>
</html>