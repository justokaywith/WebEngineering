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
          <tr>
            <td>Banquet Burger</td>
            <td>Pugliese</td>
            <td>Atole</td>
            <td>Shuarma</td>
          </tr>
          <tr>
            <td>Bøfsandwich</td>
            <td>Montanara</td>
            <td>Babycino</td>
            <td>Popsicles</td>
          </tr>
          <tr>
            <td>Buffalo burger</td>
            <td>Emiliana</td>
            <td>Baesuk</td>
            <td>Slush</td>
          </tr>
          <tr>
            <td>Ande Wala Burger</td>
            <td>Romana</td>
            <td>Bandrek</td>
            <td>Pasta</td>
          </tr>
          <tr>
            <td>Oklahoma Onion Burger</td>
            <td>Prosciutto </td>
            <td>Bandung</td>
            <td>Macaroni</td>
          </tr>
      </table>

      <!---Order form-------->
    <div class="order_here">

   <form action="../includes/sql_order.php"method="post">
   <label>ADD Details</label> <br>
   <input type="text" name="category" placeholder="category" value="apply cookie from previous page" readonly required>
   <input type="text" name="item" placeholder="item name" value="apply cookie from previous page" readonly required>
   <input type="text" name="price" placeholder="price" value="apply cookie from previous page" readonly required>
   <input type="text" name="address" placeholder="Add address" required>
   <input type="text" name="quantity" placeholder="Quantity"  required>
   <select>
   	<option selected hidden value="">Payment method</option>
   	<option>payment on delivery</option>
   </select>
   <input type="submit" name="submit" value="ADD Item"></form>
   </div>

      <?php require $url_footer_subpages; ?>


    </div>
  </body>
</html>
