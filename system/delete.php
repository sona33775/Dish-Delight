<?php
require("connection.php");
$id=$_REQUEST["delete"];
$res=$con->query("select * from `product` where `product`='$id' ");
$count=$res->num_rows;
if($count>0)
$row=$res->fetch_assoc();
$upload=$row["product_image"];
unlink("image-1/$upload");
$res=$con->query("delete from `product` where `product`='$id' ");
$count=mysqli_affected_rows($con);
if($count>0)
{
    header("location:table.php");
}
    else{
        header("location:mainpage.php");
    }

?>