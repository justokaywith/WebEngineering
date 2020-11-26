<?php

  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM admin WHERE username  = '$username' AND password = '$password' ";
  $result = mysqli_query($conn,$sql);
  $row  = mysqli_fetch_array($result);
  if($row['username'] == $username && $row['password']  = $password)
  {
  header("Location: ../subpages/order.php");
  }
  else {
  header ("Location: ../subpages/error.php");
  mysqli_close($conn);
  }

?>
