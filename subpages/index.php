<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php require '../includes/config.php'; ?>
  <?php include $meta_subpages?>
  <link rel="stylesheet" href="<?php echo $css_subpages ; ?>">
  <title> <?php echo $index_title; ?></title>
  </head>


  <body class="<?php echo $index['body']['title']; ?>">

    <!-- header -->
  <?php include $url_header_subpages; ?>

  <div class="<?php echo $index['div']['index_main']; ?>">
  <div class="<?php echo $index['div']['special']; ?>">
  <label><?php echo $index['special']['label']; ?></label>
  </div>

   <!---Special Item 1 starts here---->

  <div class="<?php echo $index['div']['spec']; ?>">
  <label><?php echo $index['spec1']['hamburger']['label']; ?></label>
  <br><br>
  <img src= "<?php echo $index['spec1']['img']; ?>" alt="Burger">
  <br><br>
  <p><?php echo  $index['spec1']['para']; ?>
  <br>
  <span class="<?php echo $index['spec']['class']['only_for']; ?>">Only for</span>
  <br>
  <span class="<?php echo  $index['spec']['class']['price']; ?>"> Rs 299.99</span>
  </p>
  <a href="<?php echo $index['spec']['alink']; ?>" ?>
  <?php echo $index['spec1']['atag']; ?>
  </a>
  <br><br>
  <hr>
  </div>
  <br><br>


    <!--- Item 2 starts here----->

    <div class="<?php echo $index['div']['spec']; ?>">
    <label><?php echo $index['spec2']['nuggets']['label']; ?></label>
    <br><br>
    <img src="<?php echo   $index['spec2']['img']; ?>" alt="Chicken_Nuggets">
    <br><br>
    <p><?php echo   $index['spec2']['para']; ?>
    <br>
    <span class="<?php echo $index['spec']['class']['only_for']; ?>">Bucket for</span>
    <br>
    <span class="<?php echo $index['spec']['class']['price']; ?>"> Rs 379.99</span>
    </p>
    <a href="<?php echo $index['spec']['alink']; ?>">
    <?php echo $index['spec2']['atag']; ?>
    </a>
    <br><br>
    <hr>
    </div>
    <br><br>

     <!---Special Item 3 starts here--->

    <div class="<?php echo $index['div']['spec']; ?>">
    <label>E che pizza!</label>
    <br><br>
    <img src="<?php echo $index['spec3']['img']; ?>" alt="Pizza">
    <br>
    <p><?php echo  $index['spec3']['para']; ?>
    <br>
    <span class="<?php echo $index['spec']['class']['only_for']; ?>">Starts From</span>
    <br>
    <span class="<?php echo $index['spec']['class']['price']; ?>"> Rs 799.99 <span class="inches">for 8"</span>
    </span>
    </p>
    <a href="<?php echo $index['spec']['alink']; ?>">
    <?php echo  $index['spec3']['atag']; ?>
    </a>
    <br><br>
    <hr>
    </div>
    <br><br>

       <!---Special Item 4 starts here--->

    <div class="<?php echo $index['div']['spec']; ?>">
    <label><?php echo $index['spec4']['shuarma']['label']; ?></label>
    <br><br>
    <img src="<?php echo $index['spec4']['img']; ?>" alt="Shuarma">
    <br><br>
    <p><?php echo   $index['spec4']['para']; ?>
    <br>
    <span class="<?php echo $index['spec']['class']['only_for']; ?>">Only From</span>
    <br>
    <span class="<?php echo $index['spec']['class']['price']; ?>"> Rs 249.99</span>
    </p>
    <a href="<?php echo $index['spec']['alink']; ?>">
    <?php echo $index['spec4']['atag']; ?>
    </a>
    <br><br>
    <hr>
    </div>
    <br><br>

     <!--Deals starts here----->

    <div class="<?php echo $index['deals']['div']; ?>">
    <label><?php echo $index['deals']['label'];?></label>
    <p>So you're one of those guys ?
    <br>Well.No worries because <br>
    <span>We Got the best deals in town for you!!</span>
    </p>
    </div>


     <!---Deal 1 starts here------->

    <div class="<?php echo $index['deal']['label']; ?>">
    <label><?php echo  $index['deal1']['label']; ?></label>
    <br><br>
    <img src=" <?php echo $index['deal1']['img']; ?>" alt="Pizza_Coke">
    <br><br>
    <p>Buy
    <span class="deal_p_1">two</span>
    medium Pizza and get
    <span class="deal_p_2">one</span>
    1.5 ltr coke absoulty free!
    <br><br>
    <span class="deal_only_for">Only From</span>
    <br>
    <span class="deal_price"> Rs 1449.99</span>
    </p>
    <a href="<?php echo $index['deal1']['atag']; ?>">Order Here</a>
    <br><br>
    <hr>
    </div>
    <br><br>

     <!---Deal 2 starts here-------->

    <div class="<?php echo   $index['deal']['label']; ?>">
    <label><?php echo  $index['deal2']['label']; ?></label>
    <br><br>
    <img src="<?php echo  $index['deal2']['img']; ?>" alt="Shuwarmas_Coke">
    <br><br>
    <p>
    Buy <span class="deal_p_1">two</span>
    medium Shuwarmas and get
    <span class="deal_p_2">one</span>
    half ltr coke absoulty free!
    <br><br>
    <span class="deal_only_for">Only From</span>
    <br>
    <span class="deal_price"> Rs 479.99</span>
    </p>
    <a href="<?php echo  $index['deal3']['atag']; ?>">Order Here</a>
    <br><br>
    <hr>
    </div>
    <br><br>

     <!---Deal 3 starts here-------->

    <div class="<?php echo   $index['deal']['label']; ?>">
    <label><?php echo $index['deal3']['label']; ?></label>
    <br><br>
    <img src="<?php echo $index['deal3']['img']; ?>" alt="Burger_Coke">
    <br><br>
    <p>
    Buy <span class="deal_p_1">two</span>
    King Macs and get
    <span class="deal_p_2">one</span>
    half ltr coke absoulty free!
    <br><br>
    <span class="deal_only_for">Only From</span>
    <br>
    <span class="deal_price"> Rs 559.99</span>
    </p>
    <a href="<?php echo  $index['deal3']['atag']; ?>">Order Here</a>
    <br><br>
    <hr>
    </div>
    <br><br>

   <!---Deal 4 starts here-------->

    <div class="<?php echo   $index['deal']['label'] ; ?>">
    <label><?php echo $index['deal4']['label']; ?></label>
    <br><br>
    <img src="<?php echo $index['deal4']['img']; ?>" alt="Buckets_Coke">
    <br><br>
    <p>
    Buy <span class="deal_p_1">two</span>
    large buckets and get
    <span class="deal_p_2">one</span> ltr coke absoulty free!
    <br><br>
    <span class="<?php echo $index['deal']['class']['only_for']; ?>">Only From</span>
    <br>
    <span class="<?php echo $index['deal']['class']['price']; ?>"> Rs 739.99</span>
    </p>
    <a href="<?php echo  $index['deal4']['atag']; ?>">Order Here</a>
    <br><br>
    <hr>
    </div>
    <br><br>

    <!---subscribe form-------->

    <div class="<?php echo $index['subscribe_form']['div']; ?>">
    <form action="<?php echo $index['subscribe_form']['action']; ?>"
     method="<?php echo $index['subscribe_form']['method']; ?>">
    <p><?php echo  $index['subscribe_form']['para']; ?></p>
    <input type="<?php echo $index['input']['type']; ?>"
    name="<?php echo $index['input']['name']; ?>"
    placeholder="<?php echo $index['input']['placeholder']; ?>" required>
    <button type="<?php echo $index['button']['type']; ?>"
    name="<?php echo $index['button']['name']; ?>">
    <?php echo $index['button']['indicator']; ?></button>

    </form>
    </div>
    <br><br>
    <?php require $url_footer_subpages; ?>

  </div>

</body>
</html>
