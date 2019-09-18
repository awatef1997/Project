<?php
session_start();

$name= $_POST['hidden_name'];
$price=$_POST['hidden_price'];
$image=$_POST['hidden_image'];
$quantity=$_POST['quantity'];
$desc=$_POST['hidden_details'];
$product = array($name,$image,$price,$quantity,$desc);

//print_r($product);
$_SESSION[$name]=$product;

header('location:shopping_test.php')/// for all of them
 ?>
