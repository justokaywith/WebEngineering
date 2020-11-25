<?php

/***** site titles****/

 $index_title = "The Foodies";
 $admin_title = "Admin panel";

/******meta php******/

 $meta = "includes/meta.php";


 /*******header*******/

 $url_header = "includes/header.php";
 $header['title'] =  "The";
 $header['span'] = "Foodies";

/*****footer******/

  $url_footer = "includes/footer.php";
  $footer['para1'] = " Copyrights Claimed, All rights reserved.  ";
  $footer['para2']  = "Read more about our deverlopers ";
  $footer['riui'] = "https://www.riphah.edu.pk/";
  $footer['about']  = "./subpages/about.php";


/*-------------------------------------------database connection-----*/

 $dbhost="localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

 /*------------------------------------------data sanization-----*/

 function sanitizeinput($data)
 {
 	$data =trim($data);
 	$data =stripcslashes($data);
 	$data =htmlspecialchars($data);
 	return $data;
 }


/*************************************index page ******************************/

/************special part****************/

 $index['special']['label']  = "Specials";

/****spec 1****/

 $index['spec1']['hamburger']['label']  = "The king mac";
 $index['spec1']['img']  = "./graphics/burger.webp";
 $index['spec1']['para'] =  "Try our best burgers in town";
 $index['spec1']['atag'] = "Order here";
 $index['spec']['alink'] =  "./subpages/order.php";

 /****spec 2****/

  $index['spec2']['nuggets']['label']  = "Chick n'Nuggets";
  $index['spec2']['img']  = "./graphics/nuggets.webp";
  $index['spec2']['para'] =  "Best in town Chicken & Nuggets.";
  $index['spec2']['atag'] = "Order here";
  $index['spec']['alink'] =  "./subpages/order.php";

  /****spec 3****/

   $index['spec3']['pizza']['label']  = "E che pizza!";
   $index['spec3']['img']  = "./graphics/pizza.webp";
   $index['spec3']['para'] =  "We'll serve it hot. Get the best pizza in town. ";
   $index['spec3']['atag'] = "Order here";
   $index['spec']['alink'] =  "./subpages/order.php";


   /****spec 4****/

    $index['spec4']['shuarma']['label']  = "The Karma Shuarma";
    $index['spec4']['img']  = "./graphics/shuarma.webp";
    $index['spec4']['para'] =  "Finger lickin' good.The best shuwarma. ";
    $index['spec4']['atag'] = "Order here";
    $index['spec']['alink'] =  "./subpages/order.php";


/*-----------------------------------special ends--------------*/

    /********deal part******/

    $index['deal']['label']  = "Deals";

   /****deal 1****/

   $index['deal1']['label'] = "Deal 1";
   $index['deal1']['img'] = "./graphics/deal1.webp";
   $index['deal1']['atag'] =  "./subpages/order.php";


   /****deal 2****/

   $index['deal2']['label'] = "Deal 2";
   $index['deal2']['img'] = "./graphics/deal2.webp";
   $index['deal2']['atag'] =  "./subpages/order.php";

   /****deal 3****/

   $index['deal3']['label'] = "Deal 3";
   $index['deal3']['img'] = "./graphics/deal3.webp";
   $index['deal3']['atag'] =  "./subpages/order.php";

   /****deal 4****/

   $index['deal4']['label'] = "Deal 4";
   $index['deal4']['img'] = "./graphics/deal4.webp";
   $index['deal4']['atag'] =  "./subpages/order.php";

/*---------------------------deal ends-----------------*/
/*----------------------------------index page ends--------------------*/

/**********************************************admin page starts******************************/

  $admin['MFA']['alink']  = "../index.php";
  $admin['MFA']['atag'] = 'Return';
  $admin['MFA']['para'] = "You have been given a PC <br>Use that! ";

  /********form******/

  $admin['form']['img']  = "../graphics/admin.png";
  $admin['form']['label']['UID'] = "UID";
  $admin['form']['label']['pass'] = "Password";
  $admin['form']['label']['button'] = "Login";

/**********************************************admin page ends******************************/

/**********************************************error page starts******************************/

  $error['heading'] = "ERROR";
  $error['span']  = "Invalid Credentials";

/**********************************************error page ends******************************/














 ?>
