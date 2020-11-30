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


$css_subpages = "../css/style.css";

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


/*----------------------------------About starts here *----------------------------*/


  $about_body['main'] = "about_body";
  $dev_team['div']  = "dev_team";

  $introduction['label'] =  "Introduction.";
  $introduction['para'] = "A software engineering team who thinks that with efforts they can be in the line of this tough developing competition.";

  $Was_it_good['label'] = "Was it good?";
  $Was_it_good['para']  = "Simple yet time taking. This project was one of the most fun projects we have done so far.";

  $What_we_learned['label'] = "What we learned.";
  $What_we_learned['para']  = "Well if we see it this way, we have not achieved anything yet. but hey its always the fun and time we spent working together.";

  $What_we_achieved['label']  = "What we achieved.";
  $What_we_achieved['para'] = "Team management is the best thing gained in such projects. Not only it provides you comforts but also it divides work load.";

  // haris about starts here

  $haris['div'] = "haris";
  $haris['label']['name'] = "Name";
  $haris['para']['name']  = "M Haris Rana";

  $haris['label']['profession']  = "Profession";
  $haris['para']['profession']  = "Graphic Designer";

  $haris['label']['experience']  = "Experience";
  $haris['para']['experience']  = "Around 1 year";

  $haris['label']['hobbies']  = "Hobbies";
  $haris['para1']['hobbies']  = "Swimming";
  $haris['para2']['hobbies']  = "Gaming";

// osama about starts here
  
  $osama['div'] = "osama";
  $osama['label']['name'] = "Name";
  $osama['para']['name']  = "Osama Ali Mangi";

  $osama['label']['profession']  = "Profession";
  $osama['para']['profession']  = "Digital Marketer";

  $osama['label']['experience']  = "Experience";
  $osama['para']['experience']  = "Around 4 years";

  $osama['label']['hobbies']  = "Hobbies";
  $osama['para1']['hobbies']  = "Social Work";
  $osama['para2']['hobbies']  = "Gaming";

  // zain about starts here
  
  $zain['div'] = "zain";
  $zain['label']['name'] = "Name";
  $zain['para']['name']  = "Zain ul abidin";

  $zain['label']['profession']  = "Profession";
  $zain['para']['profession']  = "website design/grAPHIC design";

  $zain['label']['experience']  = "Experience";
  $zain['para']['experience']  = "Around 2 years";

  $zain['label']['hobbies']  = "Hobbies";
  $zain['para1']['hobbies']  = "Quran reciting with tafseer";
  $zain['para2']['hobbies']  = "playing games";

  // abdullah about starts here
  
  $abdullah['div'] = "abdullah";
  $abdullah['label']['name'] = "Name";
  $abdullah['para']['name']  = "Abdullah";

  $abdullah['label']['profession']  = "Profession";
  $abdullah['para']['profession']  = "Web Designer";

  $abdullah['label']['experience']  = "Experience";
  $abdullah['para']['experience']  = "Around 1 years";

  $abdullah['label']['hobbies']  = "Hobbies";
  $abdullah['para1']['hobbies']  = "Cricket";
  $abdullah['para2']['hobbies']  = "Adventures";

  // about ends here




 ?>
