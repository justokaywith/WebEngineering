<?php include	'config.php' ?>
<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty['username'] AND ['password']){
    $sql = "SELECT * FROM admin WHERE username  = '$username' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    print_r($row);
    if(!empty($row)){
      if($row['username'] == $username && $row['password']  = $password){
        header("Location: ../subpages/order.php");

      }
      else {
        header ("Location: ../subpages/error.php");
        mysqli_close($conn);
      }

    }
    else{
      header ( "Location ../includes/error.php");
    }

  }

else {
  echo "no data found";
};

 ?>
