<?php
$pid=$_GET["pid"];
session_start();
include"../shared/connection.php";
$status=mysqli_query($conn,"insert into cart(userid,pid)values($_SESSION[userid],$pid)");
if($status){
    echo "Product Added to cart Succesfully";
}
else{
    echo "SQL Error";
}




?>