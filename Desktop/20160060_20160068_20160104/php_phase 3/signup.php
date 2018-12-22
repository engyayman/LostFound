<!DOCTYPE html>
<html>
<head>
	<title>Sigup</title>
</head>
<body>
<h1>Sign up for first time</h1>
<form action="signupaction.php" method="post">
	<label>Name</label>
	<br>
	<input type="text" name="name" required>
	<br>
	<label>phone number</label>
	<br>
	<input type="phone" name="phone" required>
	<br>
	<label>passowrd</label>
	<br>
	<input type="password" name="pass" required>
	<br>
	<label>national id</label>
	<br>
	<input type="number" name="nid" required>
	<br>
	<label>email</label>
	<br>
	<input type="email" name="mail" required>
	<br>
	<br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>