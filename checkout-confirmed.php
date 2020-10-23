<!DOCTYPE html>
<!-- final checkout page -->
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
        <h1 class="checkout-header">Confirmation</h1>
        <div class="list1">
        <h2 class="checkout-header2">Payment Information</h2>
        
        <?php
        echo "<div class='form'>";
        require_once "inc/dbconn.inc.php";

        $sql1 = "SELECT cardName, cardNumber, expirationDate, cvv FROM paymentInfo WHERE active = 0";
        
        if ($result1 = mysqli_query($conn, $sql1)){
            //echo "Success";
           if (mysqli_num_rows($result1) > 0){
            echo "<ul class='checkout-list'>"; 
            while ($row = mysqli_fetch_assoc($result1)){
                    
                    echo "<li>";
                        echo "Card Name: ";
                        echo $row["cardName"];
                    echo "</li>";
                    echo "<li>";
                        echo "Card Number: ";
                        echo $row["cardNumber"];
                    echo "</li>";
                    echo "<li>";
                        echo "Expiration Date: ";
                        echo $row["expirationDate"];
                    echo "</li>";
                    echo "<li>";
                        echo "CVV: ";
                        echo $row["cvv"];
                    echo "</li>";
                    
                }
                /*if (!$row){
                    echo "Error: row error " .mysqli_error($conn);
                }*/
            }
            echo "</ul>";
            mysqli_free_result($result1);
        } else if (!$result1) {
            echo "Error: " .mysqli_error($conn);
        }

        //mysqli_close($conn);

        echo "</div>";
        echo "</div>";

        echo "<div class='list2'>";

        echo "<h2 class='checkout-header2'>";
        echo "Shipping Information";
        echo "</h2>";

        echo "<div class='form'>";

        //require_once "inc/dbconn.inc.php";

        $sql2 = "SELECT fName, lName, mobileNo, address, zipcode, company FROM shippingInfo WHERE active = 0";
        
        if ($result2 = mysqli_query($conn, $sql2)){
            //echo "Success";
           if (mysqli_num_rows($result2) > 0){
            echo "<ul class='checkout-list'>"; 
            while ($row2 = mysqli_fetch_assoc($result2)){
                    
                    echo "<li>";
                        echo "First Name: ";
                        echo $row2["fName"];
                    echo "</li>";
                    echo "<li>";
                        echo "Last Name: ";
                        echo $row2["lName"];
                    echo "</li>";
                    echo "<li>";
                        echo "Mobile Number: ";
                        echo $row2["mobileNo"];
                    echo "</li>";
                    echo "<li>";
                        echo "Address: ";
                        echo $row2["address"];
                    echo "</li>";
                    echo "<li>";
                        echo "Zipcode: ";
                        echo $row2["zipcode"];
                    echo "</li>";
                    echo "<li>";
                        echo "Company: ";
                        echo $row2["company"];
                    echo "</li>";
                    
                }
                /*if (!$row){
                    echo "Error: row error " .mysqli_error($conn);
                }*/
            }
            echo "</ul>";
            mysqli_free_result($result2);
        } else if (!$result2) {
            echo "Error: " .mysqli_error($conn);
        }
        

        mysqli_close($conn);
        
        ?>
        <button class="submit-button"><a href="complete-checkout.php" class="continue-shopping">Continue Shopping</a></button>
        </div>
        </div>
        </div>
    </body>
</html>