<?php
  $uname=$_POST['username'];
  $upass=$_POST['password'];
  //$utype=$_POST['usertype'];
  include"connection.php";
  $sql_status=mysqli_query($conn,"INSERT INTO document(username,password,usertype)values('$uname','$upass','$_POST[usertype]')");
  if($sql_status){
    echo "signup is successful";
  }
  else{
    echo"error while inserting the element";
    echo mysqli_error($conn);
  }

?>