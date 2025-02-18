<?php
require("connection.php");
$id=$_REQUEST["get"];
$status=2;
$res=$con->query("UPDATE `order` set `Status`='$status' where `id_o`='$id'"); 
$count=mysqli_affected_rows($con);
header("location:join.php"); 
?>
