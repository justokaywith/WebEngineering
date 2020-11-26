<?php require '../includes/config.php'; ?>
<link rel="stylesheet" href="../graphics/style.css">
<body id="<?php echo $error['body']['id']; ?>">
  <div id="<?php echo $error['div']['id']; ?>">

    <h1><?php echo $error['heading']; ?>
  	<br>
  	<span><?php echo $error['span']; ?></span>
  	</h1>
    <a href="<?php echo $error['anchortag']; ?>">
  	Return
  	</a>

  </div>
</body>
