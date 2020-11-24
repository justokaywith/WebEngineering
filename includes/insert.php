<?php 
	$email = $_POST['email']
	if(!empty($email)){
		$host = 'localhost';
		$dbUsername	=	'root';
		$dbPassword = '';
		$dbName = 'subscribe';

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

		if(mysqli_connect_error()){
			die('Connect Error(' .mysqli_connect_errno(). ')' . mysqli_connect_errno());
		}
		else{
			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register (email) values (?)";
			
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			echo "New Email inserted";
		}
		

	}
	else{
		echo "Enter Email Address";
		die();
	}
 ?>