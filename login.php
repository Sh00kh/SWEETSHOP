<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
	
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" >Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="regiser.php">Sign up</a>
  	</p>
  </form>
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