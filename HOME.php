<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>SWEET SHOP</title>
	<link rel="stylesheet" type="text/css" href="H.css">
	<link rel="icon" href="Picture1 (1).png">
</head>

<body>
</div>
	<header>
	<div id="d1">
	<h2 id ="up"></h2>
	<img class="logo" src="Picture1.jpg" width="120px" height="120px" >
	<a class="h" href="HOME.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="s" href="Shop.php">SHOP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="a"href="ABOUT US.php">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="c" href="Cart.php"><img src="c.png" width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;
    <a class="u" href="regiser.php"><img src="u.png" width="30px" height="30px"></a>      
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php  if (isset($_SESSION['username'])) : ?>
    	<p class="us" style=" font-size:20px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong>  
       &nbsp;&nbsp;&nbsp; <a href="HOME.php?logout='1'" style="color: red;">logout</a></p>
    	
    <?php endif ?>
	</div>
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3 style="color:#333;">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

	</header>
	<img class="i1" src="7.jpg" width="600px" height="600px" >
	<img class="i2" src="8.jpg" width="300px" height="300px" >
	<a href="Shop.php"><img class="i3" src="11.jpg" width="300px" height="300px" ></a>
	<br>
	<a href="ABOUT US.php"><img class="i10" src="12.jpg" width="300px" height="300px"  ></a>
	<img class="i4" src="3.jpg" width="300px" height="300px" >
	<img class="i7" src="6.jpg" width="300px" height="300px" >
	<img class="i9" src="10.jpg" width="600px" height="300px" >
	<img class="i8" src="2.jpg" width="300px" height="300px" >
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<footer>
	<div class="d2"> 
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
	</div>
	</footer>
</body>
</html>