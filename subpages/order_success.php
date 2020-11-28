<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php include '../includes/config.php'; ?>
    <?php include $meta_subpages; ?>
    <link rel="stylesheet" href="<?php echo $css_subpages; ?>">
    <title><?php echo  $order_succ; ?></title>

  </head>

  <body class="<?php echo $order_success['body']; ?>">

    <?php include $url_header_subpages; ?>
    <div class="<?php echo $order_success['div']['status']; ?>">
    <h1>your order has been placed</h1>
    <label>Would you like to <br>  <a href="order.php">Order More</a> </label>
    <p>or</p>
    <label>Go back to <br><a href="../subpages/index.php">Home Screen</a> </label>
    </div>  

  </body>
</html>
