<?php

session_start();
if (!isset($_SESSION['reg_name'])) {
	header('location: ../login_before/login.html');
}

$reg_id_no = $_SESSION['val_id']


?>

<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Resource Management</title>
		<link rel="stylesheet" type="text/css" href="t1.css">
	</head>
	
	
<body>
<div id="page-wh">

	<div id="nav_bar">
		<h1 id="heading">RESOURCE MANAGEMENT</h1>
		<center>
		<div id="menu-bar-2">
			<div style="width: auto;height: auto;padding: 4px 0px;">
			<a href="home.php">Home</a>
			<a href="contact.php">Contact Us.</a>
			<a href="logout.php">logout</a>
			</div>
		</div>
		</center>
	</div>		

	<div id="page">

		<p id="slide-heading"> See it Yourself</p>

		<div id="slider">
			<div id="slides">
				
				<input type="radio" name="radio-btn" checked="checked" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">

				<div class="slide first">
					<img src="https://drive.google.com/uc?export=view&id=1KHHfelCgVVjOe2QXw4hDtiClp6Ig6y-W">
				</div>
				<div class="slide">
					<img src="https://drive.google.com/uc?export=view&id=1WIXzjHL7itb02ODI-7Yf2_BK2SIYid8r">
				</div>
				<div class="slide">
					<img src="https://drive.google.com/uc?export=view&id=1PvUHolrhvwyJ9Pzb8VRfYtkEXcyWrisy">
				</div>
				<div class="slide">
					<img src="https://drive.google.com/uc?export=view&id=1ZgXIEKSBRYNwWHHMYPnKXap5jda6pPAk">
				</div>

				<div class="navigation-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
				</div>

				<div class="navigation-manual">
					<label for="radio1" class="manual-btn"></label>
					<label for="radio2" class="manual-btn"></label>
					<label for="radio3" class="manual-btn"></label>
					<label for="radio4" class="manual-btn"></label>
				</div>
			</div>
		</div>



		<p class= "btnHead">Do you feel concerned about them? If yes, please donate!</p>
		<!-- Trigger/Open The Modal -->
		<center><button id="myBtn">DONATE</button></center>

		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<div class="form-style-5">
			
					<form action="donate.php" method="post">
						<fieldset>
							<legend><span class="number"></span>Donate with us and spread smiles</legend>
							<input type="hidden" name="field1" value="<?php echo $reg_id_no; ?>">
							<select id="job" name="field4">
							<optgroup label="Requirements">
							  	<option value="Books">Books</option>
							  	<option value="Bags">Bags</option>
								<option value="Clothes">Clothes</option>
								<option value="Medicines">Medicines</option>
								<option value="Education needs">Education needs</option>
								<option value="Stationary Items">Stationery Items</option>
								<option value="Toys and Play-material">Toys and Play-material</option>
								<option value="Sports Equipments">Sports Equipments </option>
								<option value="Musical Equipments">Musical Equipments</option>
							</optgroup>
							</select>      
						</fieldset>
						<input type="submit" value="Donate" />
					</form>
				</div>

				
				<div class="clear"></div>

				<p class= "stats">Help Us Change The Statistics-</p>
				<center>
				<div id="hello">
					<div class="stats-area">
				 		<div class="stats-section stats-menu">	
							<p class="num" style="color: #05A892;">90%</p>
							<p class="numtext" >are social orphans</p>
						</div>
					</div>
					<div class="stats-area">
					 	<div class="stats-section stats-menu stat1">
							<p class="num" style="color: #05A892;">70%</p>
							<p class="numtext" >of boys end up with criminal activities</p>	
						</div>
					</div>
					<div class="stats-area">
					 	<div class="stats-section stats-menu stat1">
							<p class="num" style="color: #05A892;">60%</p>
							<p class="numtext" >of girls end up in prostitution</p>	
						</div>
					</div>
							
					<div class="stats-area">
					 	<div class="stats-section stats-menu stat1">
							<p class="num" style="color: #05A892;">10%</p>
							<p class="numtext" >of orphan children commit suicide.</p>
						</div>	
					</div>
				</div>
				</center>

				<div>
					<p class="after-text">If not helped.</br> And thus we wish to create an environment safe and sound for the ones alone- to live and enjoy the life they deserve.</p>
				</div>	
		
				<div style="border-radius: 25px; height: 300px;">
			
				<div>
					<p class= "works" >Shower your consern to them.</br> please help.</br></p>
					<p class= "works" id ="adopt">For Adoption Visit Our Website.</p>
					<p class= "works" >386 Resource Management </br> Sector- XYZ </br> Hyderabad</br> Pin- 500001 </br> Contact - 9346743312 OR resourcesmanagement2022@gmail.com</p>
				</div>		
			
				<div id="foot">
					<footer>
						<p  class="foot-color"> Help us. Help the children.<br/> Hyderabad- India <br/> Contact : +(91)9346743312| resourcesmanagement2022@gmail.com<br/>
						&copy 2021<a href="home.html"> &nbsp Resource Management</a>.</p>
					</footer>
				</div>
			</div>
		</div>
	</div>
	<div id="end_bar">
		<p class="top"> Donate or Visit the prodegies | Charitable Number - +(91)9346743312 | resourcesmanagement2022@gmail.com </p>
	</div>
</div>
<!--
<style type="text/css">
		nt#topbar{
			 
			 width:100%;
			 margin:0 auto;
			 height:40px;
			 background-color: #000000;
		}
		.top{
			 
			 font-weight: 10%;
			 font-family: Gnuolane Rg;
			
			color: #f4f8f7;
			text-align:center;
			position: relative;
			top: 10px;
			
		}
		h1{
			color:black;
			font-size: 40px;
			font-weight: normal;
			float: left;
		}
		#header{
		 width: 100%;
		height: 170px;
		background-color: #f4f7f8;
		 }
		.clear{
			clear:both;
		}
	#slide{
		width: 1000px;
		height: autocomplete;
		margin: 0 auto;
	}
	
	#slide-heading{
		font-weight: bold;
		font-family: Flamante-Serif-FFP;
		marin-top: 50px;
		margin-left: 100px;
		margin-right: 100px;
		font-size: 25px;
		border-bottom: 2px solid #05A892;
		border-top: 2px solid #05A892;
		width: 110 px;
		height: 30px;
		
	}
	* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


/*Button Styling*/

.btnHead{
	text-align:center;
	font-weight: bold;
	font-family: Flamante-Serif-FFP;
	font-size: 25px;
	
	
}
/* The modal button*/

#myBtn{
	display: inline-block;
	padding: 15px 25px;
	font-size: 24px;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	outline: none;
	color: #fff;
	background-color: #05A892;
	border: none;
	border-radius: 15px;
	box-shadow: 0 9px #999;
	position: relative;
	left: 600px;
	border-bottom: 2px solid #05A892;
	
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.stats {
 border-bottom: 2px solid #05A892;
 font-size: 25px;
 font-weight:bold;
 margin-left: 100px;
 margin-right: 100px;
 margin-top:40px;
}
	.stats-section{
		width: 250px;
		height:100px;
		border: 2px solid #05A892;
		margin-left: 100px;
		margin-bottom: 0px;
		
	}
	.num{
	 font-weight: bold;
	 font-size: 45px;
	 text-color: #05A892;
	 text-align: center;
	 position: relative;
	 top: -25px;
	}
	.numtext{
		text-align:center;
		position: relative;
	 top: -70px;
	}
	 
	 
	 		.stats-section{
			float: left;
			height: 100%;
		}
		
		.stats-menu{
		font-weight:bold;
			font-size:90%;
			padding: 13px 15px 0 15px;
			height:120px;
			
		}
		
		.stat1{
			margin-left: 45px;
		}
		.after-text{
		font-weight:bold; 
		font-family:ZingSansRustLDemo-Base; 
		font-size: 20px; 
		text-align:center;
		}

		#page-wh{
		width: 100%;
		height: auto;
		margin: 0 auto;

		}
		.sec{
			float: left;
			height: 100%;
		}
		
		
		.stat2{
			margin-left: 45px;
		}
		.first{
			margin-left: 100px;
		}
.close-image1{

	background-image: url("images/schol.jpg");
	display: block;
	padding: 15px 25px;
	cursor: pointer;
	outline: none;
	position: relative;
	left: 60px;
	border-bottom: 2px solid #05A892;
	height: 150px;
	width: 280px;
	
}
.close-image2{

	background-image: url("images/volunteer.jpg");
	display: block;
	padding: 15px 25px;
	cursor: pointer;
	outline: none;
	position: relative;
	left: 60px;
	border-bottom: 2px solid #05A892;
	height: 150px;
	width: 280px;
	
}
.close-image3{

	background-image: url("images/medical.jpg");
	display: block;
	padding: 15px 25px;
	cursor: pointer;
	outline: none;
	position: relative;
	left: 60px;
	border-bottom: 2px solid #05A892;
	height: 150px;
	width: 280px;
	
}
.works{
	text-align: center;
	font-weight: bold;
	font-size:18px;
	position: relative;
	top:140px;
}
#adopt{
	font-size:24px;
	text-color: 4f364e;
	
}
#header1{
		 width: 100%;
		height: 300px;
		position:relative;
		top: 380px;
		 }
		 
		.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 input[type="password"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
</style>		
	-->
<script type="text/javascript">


var counter = 1;
	setInterval(function(){
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if(counter > 4){
			counter = 1;
	}
}, 5000);


/*
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
*/



// Get the modal
var modal_ = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal_.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal_.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

</script>
</body>
</html>