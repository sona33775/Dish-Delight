<?php
require("connection.php");
$name = $_REQUEST["product_name"];
$variety = $_REQUEST["product_type"];
$price = $_REQUEST["product_price"];
$image = $_FILES["product_image"]["name"];
$res = $con->query("INSERT INTO `product` (`product_name`,`product_type`,`product_price`,`product_image`) values ('$name','$variety','$price','$image')");
$count = mysqli_affected_rows($con);
move_uploaded_file($_FILES["product_image"]["tmp_name"],"image-1/".$image);
header("location:table.php");
?>