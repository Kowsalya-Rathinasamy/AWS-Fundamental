<?php
include "db.php";

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$username=$_POST['username'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO employees
(fullname,email,username,password)
VALUES
('$fullname','$email','$username','$password')";

if($conn->query($sql)==TRUE){

header("Location:index.php");

}else{

echo "Registration Failed: ".$conn->error;

}

$conn->close();
?>