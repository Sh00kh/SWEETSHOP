<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SHOP</title>
	<link rel="stylesheet" href="shop.css">
    <link rel="icon" href="Picture1 (1).png">
</head>

<body>
	<header>
	<div id="d1">
	<h2 id ="up"></h2>
	<img class="logo" src="Picture1.jpg" width="120px" height="120px" >
	<a class="h" href="HOME.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="s" href="Shop.php">SHOP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="a"href="ABOUT US.php">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="c" href="Cart.php"><img src="c.png" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;
    <a class="u" href="regiser.php"><img src="u.png" width="30px" height="30px"></a>
	</div>
	</header>
	<br> <br> <br> 
<div class="container">
<div class="row">
<div class="column">
	<form action="Manage-cart.php" method="POST">
    <div class="card">
         <img src="Almond cake.jpg" width="300px" height="250px">
         <h2>Almond Cake</h2>
		 <p class="price">9.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Almond Cake">
		 <input type="hidden" name="price" value="9.99SR">
         </div>
	</form>
    </div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Creme candy.jpg" width="300px" height="250px">
         <h2>Creme Candy</h2>
		 <p class="price">19.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Creme Candy">
		 <input type="hidden" name="price" value="19.9SR">
         </div>
	</form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Fruit creme.jpg" width="300px" height="250px">
         <h2>Fruit Creme</h2>
		 <p class="price">6.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Fruit Creme">
		 <input type="hidden" name="price" value="6.99SR">
		 </div>
    </form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Golden bites.jpg" width="300px" height="250px">
         <h2>Golden Bites</h2>
		 <p class="price">4.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Golden Bites">
		 <input type="hidden" name="price" value="4.99SR">
		 </div>
    </form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Pear dessert.jpg" width="300px" height="250px">
         <h2>Pear Dessert</h2>
		 <p class="price">20.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Pear Dessert">
		 <input type="hidden" name="price" value="20.99SR">
		 </div>
		</form>
    </div>	
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Basbousa creme.jpg" width="300px" height="250px">
         <h2>Basbousa Creme</h2>
		 <p class="price">12.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Basbousa Creme">
		 <input type="hidden" name="price" value="12.99SR">
		 </div>
		</form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Cocoa.jpg" width="300px" height="250px">
         <h2>Cocoa 100%</h2>
		 <p class="price">35.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Cocoa 100%">
		 <input type="hidden" name="price" value="35.99SR">
		 </div>
		</form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
	<div class="card">
         <img src="9.jpg" width="300px" height="250px">
         <h2>Chocolate Croissant</h2>
		 <p class="price">8.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Chocolate Croissant">
		 <input type="hidden" name="price" value="8.99SR">
		 </div>
		</form>
	</div>
<div class="column">
	<form action="Manage-cart.php" method="post">
    <div class="card">
         <img src="Dark chocolate.jpg" width="300px" height="250px">
         <h2>Dark Chocolate</h2>
		 <p class="price">15.99SR</p>
         <button type="submit" name="add_to_cart">Add to Cart</button>
		 <input type="hidden" name="item_name" value="Dark Chocolate">
		 <input type="hidden" name="price" value="15.99SR">
		 </div>
		</form>
	</div>
</div>
</form>
</div>
	<br>
	<br>
	<br>
	<br>
<footer>
		<br>
		<p>"Sweet Shop is a combination of intense activity and the achievement of friends"</p>
		<p>   Contact:     Eight 452 Street, Dammam, Saudi Arabia 056-378-0000 <a href="malito:NSM@hotmail.com">NSM@hotmail.com</a>  </p>   
	<br>
	<a href="https://www.facebook.com/" target="_blank"><img src="f.png" width="35px" height="35px" ></a>
	<a href="https://www.linkedin.com/" target="_blank"><img src="l.png" width="35px" height="35px"></a>
	<a href="https://www.youtube.com/" target="_blank"><img src="y.png" width="35px" height="35px"></a>
	<a href="https://twitter.com/" target="_blank"><img src="t.png" width="35px" height="35px"></a>
	<a href="https://www.instagram.com/" target="_blank"><img src="i.png" width="35px" height="35px"></a>
	<a class="up" href="#up"><img src="u2.png" width="35px" height="35px"></a>
		<br>
	</footer>
</body>
</html>