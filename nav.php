<nav class="navbar navbar-inverse" id="nav">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="#">kennings</a>
   </div>
   <ul class="nav navbar-nav">
     <li class="active"><a href="#">Home</a></li>

     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">material <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="/kennings/shopping_test.php">Decks</a></li>
         <li><a href="/kennings/shopping_pave.php">pavings</a></li>
         <li><a href="/kennings/shopping_fence.php">fencing</a></li>
       </ul>
     </li>
     <li><a href="#">contact us</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href="/Kennings/signup.php"></span> <?php //echo $_SESSION['login_user']; ?></a></li>-->
     <?php
     if(isset( $_SESSION['login_user'])){

      echo "<li><a href='/Kennings/welcome.php'>". $_SESSION['login_user']."</a></li> ";
     }else{
     echo "<li><a href='/Kennings/signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
     echo "<li><a href='/Kennings/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
       } ?>
       <li>
         <a href="View2.php" class="btn" data-placement="bottom" title="Shopping Cart">
       <span class="glyphicon glyphicon-shopping-cart"></span>
       <span class="badge"></span>
       <span class="total_price">$ 0.00</span>
      </a>
     </li>
   </ul>
 </div>
</nav>
