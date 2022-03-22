<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Commerce | About Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="nav nav_top">
		<div class="logo">
			<a href="index.php"><img src="log.jpeg" width="200"></a>
		</div>
		<div class="nav_side">
			<a href="about.php">About Us</a>
			<a href="service.php">Services</a>
			<a href="contact.php">Contact</a>
			<a href="Login.php">Login</a>
		</div>
	</nav>

	<div class="about_us">
		<h2>About Us</h2>
		<div class="about_content"></div>
		<p>1. Our Range -
Buy from our range of over 10,000+ items across Grocery; freshest of fresh fruits &  vegetables procured directly from the farmer; the best range of meat, chicken & fish; Patanjali & other organic products; Personal Care Products from all top Brands and a massive range of cosmetics and household essentials.<br><br>

2. Our Prices
We care for your budget and it shows in our pricing.
- First of all, say goodbye to MRP. Everything we sell, will be sold under MRP
- Watch out for CITY BEST prices on the most important items for any household under the tag "BEST PRICE EVER"
- Dont miss the top offers promotions we source for you with all our partner Brands under HOT OFFERS
- All daily need items like Fruits, Vegetables, Dairy, Bakery are close to our heart. We source them directly from the farmer and you would see that in our prices.<br><br>

3. Our Delivery Slots
We know you lead a busy life. We deliver the orders in convenient 2 hour slots, starting at 10 AM in the morning and going upto 12 AM in the night. Yes, 12 midnight.
The hard working YOU deserves a harder working grocer!!<br><br>

4. Our Returns Policy
This is the best part. We have a no questions asked returns policy. Just reach out to us at the time of order delivery or even upto 48 hours later and we will take the material back - No questions asked.<br><br>

5. Our Farmers
Savour season’s freshest, naturally ripened & carbide-free alphonso mangoes straight from the farms of Ratnagiri, brought to you with love from our farmers.</p>
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
			<a href="index.php"><img src="log.jpeg" width="200"></a>
		</div>
		<div class="pages">
			<h3>Pages</h3>
			<a href="about.php">About Us</a>|
			<a href="service.php">Services</a>|
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