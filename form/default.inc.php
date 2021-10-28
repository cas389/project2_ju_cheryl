<style type="text/css">
/*===========================

Custom Fonts

===========================*/

@font-face {
  font-family: 'Rockwell';
  src: url('../fonts/Rockwell.ttf') format('truetype');
}

/*===========================

Universal Styling

===========================*/

* {
  padding: 0;
  margin: 0;
  border: 0;
  box-sizing: border-box;
}

h1,
h3 {
  font-family: 'Rockwell', serif;
}

h2,
h4,
h5,
p {
  font-family: 'Raleway', sans-serif;
}

h1,
h2,
h4,
h5 {
  color: white;
}

h1 {
    font-size: 100px;
}

h2 {
    font-weight: 400;
    font-size: 40px;
}

h3, h6 {
  font-size: 50px;
  color: #3b3c40;
}

h3 {
  margin-bottom: 18px;
  text-align: center;
}

h4,
h5 {
  text-transform: uppercase;
}

h4 {
  background-color: #0e4a64;
  font-size: 23px;
  padding: 5px 0;
  margin-bottom: 10px;
  text-align: center;
}

h5 {
  background-color: #939598;
  font-size: 25px;
  padding: 10px;
  text-align: left;
  margin-top: 10px;
}

p {
  font-size: 20px;
  line-height: 35px;
  margin: 7px;
}


h6 {
  border-left: 20px solid #0e4a64;
  padding-left: 20px;
}

.secondary-page {
  margin: 0 200px;
}

.link-in-main-text {
  text-decoration: none;
  color: black;
}

.link-in-main-text:hover {
  color: #17bcba;
}


/*===========================

Header Styling

===========================*/

header {
    background-color: #f5f5f3;
    width: 100vw;
    z-index: 99999;
}

header img {
    margin: 14px 0px -20px 10px;
}


/*== Menu as a whole ===*/
.menu,
.header-social-icons {
  display: inline-block;
}

.menu {
    max-width: 90%;
    min-width: 100px;
    width: 70%;
}
/*== Unordered List - Each menu item as a whole ===*/
.menu ul {
  list-style: none;
}

/*== Styles the main first level navigation bars ===*/
.menu > ul > li {
    display: inline-block;
    background-color: #17bcba;
    width: 19%;
    position: relative;
    vertical-align: top;
    bottom: 37px;
    font-family: 'Rockwell', serif;
    margin: 0 5px;
}

/*== Changes all menu items as a whole. ===*/
.menu ul li a {
    color: #fbfbfb;
    display: block;
    padding: 12px 5px 5px;
    text-decoration: none;
    font-size: 20px;
    text-transform: uppercase;
    text-align: center;
    transition: .3s;
}

/*== Changes all menu items as a whole when hovering. ===*/
.menu-item:hover,
.menu ul li a:hover {
    background: white;
    color: #0e4a64;
    border-left: 10px solid #0e4a64;
    transition: .3s;
}


/*== Targets the secondary sub-menu in Portfolio ===*/
.sub-menu {
    display: none;
}

.menu-item:hover .sub-menu {
    display: block;
    position: absolute;
    top: 41px;
    width: 100%;
    background: #17bcba;
}

.menu-item:hover > a {
color: #0e4a64;
}

/*== Social Media Icons in Header ===*/

.header-social-icons a {
  font-size: 40px;
  color: #0e4a64;
  position: relative;
  bottom: 15px;
  padding-left: 2px;
}

.header-social-icons a:hover {
  color: #17bcba;
}

/*===========================

Footer

===========================*/

footer {
  background: #3b3c40;
  color: white;
  padding: 40px;
}

footer p {
  line-height: 30px;
}

footer a {
  color: white;
  text-decoration: none;
}

/*== Social Media Icons in Footer ===*/

.footer-social-icons a {
  font-size: 30px;
  color: white;
  margin-left: 5px;
}

.footer-social-icons a:hover,
footer a:hover {
  color: #17bcba;
}

.footer-logo {
  position: absolute;
  right: 50px;
}
</style>



<header>
  <a href="index.html"><img class="header-image" src="../images/logo.png" alt="Deju Designs Logo" title="Deju Designs Logo" width="200"/></a>
  <!-- Website Navigation -->

  <nav class="menu">
    <ul>
      <li class="menu-item"><a href="../index.html">Home</a></li>
      <li class="menu-item"><a href="../about.html">About</a></li>
      <li class="menu-item"><a href="#">Portfolio</a>
          <ul class="sub-menu">
            <li class="menu-item"><a href="../portfolio/indesign-examples.html">InDesign Examples</a></li>
            <li class="menu-item"><a href="../portfolio/logo-examples.html">Logo Examples</a></li>
            <li class="menu-item"><a href="../portfolio/other-examples.html">Other Examples</a></li>
            <li class="menu-item"><a href="../portfolio/photoshop-illustrator-examples.html">Photoshop & <br/> Illustrator Examples</a></li>
          </ul>
      </li>
      <li class="menu-item"><a href="http://www.dejudesigns.com" target="_blank">Shop</a></li>
      <li class="menu-item"><a href="../contact.html">Contact</a></li>
    </ul>
  </nav>

  <!-- Social Media Icons -->
  <div class="header-social-icons">
    <a href="https://www.facebook.com/dejudesigns" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://twitter.com/cher_bear55" target="_blank"><i class="fab fa-twitter-square"></i></a>
    <a href="https://www.linkedin.com/in/cheryl-ju-1a02aa80/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.instagram.com/deju_designs/" target="_blank"><i class="fab fa-instagram-square"></i></a>
    <a href="https://www.tiktok.com/@dejudesigns" target="_blank"><i class="fab fa-tiktok"></i></a>
  </div>
</header>

<div class="secondary-page">
  <h2>Sorry something went wrong with your submission</h2>
  <p>Please try again.</p>
</div>

<footer>
  <a href="../index.html"><img class="footer-logo" src="../images/logo-white.png" alt="Deju Designs Logo" title="Deju Designs Logo" width="200" /></a>

  <p>Cheryl Ju <br/>
    <a href="mailto:dejudesignsllc@gmail.com">dejudesignsllc@gmail.com</a> <br/>
    <a href="tel:610-368-3475">610-368-3475</a> <br/>
    Spring City, PA
  </p>

  <!-- Social Media Icons -->
  <div class="footer-social-icons">
    <a href="https://www.facebook.com/dejudesigns" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://twitter.com/cher_bear55" target="_blank"><i class="fab fa-twitter-square"></i></a>
    <a href="https://www.linkedin.com/in/cheryl-ju-1a02aa80/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.instagram.com/deju_designs/" target="_blank"><i class="fab fa-instagram-square"></i></a>
    <a href="https://www.tiktok.com/@dejudesigns" target="_blank"><i class="fab fa-tiktok"></i></a>
  </div>
</footer>
