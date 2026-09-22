<!DOCTYPE html>
<html>
<head>
<title>Employee Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Employee Login</h2>

<form action="login.php" method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit">Login</button>

</form>

<p>New Employee?
<a href="register.php">Register</a></p>

</div>

</body>
</html>