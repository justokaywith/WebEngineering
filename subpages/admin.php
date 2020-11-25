<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Admin</title>
</head>
<body>
	<div id="admin_no_MFA"><br>
		<a href="../index.php">Return</a><br>
		<p>You have been given a PC <br>Use that! </p>
	</div>
	<div id="admin">
	<form action="../includes/sql_admin.php" method="POST"><br>
			<img src="../graphics/admin.png" alt="">
		<label>UID</label><br>
		<input type="text" name="username" value="" maxlength="10"><br><br>
		<label>Password</label><br>
		<input type="password" name="password" maxlength="10" value="" ><br><br>
		<button type="submit" name="button">Login</button>

	</form>

</div>
	</body>


</html>
