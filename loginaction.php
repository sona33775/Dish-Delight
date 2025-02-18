
<?php 
session_start();
require("conn.php");
$u = $_REQUEST["username"];

$pass = $_REQUEST["password"];

$res = $con->query("select * from `users` where `email`='$u' AND `password`='$pass'");

$count = $res->num_rows;
if ($count > 0) {  
    $row = $res->fetch_assoc();
    $id = $row["user"]; 
   
    $_SESSION["user"] = $id; 
    header("location:mainpage.php"); 
} else {
    echo "<script>alert('invalid username and password, please try again');</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
  