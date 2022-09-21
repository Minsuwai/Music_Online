<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/236b71460d.js" crossorigin="anonymous"></script>

    <title>Music Online</title>

    
  </head>
  <body>
    <div class="bg-img">
    <!-- Nav -->
    <nav class="navbar navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="#" style="font-size: 30px;">Music Online</a>
        <div class="containerfluid col-md-3 me-auto ">
          <a class="navbar-menu" href="#">Home</a>
          <a class="navbar-menu" href="#">About</a>
          <a class="navbar-menu" href="#">Contacts</a>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header bg-dark">
            <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel" style="text-transform: uppercase;">Music Online</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            

          </div>
          <div class="row container-fluid">
            <div class="container-fluid col-md-1">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="login.php"><button class="btn btn-outline-primary"> Login </button> </a>
                </li>
              </ul>
            </div>
            <div class="container-fluid col-md-6">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="register.php"><button class="btn btn-outline-primary"> Register </button> </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Nav -->

    <!-- Content -->
    
      <div class="container-fluid col-md-11 mt-6 navbar-brand" >
        <div class="text-primary text-uppercase" >
          <h1 class="fw-bold"> Listen To Music <br>
            And Enjoy What <br> You Love  </h1>


          </div>
        </div>
        <div class="container text-wrap text-white" >
          <div class="row">
            
            <div class="col-md-6">
              <div class="card bg-info bg-opacity-75">
                <div class="card-body">

                  <p class="card-text"> 
                    Join our family. Create your profile, track what you listen to and get cool stuff like your music charts, custom-tailored music recommendations if you are up for something new. We have a place where you can discorver new music suited for your taste
                  </p>
                  <a href="#" class="btn btn-outline-primary">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Search -->
        <div class="container-fluid col-md-5 me-auto mt-4">
          <div class="row">
            <!-- <nav class="navbar bg-info bg-opacity-90 mt-4"> -->
              <div class="container-fluid">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </nav>
          </div>
        </div>
        <!-- End of Search -->

        <!-- List of Songs -->
        <form>
          <fieldset disabled>


            <div class="container me-auto mt-4">
              <div class="container-fluid col-md-4">
                <h1 class="text-white">Listen Songs With Us</h1>
              </div>


              <div class="row">
                <div class="container col-md-5 mt-2">


                  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/l_1_a_1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/j_1_a_1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/p_1_a_1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/b_1_a_1.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                </div>
              </div>
            </div>
          </fieldset>
        </form>
        
        <!-- End of List of Songs -->
      
      


      <!-- footer -->
      <footer class="bg-dark text-white pt-5 pb-4 mt-3">
          <div class="container text-justify text-md-left">
            <div class="row text-justify text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">


                <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Company Name</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product</h5>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">The Providers</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Creativity</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Sourcefiles</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">The Providers</a>
                </p>
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Useful links</h5>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Your Account</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Become an Affiliates</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Shipping Rates</a>
                </p>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Help</a>
                </p>
              </div>

              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                <p>
                  <i class="fas fa-house mr-3"></i> Yangon, St 315, Myanmar
                </p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> musiconline@gmail.com
                </p>
                <p>
                  <i class="fas fa-phone mr-3"></i> +95 987 785 279
                </p>
              </div>

            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
              <div class="col-md-7 col-lg-8">
                <p> Copyright &copy; All rights reserved by: 
                  <a href="#" style="text-decoration: none;">
                    <strong class="text-warning">The Providers</strong>
                  </a></p>
                </div>
                <div class="col-md-5 col-lg-4">
                  <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                          <i class="fa-brands fa-square-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                          <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                          <i class="fa-brands fa-linkedin"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                          <i class="fa-brands fa-youtube"></i>
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
      <!-- End of Footer -->
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    </body>
    </html>