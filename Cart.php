<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CART</title>
 <link rel="stylesheet" href="cart.css">
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
<br><br><br><br><br>
<div class="container">
<div class="row">
	<div class="col-lg-9">
<table class="table" style="width: 80% " align="center">
  <thead class="thead-dark">
    <tr style="color:#333333">
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	  <?php
	  $total=0;
	  if(isset($_SESSION['cart']))
	  {
	       foreach($_SESSION['cart'] as $key=>$value)
		   {
			   $sr=$key+1;
			   $total=$total+$value['price'];
			   echo "
			         <tr>
			         <td>$sr</td>
			         <td>$value[item_name]</td>
			         <td> $value[price] </td>
			         <td>
					 <form action='Manage-cart.php' method='POST'>
					 <button name='REMOVE_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
					 <input type='hidden' name='item_name' value='$value[item_name]'>
					 </td>
			         </tr>
			   ";
		   }}
	  ?>
  </tbody>
</table>
	</div>
<div class="col-lg-3">
	<div class="border bg-light rounded p-4">
	<h3> Totel:</h3>
	<h4 class="text-right"><?php echo $total ?> </h4>
		<br>
		<from>
		<button class="btn btn-primary btn-block">PROCEED TO CECKOUT</button>
		</from>
		</div>
	</div>
</div>
</div>
<br><br><br>
	
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