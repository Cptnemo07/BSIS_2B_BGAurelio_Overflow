<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@100&family=Nunito:wght@200&family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/student_style.css">
    <title>Student</title>
    <style>
        * {
            font-family: "Josefin sans";
        }
        
        .container {
          margin-top: 12rem;
        }
    </style>
</head>
<body>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 " style="border-radius: 1.3rem;">
          <div class="animate__animated animate__backInDown card text-white bg-light mb-3 bg-light shadow p-3" style="max-width: 100%;">
          <img src="..\img/draw2.png" alt="404">
        </div>
    </div>
    <div class="col-lg-1">

    </div>
    <div class="col-lg-5 " style="border-radius: 1.3rem;">
          <div class="animate__animated animate__backInUp card text-white bg-light mb-3 bg-light shadow p-3" style="max-width: 100%">
            <div class="card-header mb-4 text-uppercase text-dark text-center">Login</div>
                  <form  action="action.php" method="post" autocomplete="off">  
                
                <?php
          
                  if(isset($_GET['invalid_input'])) {
                    echo '<div class="animate__animated animate__swing alert alert-danger alert-dismissible fade show fw-bolder text-center" role="alert" style="animation-delay: 1s;">
                            <strong>SORRY!</strong> Invalid Input!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                  }
          
          
          
                  ?>
          
                    <div class="form-floating mb-4 text-dark">
                      <input type="text" class="form-control" name="usernameemail" id="floatingInput" placeholder="Username" required>
                      <label for="floatingInput">Username</label>
                    </div>
          
                    <div class="form-floating mb-3 text-dark">
                      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                      <label for="floatingPassword">Password</label>
                    </div>
          
                    <div class="text-center text-lg-start mt-4 pt-2 text-dark">
                      <button type="submit" name="sign_up_btn" class="btn btn-primary btn-lg w-100"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                      <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account?
                        <a href="signup.php"
                          class="link-danger">Register</a></p>
                    </div>
          
                  </form>
        </div>
      </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>