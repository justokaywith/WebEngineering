<title> <?php echo $Site_TITLE ?></title>

<div class="main">

 	<div class="specials">
 		<label>Specials</label>
 	</div>

 <!------------------Special Item 1 starts here----->

  <div class="spec">
  	<label>The King Mac</label> <br>
  	<img src="./graphics/burger.webp"> <br>

  	<p>Try out our best hamburger. <br><br><span class="only_for">Only for</span><br><span class="price"> Rs 299.99</span>
  	</p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

  <!------------------Special Item 2 starts here----->

    <div class="spec">
  	<label>Chick n'Nuggets</label> <br>
  	<img src="./graphics/nuggets.webp"> <br>

  	<p>Best in town Chicken & Nuggets.<br><br><span class="only_for">Bucket for</span><br><span class="price"> Rs 379.99</span>
  	</p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

   <!-------------------Special Item 3 starts here--->

    <div class="spec">

 		<label>E che pizza!</label> <br>
  	<img src="./graphics/pizza.webp"> <br>

  	<p>We'll serve it hot. Get the best pizza in town. <br><br><span class="only_for">Starts From</span><br><span class="price"> Rs 799.99 <span class="inches">for 8"</span></span>
  </p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

     <!------------------Special Item 4 starts here---->

    <div class="spec">
 		<label>The Karma Shuarma</label> <br>
  	<img src="./graphics/shuarma.webp"> <br>


  	<p>Finger lickin' good.The best shuwarma. <br><br><span class="only_for">Only From</span><br><span class="price"> Rs 249.99</span>
  </p>
  	<a href="#">Order Here</a>
  	<hr> <br>
  </div>

   <!------------------Deals starts here----->
   <div class="deals">
 		<label>Deals</label>
 		<p>So you're one of those guys ? <br>
 			Well.No worries because <br>
 			<span>We Got the best deals in town for you!!</span></p>
 	</div>

 	 <!------------------Deal 1 starts here------->

 	    <div class="deal">
 	    	  	  	<label>Deal 1</label> <br>
  	<img src="./graphics/deal1.webp"> <br>

  	<p>
  	Buy <span class="deal_p_1">two</span> medium Pizza and get <span class="deal_p_2">one</span> 1.5 ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 1449.99</span>
  </p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

   <!------------------Deal 2 starts here-------->

 	 <div class="deal">
 		  	  	<label>Deal 2</label> <br>
  	<img src="./graphics/deal2.webp"> <br>

  	<p>
  	Buy <span class="deal_p_1">two</span> medium Shuwarmas and get <span class="deal_p_2">one</span> half ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 479.99</span>
  </p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

   <!------------------Deal 3 starts here-------->

 	 <div class="deal">
 		  	  	<label>Deal 3</label> <br>
  	<img src="./graphics/deal3.webp"> <br>

  	<p>
  	Buy <span class="deal_p_1">two</span> King Macs and get <span class="deal_p_2">one</span> half ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 559.99</span>
  </p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

 <!------------------Deal 4 starts here-------->

 	 <div class="deal">
 		  	  	<label>Deal 4</label> <br>
  	<img src="./graphics/deal4.webp"> <br>

  	<p>
  	Buy <span class="deal_p_1">two</span> full size nugget bucket and get <span class="deal_p_2">one</span> ltr coke absoulty free! <br><br><span class="deal_only_for">Only From</span><br><span class="deal_price"> Rs 739.99</span>
  </p>
  	<a href="#">Order Here</a>
  	<hr>
  </div>

	<!---------------------- end of deals-------->

<form action="./includes/sql_subscribe.php" method="POST">
    <div class="end_of_deals">
     <p>Get updates on all special menu items and deals. Subscribe here</p><input type="email" name="email" value="" placeholder="Email Address" required>
     <button type="submit" value="" name="button">Submit</button>
  </div>
</form>


</div>
