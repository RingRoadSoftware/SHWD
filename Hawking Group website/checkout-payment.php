<!DOCTYPE html>
<!-- first checkout page, after cart, payment info -->

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
        <h1 class="checkout-header">Enter payment details</h1>
        <form action="add-payment.php" method="POST" class="form">
            <label for="card-name">Card Name</label>
            <br>
            <input type="text" name="card-name" id="card-name">
            <br>
            <label for="card-number">Card Number</label>
            <br>
            <input type="text" name="card-number" id="card-number" minlength="16" maxlength="16">
            <br>
            <label for="expiration-date" id="expiration-date-label">Date</label>
            <label for="cvv" id="cvv">CVV</label>
            <br>
            <input type="text" name="expiration-date" id="expiration-date" minlength="5" maxlength="5">
            <input type="text" name="cvv" id="cvv" minlength="3" maxlength="3">
            <br>
            <input type="submit" class="submit-button" value="Proceed to Shipping">
        </form>
    </div>
</body>

</html>