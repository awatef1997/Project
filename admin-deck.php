<?php

include("user.php"); // Include loginserv for checking username and password
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "kennings");
$admin = $_SESSION['login_user'];
$email= $_SESSION['login_email'];
if(isset( $admin)){
}else{
  header('Location: login.php');
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
             echo "<li class='nav-item'><a class= 'nav-link' href='/Project/admin.php'>". $_SESSION['login_user']."</a> </li>";

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
          <a href="admin-deck.php" class="list-group-item">decking products</a>
          <a href="admin-paving.php" class="list-group-item">paving products </a>
          <a href="admin-fence.php" class="list-group-item">fencing products</a>
          <a href="admin.php" class="list-group-item">user info</a>
          <a href="#" class="list-group-item">other products </a>
          <a href="#" class="list-group-item">other products</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
      </br>
        <h2>Welcome back you are the <?php echo $admin; ?></h2>
        <?php
        $decks = mysqli_query($conn,"SELECT id,title,price,image,description FROM decking_products");
        $rows   = mysqli_num_rows($decks);
        //echo "<div class='container' >";
        echo "<h3></br><Welcome to Admin Panel</h3>";
        echo "Amount of decking products: ".$rows;
        echo "</br> </br>";
        echo "<font size='3' face='Arial'>";
      //  echo  "<table style= 'width:200px;' class='table table-responsive table-striped table-bordered'>";
        echo  "<table class='table table-responsive table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>title</th>";
        echo "<th>price</th>";
        echo "<th>image</th>";
        echo "<th>description</th>";
        echo "<th>Delete Users</th>";
        echo "<th>edit user</th>";
        echo "</tr>";
        $i = 0;
        while($retreive = mysqli_fetch_array($decks)){
          $id = $retreive['id'];
          $ftitle = $retreive['title'];
          $fprice = $retreive['price'];
          $fimage = $retreive['image'];
          $fdescription = $retreive['description'];
          ///
          echo "<tr>";
          echo "<th>".$i=$i+1; "</th>";
          echo "<th width='10%'> $ftitle</th>";
          echo "<th> $fprice</th>";
          echo "<th> <img src='".$fimage. "'alt= 'image' style='width:220px;height:150px;'> </th>";
          echo "<th width='20%' > $fdescription </th>";
          echo "<th> <a href='delete-fence.php?del=$id'><button class='btn btn-danger'> Delete</button></a></th>";
          echo "<th> <a href='update-admin.php?user=$id'><button class='btn btn-success'> Update</button></a></th>";
          echo "</tr>";
        }
        ?>

</div>
<!-- /.col-lg-9 -->

</div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    /.container
  </footer>  -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
