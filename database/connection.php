<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "cart_data";

$connect    = mysqli_connect($servername, $username, $password, $database);

if($connect) {
    // echo "Connected to database";
}else{
    echo "failed! to connect database";
}
?>