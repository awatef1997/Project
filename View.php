<?php
//include("InsertCart.php");
//session_start();
include("user.php");
//session_destroy(); // to take it off everytime destry session
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "kennings");
$user = $_SESSION['login_user'];/// i think this is part of the problem
//if(isset( $user)){
//}else{
// header('Location: signup.php');
//}
error_reporting(0);// this is added because of the if stament
ini_set('display_errors', 0);
 ?>
 <?php

 include("user.php"); // Include loginserv for checking username and password
 if(isset( $_SESSION['login_user'])){
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
         <br>
         <h2 align="center"> Your Cart <h2>
         <font size='3' face='Arial'>
         <table class='table table-responsive table-striped table-bordered'>
         <thead>
           <tr>
             <th>No</th>
             <th>Name</th>
             <th>Image</th>
             <th>Price</th>
             <th>quantity</th>
             <th>Details</th>
             <th>Total Price</th>
             <th>update</th>
             <th>delete</th>
           </tr>
         </thead>
         <tbody>
           <?php
           if(isset( $user)){
           $Total = 0;
           $no = 1;
           foreach ($_SESSION as $products) {
             $p = 0;
             $q = 0;
             echo "<tr>";
               echo "<form action='edit.php'method='post'>";
               echo "<td>".($no++)."</td>";
               foreach ($products as $key => $value) {
                 if($key == 4){
                  echo "<input type = 'hidden' name='name$key' value= '" .$value."'>";
                   echo "<td>".$value."</td>";
                 }elseif($key == 3){
                   echo "<td> <input type = 'text' name='name$key' class= 'form-control' value= '" .$value."'></td>";
                   $q = $value;
                 }
                 elseif ($key == 2) {
                    echo "<input type='hidden' name='name$key'  value= '" .$value."'>";
                    echo "<td>".$value."</td>";
                    $p = $value;
                  }  elseif($key == 1){
                    echo "<input type='hidden' name='name$key' value= '" .$value."'>";
                    echo "<td><img src='$value' class='img-responsive'  style='height: 120px; width:150px;'/></td>";
                  //  echo $value; name1
                  }elseif ($key == 0) {
                    echo "<input type='hidden' name='name$key' value= '" .$value."'>";
                    echo "<td>".$value."</td>";
                  }
               }
               $Total = ($q * $p);
             /// to do the total check the one before might use smthing that can be beneficial
               echo "<td>".($Total)."</td>";
               echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'> </td>";
               echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'> </td>";
               echo "</form>";
             echo "</tr>";
           }
         }else{
            header('Location: signup.php');
           }
           ?>
         </form>
       </table>

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
