<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Steven Hawking Web Dev Shop</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/LOGO-HERE.png"> 
				</a>
			</div>
		</div>


		<div class="home-welcome">
			<div class="home-welcome-text" style="height: 380px; ">
				<h1 style="margin: 0px;">Welcome To Our Shop</h1>
				<h2>Great Deals on Headphones</h2>
			</div>
		</div>

		<!-- we should implement a php function to pull the pPage value and picture from the database instead of hardcoding it in. 
		So this would just be similar code to that of Practical 3's index.php which reads the tasks from the database, but instead that 
		reads products.sql and embed the image and link in the webpage.-->
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Featured Products</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img"><a href="product-pages/product1.php">
							<img src="./image/product/saree/hijab 1.png" class="home-products"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img"><a href="product-pages/product2.php">
							<img src="./image/product/beauty/toiletries.png" class="home-products"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img"><a href="product-pages/product3.php">
							<img src="./image/product/footwear/footwear1.png" class="home-products"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img"><a href="product-pages/product4.php">
							<img src="./image/product/saree/tshirts1.png" class="home-products"></a>
						</div>
					</li>
				</ul>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>