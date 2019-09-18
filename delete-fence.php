<?php
include ('innit.php');
$id = $_GET['del'];
mysqli_query($db,"DELETE FROM fencing_products WHERE id='$id'");
//header("admin-fence.php")
header('location:admin-fence.php');
///admin-fence.php
 ?>
