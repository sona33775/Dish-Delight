<?php 
session_start();
require("connection.php");
$u=$_REQUEST["email"];

$pass=$_REQUEST["password"];

$res=$con->query("select * from `login` where `username`='$u' AND `password`='$pass' ");
$count=$res->num_rows;
if($count>0)
{
    $_SESSION["bb"]=$u;
    header("location:mainpage.php");
} 
else{
    echo "<script>alert('invalid username and password , please try again');</script>";
    echo "<script> window.location.href='index.php';</script>";   
}