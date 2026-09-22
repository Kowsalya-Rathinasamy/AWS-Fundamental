<?php
$host="database-1.cl0ddcc3u3gm.us-east-1.rds.amazonaws.com";
$user="admin";
$password="Password123";
$dbname="employeedb";   //database name not db-identifier name

$conn=new mysqli($host,$user,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
?>