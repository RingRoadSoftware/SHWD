<!DOCTYPE html>
<!-- first checkout page, after cart, payment info -->
    <head>
		<title>RR Audio Solutions - Checkout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
	    
	    div class="homepageheader" style="position: relative;">
		<a href="index.php"><img src="./images/Ringroad Logo.png" id="logo"></img>
			<nav>
				<ul>
				<li> <a href="products.php">Products</a></li>
				<li> <a href="cart.php">Cart</a></li>
				<li> <a href="about.php">About</a></li>
				</ul>		
			</nav>
				</a>
			</div>
        <h1>Payment Information</h1>
        <form action="add-payment.php" method="POST">
            <label for="card-name">Card Name</label>
            <input type="text" name="card-name" id="card-name">
            <label for="card-number">Card Number</label>
            <input type="text" name="card-number" id="card-number">
            <label for="expiration-date">Expiration Date</label>
            <input type="text" name="expiration-date" id="expiration-date">
            <label for="cvv">CVV</label>
            <input type="text" name="cvv" id="cvv">
            <input type="submit" class="submit-button" value="Proceed to Shipping">
        </form>
	    <div class="footer">
		<a href="index.php"><img src="./images/Ringroad Logo.png" id="logo"></img>
			<nav>
				<ul>
				<li> <a href="social.php">Socials</a></li>
				<li> <a href="copyright.php">Copyright and Privacy</a></li>
				<li> <a href="contact.php">Contact Us</a></li>
				</ul>		
			</nav>
				</a>
			</div>
    </body>
</html>
