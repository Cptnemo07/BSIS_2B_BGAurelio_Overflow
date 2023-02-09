<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thai Tanic</title>
    <link rel="stylesheet" href="STYLE2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

  </head>
  <body>
    <nav class="navbar">
      <div class="container justify-content-center">
          <div class="nav-title">
            <a href="landing.php" class="h4 text-decoration-none text-light text-uppercase">
             Thai tanic
              <img src="img/pink-restaurant.png" alt="Cubit" width="30" height="30" class="d-inline-block align-text-top">
            </a>
          </div>        
      </div>
  </nav>

  <form action="action.php" method="POST">
    <div class="container mt-5 ">
      <div class="col-10 mx-auto ">
        <div class="row bg-dark shadow-lg rounded">
          <div class="col-5 rounded  mx-auto bg-dark m-5">
            <div class="container py-1 text-center display-6 pt-5  fw-semibold">
                <a href="" class=" text-white text-decoration-none">Reservation</a>
            </div>


                <div class="mb-3 text-white fw-normal mt-4">
                  <label for="username" class="form-label">Username:</label>
                  <input type="text" class="form-control" id="Username" name="Username" required>
                </div>

                <div class="mb-3 text-white fw-normal">
                  <label for="Location" class="form-label">time:</label>
                  <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <div class="mb-3 text-white fw-normal">
                  <label for="date" class="form-label">date:</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="d-grid text-center gap-2 mt-5 mb-3">
                  <button class="btn btn-secondary rounded-5 offset-4 col-4 px-5 py-3" name="Submit_btn">Submit</button>
                </div>

                <div class="container text-center my-4">
                  <div class="container">
                    <a href="#" class="text-decoration-none ">Or <br>Reserve with</a>
                </div>
                <a href="#"><i class="bi bi-facebook text-primary h4 mx-2"></i></a>
                <a href="#"><i class="bi bi-instagram text-warning h4 mx-2"></i></a>
                <a href="#"><i class="bi bi-twitter text-info h4 mx-2"></i></a>
                <a href="#"><i class="bi bi-youtube text-danger h4 mx-2 "></i></a>
              </div>
            </div>

                  <div class="holder col-6 pe-0">
                    <div class="text-white text-decoration-none position-static p-5" >
                      <div class="display-1">
                        New To thai tanic?
                      </div>

                      <div class="h2 p-4 fw-light">
                       Reserve now and experience thai dishes on sea

                    </div>
                  </div>
                  </div>
        </div>
    </div>
  </form>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>





















