<?php
include ('innit.php');


 $output = NULL;
$id= $_GET['user'];
if(isset($id)){
  $result=mysqli_query($db,"SELECT name,email,password FROM user WHERE id='$id'");
$retreive = mysqli_fetch_array($result);
$name=$retreive['name'];
$email=$retreive['email'];
$password=$retreive['password'];
}

  if(isset($_POST['submit'])){
   $connection = new mysqli('localhost','root','','Kennings');
   $username = $connection->real_escape_string($_POST['username']);
   $email = $connection->real_escape_string($_POST['email2']);
   $password1 = $connection->real_escape_string($_POST['password_1']);
   $query = $connection->query("SELECT * FROM user WHERE name = '$username'");
   if(empty($username)OR empty($password1)OR empty($email)){
     $output = "please fill in all feild";
   }elseif (strlen($password1)<6) {
     // code...
     $output = "the password must be more than 6 charechtors";
   }else{
     $password1 = md5($password1);
     // record THIS SHOULD BE CHNAGED TO UODATE BECAUSE ITS BEING UPDATED BUT CANT
     //$connection->query("INSERT INTO user(name, password,email) VALUES ('$username','$password1','$email')");

     $insert = $connection->query("UPDATE  user SET name='$username', email='$email',password='$password1'  WHERE id='$id'"); /// this is wrong
         if($insert != TRUE){
           $output = "their was a problem <br />";
           $output .= $connection->error;
         }else{
           $output = "user details have been updated";
         }
       }
     }

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
        <a class="navbar-brand" href="#">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  product page
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Decking</a>
                  <a class="dropdown-item" href="#">fencing</a>
                  <a class="dropdown-item" href="#">products</a>
                </div>
              </div>
            </li>
            <?php
            if(isset( $_SESSION['login_user'])){
             echo "<li><a href='/Kennings/welcome.php'>". $_SESSION['login_user']."</a></li> ";
            }else{
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/login.php'>Sign Up</a> </li>";
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/login.php'>login </a> </li>";
              } ?>
            <li class="nav-item">
              <li>
                <a href="View2.php" class="btn" data-placement="bottom" title="Shopping Cart">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="badge"></span>
              <span class="total_price">shopping cart</span>
             </a>
            </li>
            </li>
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
                    <h5 class="card-title text-center">update user details</h5>
                    <form class="form-signin">
                      <div class="form-label-group">
                        <input type="text" id="inputtext" class="form-control" placeholder="text" name="username" value='<?php echo $name; ?>'required autofocus>
                        <label for="inputEmail"></label>
                      </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="text" name="email2" value='<?php echo $email; ?>'required autofocus>
                        <label for="inputEmail"></label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password_1" value='<?php echo $password; ?>'required>
                        <label for="inputPassword"</label>
                      </div>
                      <div class="custom-control custom-checkbox mb-3">

                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">update</button>
                    </br>

                        <?php echo $output; ?>
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
