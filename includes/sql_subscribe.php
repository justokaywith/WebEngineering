<?php include './config.php'; ?>
<div id="$sql_subscribe['div']">

	<?php
	$email = $_POST['email'];
	if(!empty($email)){
	if(mysqli_connect_error())
	{
	die('Connect Error (' .mysqli_connect_errno() .')' . mysqli_connect_error());
	}
	else
	{
	$SELECT = "SELECT email from register where email = ? limit 1";
	$INSERT = "INSERT into register (email) values(?)";
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	}
	if($rnum==0){
	$stmt->close();
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	header("Location: ../index.php");
	}
	else{
	header("Location: ../index.php");
	}
	$stmt->close();
	$conn->close();
	}
	}
	?>

</div>
