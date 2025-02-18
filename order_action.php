<?php
session_start();
require("conn.php");
$name = $_REQUEST["food_name"];
$variety = $_REQUEST["food_variety"];
$price = $_REQUEST["food_price"];
$quantity = $_REQUEST["food_quantity"];
$total = $_REQUEST["total_price"];
$id = $_SESSION["user"];
$res = $con->query("INSERT INTO `order` (`food_name`, `food_variety`, `food_price`, `food_quantity`, `total_price`, `user_id`) VALUES ('$name', '$variety', '$price', '$quantity', '$total', '$id');");
$count = mysqli_affected_rows($con);
header("location:mainpage.php");
?>
