<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Keninngs - Home Page</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Home Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                product page
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="shopping_test.php">Decking</a>
                <a class="dropdown-item" href="shopping_fence.php">fencing</a>
                <a class="dropdown-item" href="shopping_pave.php">products</a>
              </div>
            </div>
          </li>
            <?php
            if(isset( $_SESSION['login_user'])){
            // echo "<li><a href='/Kennings/welcome.php'>". $_SESSION['login_user']."</a></li> ";
             echo "<li class='nav-item'><a class= 'nav-link' href='/Project/welcome.php'>". $_SESSION['login_user']."</a> </li>";


           ?>
            <?php
             echo "<li class='nav-item'><a class= 'nav-link' href='/Project/signout.php'>Sign out</a> </li>";
          }else{
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/register.php'>Sign Up</a> </li>";
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/login.php'>login </a> </li>";
              } ?>
           <li class='nav-item'><a class= 'nav-link' href='/Project/contact%20us.php'>contact us</a> </li>
           <li class='nav-item'><a class= 'nav-link' href='/Project/signout.php'>shopping cart</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a class="navbar-brand" href="/Kennings/index.php"><img src="/kennings/images/logo2.png" alt="" width="250" height="150"></a> <br>
        <div class="list-group">
          <a href="#" class="list-group-item">decking products</a>
          <a href="#" class="list-group-item">paving products </a>
          <a href="#" class="list-group-item">fencing products</a>
          <a href="#" class="list-group-item">other products</a>
          <a href="#" class="list-group-item">other products </a>
          <a href="#" class="list-group-item">other products</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/slide1.png" style="width:900px; height:350px" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slide2.png"  style="width:900px; height:350px"alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slide3.png"  style="width:900px; height:350px" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slide4.png"  style="width:900px; height:350px" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/slide5.png"  style="width:900px; height:350px" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/Decking1.jpg" style="width:255px; height:190px"alt=""></a>
              <div class="card-footer">
                <h2> Decking  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">details</button></h2>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/fencing/fence.jpg" alt=""></a>
              <div class="card-footer">
                <h2> Fencing  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">details</button></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/pavings/paving.jpg" alt=""></a>
              <div class="card-footer">
                <h2> Pavings  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">details</button></h2>
              </div>
            </div>
          </div>
        </div>

        <!-- /.row -->
        <?php include "details-model-decking1.php";
        include "details-model-decking2.php";
        include "details-model-decking3.php";?>
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
