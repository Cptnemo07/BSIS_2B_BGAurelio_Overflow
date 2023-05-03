<?php
require 'connect.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM attendance_records WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO attendance_records ( `name`, `username`, `email`, `password`) VALUES('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>register</title>
</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: url('img/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form class="" action="" method="post" autocomplete="off">

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Name</label> 
                <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="username">UserName</label> 
                <input type="text" name="username" id="username" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="confirmpassword">Confirm Password</label>
                  <input type="password" name="confirmpassword" id="confirmpassword" class="form-control form-control-lg" required/>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>