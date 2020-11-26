<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../graphics/style.css">
	<?php require '../includes/config.php'; ?>
	<title><?php echo $admin_title; ?></title>
</head>
<body	id="admin_body">

	<div id="admin">

	<form class="admin_form"action="../includes/sql_admin.php" method="POST"><br>

		<img class="user_img" src="<?php echo $admin['form']['img']; ?>" alt=""><br>
		<label><?php echo   $admin['form']['label']['UID']; ?></label><br>
		<input type="text" name="username" value="" maxlength="10"><br><br>
		<label><?php echo   $admin['form']['label']['pass']; ?></label><br>
		<input type="password" name="password" maxlength="10" value="" ><br><br>
		<button type="submit" name="button"><?php echo   $admin['form']['label']['button']; ?></button>
		<div id="admin_no_MFA"><br>
			<a href="<?php echo $admin['MFA']['alink']; ?>"><?php echo $admin['MFA']['atag']; ?></a><br>
			<p><?php echo $admin['MFA']['para']; ?></p>
		</div>
	</form>

</div>
	</body>


</html>
