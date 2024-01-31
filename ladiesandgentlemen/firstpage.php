<!DOCTYPE html>
<html>
<head>
<title> Ladies and Gentlemen Exclusive Boutique</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style> 
.header{
     background-color:#00BFFF;
}
.logo{
     vertical-align:middle;
     width :150px;
     height :80px;
}
.header a{
     font-size:20px;
     color:#f1f1f1;
     padding:10px;
}
.header .addtocart{
     float:right;
}
.header .addtocart a{
     color:red;
     display:block;
     background-color:white;
     padding: 14px 16px;
     margin-right:20px;
     text-decoration:none;
     font-size:20px;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
.items .categoryheading{
      background-color:#00BFFF;
      padding:0;
      margin:0;
      text-align:center;
      color:white;
}
.gridcontents{
     display:grid;
     grid-template-columns:auto auto auto auto;
}
.griditem{
     text-align:center;
     margin:10px;
}
.griditem a{
     text-decoration:none;
     background-color:orange;
     font-size:25px;
     padding:5px 8px;
}

</style>
 </head>
<body>
<!--header-->
<div class="header">
<a><img class="logo" src="logo.png"> Ladies and Gentlemen Exclusive Boutique</a>
<div class="addtocart"><a href="">AddToCart</a></div>
</div>
<!--navigation bar-->
<div class="navbar">
  <a href="">HOME</a> 
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">SUITS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
   <a href="">EXECUTIVE SUITS</a>
   <a href="suggestedweddingsuits.php">SUGGESTED WEDDING SUITS</a>
   <a href="">THREE PIECE</a>
   <a href="">DOUBLE BREASTED</a>
   <a href="">BLAZERS</a>
   <a href="">TUXEDOS</a>
   <a href="">PANTS</a>
   <a href="">BESPOKE</a>
   <a href="">NATIVE SUITS</a> 
  </div>
  </div> 
  <a href="">SHIRTS</a>
  <a href="">SHOES</a>
  <a href="">TIE & TIE-TACKS</a>
  <a href="">WATCHES</a>
  <a href="">BELT & SUSPENDERS</a>
  <a href="">WAIST COATS & CRAVATS</a>
  <a href="">OTHER ACCESSORIES</a> 
</div>
<!--slideshow-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="suit cover pic.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="esuit1.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="esuit2.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<!--categories-->
<div class="items">
<h1 class="categoryheading">Suits</h1>
<div class="gridcontents">
<div class="griditem">
<img src="esuit1.png" width="100" height="100">
<h2>Brownish Grey suit by Roberto Bossi</h2>
<h3>NGN180,000</h3>
<a href="">AddToCart</a>
</div>
<div class="griditem">
<img src="esuit2.png" width="100" height="100">
<h2>Plain Grey suit by Marco Corvani</h2>
<h3>NGN195,000</h3>
<a href="">AddToCart</a>
</div>
</div>
</div>

<div class="items">
<h1 class="categoryheading">Shirts</h1>
<div class="gridcontents">
<div class="griditem">
<img src="shirt1.png" width="100" height="100">
<h2>Plain White shirt by Brooch Pabucci</h2>
<h3>NGN26,000</h3>
<a href="">AddToCart</a>
</div>
<div class="griditem">
<img src="shirt2.png" width="100" height="100">
<h2>Plain Deep Sky-blue shirt by Brooch Pabucci</h2>
<h3>NGN195,000</h3>
<a href="">AddToCart</a>
</div>
</div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

</script>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 </body>
 </html>