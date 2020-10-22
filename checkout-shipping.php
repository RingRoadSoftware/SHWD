<!DOCTYPE html>
<!-- second checkout page, after payment, shipping info -->
    <head>
		<title>RR Audio Solutions - Checkout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
        <h1>Shipping Information</h1>
        <form action="add-shipping.php" method="POST">
            <label for="first-name">First Name</label>
            <input type="text" name="first-name" id="first-name">
            <label for="last-name">Last Name</label>
            <input type="text" name="last-name" id="last-name">
            <label for="mobile-number">Mobile Number</label>
            <input type="text" name="mobile-number" id="mobile-number">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <label for="zipcode">Zipcode</label>
            <input type="text" name="zipcode" id="zipcode">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" placeholder="Optional">
            <input type="submit" class="submit-button" value="Confirm Order">
        </form>
    </body>
</html>