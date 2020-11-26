<?php require '../includes/config.php'; ?>
<link rel="<?php echo $css['rel']; ?>"
type="<?php echo $css['type']; ?>"
href="<?php echo $css['href']; ?>">
<div id="<?php echo $error['div']['id']; ?>">

  <h1><?php echo $error['heading']; ?>
	<br>
	<span><?php echo $error['span']; ?></span>
	</h1>
  <a href="<?php echo $error['anchortag']; ?>">
	Return
	</a>

</div>
