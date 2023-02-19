<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Tracker - Login</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="container">
    <h1>Attendance Tracker - Login</h1>
    <?php
    if(isset($_SESSION['error'])) {
      echo "<p class='error'>" . $_SESSION['error'] . "</p>";
      unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="authenticate.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="login" value="Log In">
    </form>
  </div>
</body>
</html>