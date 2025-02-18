<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phone_number=$_REQUEST["phone_number"];
$password=$_REQUEST["password"];
$res=$con->query("INSERT INTO `register` (`name` ,`email` ,`phone_number`,`password`  ) values ('$name', '$email',  '$phone_number','$password')");
$count=mysqli_affected_rows($con);
header("location:login.php");
?> 