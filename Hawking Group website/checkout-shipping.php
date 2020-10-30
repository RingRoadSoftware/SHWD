<!DOCTYPE html>
<!-- second checkout page, after payment, shipping info -->
    <head>
		<title>RR Audio Solutions - Checkout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
        <div class="homepageheader" style="position: relative;">
		    <a href="index.php"><img src="./images/Ringroad Logo.png" id="logo"></img></a>
        </div>
        <div class="form-body">
        <h1 class="checkout-header">Shipping Information</h1>
        <form action="add-shipping.php" method="POST" class="form">
            <label for="first-name" id="first-name-label">First Name</label>
            <label for="last-name">Last Name</label>
            <br>
            <input type="text" name="first-name" id="first-name">
            <input type="text" name="last-name" id="last-name">
            <br>
            <label for="mobile-number">Mobile Number</label>
            <br>
            <p>+61</p>
            <input type="text" name="mobile-number" id="mobile-number" minlength="10" maxlength="10">
            <br>
            <label for="address">Address</label>
            <br>
            <input type="text" name="address" id="address">
            <br>
            <label for="zipcode" id="zipcode-label">Zipcode</label>
            <label for="company">Company</label>
            <br>
            <input type="text" name="zipcode" id="zipcode" minlength="4" maxlength="4">
            <input type="text" name="company" id="company" placeholder="Optional">
            <br>
            <input type="submit" class="submit-button" value="Confirm Order">
        </form>
        </div>
    </body>
</html>