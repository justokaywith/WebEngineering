<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include '../includes/config.php'; ?>
    <?php include $meta_subpages; ?>
    <link rel="stylesheet" href="<?php echo $css_subpages; ?>">
    <title><?php echo $order_title; ?></title>
  </head>
  

 <body id="<?php echo $order['order_body']; ?>">
  <?php include $url_header_subpages; ?>
    <div class="<?php echo $order['order_menu']; ?>">
      <h1><?php echo $order_menu['h1']; ?></h1>
      <table class="<?php echo $table_items['class']; ?>">

        <tr>

            <th>Burgers</th>
            <th>Pizza</th>
            <th>Drinks</th>
            <th>Extra</th>
          </tr>
          <tr>
            <td>The King mac</td>
            <td>Margherita</td>
            <td>Aam panna</td>
            <td>French Fries</td>
          </tr>
          <tr>
            <td>Beef Burger</td>
            <td>Marinara</td>
            <td>Aguas frescas</td>
            <td>Nuggets</td>
          </tr>
          <tr>
            <td>Grilled Cheese Burger</td>
            <td>Quattro Stagioni.</td>
            <td>Aguapanela</td>
            <td>Chicken Wings</td>
          </tr>
          <tr>
            <td>Chicken Nugget Burger</td>
            <td>Frutti di Mare</td>
            <td>Almdudler</td>
            <td>Cheese French Fries</td>
          </tr>
          <tr>
            <td>50/50 Burger</td>
            <td>Napoletana</td>
            <td>Apfelschorle</td>
            <td>Cheese Potato</td>
          </tr>

      </table>
    </div>
  
 <div class="<?php echo  $order_form['class']; ?>">
    <form action="../includes/sql_order.php" method="post">

   <h1>Order Section</h1> <br>
   <select class="order_type" required name="category">
    <option selected hidden value="">Category</option>
    <option>Burgers</option>
    <option>Pizza</option>
    <option>Drinks</option>
    <option>Extra</option>
   </select>
   <br><br>
   <input type="text" name="item" placeholder="Item Name" required><br><br>
   <input type="text" name="extra" placeholder="Other Items" maxlength="150">
   <br><br>
   <input type="text" name="quantity" placeholder="Quantity" maxlength="100"  required>
   <br><br>
   <input type="text" name="address" placeholder="Add Address" required maxlength="200">
   <br><br>

   <label for="method">Payment on delivery <input id="checkbox_payment" type="checkbox" name="method" value="Payment on Dilevery" required> </label>
   <br>
   <button type="submit" name="submit" value="Order">Order</button>

   </form>
 </div>

  <?php include $url_footer_subpages ; ?>

 </body>

</html>
