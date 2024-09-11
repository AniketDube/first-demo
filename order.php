<?php
require_once'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$products=$_POST['products'];
$total=$_POST['total'];


if(empty($name) || empty($email) || empty($address)){
    $error="plese fill in all required fields";
}
else{
    $order_query="INSERT INTO orders(name,email,address,products,total)VALUES('$name','$email','$address','$products','$total')";
    if($conn->query($order_query)==TRUE){
        echo"Order Placed Successful";
    }
    else{
        echo"Error".$order_query."<br>".$conn->error;
    }
}
$conn->close();



?>