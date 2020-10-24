<!DOCTYPE html>
<html>
	<head>
		<title>RR Audio Solutions</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">

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
		</div>


		<div class="home-welcome">
			<div class="home-welcome-text" style="height: 380px; ">
				<h1><img style="width: 45%;" src="./images/ringroad logo.png" ></h1>
				<h2>Great Deals on Headphones</h2>
			</div>
			<div class="sale-banner"> 
				<a href="sale.php"><img style="display: block; margin: 0 auto;" src="./images/sale banner.jpg">
			</a>
			</div>
		</div>

		<!-- we should implement a php function to pull the page value and picture from the database instead of hardcoding it in. 
		So this would just be similar code to that of Practical 3's index.php which reads the tasks from the database, but instead that 
		reads products.sql and embed the image and link in the webpage.-->
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center; margin-top:100px;">Featured Products</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img">
						<img src="./images/HD800S.jpg" class="home-products">
							<a href="product-pages/hd800s.php" class="product-link">
								<div class="overlay">
									<div class="overlay-text">Sennheiser HD-800S - $2499</div>
								</div>
							</a>	
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img">
							<img src="./images/ANANDA.jpg" class="home-products">
							<a href="product-pages/ananda.php"  class="product-link">
								<div class="overlay">
									<div class="overlay-text">HiFiMAN Ananda - $1199</div>
								</div>	
							</div>
						</a>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img">
							<img src="./images/HD6XX.jpg" class="home-products">
							<a href="product-pages/hd6xx.php" class="product-link">
							<div class="overlay">
							<div class="overlay-text">Sennheiser HD-6XX - $280</div>
						</div>	
						</div>
						
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-product-img">
							<img src="./images/HE4XX.jpg" class="home-products">
							<a href="product-pages/he4xx.php">
							<div class="overlay">
							<div class="overlay-text">HiFiMAN HE-4XX - $200</div>
						</div>	
						</div>
						
					</li>
				</ul>
						</div>
					</li>
				</ul>
			</div>			
		</div>
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
