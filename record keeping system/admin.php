<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Tracker - Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Attendance Tracker - Admin Dashboard</h1>
    <form method="post" action="logout.php">
      <input type="submit" name="logout" value="Log Out">
    </form>
    <h2>Attendance Records</h2>
    <table>
      <tr>
        <th>User ID</th>
        <th>Login Time</th>
        <th>Logout Time</th>
        <th>Duration</th>
      </tr>
      <?php
      // query the database to get attendance records and display them in a table
      $conn = mysqli_connect("localhost", "username", "password", "attendance_tracker");
      $query = "SELECT * FROM attendance_records";
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $login_time = $row['login_time'];
        $logout_time = $row['logout_time'];
        $duration = strtotime($logout_time) - strtotime($login_time);
        echo "<tr>";
        echo "<td>$user_id</td>";
        echo "<td>$login_time</td>";
        echo "<td>$logout_time</td>";
        echo "<td>" . gmdate("H:i:s", $duration) . "</td>";
        echo "</tr>";
      }
      mysqli_close($conn);
      ?>
    </table>
    <h2>Generate Report</h2>
    <form method="post" action="report.php">
      <label for="absent_days">Number of days absent:</label>
      <input type="number" id="absent_days" name="absent_days" min="1" max="365" required>
      <input type="submit" name="generate_report" value="Generate Report">
    </form>
  </div>
</body>
</html>