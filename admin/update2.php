<?php
require("connection.php");
$id=$_REQUEST["user"];
$name=$_REQUEST["uname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$phone_number=$_REQUEST["phone_number"];
$country=$_REQUEST["country"];
$state=$_REQUEST["state"];
$res=$con->query("UPDATE `users` set `uname`='$name',`email`='$email',`password`='$password',`phone_number`='$phone_number',`country`='$country',`state`='$state' where `user`='$id'"); 
$count=mysqli_affected_rows($con);
header("location:user_table.php"); 
?>
  