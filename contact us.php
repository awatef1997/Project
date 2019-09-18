<?php
/// shouldnt it be linked to a databse? not sure check
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $mailfrom = $_POST['mail'];
  $message = $_POST['message'];
  $mailTo = "ll14a2e@leeds.ac.uk";
  $_header = "From: " .$mailfrom;
  $txt = "you have received an email from" .$name.".\n\n".$message; //add a error handling
  mail($mailTo,$subject,$txt,$headers);
  header("Location: contact us.php?mailsend");
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

           <style>
           .badge{
           float:left
           }
           .sidenav {
             width: 170px;
             height:200px;
             background: #333333;
            margin-bottom: 5px;
           }
           #nav {
             background-color: #000000;
             margin-top: 60px;
             margin-bottom: 0px;
           }
           .contact_us{
            width:360px;
            margin:50px auto;
            font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
            border:2px solid #ccc;
            padding:10px 40px 25px;
            margin-left: 200px;
            margin-top:120px;
            border-radius: 25px;
            }
            input[type=text]{
            width:99%;
            padding:10px;
            margin-top:8px;
            border:1px solid #ccc;
            padding-left:5px;
            font-size:15px;
            font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
            }
            input[type=submit]{
            width:100%;
            background-color:#000;
            color:#fff;
            padding:10px;
            font-size:20px;
            cursor:pointer;
            margin-bottom:15px;
            }
            textarea{
              width:200px;
              width:100%;
              padding:10px;
              margin-top:10px;
            }
            h1 {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 25px;
            letter-spacing: 2px;
            word-spacing: 2px;
            color: #000000;
            font-weight: normal;
            text-decoration: underline solid rgb(68, 68, 68);
            font-style: italic;
            font-variant: normal;
            text-transform: uppercase;
            }
          </style>
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
            </br>
              <h2> contact us </h2>
              <div class="row">
              <div class="col-xs-2">
              </div>
              <div class="col-xs-10">
                <div class="contact_us">
                <form class="contact-form" action="contact us.php" method="post">
                  <input type="text" name="name" placeholder="full name">
                  <input type="text" name="mail" placeholder="your e-mail">
                  <input type="text" name="subject" placeholder="subject"><br/><!--  <textarea name="message" rows="7"placeholder="subject" cols="36"></textarea>-->
                <textarea name="message" placeholder="message" ></textarea>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">send</button>
                </form>
              </div>
            </div>
              </div>


            </div>
            <!-- /.col-lg-9 -->

          </div>
          <!-- /.row -->

        </div>

    </div>
  </body>
</html>
