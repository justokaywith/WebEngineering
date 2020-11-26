<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../graphics/style.css">
	<?php require '../includes/config.php'; ?>
	<title><?php echo $admin_title; ?></title>
	</head>

	<body	id="<?php echo $admin['body']['id']; ?>">
	<div id="<?php echo  $admin['admin']['div']['id'] ?>">
	<form class="<?php echo $admin['form']['class']; ?>"
	action="<?php echo $admin['form']['action']; ?>"
	method="<?php echo $admin['form']['method']; ?>">
	<br>
	<img class="<?php echo $admin['img']['class'] ; ?>"
	src="<?php echo $admin['form']['img']; ?>" alt="">
	<br>
	<label><?php echo $admin['form']['label']['UID']; ?></label>
	<br>
	<input type="<?php echo $admin['input']['type']['UID']; ?>"
	name="<?php echo $admin['input']['name']['UID']; ?>"
	maxlength="10">
	<br><br>
	<label><?php echo $admin['form']['label']['pass']; ?></label>
	<br>
	<input type="<?php echo $admin['type']['type']['pass']; ?>"
	name="<?php echo $admin['name']['name']['pass']; ?>"
	maxlength="10">
	<br><br>
	<button type="<?php echo $admin['button']['type']; ?>"
	name="<?php echo $admin['button']['name']; ?>">
	<?php echo $admin['form']['label']['button']; ?>
	</button>
	<div id="<?php echo $admin['MAF']['div']['id']; ?>"
	><br>
	<a href="<?php echo $admin['MFA']['alink']; ?>">
	<?php echo $admin['MFA']['atag']; ?></a>
	<br>
	<p><?php echo $admin['MFA']['para']; ?></p>
	</div>
	</form>
	</div>
	</body>

</html>
