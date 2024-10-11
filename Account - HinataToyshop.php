<?php session_start();
if(!isset($_SESSION["Username"]))
{
	header('Location:Login-HinataToyshop.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Account - HinataToyshop</title>
	<link rel="stylesheet" type="text/css" href="CSS/Account - HinataToyshop.css"/>
	<link rel="icon" href="Images/HinataToyshopIcon.png" type="image/jpg" sizes="16x16">

</head>

<body>
    
<script>
      const navSlide = () => {
		  const burger = document.querySelector(".burger");
		  const nav = document.querySelector(".nav-links");
		  const navLinks = document.querySelectorAll(".nav-links a");

		  burger.addEventListener("click", () => {
			  nav.classList.toggle("nav-active");

			  navLinks.forEach((link, index) => {
				  if (link.style.animation) {
					  link.style.animation = "";
				  } 
				  else {
					  link.style.animation = `navLinkFade 0.5s ease forwards ${
					  index / 7 + 0.5
				  }s `;
				  }
			  });
			  burger.classList.toggle("toggle");
		  });
		  //
	  };
	navSlide();
</script>
<nav>
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
  
	<div id="ProductTable">
		
    <br><br><br><br><br><br><br><br>
		
        <div id="OuterConentRow">
			<div id="box">
				<a href="Profile - HinataToyshop.php"><img src="Images/Acc1 - Profile.png">
					<div id="ProductDetails">
						<h2>My Profile</h2>
					</div>
				</a>
			</div>
			<div id="box">
				<?php
	$con = mysqli_connect("localhost","root","","HinataToyshopDB","3306");
	
					if(!$con)
					{
						die("Sorry, We are facing technical issue.");
					}

						$sqlCartCount = "SELECT * FROM `tblcounts` WHERE `CartRefer`='CartR'";
						$resultCartCount =mysqli_query($con,$sqlCartCount);
						$rowCartCount = mysqli_fetch_assoc($resultCartCount);
						$CartC = $rowCartCount["CartCount"];
				?>
				<a href="Cart - HinataToyshop.php?CartID=<?php echo $CartC?>"><img src="Images/Acc2 - Cart.png">
					<div id="ProductDetails">
						<h2>Cart</h2>
					</div>
				</a>
			</div>
			<!--<div id="box">
				<a href="FAQ - HinataToyshop.html"><img src="Images/Acc7 - Tracking.png">
					<div id="ProductDetails">
						<h2>Track Order</h2>
					</div>
				</a>
			</div>-->
			<div id="box">
				<?php
				$sqlHistoryCount = "SELECT * FROM `tblcounts` WHERE `HistoryRefer`='HistoryR'";
				$resultHistoryCount =mysqli_query($con,$sqlHistoryCount);
				$rowHistoryCount = mysqli_fetch_assoc($resultHistoryCount);
				$HistoryC = $rowHistoryCount["HistoryCount"];
				?>
				<a href="Order History - HinataToyshop.php?HistoryID=<?php echo $HistoryC?>"><img src="Images/Acc4 - History.png">
					<div id="ProductDetails">
						<h2>History</h2>
					</div>
				</a>
			</div>
			<div id="box">
				<a href="Content - HinataToyshop.php"><img src="Images/Acc5 - Bakery.png">
					<div id="ProductDetails">
						<h2>View Bakery</h2>
					</div>
				</a>
			</div>
			<!--<div id="box">
				<a href="FAQ - HinataToyshop.html"><img src="Images/Acc3 - FAQ.png">
					<div id="ProductDetails">
						<h2>FAQ</h2>
					</div>
				</a>
			</div>-->
			<div id="box">
				<a href="AccountHandler - HinataToyshop.php"><img src="Images/Acc6 - Logout.png">
					<div id="ProductDetails">
						<h2>Log Out</h2>
					</div>
				</a>
			</div>
		</div>
		
		<!--<div id="OuterConentRow2" align="right">
			<div id="box">
				<a href="AccountHandler - HinataToyshop.php"><img src="Images/Acc6 - Logout.png">
					<div id="ProductDetails">
						<h2>Log Out</h2>
					</div>
				</a>
			</div>
		</div>-->
    </div>
	
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
</body>
</html>
