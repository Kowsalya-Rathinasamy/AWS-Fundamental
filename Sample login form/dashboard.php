<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Welcome</h2>

<h3><?php echo $_SESSION['user']; ?></h3>

<p>Login Successful.</p>

<a href="logout.php">Logout</a>

</div>

</body>
</html>