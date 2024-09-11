<?php
session_start();
$_SESSION["login_status"]=false;
  include"connection.php";
  $sql_result=mysqli_query($conn,"select*from document where username='$_POST[username]' and password='$_POST[password]' and active_status=1");
  if($sql_result->num_rows==0){
    echo "Invalid Credintial";
    die;
  }
  echo "Login Success<br>";
  $dbrow=mysqli_fetch_assoc($sql_result);
  print_r($dbrow);

  $_SESSION["login_status"]=true;
  $_SESSION["userid"]=$dbrow["userid"];
  $_SESSION["username"]=$dbrow["username"];
  $_SESSION["usertype"]=$dbrow["usertype"];

if($dbrow["usertype"]=="Vendor"){
  header("location:../vendor/home.php");
}
else if($dbrow["usertype"]=="Customer"){
  header("location:../customer/home.php");
}
?>