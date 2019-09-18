<?php
session_start();

$name= $_POST['name0'];
$image=$_POST['name1'];
$price=$_POST['name2'];
$quantity=$_POST['name3'];
$desc=$_POST['name4'];
$event=$_POST['event'];



$product = array($name,$image,$price,$quantity,$desc);
if($event == "Update"){
  $_SESSION[$name] = $product;
}elseif ($event == "Delete") {
  unset($_SESSION[$name]);
}
//exit;
header('location:View.php');
 ?>
