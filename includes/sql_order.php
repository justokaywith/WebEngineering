<?php
include '../includes/sql_order.php';
if (isset($_POST['submit'])) {
	# code...
	$price=$_POST['price'];
	$cat=$_POST['category'];
	$item=$_POST['item'];
	$address=$_POST['address'];
	$quantity=$_POST['quantity'];
	$payment=$price*$quantity;

	$sql="INSERT INTO `order`( `category`, `item`, `quantity`, `address`, `payment`) VALUES ('$cat','$item','$quantity','$address','$payment')";
	$resultt = mysqli_query($conn, $sql)or die("order failed" );
}
?>
