<?php
include '../includes/sql_order.php';
if (isset($_POST['submit'])) {
	# code...


	$sql="INSERT INTO `orders`( ) VALUES ()";
	$resultt = mysqli_query($conn, $sql)or die("order failed" );
}
?>
