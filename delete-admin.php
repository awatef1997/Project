<?php
include ('innit.php');
$id = $_GET['del'];
mysqli_query($db,"DELETE FROM user WHERE id='$id'");
header("admin.php")
 ?>
