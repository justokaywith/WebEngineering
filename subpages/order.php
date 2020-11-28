<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include '../includes/config.php'; ?>
    <?php include $meta_subpages; ?>
    <link rel="stylesheet" href="../graphics/style.css">
    <title><?php echo $order['title']; ?></title>
  </head>
  <?php include $url_header_subpages; ?>
  <body id="<?php echo $order['order_body']; ?>">
    <div class="<?php echo $order['order_menu']; ?>">
      <h1><?php echo $order_menu['h1']; ?></h1>
      <table class="table_items">

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

      <!---Order form-------->
    <div class="order_here">

   <form action="../includes/sql_order.php"method="post">
    <h1>Place your orders here</h1>
    <label for="item_type"></label>Choose Item Type:
    <select class="item_type" name="item_type" select_hidden_value="" >
      <option value="Burger">Burgers</option>
      <option value="Pizza">Pizza</option>
      <option value="Drinks">Drinks</option>
      <option value="Extra">Extra</option>
    </select>
    <input type="text" name="order_item" placeholder="Enter your items" required>
    <input type="text" name="more_items" value="" >
    <input type=" text" name="quantity" placeholder="Enter Quantity"required>
    <input type="checkbox" name="payment" value="On Dilevery" required>
    <label for="paymet">Cash On Delivery</label>
    <button type="submit" name="button">Order</button>
   </form>
   </div>

      <?php require $url_footer_subpages; ?>


    </div>
  </body>
</html>
