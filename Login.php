<?php

// $hostname="localhost";
// $username="root";
// $dbname="repair_bharat";
// $password="password"

$connection = mysqli_connect('localhost','root','','greenhouse');

if(!$connection){
    echo 'connection error: ' . mysqli_connect_error();
}

if(isset($_POST['submit']))
{
    
     $Number=$_POST['number'];
     $Password=$_POST['password'];
        

     $sql ="INSERT INTO login (number,password) 

     VALUES ('$Number','$Passsword')";

    if($connection->query($sql)===TRUE)
    {
        echo "Login successfully";
    }
   
    else
   {
       echo "Login Failed";
   }
   
    


    

    $connection->close();

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Commerce | Login</title>
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

 <main>
	<div class="feed">
	<h2 style="margin-top:100px" >LOGIN</h2>
	<div class="feed_form">
		<form name="submit_googlesheet" method="post" action="#">
			<input type="text" name="Number" placeholder="Cotact Number" style="border-radius: 10px;"><br>
			<input type="password" name="password" placeholder="Password" style="border-radius: 10px;"><br>
			<p ><a href="#">Forget Password?</a></p>
			<button type="submit">Login</button>
			
            <br>
            <p><b>Don't have an account? <a href="signup.php">SignUp</a></b></p>
            <br>
            
    

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