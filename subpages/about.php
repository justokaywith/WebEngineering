<!DOCTYPE html>
<html>
	<head>
	
	<?php include '../includes/config.php'; ?>
    <?php include $meta_subpages; ?>
    <link rel="stylesheet" href="<?php echo $css_subpages; ?>">
	<title><?php echo $about; ?></title>
	
	</head>

	<body id="<?php echo $about_body['main'] ?>">
		
	

	<div id="<?php echo  $dev_team['div'] ?>">
	
	

		<label><?php echo $introduction['label']; ?></label>
		<p><?php echo $introduction['para'] ?></p>

		<label><?php echo $Was_it_good['label'] ?></label>
		<p><?php echo  $Was_it_good['para']?></p>

		<label><?php echo $What_we_learned['label'] ?></label>
		<p><?php echo $What_we_learned['para'] ?></p>

		<label><?php echo $What_we_achieved['label'] ?></label>
		<p><?php echo $What_we_achieved['para'] ?></p><br>

		<a href="#haris">Meet the devs</a> <a id="go_back" href="index.php">Go Back</a>

	</div>

	<div id="<?php echo $haris['div'] ?>">
		<img id="user_img" src="../graphics/haris.webp" title="M Haris Rana">
		<label>Name</label>
		<p>M Haris Rana</p>

		<label>Profession.</label>
		<p>Graphic Designing.</p>

		<label>Experience.</label>
		<p>Around 1 year</p>

		<label>Hobbies</label>
		<p> Swimming <br>gaming</p>

		<a href="https://www.reddit.com/u/justokaywith"><img class="icon_img" src="../graphics/reddit.png"></a>
		<br>
		<a id="dev_tag" href="#osama">Next</a>
	</div>

	<div id="<?php echo $osama['div']  ?>">
		<img id="user_img" src="../graphics/osama.webp">
		<label><?php echo  $osama['label']['name'] ?></label>
		<p><?php echo $osama['para']['name'] ?></p>

		<label><?php echo $osama['label']['profession'] ?></label>
		<p><?php echo $osama['para']['profession'] ?></p>

		<label><?php echo $osama['label']['experience']; ?></label>
		<p><?php echo $osama['para']['experience'] ?></p>

		<label><?php echo $osama['label']['hobbies']; ?></label>
		<p><?php echo $osama['para1']['hobbies'] ?> <br> <?php echo $osama['para2']['hobbies'] ?></p>

		<a href="https://www.linkedin.com/in/osamamangi"><img class="icon_img" src="../graphics/linkedin.png" title="Osama ALi Mangi"></a>
		<br>
		<a id="dev_tag" href="#zain">Next</a>
	</div>

		<div id="<?php echo $zain['div'] ?>">
				
		<img id="user_img" src="../graphics/haris.webp">
		<label><?php echo $zain['label']['name']  ?></label>
		<p><?php echo   $zain['para']['name'] ?></p>

		<label><?php echo $zain['label']['profession']   ?></label>
		<p><?php echo $zain['para']['profession']  ?></p>

		<label><?php echo  $zain['label']['experience']  ?></label>
		<p><?php echo  $zain['para']['experience'] ?></p>

		<label><?php echo $zain['label']['hobbies'] ?></label>
		<p> <?php echo $zain['para1']['hobbies']  ?> <br><?php echo  $zain['para2']['hobbies']  ?></p>


		<a href="https://www.facebook.com/abdullahkhan"><img class="icon_img" src="../graphics/facebook.png" title="Zain Ul Abidin"></a>
		<br>
		<a id="dev_tag" href="#abdullah">Next</a>
	</div>

		<div id="<?php echo $abdullah['div']  ?>">
				
		<img id="user_img" src="../graphics/abdullah.webp">

		<label><?php echo  $abdullah['label']['name'] ?></label>
		<p><?php echo  $abdullah['para']['name']?></p>

		<label><?php echo  $abdullah['label']['profession']?></label>
		<p><?php echo  $abdullah['para']['profession'] ?></p>

		<label><?php echo $abdullah['label']['experience']  ?></label>
		<p><?php echo $abdullah['para']['experience'] ?></p>

		<label><?php echo $abdullah['label']['hobbies']   ?></label>
		<p><?php echo  $abdullah['para1']['hobbies']  ?><br><?php echo  $abdullah['para2']['hobbies'] ?></p>

		<a href="https://www.facebook.com/abdullahkhan"><img class="icon_img" src="../graphics/facebook.png" title="Abdullah"></a>
		<br>
		<a id="dev_tag" href="#dev_team">TOP</a>
	</div>

	</body>

</html>
