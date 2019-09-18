<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {

 $user=$_POST['user'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];

 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "kennings");
//// the converted version of this $Email = MD5($email);
 //sql query to fetch information of registerd user and finds user match.
 $pass = md5($pass);
 $query = mysqli_query($conn, "SELECT * FROM user WHERE password='$pass' AND name='$user' AND email='$email'");
 $query2 = mysqli_query($conn, "SELECT * FROM admin WHERE password='$pass' AND username='$user' AND email='$email'");

 $rows = mysqli_num_rows($query);
 $rows2 = mysqli_num_rows($query2);
 //$login_session = $row['username'];
 if($rows == 1){
   $_SESSION['login_email']=$email;//added within
   $_SESSION['login_user']=$user;

  // $_SESSION['email']=$email;
 header("Location: welcome.php"); // Redirecting to other page
}
 else
 {
 $error = "Username, Password, or email is Invalid";
 }if ($rows2 == 1) {
   $_SESSION['login_email']=$email;//added within
   $_SESSION['login_user']=$user;

  // $_SESSION['email']=$email;
 header("Location: admin.php");
 } else
  {
  $error = "admin Username, Password, or email is Invalid";
  }
 mysqli_close($conn); // Closing connection
 }
}

?>
