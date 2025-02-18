<?php
require("conn.php");
$name=$_REQUEST["uname"];

$email=$_REQUEST["email"];

$password=$_REQUEST["password"];

$phone_number=$_REQUEST["phone_number"];

$country=$_REQUEST["country"];

$state=$_REQUEST["state"];

$res=$con->query("INSERT INTO `users` (`uname` ,`email` ,`password` ,`phone_number` ,`country` ,`state`) values ('$name', '$email', '$password', '$phone_number', '$country', '$state')");

$count=mysqli_affected_rows($con);
header("location:login.php");
?> 