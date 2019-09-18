<?php

include("user.php");

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
  <link rel="stylesheet" href="css/register.css"/>
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
      <!-- /.col-lg-9 -->
      <div class="col-lg-9">
      <div class="input">
    <div class="header">
    <!---   <h2>register</h2> -->
    </div>
    <form method="POST">
    <!---    <div class="container">
          <div class="row"> --->
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">login</h5>
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="text" id="inputtext" class="form-control" placeholder="text" name="user" required autofocus>
                      <label for="inputEmail">Username</label>
                    </div>
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="text" name="email" required autofocus>
                      <label for="inputEmail">email</label>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">login</button>

                  </br>

                </div>
              </div>
            </div>


    </form>
    </div>

    </div>
    <!-- /.row -->
</div>
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
