<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("select * from `users` where `user`='$id' ");
$count=$res->num_rows;
$res=$con->query("delete from `users` where `user`='$id' ");
if($count>0)
{
    header("location:user_table.php");
}
    else{
        header("location:mainpage.php");
    }

?>