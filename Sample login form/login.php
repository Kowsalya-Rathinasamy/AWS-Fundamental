<?php
session_start();
include "db.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM employees WHERE username='$username'";

$result=$conn->query($sql);

if($result->num_rows>0){

$row=$result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user']=$row['fullname'];

header("Location:dashboard.php");

}else{

echo "Invalid Password";

}

}else{

echo "User Not Found";

}
?>