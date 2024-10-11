<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title> Cart - HinataToyshop</title>
    <link rel="stylesheet" href="CSS/Cart - HinataToyshop.css">
	<link rel="icon" href="Images/HinataToyshopIcon.png" type="image/jpg" sizes="16x16">
</head>
<body>
    <div id="HeaderHere"></div>
    <script>
        load("Header - HinataToyshop.html");
        function load(url)
        {
            req = new XMLHttpRequest();
            req.open("GET", url, false);
            req.send(null);
            document.getElementById("HeaderHere").innerHTML = req.responseText;
        }
    </script>

	<br><br><br>
	
	<div class="wrapper">
		<div class="Cart-Container">
			<div class="Header">
				<h3 class="Heading">Shopping Cart</h3>
			    <h5 class="Action" onclick="clearCart()">Remove all</h5>
			</div>
			<div class="Cart-Items" id="cartlist">
                <!-- Cart items will be displayed here -->
            </div>
			<hr>
			<div class="checkout">
				<div class="total">
			<div>
				<div class="Subtotal">Sub-Total</div>
				<div class="items" id="itemCount">2 items</div>
			</div>
			<div class="total-amount">Rs. <span id="totalAmount">2400</span></div>
		</div>

		<div class="quantity-selector">
			<label for="quantity">Quantity:</label>
			<input type="number" id="quantity" value="2" min="1">
			<button onclick="updateTotal()">Update Total</button>
		</div>
<!--
                <div class="total">
                    <div>
                        <div class="Subtotal">Sub-Total</div>
                        <div class="items">2 items</div>
                    </div>
                    <div class="total-amount">Rs. 2400</div>
                </div>
-->
                <button class="button" onclick="checkout()">Checkout</button>
            </div>  
<!--
			<div class="Cart-Items">
				 <div class="image-box">
				 	<img src="Images/A2.jpeg" style="{{ height='120px' }}" />
				 </div>
				 <div class="about">
					<h1 class="title">One Piece Necklace</h1>
				 </div>
				 <div class="counter">
					 <div class="btn">+</div>
					 <div class="count">2</div>
					 <div class="btn">-</div>
				 </div>
				 <div class="prices">
					 <div class="amount">Rs. 1200</div>
					 <div class="save"><u>Save for later</u></div>
					 <div class="remove"><u>Remove</u></div>
				 </div>
			</div>
-->
<!--
			<hr> 
				 <div class="checkout">
					 <div class="total">
						 <div>
							 <div class="Subtotal">Sub-Total</div>
							 <div class="items">2 items</div>
						 </div>
					 <div class="total-amount">Rs. 2400</div>
					 </div>
				 <button class="button">Checkout</button>
				 </div>			
-->
		</div>
	</div>
	
	<div id="FooterHere"></div>
	<script src="AddToCart.js"></script>
    <script>
        load("Footer - HinataToyshop.html");
        function load(url)
        {
            req = new XMLHttpRequest();
            req.open("GET", url, false);
            req.send(null);
            document.getElementById("FooterHere").innerHTML = req.responseText;
			displayCart(); // Display cart items after loading the footer
        }
    </script>
</body>	
</html>