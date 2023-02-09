<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thai Tanic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
   <style>
     .card {
    transition: all 0.5s ease;
    
   }


   .card:hover{
    transform: scale(1.1);
    overflow-y: hidden;
   }

    </style>
 </head>
  <body>

     <!--Navbar-->
      
    <nav class="navbar bg-dark text-center text-light py-1 sticky-top">
        <div class="container">
            <div class="img">
                <img src="img/Jun jun logo.jpg" alt="" style="width: 5rem;">
                <a href="#" class="nav-brand h2 text-light text-decoration-none fw-bold ms-4">Thai Tanic</a> 
            </div>
          
          <ul class="nav-items d-flex lead ms-5 text-light fw-bold mt-3" style="list-style: none;">
            <a href="#home" class="text-decoration-none text-light"><li class="list-item mx-1 pt-2">Home</li></a>
            <a href="#about" class="text-decoration-none text-light"><li class="list-item mx-1 pt-2">About</li></a>
            <a href="#menu" class="text-decoration-none text-light"><li class="list-item mx-1 pt-2">Products</li></a>
            <a href="#service" class="text-decoration-none text-light"><li class="list-item mx-1 pt-2">Service</li></a>
            <a href="#contact" class="text-decoration-none text-light"><li class="list-item mx-1 pt-2">Contact</li></a>  
            <a href="reservation.php" class="btn btn-warning btn-lg mx-2 fw-bold text-light">Log-in</a>             
        </ul> 
        </div>
      </nav>


       <!--Section1-->

       <section class="bg-dark pb-1 text-center text-light">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/img5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-light">First slide label</h5>
                  <p class="text-light">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/img2.jpg" class="d-block w-100 text-light" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-light">Second slide label</h5>
                  <p class="text-light">Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-light">Third slide label</h5>
                  <p class="text-light">Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
       </section>
  
       <!--Products-->

       <section class=" bg-dark text-center" style="overflow-x: hidden;">
        <div class="container py-3">
            <a href="#" class="h2 fw-bold text-decoration-none text-light">Products</a>
        </div>      
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 text-dark text-center">
                <div class="card text-bg-dark">
                    <img src="img/pro1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-dark text-center">
                <div class="card text-bg-dark">
                    <img src="img/pro2.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-dark text-center">
                <div class="card text-bg-dark">
                    <img src="img/pro3.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-dark text-center">
                <div class="card text-bg-dark">
                    <img src="img/pro4.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      
                    </div>
                  </div>
            </div>
        </div>

        <!--Description-->
        <div class="container-fluid py-5">
            <div class="container bg-secondary p-3 rounded shadow">
                <p class="lead text-light text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum velit sed
                     aperiam quia? Ab cupiditate odio eligendi dicta dolore repellat accusamus, quidem aliquid amet tempora facilis,
                     nemo laudantium? Tenetur, iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ex in reprehen
                     derit fuga atque architecto officia quia tenetur velit quisquam quae obcaecati repellat totam nesciunt incidunt 
                     veniam porro impedit ducimus corporis voluptate dolor mollitia, soluta odit ut? A hic, deserunt aperiam mollitia 
                     repellendus iure ducimus, ipsum neque pariatur sit debitis asperiores maxime odit. Possimus voluptatem natus modi, 
                     harum veniam obcaecati?</p>
            </div>

        </div>
      

       </section>

       <!--Footer-->

       <footer class="bg-dark py-3 text-light text-center border-top shadow">
        <a href="#"><i class="bi bi-facebook text-warning h1 mx-1"></i></a>
        <a href="#"><i class="bi bi-instagram text-warning h1 mx-1"></i></a>
        <a href="#"><i class="bi bi-twitter text-warning h1 mx-1"></i></a>
        <a href="#"><i class="bi bi-youtube text-warning h1 mx-1"></i></a>
         <p class="h6 fw-normal mt-2">Copyright &copy; BikeBiz. Alright Reserved </p>  
       </footer> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>