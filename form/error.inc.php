<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./css/styles.css' />";
?>
<!--   Header   -->
<header>
	<a href="index.html"><img class="logo" src="images/logo.svg" alt="Deju Designs business logo."></a>
	<!--   Navigation for Desktop   -->
	<nav class="links">
		<ul>
			<li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="https://www.dejudesigns.com/" target="_blank">Shop</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<a href="#"><i class="fas fa-bars"></i></a>
	</nav>
	<!--   Navigation for Mobile   -->
	<nav class="hamburger-menu">
		<ul>
			<li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="https://www.dejudesigns.com/" target="_blank">Shop</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
			<a href="#" class="close-menu"><i class="fas fa-times"></i></a>
	</nav>
</header>



<!--   Main Section of Content   -->
	<section class="secondary-intro">
		<img class="home-image" src="images/headers/contact-me.jpg" alt="Hands Typing on a Computer" title="Hands Typing on a Computer">
		<section class="secondary-intro-text">
			<h1>Contact Me</h1>
		</section>
	</section>

	<main class="contact-me-page">
		<h2>Missing fields</h2>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a class="reglink" href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

		<ul>
		<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
				echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
		?>
		</ul>

		<p><strong><a class="reglink" href="#" onClick="history.go(-1)">Back to form</a></strong></p>
	</main>
		<!--   Footer Section    -->
		<footer>
			<a href="index.html"><img src="images/deju-designs/DejuDesignsLogo-white.svg" alt="White version of the Deju Designs Logo." title="Logo for Deju Designs LLC."></a>
			<p>
				Spring City, PA<br>
				<a href="tel:610-368-3475">610-368-3475</a><br>
				<a href=" mailto:dejudesignsllc@gmail.com?subject=I%20am%20Interested%20In%20Working%20With%20You!">DejuDesignsLLC@gmail.com</a><br/>
				<a href="https://www.facebook.com/dejudesigns" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="https://twitter.com/cher_bear55" target="_blank"><i class="fab fa-twitter-square"></i></a>
				<a href="https://www.linkedin.com/in/cheryl-ju-1a02aa80/" target="_blank"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.instagram.com/deju_designs/" target="_blank"><i class="fab fa-instagram-square"></i></a>
				<a href="https://www.tiktok.com/@dejudesigns" target="_blank"><i class="fab fa-tiktok"></i></a>
			</p>
		</footer>
	</div>
