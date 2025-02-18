<?php
require("connection.php");
$name = $_REQUEST["food_name"];
$variety = $_REQUEST["food_variety"];
$price = $_REQUEST["food_price"];
$image = $_FILES["food_image"]["name"];
$res = $con->query("INSERT INTO `food` (`food_name`,`food_variety`,`food_price`,`food_image`) values ('$name','$variety','$price','$image')");
$count = mysqli_affected_rows($con);
move_uploaded_file($_FILES["food_image"]["tmp_name"],"images-1/".$image);
header("location:basic_table.php");
?>