<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8">
    <title>Login - HinataToyshop</title>
<link href="CSS/Login - HinataToyshop.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
		<nav class="nav">
			<div class="nav-logo">
				<p>Hinata &nbsp; Toyshop</p>
			</div>
			<div class="nav-menu">
				<ul>
					<li><a href="Home - HinataToyshop.php" class="link">Home</a></li>
					<li><a href="ProductPage1 - HinataToyshop.php" class="link">Product</a></li> 
					<li><a href="Cart - HinataToyshop.php" class="link">Add to Cart</a></li> 
				</ul>
			</div>			
    	</nav>
    <form action="/login" method="post">
        <div class="container">
          <h1>Return Back to the Golden Era of Anime</h1>
            <div class="box">
                <input class="input" type="email" name="email" placeholder="Your email goes here" required>
            </div>
            <div class="box">
                <input class="input" type="password" name="password" placeholder="Your password goes here" required>
            </div>
          <button type="submit" class="btn btn-primary">Return to the 00s</button>
      
			<p class="forgot-password">Anata, koko atarashii ne???</p><p class="forgot-password"> <a href="SignUp - HinataToyshop.php">Click here to Sign Up</a></p>
        </div>
      </form>
</body>
</php>
