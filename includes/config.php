<?php

/***** site titles****/

 $index_title = "The Foodies";
 $order_title = "Order";
 $order_succ  = "Order Confirmed";
 $about = "About Devs";

/******meta php******/

 $meta = "includes/meta.php";
 $meta_subpages = "../includes/meta.php";

/*********CSS********/


$css_subpages = "../graphics/style.css";

 /*******header*******/

 $url_header_subpages = "../includes/header.php";
 $header['heading'] =  "The";
 $header['span'] = "Foodies";
 $header['class']['span'] = "foodies_logo";

/*****footer******/

  $url_footer_subpages = "../includes/footer.php";
  $footer['para1'] = " Copyrights Claimed, All rights reserved.";
  $footer['para2']  = "Read more about our deverlopers ";
  $footer['riui'] = "https://www.riphah.edu.pk/";
  $footer['about']  = "about.php";
  


/*-------------------------------------------database connection-----*/

 $dbhost="localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);



/*************************************index page ******************************/

/*********** index tags**********/


$index['body']['title'] = "index_body";
$index['div']['index_main'] = "index_main";
$index['div']['special']  = "specials";
$index['div']['spec'] = "spec";
$index['div']['deal'] = 'deal';

/************special part****************/

 $index['special']['label']  = "Specials";

/****spec 1****/

 $index['spec1']['hamburger']['label']  = "The king mac";
 $index['spec1']['img']  = "../graphics/burger.webp";
 $index['spec1']['para'] =  "Try our best and spiciest burgers";
 $index['spec1']['atag'] = "Order here";
 $index['spec']['class']['price'] = "price";
 $index['spec']['class']['only_for']  = "only_for";
 $index['spec']['alink'] =  "order.php";

 /****spec 2****/

  $index['spec2']['nuggets']['label']  = "Chick n'Nuggets";
  $index['spec2']['img']  = "../graphics/nuggets.webp";
  $index['spec2']['para'] =  "Best in town Chicken & Nuggets.";
  $index['spec2']['atag'] = "Order here";
  $index['spec']['alink'] =  "order.php";

  /****spec 3****/

  $index['spec3']['pizza']['label']  = "E che pizza!";
  $index['spec3']['img']  = "../graphics/pizza.webp";
  $index['spec3']['para'] =  "We'll serve it hot. Get the best pizza in town. ";
  $index['spec3']['atag'] = "Order here";
  $index['spec']['alink'] =  "order.php";


   /****spec 4****/

  $index['spec4']['shuarma']['label']  = "The Karma Shuarma";
  $index['spec4']['img']  = "../graphics/shuarma.webp";
  $index['spec4']['para'] =  "Finger lickin' good.The best shuarma. ";
  $index['spec4']['atag'] = "Order here";
  $index['spec']['alink'] =  "order.php";


/*-----------------------------------special ends--------------*/

    /********deal part******/

   $index['deals']['div'] = "deals";
   $index['deals']['label'] = "Deals";
   $index['deal']['label']  = "deal";
   $index['deal']['class']['only_for']  = "deal_only_for";
   $index['deal']['class']['price'] = "deal_price";

   /****deal 1****/

   $index['deal1']['label'] = "Deal 1";
   $index['deal1']['img'] = "../graphics/deal1.webp";
   $index['deal1']['atag'] =  "order.php";


   /****deal 2****/

   $index['deal2']['label'] = "Deal 2";
   $index['deal2']['img'] = "../graphics/deal2.webp";
   $index['deal2']['atag'] =  "order.php";

   /****deal 3****/

   $index['deal3']['label'] = "Deal 3";
   $index['deal3']['img'] = "../graphics/deal3.webp";
   $index['deal3']['atag'] =  "order.php";

   /****deal 4****/

   $index['deal4']['label'] = "Deal 4";
   $index['deal4']['img'] = "../graphics/deal4.webp";
   $index['deal4']['atag'] =  "order.php";

   /*********subscribe form*********/

   $index['subscribe_form']['div']  = "subscribe_form";
   $index['subscribe_form']['action'] = "../includes/sql_subscribe.php";
   $index['subscribe_form']['method'] = "POST";
   $index['subscribe_form']['para'] = "Get updates on all special menu items and deals.";
   $index['input']['type']  = "email";
   $index['input']['name']  = "email";
   $index['input']['placeholder']  = "Your email address.";
   $index['button']['type'] = "submit";
   $index['button']['name'] = "button";
   $index['button']['indicator']  = "Subscribe";


/*---------------------------deal ends-----------------*/

/*----------------------------------index page ends--------------------*/

/*--------------------------------Order page starts here-----------------------*/

  $order['order_body']  = "order_body";
  $order['order_menu']  = "order_menu";


  // order menu starts here

  $order_menu['h1'] = "Available Items";
  $table_items['class'] = "table_items";
  $order_form['class']  = "order_form";

/*--------------------------------Order page ends here-----------------------*/

/*--------------------------------Order status page starts here-----------------------*/

  $order_success['body']  = "order_status";
  $order_success['div']['status'] = "order_status_div";








 ?>
