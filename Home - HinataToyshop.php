<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, maximum-scale = 1.0, minimum-scale=1.0,initial-scale=1.0">	
    <title> Home - HinataToyshop</title>
	<link href="CSS/Home - HinataToyshop.css" rel="stylesheet" type="text/css">
</head>
	
<body>
	<div id="HeaderHere"> </div>	
		<script>
			load("Header - HinataToyshop.php");
			function load(url)
			{
				req = new XMLHttpRequest();
				req.open("GET", url, false);
				req.send(null);
				document.getElementById("HeaderHere").innerHTML = req.responseText;
			}
		</script>
	
    <br><br><br><br><br>
    
    <div id="HomeTable">      
        <div class="HomeName" id="homeName">
			<img src="Images/randBG.png" width="1518px" alt="randBG">
		</div>
        <br><br>
        <div id="HomeContentRow">
			<div class="box">
				<!--<img src="#">-->
				<a href="ProductPage1 - HinataToyshop.html" class="outer">
					<span class="innerAF">
					</span>
				</a>
				<a>
					<div class="ProductDetails">
						<h1>Action Figures</h1>
					</div>
				</a>
			</div>
			<div class="box">
				<!--<img src="#">-->
				<a href="ProductPage1 - HinataToyshop.html" class="outer">
					<span class="innerS">
					</span>
				</a>
				<a>
					<div class="ProductDetails">
						<h1>Stickers</h1>
					</div>
				</a>
			</div>
			<div class="box">
				<!--<img src="#">-->
				<a href="ProductPage1 - HinataToyshop.html" class="outer">
					<span class="innerP">
					</span>
				</a>
				<a>
					<div class="ProductDetails">
						<h1>Posters</h1>
					</div>
				</a>
			</div>
			<div class="box">
				<!--<img src="#">-->
				<a href="ProductPage1 - HinataToyshop.html" class="outer">
					<span class="innerC">
					</span>
				</a>
				<a>
					<div class="ProductDetails">
						<h1>Clothes</h1>
					</div>
				</a>
			</div>
			<div class="box">
				<!--<img src="#">-->
				<a href="ProductPage1 - HinataToyshop.html" class="outer">
					<span class="innerA">
					</span>
				</a>
				<a>
					<div class="ProductDetails">
						<h1>Accessories</h1>
					</div>
				</a>
			</div>
        </div>
    </div>
	
	<div id="FooterHere"> </div>
		<script>
			load("Footer - HinataToyshop.php");
			function load(url)
			{
				req = new XMLHttpRequest();
				req.open("GET", url, false);
				req.send(null);
				document.getElementById("FooterHere").innerHTML = req.responseText;
			}
		</script>
</body>
</html>