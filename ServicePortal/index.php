<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>ServicePortal</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">ServicePortal</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="" class="nav-link">About</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/banner2.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-dark font-weight-bold">Welcome to Service-Portal</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-dark mr-4">Login</a>
      <a href="#registration" class="btn btn-outline-dark mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Our Services</h3>
      <p>
      service portal have provided efficient quality of work in developing and maintain website portals as per the latest updates and technologies that keep our portal up-to-date and stay ahead of the rest of the competitors. Serving for different industries, purpose and individual expectations, websites have modernized a new trend of maximizing actions.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-dark" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Our Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/img.jpg.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Chinmay Ingle</h4>
              <p class="card-text">My name is Chinmay Ingle , service provided by ServicePortal is very good.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/wk2.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Niraj Saraf</h4>
              <p class="card-text">My name is Niraj Saraf , service provided by ServicePortal is very good.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/sagar.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sagar Mhajan</h4>
              <p class="card-text">My  name is Sagar Mahajan , service provided by ServicePortal is very good.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/img.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Chinmay</h4>
              <p class="card-text">IMy  name is chinmay , service provided by ServicePortal is very good.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        _________ <br>
        _________ <br>
        Pune - 411002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.123.com</a> <br>

        <br><br>
        <strong>Akola Branch:</strong> <br>
        ___________ <br>
        ___________ <br>
        Akola - 444002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.123.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/Chinmay97142276" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/chinmay._7/" target="_blank" class=" pr-2 fi-color"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/chinmay7111" target="_blank" class="pr-2 fi-color"><i class="fab fa-github"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by @ Chinmay - 2020.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>