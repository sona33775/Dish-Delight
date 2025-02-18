<?php
require("connection.php");
$id=$_REQUEST["product"];
$name=$_REQUEST["product_name"];
$variety=$_REQUEST["product_type"];
$price=$_REQUEST["product_price"];

if(empty($_FILES["product_image"]["name"]))
{
    $res=$con->query("UPDATE `product` set `product_name`='$name',`product_type`='$variety',`product_price`='$price' where `product`='$id'"); 
    $count=mysqli_affected_rows($con);
    header("location:table.php"); 
}
else{
    $image=$_FILES["product_image"]["name"];
    $res=$con->query("UPDATE `product` set `product_name`='$name',`product_type`='$variety',`product_price`='$price',`product_image`='$image' where `product`='$id'");
    $count=mysqli_affected_rows($con);
    move_uploaded_file($_FILES["product_image"]["tmp_name"],"image-1/".$image);
    header("location:table.php");
}
?>