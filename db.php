<?php
$servername="localhost";
$username="root";
$password="";
$dbname="acme24_jun";


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

?>