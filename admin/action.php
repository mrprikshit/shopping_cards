<?php
include("../database/connection.php");

$filename = $_FILES['pic']['name'];
$tempname = $_FILES['pic']['tmp_name'];
$folder   = "images/".$filename;
$name = $_POST['name'];
$about = $_POST['about'];

$query = "INSERT INTO `cart_details`(`image`, `product_name`, `about_product`) VALUES ('$filename','$name','$about')";
$upload = mysqli_query($connect, $query);
move_uploaded_file($tempname,$folder);
header("loaction:admin.php");
?>