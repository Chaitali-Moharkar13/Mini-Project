<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Commerce</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">


	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="nav nav_top">
		<div class="logo">
			<a href="#"><img src="img/log.jpeg" width="200"></a>
		</div>
		<div class="nav_side">
			<a href="about.php">About Us</a>
			<a href="service.php">Services</a>
			<a href="contact.php">Contact</a>
			<a href="Login.php">Login</a>
		</div>
	</nav>
	<div class="main">
		<div class="main_content">
			<h2>Fresh Fruits & Fresh Vegetables Only</h2><br><br>
			<h4>We’re not your average fruit importers. We have expertise in sourcing the choicest of fresh fruits from around the world and distributing it across the length and breadth of India. Our top-notch distribution network strengthened through almost a century of existence in the fruit business, works efficiently to ensure the fruits are delivered far and wide with an intriguing depth of freshness. We provide fresh fruits online and fresh vegetables online.<br>We have expertise in providing fresh fruits online and fresh vegetables online and offline and sourcing the choicest of fruits and vegetables from around the world</h4>
		</div>
	</div>

	<div class="product">
		<h2>OUR PRODUCTS</h2>
		<h3>Fruits</h3>
		<div class="product_container">
			<div class="item">
				<div class="item_img">
					<img src="img/apple.jpg">
				</div>
				<div class="item_content">
					<h4>Apple</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/banana.jpg">
				</div>
				<div class="item_content">
					<h4>Bananas</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/mango.jpg">
				</div>
				<div class="item_content">
					<h4>Mango</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>
		</div>
<br><br><br><br><br>
		<div class="product_container">
			<div class="item">
				<div class="item_img">
					<img src="img/strawberries.jpg">
				</div>
				<div class="item_content">
					<h4>Strawberry</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/watermelon.jpg">
				</div>
				<div class="item_content">
					<h4>Watermelon</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/kiwi.jpg">
				</div>
				<div class="item_content">
					<h4>Kiwi</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>
		</div>
<br><br><br><br><br>

		<div class="product">
		<h3>Vegetables</h3>
		<div class="product_container">
			<div class="item">
				<div class="item_img">
					<img src="img/potato.jpg">
				</div>
				<div class="item_content">
					<h4>Potato</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/tomato.jpg">
				</div>
				<div class="item_content">
					<h4>Tomato</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/cabbage.jpg">
				</div>
				<div class="item_content">
					<h4>Cabbage</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>
		</div>
<br><br><br><br><br>
		<div class="product_container">
			<div class="item">
				<div class="item_img">
					<img src="img/capsicum.jpg">
				</div>
				<div class="item_content">
					<h4>Capsicum</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/brinjal.jpg">
				</div>
				<div class="item_content">
					<h4>Brinjal</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>

			<div class="item">
				<div class="item_img">
					<img src="img/onion.jpg">
				</div>
				<div class="item_content">
					<h4>Onion</h4>
					<br><a href="">Buy Now</a>
				</div>
			</div>
		</div>

		<div class="product_btn">
			<a href="service.php">Explore More</a>
		</div>
	</div>
</div>
<hr>
<div class="feed">
	<h2>WRITE A REVIEW</h2>
	<div class="feed_form">
		<form name="submit_googlesheet" method="post">
			<input type="text" name="Name" placeholder="Name"><br>
			<input type="email" name="Email" placeholder="Email ID"><br>
			<input type="number" name="Number" placeholder="Contact Number"><br>
			<textarea rows="5" cols="7" name="Review" placeholder="Write your review"></textarea><br>
			<button type="submit">Submit</button>
		</form>
	</div>
</div>
<hr>
<footer>
		<div class="footer_logo">
			<a href="#"><img src="img/log.jpeg" width="200"></a>
		</div>
		<div class="pages">
			<h3>Pages</h3>
			<a href="about.php">About Us</a>|
			<a href="service.php">Services</a>|
			<a href="blog.php">Blogs</a>|
			<a href="">Login</a>|
			<a href="">Sign Up</a>
		</div>
		<div class="doc">
			<h3>Documents</h3>
			<a href="">Privacy Policy</a>|
			<a href="">Terms of Use</a>|
			<a href="">Refund Policy</a>
		</div>
		<div class="social">
			<h3>Follow Us</h3>
			<a href="https://www.facebook.com/login/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/signup" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="https://ads.twitter.com/login" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</div>
		<div class="contact">
			<h3>Contact Us</h3>
			<a href="https://api.Whatsapp.com/send?phone= +919876543210" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
			<a href="tel: +919876543210" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
			<a href="mailto: chaitumoharkar14@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
		</div>
		<hr>
		<p>Copyright &copy; 2021 The GreenHouse. All rights reserved</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script type="text/javascript">
	const scriptURL = 'https://script.google.com/macros/s/AKfycbyPjUqgz6bnWTeHynZ_iU8sRYCbL2uNP56_Ish5ijFJ-j70WMhjPDZXmhiUMovx9E6S/exec'
            const form = document.forms['submit_googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thank you, for your review..."))
                .catch(error => console.error('Error!', error.message))
            })
</script>
</body>
</html>