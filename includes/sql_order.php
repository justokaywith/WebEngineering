<?php
include 'config.php';
if (isset($_POST['submit'])) {
	# code...
	$extra=$_POST['extra'];
	$cat=$_POST['category'];
	$item=$_POST['item'];
	$address=$_POST['address'];
	$quantity=$_POST['quantity'];
	$method=$_POST['method'];

	$sql="INSERT INTO `order`( `method`,`extra`,`category`, `item`, `quantity`, `address`) VALUES ('$method','$extra','$cat','$item','$quantity','$address')";

	if($result = mysqli_query($conn, $sql)){
		header("Location: ../subpages/order_success.php");
	}
	else {
		error("shit nigga");
		$conn->die();
	}
}
?>
