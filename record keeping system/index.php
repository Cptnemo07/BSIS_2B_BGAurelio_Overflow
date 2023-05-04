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
    <title>Scheduling System</title>
    <style>
        * {
            font-family: "Josefin sans";
        }
        body {
            overflow-x: hidden;
        }

        .bg-image {
            height: 100vh;
            width: 100vw;
            object-fit: cover;
            filter: brightness(0.8);
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1; 
        }

        a {
            font-size: 19px;
        }

        .mtl {
            margin-top: 8rem;
        }

        h3 {
            font-size: 3rem;
        }

        strong {
            font-size: 3.4rem;
        }

    </style>
</head>
<body>

<img src="img/home-bg.jpg" class="bg-image" alt="">


<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light mx-1 text fw-bolder" href="includes/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light mx-1 text fw-bolder" href="includes/register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mtl">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="text-uppercase">
            Schedule <strong>smarter</strong>, <br> not <strong>harder</strong>.
            </h3>
            <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aspernatur neque nobis omnis veritatis veniam maiores dignissimos incidunt rerum dolorem.</p>
            <a href="" class="btn btn-outline-light w-25 fw-bolder">Start</a>
        </div>
        <div class="col-lg-6">

        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>