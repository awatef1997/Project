<?php
session_start();
 $connect = mysqli_connect("localhost", "root", "", "kennings");

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

             echo "<li class='nav-item'><a class= 'nav-link' href='/Project/signout.php'>Sign out</a> </li>";
          }else{
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/register.php'>Sign Up</a> </li>";
            echo "<li class='nav-item'><a class= 'nav-link' href='/Project/login.php'>login </a> </li>";
              } ?>
           <li class='nav-item'><a class= 'nav-link' href='/Project/View.php'>shopping cart</a> </li>
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
          <a href="#" class="list-group-item">fencing 1</a>
          <a href="#" class="list-group-item">fencing 2</a>
          <a href="#" class="list-group-item">fencing 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

        </div>
        <h1>
          <h1>decks</h1>
        <div class="row">
          <?php
          $query = "SELECT * FROM fencing_products ORDER BY id ASC";
          $result = mysqli_query($connect, $query);
          if(mysqli_num_rows($result) > 0)
          {
               while($row = mysqli_fetch_array($result))
               {
          ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <form method="post" action="testing_cart.php">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo $row["images"];?>" style="width:255px; height:190px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $row["Title"]; ?></a>
                </h4>
                <h5>$<?php echo $row["price"];?></h5>
                <input type="text" name="quantity" class="form-control" value="" />
                <p class="card-text"> <?php echo $row["desciption"]; ?></p>

                <input type="hidden" name="hidden_image" value="<?php echo $row["images"]; ?>" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["Title"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                <input type="hidden" name="hidden_details" value="<?php echo $row["desciption"]; ?>" />

              </div>
              <div class="card-footer">
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
              </div>
            </div>
          </form>
          </div>
          <?php
               }
          }
          ?>

        </div>
        <!-- /.row -->

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
