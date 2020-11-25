 <?php require '../link/link.php' ?>
<div id="sql_subscribe">
	
	<a href="../index.php">Return</a>
	<br><br><br>
	<?php 
	$email = $_POST['email'];
	if(!empty($email)){
		$host ="localhost";
		$dbUsername ="root";
		$dbPassword ="";
		$dbname = "subscribe";

		$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

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

			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("s", $email);
				$stmt->execute();
				echo "Thankyou for subscribing to dark lords";
			}
			else{
				echo "You're already subscribed to the dark lord";
			}
			$stmt->close();
			$conn->close();

		}			

	}
		else
		{
		echo "Enter email first";
	}
	
 ?>
<pre>
	
                                                 
                                                                
                                                                
                            ▓▓▓▓▓▓▓▓▓▓                          
                          ▓▓▓▓▓▓▓▓▓▓▓▓▓▓                        
                        ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓                      
                      ▓▓▓▓░░░░░░▓▓░░░░░░▓▓▓▓                    
                  ░░░░▓▓░░░░░░░░░░░░░░░░░░▓▓░░░░                
                  ░░░░▓▓░░  ██░░░░░░  ██░░▓▓░░░░                
                    ░░▓▓░░████░░░░░░████░░▓▓░░                  
                      ▓▓░░▒▒▒▒░░░░░░▒▒▒▒░░▓▓                    
                        ▓▓░░░░░░░░░░░░░░▓▓                      
                          ▓▓▓▓░░░░░░▓▓▓▓                        
                              ▓▓▓▓▓▓        ░░                  
                            ▓▓▓▓▓▓▓▓▓▓      ▓▓                  
                            ▓▓▓▓▓▓▓▓▓▓    ▓▓▓▓                  
                          ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓                    
                          ▓▓▓▓░░▓▓░░▓▓▓▓                        
                                                  
</pre>
</div>
 <?php include '../includes/footer.php' ?>