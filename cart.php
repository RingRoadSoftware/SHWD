
<html>
<head>
<title>Cart</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>


<div class="homepageheader" style="position: relative;">

		<a href="index.php"><img src="images/Ringroad Logo.png" id="logo"></img>
			<nav>
				<ul>
					<li> <a href="products.php">Products</a></li>
					<li> <a href="cart.php">Cart</a></li>
					<li> <a href="about.php">About</a></li>
				</ul>
			</nav>
		</a>
	</div>

	<h1>Shopping Cart</h1>

	<div id="shopping-cart">
<?php
session_start();
require_once("inc/dbconn.inc.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {

switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM productInventory WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('pName'=>$productByCode[0]["pName"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}

	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>





<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><?php echo $item["pName"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="cart-button">Remove</a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
<?php
} else {
?>

Your Cart is Empty

<?php 
}
?>
<p>
<div id= "buttonrow">
<a id="cart-button" href="cart.php?action=empty">Empty Cart</a>
<a id="cart-button" href="checkout-payment.php">Proceed to checkout</a>
<a id="cart-button" href="products.php">Continue Shopping</a>
</div>
</div>



	</div>
	</div>
	<div class="footer">
		<a href="index.php"><img src="images/Ringroad Logo.png" id="logo"></img>
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