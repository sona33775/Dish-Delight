<?php
require("connection.php");
$id=$_REQUEST["reg_no"];
$name=$_REQUEST["food_name"];
$variety=$_REQUEST["food_variety"];
$price=$_REQUEST["food_price"];

if(empty($_FILES["food_image"]["name"]))
{
    $res=$con->query("UPDATE `food` set `food_name`='$name',`food_variety`='$variety',`food_price`='$price' where `reg_no`='$id'"); 
    $count=mysqli_affected_rows($con);
    header("location:basic_table.php"); 
}
else{
    $image=$_FILES["food_image"]["name"];
    $res=$con->query("UPDATE `food` set `food_name`='$name',`food_variety`='$variety',`food_price`='$price',`food_image`='$image' where `reg_no`='$id'");
    $count=mysqli_affected_rows($con);
    move_uploaded_file($_FILES["food_image"]["tmp_name"],"images-1/".$image);
    header("location:basic_table.php");
}
?>