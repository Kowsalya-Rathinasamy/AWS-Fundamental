<!DOCTYPE html>
<html>
<head>
<title>Employee Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
<h2>Employee Registration</h2>

<form action="save.php" method="POST">

<input type="text" name="fullname" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Register</button>

</form>

<p>Already have an account?
<a href="index.php">Login</a></p>

</div>

</body>
</html>