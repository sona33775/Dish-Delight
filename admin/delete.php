<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("select * from `food` where `reg_no`='$id' ");
$count=$res->num_rows;
if($count>0)
$row=$res->fetch_assoc();
$upload=$row["food_image"];
unlink("images-1/$upload");
$res=$con->query("delete from `food` where `reg_no`='$id' ");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:basic_table.php");
}
    else{
        header("location:mainpage.php");
    }

?>