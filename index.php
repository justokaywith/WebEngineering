<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require './includes/config.php'; ?>
    <?php require $meta; ?>
    <link rel="stylesheet" href="graphics/style.css">
  </head>
  <title> <?php echo $index_title; ?></title>
  <?php include $url_header; ?>
  <div class="main">

   	<div class="specials">
   		<label><?php echo $index['special']['label']; ?></label>
   	</div>

   <!------------------Special Item 1 starts here----->

    <div class="spec">
    	<label><?php echo $index['spec1']['hamburger']['label']; ?></label> <br>
    	<img src= "<?php echo $index['spec1']['img']; ?>"> <br>

    	<p><?php echo  $index['spec1']['para']; ?> <br><br><span class="only_for">Only for</span><br><span class="price"> Rs 299.99</span>
    	</p>
    	<a href="#" ?><?php echo $index['spec1']['atag']; ?></a>
    	<hr>
    </div>

    <!------------------Special Item 2 starts here----->

      <div class="spec">
    	<label><?php echo $index['spec2']['nuggets']['label']; ?></label> <br>
    	<img src="./graphics/nuggets.webp"> <br>

    	<p><?php echo   $index['spec2']['para']; ?><br><br><span class="only_for">Bucket for</span><br><span class="price"> Rs 379.99</span>
    	</p>
    	<a href="#"><?php echo $index['spec2']['atag']; ?></a>
    	<hr>
    </div>

     <!-------------------Special Item 3 starts here--->

      <div class="spec">

   		<label>E che pizza!</label> <br>
    	<img src="./graphics/pizza.webp"> <br>

    	<p><?php echo  $index['spec3']['para']; ?><br><br><span class="only_for">Starts From</span><br><span class="price"> Rs 799.99 <span class="inches">for 8"</span></span>
    </p>
    	<a href="#"><?php echo  $index['spec3']['atag']; ?></a>
    	<hr>
    </div>

       <!------------------Special Item 4 starts here---->

      <div class="spec">
   		<label><?php echo $index['spec4']['shuarma']['label']; ?></label> <br>
    	<img src="<?php echo $index['spec4']['img']; ?>"> <br>


    	<p><?php echo   $index['spec4']['para']; ?> <br><br><span class="only_for">Only From</span><br><span class="price"> Rs 249.99</span>
    </p>
    	<a href="#"><?php echo   $index['spec4']['atag']; ?></a>
    	<hr> <br>
    </div>

     <!------------------Deals starts here----->
     <div class="deals">
   		<label><?php echo   $index['deal']['label'];?></label>
   		<p>So you're one of those guys ? <br>
   			Well.No worries because <br>
   			<span>We Got the best deals in town for you!!</span></p>
   	</div>

   	 <!------------------Deal 1 starts here------->

   	    <div class="deal">
   	    	  	  	<label><?php echo  $index['deal1']['label']; ?></label> <br>
    	<img src=" <?php echo $index['deal1']['img']; ?>"> <br>

    	<p>
    	Buy <span class="deal_p_1">two</span> medium Pizza and get <span class="deal_p_2">one</span> 1.5 ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 1449.99</span>
    </p>
    	<a href="<?php echo $index['deal1']['atag']; ?>">Order Here</a>
    	<hr>
    </div>

     <!------------------Deal 2 starts here-------->

   	 <div class="deal">
   		  	  	<label><?php echo  $index['deal2']['label']; ?></label> <br>
    	<img src="<?php echo  $index['deal2']['img']; ?>"> <br>

    	<p>
    	Buy <span class="deal_p_1">two</span> medium Shuwarmas and get <span class="deal_p_2">one</span> half ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 479.99</span>
    </p>
    	<a href="<?php echo  $index['deal3']['atag']; ?>">Order Here</a>
    	<hr>
    </div>

     <!------------------Deal 3 starts here-------->

   	 <div class="deal">
   		  	  	<label><?php echo $index['deal3']['label']; ?></label> <br>
    	<img src="<?php echo $index['deal3']['img']; ?>"> <br>

    	<p>
    	Buy <span class="deal_p_1">two</span> King Macs and get <span class="deal_p_2">one</span> half ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 559.99</span>
    </p>
    	<a href="<?php echo  $index['deal3']['atag']; ?>">Order Here</a>
    	<hr>
    </div>

   <!------------------Deal 4 starts here-------->

   	 <div class="deal">
   		  	  	<label>Deal 4</label> <br>
    	<img src="./graphics/deal4.webp"> <br>

    	<p>
    	Buy <span class="deal_p_1">two</span> full size nugget bucket and get <span class="deal_p_2">one</span> ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 739.99</span>
    </p>
    	<a href="<?php echo  $index['deal4']['atag']; ?>">Order Here</a>
    	<hr>
    </div>

  	<!----------------------end of deals-------->

  <form action="./includes/sql_subscribe.php" method="POST">
      <div class="end_of_deals">
       <p>Get updates on all special menu items and deals. Subscribe here</p><input type="email" name="email" value="" placeholder="Email Address" required>
       <button type="submit" value="" name="button">Submit</button>
    </div>
  </form>

<?php require $url_footer; ?>
  </div>

</html>
