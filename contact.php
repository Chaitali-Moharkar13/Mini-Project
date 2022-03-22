<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Commerce | Contact</title>
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

	<div class="contact_container">
		<h2>Contact Us</h2>
		<div class="g_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.5199729004325!2d79.04705691396728!3d21.091826191000397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bfa3682c19c7%3A0x189b5f5ecdb1cf5c!2sDr.%20Babasaheb%20Ambedkar%20International%20Airport!5e0!3m2!1sen!2sin!4v1630957173786!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="contact_content">
			<p><b>Address: Nagpur,India</b></p>
			<p><b>Call: +919876543210</b></p>
			<p><b>Mail: chaitumoharkar14@gmail.com</b></p>
		</div>
	</div>

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