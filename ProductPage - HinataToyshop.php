<?php session_start();
	
    //$productID = isset($_GET["ProductID"]) ? intval($_GET["ProductID"]) : 0;
	$con = mysqli_connect("localhost","root","","HinataToyshopDB","3306");
	
	if(!$con)
	{
		die("Sorry, We are facing technical issue.");
	}
	
	mysqli_select_db($con,"HinataToyshopdb");
	
	$sql = "SELECT * FROM `tblproduct` WHERE `ProductID` = ".$_GET["ProductID"];
	
	$result =mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 0)
	{
		header('location:Content - HinataToyshop.php');
	}
	
	$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <title>ProductPage - HinataToyshop</title>
    <link rel="stylesheet" href="CSS/ProductPage - HinataToyshop.css">
	<link rel="icon" href="Images/HinataToyshopIcon.png" type="image/jpg" sizes="16x16">
</head>
<body>
	<div id="HeaderHere"></div>
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
	<br><br><br><br><br><br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="Order" href="Content - HinataToyshop.php#<?php echo $row["ProductID"];?>"><b>Back</b></a>
	
	<form action="AddToCart - HinataToyshop.php?ProductID=<?php echo $row["ProductID"];?>" method="post">
	<div id="ProductTable">
		<div id="OuterConentRow">
			<div id="box">
				<img src="<?php echo $row["ProdImg"];?>">
					<div id="ProductDetails">
						<h3><?php echo $row["ProductName"];?></h3>
						<h2>LKR <?php echo $row["Price"];?></h2>
						<a><?php echo $row["ProdDesc"];?></a>
						<br><br>
						<div align="center">
							<input type="submit" id="Order" name="btnOrder" class="button" value="Add to Cart"/>
						</div>
						<!--<script>
							if(document.getElementById("Order"))
							{
						//window.open(url, 'AddToCart - HinataToyshop.php?ProductID=<?php echo $row["ProductID"];?>');
							}
						</script>
							
						<!--<div align="center">
							<a href="Cart - HinataToyshop.php?ProductID=<?php echo $row["ProductID"];?>" id="btnOrder" name="btnOrder">
								<input type="submit" id="Order" name="btnOrder" class="button" value="Add to Cart"/>
							</a>
						</div>-->
						<!--<a href="AddToCart - HinataToyshop.php?ProductID=<?php echo $row["ProductID"];?>" id="Order" name="btnOrder">Add To Cart</a>
						<!--<a href="Cart - HinataToyshop.php?ProductID=<?php echo $row["ProductID"];?>" id="Order" name="btnOrder">Add To Cart</a>-->
						<br>
					</div>
			</div>
		</div>
    </div>
	</form>
</body>
	<div id="FooterHere"></div>
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
</html>