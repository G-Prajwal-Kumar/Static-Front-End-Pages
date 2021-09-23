<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Shutter UP">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Prajwal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shutter Up</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<script src="https://kit.fontawesome.com/e21b3a0845.js" crossorigin="anonymous"></script>	

</head>
<body>
<div id="maindiv">
	<div id="nav">
		<a id="logoa" href="index.html"><h2 id="logo"><b>Shutter</b> Up</h2></a>
		<div id="navitems">
			<a href="#" id="navitems1">HOME</a>
			<a href="#" id="navitems1">SHOP</a>
			<a href="E:\IOE\Nxt Ways\Day 7\Day7\Prajwal_Task1_Day7.html" id="navitems1">BLOG</a>
			<a href="#" id="navitems1">ABOUT</a>
			<a href="#" id="navitems1">CONTACT</a>
		</div>
		<div id="icons">
		<i class="bi bi-search" onclick="searchopen()"></i>
		<i class="bi bi-heart" onclick="wishopen()"></i>
		<i class="bi bi-cart3" onclick="cartopen()"></i>
		</div>
		<div id="cart">
			<div id="cartitem">
				<i class="bi bi-x-lg" onclick="cartclose()"></i>
				<h2 id="carthd">Cart</h2>
			</div>
		</div>
		<div id="wish">
			<div id="wishitem">
				<i class="bi bi-x-lg" onclick="wishclose()"></i>
				<h2 id="wishhd">Wishlist</h2>
			</div>
		</div>
		<div id="search">
			<div id="searchbar">
				<i class="bi bi-x-lg" onclick="searchclose()"></i>
				<h2 id="searchhd">Search</h2>
				<input type="text" class="form-control" id="srch" placeholder="Type Here">
			</div>
			<div id="searchresults">
				<p id="txt">Results :</p>
			</div>
		</div>
	</div>


	<div id="slider">
		<div id="slides">
			
			<input type="radio" name="radio-btn" checked="checked" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">

			<div class="slide first">
				<img src="slide1.jpg" alt="">
			</div>
			<div class="slide">
				<img src="slide2.jpg" alt="">
			</div>
			<div class="slide">
				<img src="slide3.jpg" alt="">
			</div>
			<div class="slide">
				<img src="slide4.jpg" alt="">
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


	<div id="maincategories">
		<div id="cats">
			<h3 id="txt2">*Category 1*</h3>
		</div>
		<div id="cats">
			<h3 id="txt2">*Category 2*</h3>
		</div>
		<div id="cats">
			<h3 id="txt2">*Category 3*</h3>
		</div>
		<div id="cats">
			<h3 id="txt2">*Category 4*</h3>
		</div>
	</div>



	<!-- PDT VIEW START -->



	<div id="canonpdt1view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt1/1a.png" id="canonpdt1img">
					<img src="images/canon/pdt1/1b.png">
					<img src="images/canon/pdt1/1c.png">
					<img src="images/canon/pdt1/1d.png">
					<img src="images/canon/pdt1/1e.png">
					<img src="images/canon/pdt1/1f.png">
					<img src="images/canon/pdt1/1g.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt1a1()" id="listbtn">
						<img src="images/canon/icons/pdt1/1a.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a2()" id="listbtn">
						<img src="images/canon/icons/pdt1/1b.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a3()" id="listbtn">
						<img src="images/canon/icons/pdt1/1c.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a4()" id="listbtn">
						<img src="images/canon/icons/pdt1/1d.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a5()" id="listbtn">
						<img src="images/canon/icons/pdt1/1e.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a6()" id="listbtn">
						<img src="images/canon/icons/pdt1/1f.png" id="imgslist">
					</button>
					<button onclick="canonpdt1a7()" id="listbtn">
						<img src="images/canon/icons/pdt1/1g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens</h3>
					<h5 style="margin-top: ">₹30,999.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt1close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>
						Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz
					</li>
					<li>
						ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)
					</li>
					<li>
						Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography)
					</li>
					<li>
						Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)
					</li>
					<li>
						Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot)
					</li>
					<li>
						Lens Mount: EF-S mount compatible with all EF and EF-S lenses (crop-sensor mount versatile and compact, especially when used with EF-S lenses)
					</li>
					<li>
						Country of Origin: Taiwan
					</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer</td>
						<td>‎Canon Inc., No.18, Chen Kuo Road, Tan Tzu Dist, Taichung City, Taiwan</td>
					</tr>
					<tr>
						<td>Model	</td>
						<td>Eos 1500D</td>
					</tr>
					<tr>
						<td>Product Dimensions	</td>
						<td>22 x 16.5 x 14 cm; 1.24 Kilograms</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 D batteries required.</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>Eos 1500D</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>EF S18-55 IS II,Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Digital Storage Capacity	‎</td>
						<td>64 GB</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>Full hd (1920x1080)</td>
					</tr>
					<tr>
						<td>Compatible Devices	‎</td>
						<td>Smartphone,Connect Station,wi-fi printers.</td>
					</tr>
					<tr>
						<td>Special Features</td>
						<td>Built-in monaural microphone, Sound-recording level adjustable, wind filter provided</td> 
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EF S18-55 IS II,Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>6</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3x</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>1080p Full HD</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24.1 MP</td>
					</tr>
					<tr>
						<td>Horizontal Resolution	‎</td>
						<td>1920 Pixels</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.1 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>1080 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>18 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Batteries Included</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Batteries Required</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Battery Cell Composition</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed</td>
						<td>3 fps</td>
					</tr>
					<tr>
						<td>Connector Type</td>
						<td>Wi-Fi</td>
					</tr>
					<tr>
						<td>Device interface - primary</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Polycarbonate</td>
					</tr>
					<tr>
						<td>Form Factor</td>
						<td>Hand held</td>
					</tr>
					<tr>
						<td>Flash Modes Description</td>
						<td>Compatible with EX-series Speedlites</td>
					</tr>
					<tr>
						<td>Lens Type</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Mounting Type</td>
						<td>Canon EF-S</td>
					</tr>
					<tr>
						<td>Viewfinder Type</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Self Timer</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes External Memory</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer</td>
						<td>Canon Inc.</td>
					</tr>
					<tr>
						<td>Country of Origin</td>
						<td>Taiwan</td>
					</tr>
					<tr>
						<td>Imported By</td>
						<td>No.18, Chen Kuo Road, Tan Tzu Dist, Taichung City, Taiwan</td>
					</tr>
					<tr>
						<td>Item Weight</td>
						<td>1 kg 240 g</td>
					</tr>
				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				


				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simi">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simi">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simi">

					<div id="pdt2" class="simipdt firstsimi">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/canon/img/5a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,71,872.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/canon/img/6a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="canonpdt6open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simi"></div>
						<div class="auto-btn2simi"></div>
						<div class="auto-btn3simi"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simi" class="manual-btnsimi"></label>
						<label for="radio2simi" class="manual-btnsimi"></label>
						<label for="radio3simi" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt2view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt2/2a.png" id="canonpdt2img">
					<img src="images/canon/pdt2/2b.png">
					<img src="images/canon/pdt2/2c.png">
					<img src="images/canon/pdt2/2d.png">
					<img src="images/canon/pdt2/2e.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt2a1()" id="listbtn">
						<img src="images/canon/icons/pdt2/2a.png" id="imgslist">
					</button>
					<button onclick="canonpdt2a2()" id="listbtn">
						<img src="images/canon/icons/pdt2/2b.png" id="imgslist">
					</button>
					<button onclick="canonpdt2a3()" id="listbtn">
						<img src="images/canon/icons/pdt2/2c.png" id="imgslist">
					</button>
					<button onclick="canonpdt2a4()" id="listbtn">
						<img src="images/canon/icons/pdt2/2d.png" id="imgslist">
					</button>
					<button onclick="canonpdt2a5()" id="listbtn">
						<img src="images/canon/icons/pdt2/2e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h3>
					<h5 style="margin-top: ">₹51,499.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt2close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>DIGIC 8 PROCESSOR</li>
					<li>APS-C Approx 24.1 mp CMOS Sensor</li>
					<li>9-point AF during optica viewfinder shooting</li>
					<li>Dual Pixel CMOS AF</li>
					<li>Eye detection AF</li>
					<li>Doesn’t include memory card and carry case / camera bag</li>
					<li>4K Movie, Closest Focusing Distance (cm): 25</li>
					<li>4K time-lapse movie</li>
					<li>Movie Digital IS</li>
					<li>Country of Origin: Taiwan</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon Inc., No.18, Chen Kuo Road, Tan Tzu Dist, Taichung City, Taiwan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>EOS 200D II</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>EOS</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2019</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>22 x 17 x 14 cm; 1.22 Kilograms</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium Metal batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>EOS 200D II</td>
					</tr>
					<tr>
						<td>Memory Storage Capacity	‎</td>
						<td>16 GB</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>EF S18-45 IS II Lens, Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>Secure Digital Card</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Eye Detection Auto Focus</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EF S18-45 IS II Lens, Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Fully articulated LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>4:3</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24.1 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.1 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>18 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>
						<td>230 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>5 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Wi-Fi</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen, Dial, Buttons</td>
					</tr>
					<tr>
						<td>Material	‎</td>
						<td>Polycarbonate resin</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Compatible with EX-series Speedlites</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Canon EF-S</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes AC Adapter</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon Inc.</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>Taiwan</td>
					</tr>
					<tr>
						<td>Imported By	‎</td>
						<td>No.18, Chen Kuo Road, Tan Tzu Dist, Taichung City, Taiwan</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>1 kg 220 g</td>
					</tr>
				</table>	

				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>

				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt2" checked="checked">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt2">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt2">

					<div id="pdt1" class="simipdt firstsimicpdt2">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/canon/img/5a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,71,872.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt5open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/canon/img/7a.png">
						<h4 id="pdtname">Canon Full Frame Mirrorless EOS R5 Mirrorless Camera Body  (Black)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹3,39,995.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt7open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt2"></div>
						<div class="auto-btn2simicpdt2"></div>
						<div class="auto-btn3simicpdt2"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt2" class="manual-btnsimi"></label>
						<label for="radio2simicpdt2" class="manual-btnsimi"></label>
						<label for="radio3simicpdt2" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt3view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt3/3a.png" id="canonpdt3img">
					<img src="images/canon/pdt3/3b.png">
					<img src="images/canon/pdt3/3c.png">
					<img src="images/canon/pdt3/3d.png">
					<img src="images/canon/pdt3/3e.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt3a1()" id="listbtn">
						<img src="images/canon/icons/pdt3/3a.png" id="imgslist">
					</button>
					<button onclick="canonpdt3a2()" id="listbtn">
						<img src="images/canon/icons/pdt3/3b.png" id="imgslist">
					</button>
					<button onclick="canonpdt3a3()" id="listbtn">
						<img src="images/canon/icons/pdt3/3c.png" id="imgslist">
					</button>
					<button onclick="canonpdt3a4()" id="listbtn">
						<img src="images/canon/icons/pdt3/3d.png" id="imgslist">
					</button>
					<button onclick="canonpdt3a5()" id="listbtn">
						<img src="images/canon/icons/pdt3/3e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h3>
					<h5 style="margin-top: ">₹83,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt3close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>
						Sensor: APS-C CMOS Sensor with 24.2 MP (high resolution for large prints and image cropping)
					</li>
					<li>
						ISO: 100-12800 sensitivity range (critical for obtaining grain-free pictures, especially in low light); Continuous Shots: 7fps shooting
					</li>
					<li>
						Image Processor: DIGIC 6 with 45 autofocus points (important for speed and accuracy of autofocus and burst photography)
					</li>
					<li>
						Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)
					</li>
					<li>
						Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot)
					</li>
					<li>
						Lens Mount: EF-S mount compatible with all EF and EF-S lenses (crop-sensor mount versatile and compact, especially when used with EF-S lenses)
					</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon, 1860-180-3366</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>1263C005</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2016</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>17.78 x 24.38 x 13.46 cm; 1.72 Kilograms</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>1263C005</td>
					</tr>
					<tr>
						<td>Included Memory Card Size	‎</td>
						<td>16 GB</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>EF S18-55mm Lens, Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Card Reader	‎</td>
						<td>Secure Digital Card</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>AV Port</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>24.2</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Eye Detection Auto Focus</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Canon 80D Camera, EF S18-55mm Lens, Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Fully articulated LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Colour Screen	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Supported Image Type	‎</td>
						<td>RAW, JPEG</td>
					</tr>

					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>1 x</td>
					</tr>
					<tr>
						<td>Digital Zoom	‎</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>Unknown</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>1080p Full HD</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4000 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>00000000.0001 Seconds</td>
					</tr>
					<tr>
						<td>Min Aperture	‎</td>
						<td>38</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>18 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>
						<td>230 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Total Usb Ports	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Wi-Fi</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Flash Modes </td>
						<td>Description	‎Compatible with EX-series Speedlites</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Canon EF-S</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Contains Liquid Contents	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes AC Adapter	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>1 kg 720 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simicpdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt3">

					<div id="pdt1" class="simipdt firstsimicpdt3">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/canon/img/5a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,71,872.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt5open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/canon/img/8a.png">
						<h4 id="pdtname">Canon EOS M6 Mark II 32.5MP + EF-M 15-45mm f/3.5-6.3 is STM Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹75,250.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt8open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt3"></div>
						<div class="auto-btn2simicpdt3"></div>
						<div class="auto-btn3simicpdt3"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt3" class="manual-btnsimi"></label>
						<label for="radio2simicpdt3" class="manual-btnsimi"></label>
						<label for="radio3simicpdt3" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt4view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt4/4a.png" id="canonpdt4img">
					<img src="images/canon/pdt4/4b.png">
					<img src="images/canon/pdt4/4c.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt4a1()" id="listbtn">
						<img src="images/canon/icons/pdt4/4a.png" id="imgslist">
					</button>
					<button onclick="canonpdt4a2()" id="listbtn">
						<img src="images/canon/icons/pdt4/4b.png" id="imgslist">
					</button>
					<button onclick="canonpdt4a3()" id="listbtn">
						<img src="images/canon/icons/pdt4/4c.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h3>
					<h5 style="margin-top: ">₹1,15,000.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt4close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>26.2MP full-frame CMOS sensor</li>
					<li>Dual pixel CMOS AF</li>
					<li>45-point all cross-type AF up to 6.5fps continuous shooting</li>
					<li>ISO: 100 to 40000 (expandable to 102400)</li>
					<li>GPS, Wi-Fi, NFC and Bluetooth low energy</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon, 1860-180-3366</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2017</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>7.5 x 14.4 x 11.1 cm; 765 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>Secure Digital Card</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>26.2</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>E-TTL II Auto Flash, Metered Manual</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EOS 6D Body, Battery Pack, Battery Charger, Eye Cup</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Fully articulated LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>26.2</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>1.50:1</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>1/30</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>
						<td>7.2 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>6.5 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi, NFC</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Automatic</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>EF mount</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes AC Adapter	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>India</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>765 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simicpdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt4">

					<div id="pdt1" class="simipdt firstsimicpdt4">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/canon/img/5a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,71,872.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/canon/img/6a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="canonpdt6open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt4"></div>
						<div class="auto-btn2simicpdt4"></div>
						<div class="auto-btn3simicpdt4"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt4" class="manual-btnsimi"></label>
						<label for="radio2simicpdt4" class="manual-btnsimi"></label>
						<label for="radio3simicpdt4" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt5view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt5/5a.png" id="canonpdt5img">
					<img src="images/canon/pdt5/5b.png">
					<img src="images/canon/pdt5/5c.png">
					<img src="images/canon/pdt5/5d.png">
					<img src="images/canon/pdt5/5e.png">
					<img src="images/canon/pdt5/5f.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt5a1()" id="listbtn">
						<img src="images/canon/icons/pdt5/5a.png" id="imgslist">
					</button>
					<button onclick="canonpdt5a2()" id="listbtn">
						<img src="images/canon/icons/pdt5/5b.png" id="imgslist">
					</button>
					<button onclick="canonpdt5a3()" id="listbtn">
						<img src="images/canon/icons/pdt5/5c.png" id="imgslist">
					</button>
					<button onclick="canonpdt5a4()" id="listbtn">
						<img src="images/canon/icons/pdt5/5d.png" id="imgslist">
					</button>
					<button onclick="canonpdt5a5()" id="listbtn">
						<img src="images/canon/icons/pdt5/5e.png" id="imgslist">
					</button>
					<button onclick="canonpdt5a6()" id="listbtn">
						<img src="images/canon/icons/pdt5/5f.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h3>
					<h5 style="margin-top: ">₹1,71,872.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt5close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>26.2MP full-frame CMOS sensor</li>
					<li>Dual pixel CMOS AF</li>
					<li>45-point all cross-type AF up to 6.5fps continuous shooting</li>
					<li>ISO: 100 to 40000 (expandable to 102400)</li>
					<li>GPS, Wi-Fi, NFC and Bluetooth low energy</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Canon</td>
					</tr>

					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon, 1860-180-3366</td>
					</tr>	
					<tr>
						<td>Model	‎</td>
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2017</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>7.5 x 14.4 x 11.1 cm; 765 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>EF24-105mm Lens, Strap,Eyecup, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>Secure Digital Card</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>26.2</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>E-TTL II Auto Flash, Metered Manual</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EOS 6D Body, EF24-105mm f/4L IS II USM, Battery Pack, Battery Charger, Lens Cap, Eye Cup</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Fully articulated LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>4 x</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4000 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>1/30</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>
						<td>7.2 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>6.5 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Wi-Fi, NFC</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Flash Modes </td>
						<td>Description	‎Automatic</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Item Weight</td>
						<td>765 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt5">

					<div id="pdt1" class="simipdt firstsimicpdt5">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/canon/img/7a.png">
						<h4 id="pdtname">Canon Full Frame Mirrorless EOS R5 Mirrorless Camera Body  (Black)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹3,39,995.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt7open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt5"></div>
						<div class="auto-btn2simicpdt5"></div>
						<div class="auto-btn3simicpdt5"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt5" class="manual-btnsimi"></label>
						<label for="radio2simicpdt5" class="manual-btnsimi"></label>
						<label for="radio3simicpdt5" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt6view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt6/6a.png" id="canonpdt6img">
					<img src="images/canon/pdt6/6b.png">
					<img src="images/canon/pdt6/6c.png">
					<img src="images/canon/pdt6/6d.png">
					<img src="images/canon/pdt6/6e.png">
					<img src="images/canon/pdt6/6f.png">
					<img src="images/canon/pdt6/6g.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt6a1()" id="listbtn">
						<img src="images/canon/icons/pdt6/6a.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a2()" id="listbtn">
						<img src="images/canon/icons/pdt6/6b.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a3()" id="listbtn">
						<img src="images/canon/icons/pdt6/6c.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a4()" id="listbtn">
						<img src="images/canon/icons/pdt6/6d.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a5()" id="listbtn">
						<img src="images/canon/icons/pdt6/6e.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a6()" id="listbtn">
						<img src="images/canon/icons/pdt6/6f.png" id="imgslist">
					</button>
					<button onclick="canonpdt6a7()" id="listbtn">
						<img src="images/canon/icons/pdt6/6g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h3>
					<h5 style="margin-top: ">₹2,32,540.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt6close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>Product 1: Sensor: Full frame CMOS Sensor with 26.2 MP (brilliant resolution for large prints and image cropping)</li>
					<li>Product 1: ISO: 100-40000 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</li>
					<li>Product 1: Image Processor: DIGIC 7 with 45 autofocus points (important for speed and accuracy of autofocus and burst photography)</li>
					<li>Product 1: Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</li>
					<li>Product 2: High speed with large aperture</li>
					<li>Product 2: Hsm (hypersonic motor) and inner focusing system</li>
					<li>Product 2: Accessories include: lens hood (lh730-03), carrying case</li>
					<li>Product 2: 35 Mm focal length, lens not zoomable</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>	
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎	</td>
						<td>Canon, 1860-180-3366</td>
					</tr>
					<tr>
						<td>Model	‎</td>	
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Model Year</td>
						<td>2017</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number‎</td>
						<td>EOS 6D Mark II</td>
					</tr>
					<tr>
						<td>Flash	‎</td>	
						<td>EF24-105mm Lens, Strap,Eyecup, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>Secure Digital Card</td>
					</tr>
					<tr>
						<td>Resolution	‎</td	>
						<td>26.2</td>
					</tr>
					<tr>
						<td>Special Features		‎</td>
						<td>E-TTL II Auto Flash, Metered Manual</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EOS 6D Body, EF24-105mm f/4L IS II USM, Battery Pack, Battery Charger, Lens Cap, Eye Cup</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Fully articulated LCD</td>
					</tr>
					<tr>
						<td>Standing screen	display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎	</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎	</td>
						<td>4 x</td>
					</tr>
					<tr>
						<td>Max Resolution	‎	</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>26.2 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4000 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>1/30</td>
					</tr>
					<tr>
						<td>Min Focal Length		‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>	
						<td>7.2 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>6.5 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎	</td>
						<td>Wi-Fi, NFC</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Automatic</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Auto Focus‎	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer‎	</td>
						<td>Canon</td>
					</tr>



				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt6">

					<div id="pdt1" class="simipdt firstsimicpdt6">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/canon/img/8a.png">
						<h4 id="pdtname">Canon EOS M6 Mark II 32.5MP + EF-M 15-45mm f/3.5-6.3 is STM Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹75,250.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt8open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt6"></div>
						<div class="auto-btn2simicpdt6"></div>
						<div class="auto-btn3simicpdt6"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt6" class="manual-btnsimi"></label>
						<label for="radio2simicpdt6" class="manual-btnsimi"></label>
						<label for="radio3simicpdt6" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt7view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt7/7a.png" id="canonpdt7img">
					<img src="images/canon/pdt7/7b.png">
					<img src="images/canon/pdt7/7c.png">
					<img src="images/canon/pdt7/7d.png">
					<img src="images/canon/pdt7/7e.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt7a1()" id="listbtn">
						<img src="images/canon/icons/pdt7/7a.png" id="imgslist">
					</button>
					<button onclick="canonpdt7a2()" id="listbtn">
						<img src="images/canon/icons/pdt7/7b.png" id="imgslist">
					</button>
					<button onclick="canonpdt7a3()" id="listbtn">
						<img src="images/canon/icons/pdt7/7c.png" id="imgslist">
					</button>
					<button onclick="canonpdt7a4()" id="listbtn">
						<img src="images/canon/icons/pdt7/7d.png" id="imgslist">
					</button>
					<button onclick="canonpdt7a5()" id="listbtn">
						<img src="images/canon/icons/pdt7/7e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon Full Frame Mirrorless EOS R5 Mirrorless Camera Body  (Black)</h3>
					<h5 style="margin-top: ">₹3,39,995.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt7close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon Full Frame Mirrorless EOS R5 Mirrorless Camera Body  (Black)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>With this Canon camera, you can kickstart your photography journey. </li>
					<li>Its 45 MP full-frame CMOS sensor will help you take detailed photos and videos. </li>
					<li>This camera can detect your subject’s body, face, or eyes and also ensures that it maintains high precision focus and tracking. </li>
					<li>You can also enjoy high-speed continuous shooting with this camera. </li>
					<li>With this camera, you can bring your creativity to life.</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Model Number	</td>
						<td>EOS R5</td>
					</tr>
					<tr>
						<td>Series	</td>
						<td>Full Frame Mirrorless</td>
					</tr>
					<tr>
						<td>Model Name	</td>
						<td>Digital Camera EOS R5</td>
					</tr>
					<tr>
						<td>SLR Variant	</td>
						<td>Body</td>
					</tr>
					<tr>
						<td>Brand Color	</td>
						<td>Black</td>
					</tr>
					<tr>
						<td>Type	</td>
						<td>Mirrorless</td>
					</tr>
					<tr>
						<td>Color	</td>
						<td>Black</td>
					</tr>
					<tr>
						<td>Effective Pixels	</td>
						<td>45 MP</td>
					</tr>
					<tr>
						<td>Tripod Socket	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Wifi	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>GPS	</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Face Detection	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Temperature</td>
						<td>0 - 40</td>
					</tr>
					<tr>
						<td>Image Processor	</td>
						<td>DIGIC X</td>
					</tr>
					<tr>
						<td>Ports	</td>
						<td>USB Type-C, HDMI Micro Out Terminal Type D, Microphone and Headphone Jack, Remote Control Terminal</td>
					</tr>
					<tr>
						<td>Accessory Shoe </td>
						<td>Hot Shoe</td>
					</tr>
					<tr>
						<td>sensor Type	</td>
						<td>CMOS</td>
					</tr>
					<tr>
						<td>Image Sensor Size </td>
						<td>36 x 24</td>
					</tr>
					<tr>
						<td>ISO Rating</td>
						<td>Stills: 100-51 200 (L:50, H:102 400), Movie: 100-25 600 (H:51,200), RAW & HDR PQ Movies: 100-25 600, Canon Log Movies: ISO 400-25 600 (H:51 200)</td>
					</tr>
					<tr>
						<td>View Finder	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Viewfinder Coverage	</td>
						<td>100%</td>
					</tr>
					<tr>
						<td>Viewfinder Magnification	</td>
						<td>Magnification/Angle of View: Approx. 0.76x/Approx. 35.5 Degree</td>
					</tr>
					<tr>
						<td>Viewpoint Dioptric Adjustment	</td>
						<td>Approx. -4.0 to +2.0 m-1 (dpt)</td>
					</tr>
					<tr>
						<td>Viewfinder Eye Point	</td>
						<td>23 mm</td>
					</tr>
					<tr>
						<td>AE Lock/Exposure Lock	</td>
						<td>Auto: AE Lock Takes Effect When Focus is Achieved, Manual: By AE Lock Button in P, AV, FV, TV and M Modes</td>
					</tr>
					<tr>
						<td>Exposure Compensation	</td>
						<td>±3 Stops in 1/3-stop or 1/2-stop Increments</td>
					</tr>
					<tr>
						<td>Manual Exposure	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Shutter Speed	</td>
						<td>1/8000 - 30 sec</td>
					</tr>
					<tr>
						<td>Shutter Steps	</td>
						<td>Mechanical Shutter and Electronic 1st Curtain: 12, Electronic Shutter: </td>
					</tr>
					<tr>
						<td>Self-timer	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Image Stablizer	</td>
						<td>Upto 8 Stops</td>
					</tr>
					<tr>
						<td>Continuous Shots	</td>
						<td>Upto 20 FPS</td>
					</tr>
					<tr>
						<td>Shutter Type	</td>
						<td>Electronically Controlled Focal-plane Shutter</td>
					</tr>
					<tr>
						<td>Built-in Flash	</td>
						<td>No</td>
					</tr>
					<tr>
						<td>External Flash	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Image Format	</td>
						<td>JPEG, HEIF, RAW, DPRAW, C-RAW</td>
					</tr>
					<tr>
						<td>Aspect Ratio	</td>
						<td>16:9</td>
					</tr>
					<tr>
						<td>Live View Shooting	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>HDR Support	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Other Image Features	</td>
						<td>Eye, Face and Head Detection</td>
					</tr>
					<tr>
						<td>Video Resolution	</td>
						<td>8192 x 4320</td>
					</tr>
					<tr>
						<td>Video Quality	</td>
						<td>8K</td>
					</tr>
					<tr>
						<td>Video Format	</td>
						<td>MP4 Video: 8K DCI/UHD (17:9/16:9) 4K DCI/UHD (17:9/16:9), Full HD</td>
					</tr>
					<tr>
						<td>Display Type	</td>
						<td>TFT Color, Liquid-crystal Monitor</td>
					</tr>
					<tr>
						<td>Display Size	</td>
						<td>3.2 inch</td>
					</tr>
					<tr>
						<td>Display Resolution	</td>
						<td>2100000 dots</td>
					</tr>
					<tr>
						<td>Touch Screen	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Included	</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Width	</td>
						<td>138.5 mm</td>
					</tr>
					<tr>
						<td>Height	</td>
						<td>97.5 mm</td>
					</tr>
					<tr>
						<td>Depth	</td>
						<td>88 mm</td>
					</tr>
					<tr>
						<td>Weight	</td>
						<td>650 g</td>
					</tr>
				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt7">

					<div id="pdt1" class="simipdt firstsimicpdt7">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/canon/img/9a.png">
						<h4 id="pdtname">Canon EOS M50 24.1MP Mirrorless Camera (Black) with EF-M 15-45 is STM Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹80,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt9open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
							
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt7"></div>
						<div class="auto-btn2simicpdt7"></div>
						<div class="auto-btn3simicpdt7"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt7" class="manual-btnsimi"></label>
						<label for="radio2simicpdt7" class="manual-btnsimi"></label>
						<label for="radio3simicpdt7" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt8view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt8/8a.png" id="canonpdt8img">
					<img src="images/canon/pdt8/8b.png">
					<img src="images/canon/pdt8/8c.png">
					<img src="images/canon/pdt8/8d.png">
					<img src="images/canon/pdt8/8e.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt8a1()" id="listbtn">
						<img src="images/canon/icons/pdt8/8a.png" id="imgslist">
					</button>
					<button onclick="canonpdt8a2()" id="listbtn">
						<img src="images/canon/icons/pdt8/8b.png" id="imgslist">
					</button>
					<button onclick="canonpdt8a3()" id="listbtn">
						<img src="images/canon/icons/pdt8/8c.png" id="imgslist">
					</button>
					<button onclick="canonpdt8a4()" id="listbtn">
						<img src="images/canon/icons/pdt8/8d.png" id="imgslist">
					</button>
					<button onclick="canonpdt8a5()" id="listbtn">
						<img src="images/canon/icons/pdt8/8e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS M6 Mark II 32.5MP + EF-M 15-45mm f/3.5-6.3 is STM Lens</h3>
					<h5 style="margin-top: ">₹75,250.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt8close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS M6 Mark II 32.5MP + EF-M 15-45mm f/3.5-6.3 is STM Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>32.5megapixel APS-C CMOS Sensor + DIGIC 8</li>
					<li>Dual pixel CMOS AF</li>
					<li>30fps RAW burst mode (One -Shot & Servo AF)</li>
					<li>5 481 selectable focus positions</li>
					<li>Eye Detection AF (One-Shot & Servo AF)</li>
					<li>Good close focusing distance of 2.5 m</li>
					<li>4K Video (Uncropped/Cropped)</li>
					<li>Doesn’t include memory card and carry case / camera bag</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon Inc., 3-30-2, Shimomaruko, Ohta-ku, Tokyo 146-8501, Japan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>3611C039-C06</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>Digital Camera</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>16.5 x 16.5 x 13.5 cm; 1.05 Kilograms</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 D batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>3611C039-C06</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Eye Detection Auto Focus</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Camera, Battery Charger, AC Cable</td>
					</tr>
					<tr>
						<td>Number Of Items</td>
						<td>4</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>32.5 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>15 Millimeters</td>
					</tr>
					<tr>
						<td>Audio Input</td>
						<td>Microphone</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>30 fps</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>Mirrorless</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Compatible with EX-series Speedlites</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>EF-M mount</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon Inc.</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>1 kg 50 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt8">

					<div id="pdt1" class="simipdt firstsimicpdt8">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/canon/img/6a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="canonpdt6open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt8"></div>
						<div class="auto-btn2simicpdt8"></div>
						<div class="auto-btn3simicpdt8"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt8" class="manual-btnsimi"></label>
						<label for="radio2simicpdt8" class="manual-btnsimi"></label>
						<label for="radio3simicpdt8" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="canonpdt9view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/canon/pdt9/9a.png" id="canonpdt9img">
					<img src="images/canon/pdt9/9b.png">
					<img src="images/canon/pdt9/9c.png">
					<img src="images/canon/pdt9/9d.png">
					<img src="images/canon/pdt9/9e.png">
					<img src="images/canon/pdt9/9f.png">
				</div>
				<div id="imglist">
					<button onclick="canonpdt9a1()" id="listbtn">
						<img src="images/canon/icons/pdt9/9a.png" id="imgslist">
					</button>
					<button onclick="canonpdt9a2()" id="listbtn">
						<img src="images/canon/icons/pdt9/9b.png" id="imgslist">
					</button>
					<button onclick="canonpdt9a3()" id="listbtn">
						<img src="images/canon/icons/pdt9/9c.png" id="imgslist">
					</button>
					<button onclick="canonpdt9a4()" id="listbtn">
						<img src="images/canon/icons/pdt9/9d.png" id="imgslist">
					</button>
					<button onclick="canonpdt9a5()" id="listbtn">
						<img src="images/canon/icons/pdt9/9e.png" id="imgslist">
					</button>
					<button onclick="canonpdt9a6()" id="listbtn">
						<img src="images/canon/icons/pdt9/9f.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Canon EOS M50 24.1MP Mirrorless Camera (Black) with EF-M 15-45 is STM Lens</h3>
					<h5 style="margin-top: ">₹80,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="canonpdt9close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Canon EOS M50 24.1MP Mirrorless Camera (Black) with EF-M 15-45 is STM Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>Sensor: APS-C CMOS sensor with 24.1 MP (high resolution for large prints and image cropping)</li>
					<li>ISO: 100-25600  sensitivity range (critical for obtaining grain-free pictures, especially in low light)</li>
					<li>Image Processor: DIGIC 8 with 143 autofocus points (important for speed and accuracy of autofocus and burst photography)</li>
					<li>Video Resolution: 4K video with fully manual control and selectable frame rates (excellent for precision and high-quality video work)</li>
					<li>Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot)</li>
					<li>Lens Mount: Canon EF-M mount</li>

				
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon, 1860-180-3366</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>2680C011</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>EOS M50</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2018</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>5.84 x 11.68 x 8.89 cm; 388.39 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 D batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>2680C011</td>
					</tr>
					<tr>
						<td>Flash Memory Type	‎</td>
						<td>SDXC</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>Internal</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>AV Port</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>4k uhd (3840x2160)</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Eye Detection Auto Focus, 4K Time Lapse</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>EF M15-45 IS STM Lens, Strap, Battery Charger, Battery Pack, AC Cable</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>12</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>Vari Angle LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Aspect Ratio	‎</td>
						<td>Unknown_aspect_ratio</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>Unknown</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>1,040,000</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.1 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4000 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Aperture	‎</td>
						<td>6.3</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>15 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Wireless Type	‎</td>
						<td>802.11n, 802.11b, 802.11g</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>7.4</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi, NFC</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>Mirrorless</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Compatible with EX-series Speedlites</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Canon EF</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Electronic</td>
					</tr>
					<tr>
						<td>Has Audio Recording	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Supports Bluetooth Technology	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Canon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>388 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simicpdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simicpdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simicpdt9">

					<div id="pdt1" class="simipdt firstsimicpdt9">
						<img id="imgs" src="images/canon/img/1a.png">
						<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/canon/img/2a.png">
						<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/canon/img/3a.png">
						<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/canon/img/4a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/canon/img/6a.png">
						<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="canonpdt6open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop Canon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simicpdt9"></div>
						<div class="auto-btn2simicpdt9"></div>
						<div class="auto-btn3simicpdt9"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simicpdt9" class="manual-btnsimi"></label>
						<label for="radio2simicpdt9" class="manual-btnsimi"></label>
						<label for="radio3simicpdt9" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>



	<div id="nikonpdt1view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt1/1a.png" id="nikonpdt1img">
					<img src="images/nikon/pdt1/1b.png">
					<img src="images/nikon/pdt1/1c.png">
					<img src="images/nikon/pdt1/1d.png">
					<img src="images/nikon/pdt1/1e.png">
					<img src="images/nikon/pdt1/1f.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt1a1()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt1a2()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt1a3()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt1a4()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt1a5()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1e.png" id="imgslist">
					</button>
					<button onclick="nikonpdt1a6()" id="listbtn">
						<img src="images/nikon/icons/pdt1/1f.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon D5600 with AF-P 18-55 mm + AF-P 70-300 mm VR Kit</h3>
					<h5 style="margin-top: ">₹66,700.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt1close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon D5600 with AF-P 18-55 mm + AF-P 70-300 mm VR Kit</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>Sensor: APS-C CMOS Sensor with 24.2 MP (high resolution for large prints and image cropping)</li>
					<li>ISO: 100-25600 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</li>
					<li>Image Processor: Expeed 4 with 39 autofocus points (important for speed and accuracy of autofocus and burst photography)</li>
					<li>Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</li>
					<li>Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot)</li>
					<li>Lens Mount: Nikon F mount</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation, Nikon Corporation Shinagawa Intercity Tower C, 2-15-3, Konan, Minato-Ku,Tokyo 106-6290 Japan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>D5600</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>Nikon D5600 + 18-55mm lens + 70-300mm lens</td>
					</tr>
					<tr>
						<td>Product Dimensions</td>
						<td>7 x 12.4 x 9.7 cm; 465 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>D5600</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>Bluetooth 4.0</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>1920 x 1080</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Special effects modes (night vision; super vivid; pop; photo illustration; toy camera effect; miniature effect; selective color; silhouette; high key; low key)</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Nikon Digital Camera D5600 BK In 18-55 VR Kit,DK-25 rubber eyecup, BF-1B body cap, EN-EL14a rechargeable Li-ion battery (with terminal cover), AN-DC3 strap, MH-24 battery charger</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>1080p Full HD</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/4000 to 30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>18 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>5 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Wi-Fi</td>
					</tr>
					<tr>
						<td>Material	‎</td>
						<td>Plastic</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Standard</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Nikon F</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>Japan</td>
					</tr>
					<tr>
						<td>Imported By	‎</td>
						<td>Nikon India PVT.LTD. Plot No: 71,Sector 32, Institutional Area, Gurgaon-122001, Haryana, India.Tel No: 1800-12-7346</td>
					</tr>
					<tr>
						<td>Item Weight</td>
						<td>465 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				


				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1siminpdt1">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt1">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt1">

					<div id="pdt2" class="simipdt firstsiminpdt1">
						<img id="imgs" src="images/nikon/img/2a.png">
						<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>


					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt1"></div>
						<div class="auto-btn2siminpdt1"></div>
						<div class="auto-btn3siminpdt1"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt1" class="manual-btnsimi"></label>
						<label for="radio2siminpdt1" class="manual-btnsimi"></label>
						<label for="radio3siminpdt1" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt2view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt2/2a.png" id="nikonpdt2img">
					<img src="images/nikon/pdt2/2b.png">
					<img src="images/nikon/pdt2/2c.png">
					<img src="images/nikon/pdt2/2d.png">
					<img src="images/nikon/pdt2/2e.png">
					<img src="images/nikon/pdt2/2f.png">
					<img src="images/nikon/pdt2/2g.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt2a1()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a2()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a3()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a4()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a5()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2e.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a6()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2f.png" id="imgslist">
					</button>
					<button onclick="nikonpdt2a7()" id="listbtn">
						<img src="images/nikon/icons/pdt2/2g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h3>
					<h5 style="margin-top: ">₹1,15,450.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt2close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					
					<li>21 MP, 4K UHD, Wi-Fi, Bluetooth, 3.2" Tilt able Touch Screen</li>
					<li>EH-5c AC adapter; requires EP-5B power connector (available separately)</li>
					<li>Bluetooth Specification Version 4.1</li>
					<li>The D7500 will always deliver reliable and unparalleled performance with every shot</li>
					<li>Dust-reduction system: Image sensor cleaning, Image Dust Off reference data (Capture NX-D software required), Exposure lock: Luminosity locked at detected value</li>
					<li>Country of Origin: Japan</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation, Nikon Corporation Shinagawa Intercity Tower C, 2-15-3, Konan, Minato-Ku,Tokyo 106-6290 Japan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>1582</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>D7500</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2017</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>31.8 x 15.2 x 21.6 cm; 752.96 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 D batteries required. (included)</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>AV Port</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Special effects modes (night vision; super vivid; pop; photo illustration; toy camera effect; miniature effect; selective color;</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>D7500 Camera, Lens AF-S 18-105mm, Strap, Rechargeable Battery, 16GB Class 10 SD Card, Carry Case, USB Cable, User Manual and Warranty Card</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>8</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Supported Image Type	‎</td>
						<td>RAW, JPEG</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>5 x</td>
					</tr>
					<tr>
						<td>Digital Zoom	‎</td>
						<td>7.8</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>22 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>20.9 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>3712 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 to 30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Aperture	‎</td>
						<td>5.6</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>18 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Voltage	‎</td>
						<td>3.7 Volts</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>8 fps</td>
					</tr>
					<tr>
						<td>Total Usb Ports	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Wide Angle</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Nikon F</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes AC Adapter	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>Japan</td>
					</tr>
					<tr>
						<td>Imported By	‎</td>
						<td>Nikon India PVT.LTD. Plot No: 71,Sector 32, Institutional Area, Gurgaon-122001, Haryana, India.Tel No: 1800-12-7346</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>753 g</td>
					</tr>

				</table>	

				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>

				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt2" checked="checked">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt2">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt2">

					<div id="pdt3" class="simipdt firstsiminpdt2">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/nikon/img/7a.png">
						<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="nikonpdt7open()">
						</div>
					</div>
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt2"></div>
						<div class="auto-btn2siminpdt2"></div>
						<div class="auto-btn3siminpdt2"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt2" class="manual-btnsimi"></label>
						<label for="radio2siminpdt2" class="manual-btnsimi"></label>
						<label for="radio3siminpdt2" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt3view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt3/3a.png" id="nikonpdt3img">
					<img src="images/nikon/pdt3/3b.png">
					<img src="images/nikon/pdt3/3c.png">
					<img src="images/nikon/pdt3/3d.png">
					<img src="images/nikon/pdt3/3e.png">
					<img src="images/nikon/pdt3/3f.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt3a1()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt3a2()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt3a3()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt3a4()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt3a5()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3e.png" id="imgslist">
					</button>
					<button onclick="nikonpdt3a6()" id="listbtn">
						<img src="images/nikon/icons/pdt3/3f.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon D780 DSLR Body with 24-120mm VR Lens</h3>
					<h5 style="margin-top: ">₹1,74,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt3close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon D780 DSLR Body with 24-120mm VR Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>The D780 features 24. 5 MP resolution and robust EXPEED 6 image processing engine</li>
					<li>Capture full frame still images and 4K UHD video</li>
					<li>Wireless connectivity with the easy to use SnapBridge app</li>
					<li>Remoteless long exposures possible</li>
					<li>Kit includes 24-120mm F/4G ED VR Lens</li>
					<li>FOCUS ON PERFECTION</li>
				</ul>
				<h5 style="margin-left: 15px ">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer</td>
						<td>Nikon, Nikon India PVT.LTD. Plot No: 71,Sector 32, Institutional Area, Gurgaon-122001, Haryana, India.Tel No: 1800-12-7346</td>
					</tr>
					<tr>
						<td>Model</td>
						<td>D780</td>
					</tr>
					<tr>
						<td>Model Name</td>
						<td>FX</td>
					</tr>
					<tr>
						<td>Product Dimensions</td>
						<td>7.6 x 14.8 x 11.4 cm; 840 Grams</td>
					</tr>
					<tr>
						<td>Batteries</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>D780</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Special effects modes (night vision; super vivid; pop; photo illustration; toy camera effect; miniature effect; selective color;</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Nikon D780 Camera Body,16-80 mm Lens, Battery, Rechargeable Battery, Cap, USB, Strap</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.5 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 to 30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>USB</td>
					</tr>
					<tr>
						<td>Material	‎</td>
						<td>Polycarbonate</td>
					</tr>
					<tr>
						<td>Form Factor</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Wide Angle</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Nikon F</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>840 g</td>
					</tr>
				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1siminpdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt3">

					<div id="pdt4" class="simipdt firstsiminpdt3">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/nikon/img/7a.png">
						<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="nikonpdt7open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/nikon/img/8a.png">
						<h4 id="pdtname">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt8open()">
						</div>
					</div>
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt3"></div>
						<div class="auto-btn2siminpdt3"></div>
						<div class="auto-btn3siminpdt3"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt3" class="manual-btnsimi"></label>
						<label for="radio2siminpdt3" class="manual-btnsimi"></label>
						<label for="radio3siminpdt3" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt4view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt4/4a.png" id="nikonpdt4img">
					<img src="images/nikon/pdt4/4b.png">
					<img src="images/nikon/pdt4/4c.png">
					<img src="images/nikon/pdt4/4d.png">
					<img src="images/nikon/pdt4/4e.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt4a1()" id="listbtn">
						<img src="images/nikon/icons/pdt4/4a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt4a2()" id="listbtn">
						<img src="images/nikon/icons/pdt4/4b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt4a3()" id="listbtn">
						<img src="images/nikon/icons/pdt4/4c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt4a4()" id="listbtn">
						<img src="images/nikon/icons/pdt4/4d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt4a5()" id="listbtn">
						<img src="images/nikon/icons/pdt4/4e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h3>
					<h5 style="margin-top: ">₹2,14,999.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt4close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					
					<li>Resolution : 45.7 MP</li>
					<li>Screen size : 3.2 inches</li>
					<li>Dimensions : 14.7 x 7.9 x 12.4 cm</li>
					<li>Hardware Interface : AV</li>
					<li>Aspect Ratio : 1.50:1</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>	
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>1585</td>
					</tr>
						<td>Model Year	‎</td>
						<td>2013</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>14.73 x 7.87 x 12.45 cm; 916.26 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>1585</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>AV Port</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Time lapse</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Supported Image Type	‎</td>
						<td>JPEG</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>1 x</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>1.50:1</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>47 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>45.7 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>5504 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>1/8000 s Seconds</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Buttons</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes AC Adapter	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>916 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1siminpdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt4">

					<div id="pdt5" class="simipdt firstsiminpdt4">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/nikon/img/7a.png">
						<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt7open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/nikon/img/8a.png">
						<h4 id="pdtname">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt8open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/nikon/img/9a.png">
						<h4 id="pdtname">Nikon Z6 FX-Format Mirrorless Camera Body with 24-70mm Lens + Mount Adapter FTZ (w/ 24-70mm)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,59,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt9open()">
						</div>
					</div>
					
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt4"></div>
						<div class="auto-btn2siminpdt4"></div>
						<div class="auto-btn3siminpdt4"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt4" class="manual-btnsimi"></label>
						<label for="radio2siminpdt4" class="manual-btnsimi"></label>
						<label for="radio3siminpdt4" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt5view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt5/5a.png" id="nikonpdt5img">
					<img src="images/nikon/pdt5/5b.png">
					<img src="images/nikon/pdt5/5c.png">
					<img src="images/nikon/pdt5/5d.png">
					<img src="images/nikon/pdt5/5e.png">
					<img src="images/nikon/pdt5/5f.png">
					<img src="images/nikon/pdt5/5g.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt5a1()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a2()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a3()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a4()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a5()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5e.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a6()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5f.png" id="imgslist">
					</button>
					<button onclick="nikonpdt5a7()" id="listbtn">
						<img src="images/nikon/icons/pdt5/5g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h3>
					<h5 style="margin-top: ">₹1,69,999.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt5close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					
					<li>153 focus points with broader, denser image area coverage allow incredible subject acquisition performance</li>
					<li>Comprehensively refined AF system for revolutionary performance</li>
					<li>Dedicated AF engine streamlines AF processing, Focusing capability down to -4 EV lets you capture a wider range of scenes, Reliable AF shooting, even when using a tele converter, AF lock-on settings allow intuitive selection of tracking characteristics</li>
					<li>Automated AF fine-tune makes it easier to adjust subtle differences in focusing, custom setting allows quick AF-area mode switching</li>
					<li>Dust-Reduction System: Image sensor cleaning, image dust off reference data (Capture NX-D software required)</li>
					<li>Media: XQD, SD, SDHC (UHS-II compliant), SDXC (UHS-II compliant), Card slot: 1 XQD card and 1 Secure Digital (SD) card, either card can be used for primary or backup storage or for separate storage of NEF (RAW) and JPEG images; pictures can be copied between cards. File system: DCF 2.0, Exif 2.3, PictBridge</li>
					<li>Compatible Lenses: Compatible with AF NIKKOR lenses, including type G, E and D lenses (some restrictions apply to PC lenses) and DX lenses, AI-P NIKKOR lenses and non-CPU AI lenses (exposure modes A and M only), IX NIKKOR lenses, lenses for the F3AF and non-AI lenses can not be used</li>
					<li>Flash Sync Speed: X=, 1/250s, synchronizes with shutter at 1/250 s or slower, Modes: S (single frame), CL (continuous low speed), CH (continuous high speed), Q (quiet shutter-release), self-timer, MUP (mirror up), Qc (quiet continuous shutter-release), approximate frame advance rate 10fps, CL 1 to 9 fps CH: 10 fps QC: 3 fps, Self-Timer: 2 s, 5 s, 10 s, 20 s, 1 to 9 exposures at intervals of 0.5, 1, 2 or 3 s</li>
					<li>Mode: Programmed auto with flexible program (P), shutter-priority auto (S), aperture-priority auto (A), manual (M), Exposure Compensation: –5 to +5EV, in steps of1/3, 1/2 or 1EV, Exposure Lock: Luminosity locked at detected value</li>
					<li>Lens Servo: Single-servo AF (AF-S), Continuous-servo AF (AF-C), predictive focus tracking automatically activated according to subject status, Manual focus (M), electronic rangefinder can be used, Focus Point: 153, 153 focus points, of which 55 or 15 are available for selection, AF-Area Mode: Single-point AF, 25-, 72-, or 153- point dynamic-area AF, 3D-tracking, group-area AF, auto-area AF</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation, Nikon Corporation Shinagawa Intercity Tower C, 2-15-3, Konan, Minato-Ku,Tokyo 106-6290 Japan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>D500</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>14.5 x 12 x 18 cm; 860 Grams</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>D500</td>
					</tr>
					<tr>
						<td>Flash Memory Type	‎</td>
						<td>SDHC, SDXC, SD Card</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>SDHC, SDXC, Secure Digital Card</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Special effects modes (night vision; super vivid; pop; photo illustration; toy camera effect; miniature effect; selective color;</td>
					</tr>
					<tr>
							<td>Mounting Hardware	‎</td>
							<td>Body Cap BF-1B, Rechargeable Li-ion Battery EN-EL15 with terminal cover, Battery Charger MH-25a (comes with either an AC wall adapter or power cable of a type and shape that varies with the country or region of sale), USB Cable Clip, HDMI Cable Clip, USB Cable UC-E22, Strap AN-DC17</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</td>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Image Stabilization</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>20.9 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 to 30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>16 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>1080p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>10 fps</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi</td>
					</tr>
					<tr>
						<td>Material	‎</td>
						<td>Polycarbonate</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Standard</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>Nikon F</td>
					</tr>
					<tr>
						<td>Viewfinder Type	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Corporation</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>Japan</td>
					</tr>
					<tr>
						<td>Imported By	‎</td>
						<td>Nikon India PVT.LTD. Plot No: 71,Sector 32, Institutional Area, Gurgaon-122001, Haryana, India.Tel No: 1800-12-7346</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>860 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt5">

					<div id="pdt1" class="simipdt firstsiminpdt5">
						<img id="imgs" src="images/nikon/img/1a.png">
						<h4 id="pdtname">Nikon D5600 with AF-P 18-55 mm + AF-P 70-300 mm VR Kit</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹66,700.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/nikon/img/2a.png">
						<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/nikon/img/7a.png">
						<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="nikonpdt7open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/nikon/img/8a.png">
						<h4 id="pdtname">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt8open()">
						</div>
					</div>

					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt5"></div>
						<div class="auto-btn2siminpdt5"></div>
						<div class="auto-btn3siminpdt5"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt5" class="manual-btnsimi"></label>
						<label for="radio2siminpdt5" class="manual-btnsimi"></label>
						<label for="radio3siminpdt5" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt6view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt6/6a.png" id="nikonpdt6img">
					<img src="images/nikon/pdt6/6b.png">
					<img src="images/nikon/pdt6/6c.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt6a1()" id="listbtn">
						<img src="images/nikon/icons/pdt6/6a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt6a2()" id="listbtn">
						<img src="images/nikon/icons/pdt6/6b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt6a3()" id="listbtn">
						<img src="images/nikon/icons/pdt6/6c.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h3>
					<h5 style="margin-top: ">₹1,43,399.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt6close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>Nikon Z mount</li>
					<li>Sensor Size: 35.9 mm x 23.9 mm</li>
					<li>Z mount NIKKOR lenses F mount NIKKOR lenses (mount adapter required; restrictions may apply)</li>
					<li>FOCUS ON CREATING</li>
					<li>EXPAND YOUR FULL POTENTIAL</li>
					<li>CAPTURING POSSIBILITIES</li>
					<li>EFFORTLESS CONTROL</li>
					<li>GO BEYOND</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon, Nikon India PVT.LTD. Plot No: 71,Sector 32, Institutional Area, Gurgaon-122001, Haryana, India.Tel No: 1800-12-7346</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>Z5 Kit 24-200</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>Digital Camera</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>6.9 x 13.4 x 10.3 cm; 675 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium Metal batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>Z5 Kit 24-200</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>External</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>3840 x 2160</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Bluetooth Specification Version 4.2 Bluetooth:</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Nikon Z5 body,Nikkor 24-200mm Lens,BF-N1 Body Cap, DK-29 Rubber Eyecup (comes attached to camera), EN-EL15c Rechargeable Li-ion, Battery with terminal cover, MH-25a Battery Charger (comes with either an AC wall adapter or power cable of a type and shape that varies with the country or region of sale), AN-DC19 Strap, UC-E24 USB Cable, BS-1 Accessory Shoe Cover</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>11</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>3 x</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 to 30 Seconds</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium</td>
					</tr>
					<tr>
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>675 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt6">

					<div id="pdt2" class="simipdt firstsiminpdt6">
						<img id="imgs" src="images/nikon/img/2a.png">
						<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/nikon/img/8a.png">
						<h4 id="pdtname">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt8open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/nikon/img/9a.png">
						<h4 id="pdtname">Nikon Z6 FX-Format Mirrorless Camera Body with 24-70mm Lens + Mount Adapter FTZ (w/ 24-70mm)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,59,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt9open()">
						</div>
					</div>
					
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop NikonnProducts</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt6"></div>
						<div class="auto-btn2siminpdt6"></div>
						<div class="auto-btn3siminpdt6"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt6" class="manual-btnsimi"></label>
						<label for="radio2siminpdt6" class="manual-btnsimi"></label>
						<label for="radio3siminpdt6" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt7view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt7/7a.png" id="nikonpdt7img">
					<img src="images/nikon/pdt7/7b.png">
					<img src="images/nikon/pdt7/7c.png">
					<img src="images/nikon/pdt7/7d.png">
					<img src="images/nikon/pdt7/7e.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt7a1()" id="listbtn">
						<img src="images/nikon/icons/pdt7/7a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt7a2()" id="listbtn">
						<img src="images/nikon/icons/pdt7/7b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt7a3()" id="listbtn">
						<img src="images/nikon/icons/pdt7/7c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt7a4()" id="listbtn">
						<img src="images/nikon/icons/pdt7/7d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt7a5()" id="listbtn">
						<img src="images/nikon/icons/pdt7/7e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h3>
					<h5 style="margin-top: ">₹91,459.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt7close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					
					<li>Effective pixels: 20.9million</li>
					<li>Automatically switches between monitor and viewfinder displays</li>
					<li>Image Dust Off reference data (requires Capture NX-D)</li>
					<li>DX.CMOS</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Batteries ‏ </td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Product Dimensions ‏ </td>
						<td>6 x 12.6 x 9.4 cm; 450 Grams</td>
					</tr>
					<tr>
						<td>Manufacturer ‏</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>ASIN ‏ </td>
						<td>B084MH4VBS</td>
					</tr>
					<tr>
						<td>Item model number ‏ </td>
						<td>Nikon Z50</td>
					</tr>
					<tr>
						<td>Country of Origin ‏ </td>
						<td>Japan</td>
					</tr>
					<tr>
						<td>Manufacturer ‏ </td>
						<td>Nikon, Nikon Corporation,Shinagawa intercity tower C, 2-15-3 ,konan, minato-ku, Tokyo 108-6290 , Japan</td>
					</tr>
					<tr>
						<td>Item Weight ‏ </td>
						<td>450 g</td>
					</tr>
					<tr>
						<td>Item Dimensions LxWxH ‏ </td>
						<td>6 x 12.6 x 9.4 Centimeters</td>
					</tr>
					<tr>
						<td>Included Components ‏ </td>
						<td>Nikon Z50 Body, Camera Battery,Camera Battery charger,NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens,</td>
					</tr>
					<tr>
						<td>Generic Name ‏ </td>
						<td>DSLR</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt7">

					<div id="pdt1" class="simipdt firstsiminpdt7">
						<img id="imgs" src="images/nikon/img/1a.png">
						<h4 id="pdtname">Nikon D5600 with AF-P 18-55 mm + AF-P 70-300 mm VR Kit</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹66,700.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/nikon/img/2a.png">
						<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>	
					
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
							
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt7"></div>
						<div class="auto-btn2siminpdt7"></div>
						<div class="auto-btn3siminpdt7"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt7" class="manual-btnsimi"></label>
						<label for="radio2siminpdt7" class="manual-btnsimi"></label>
						<label for="radio3siminpdt7" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt8view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt8/8a.png" id="nikonpdt8img">
					<img src="images/nikon/pdt8/8b.png">
					<img src="images/nikon/pdt8/8c.png">
					<img src="images/nikon/pdt8/8d.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt8a1()" id="listbtn">
						<img src="images/nikon/icons/pdt8/8a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt8a2()" id="listbtn">
						<img src="images/nikon/icons/pdt8/8b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt8a3()" id="listbtn">
						<img src="images/nikon/icons/pdt8/8c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt8a4()" id="listbtn">
						<img src="images/nikon/icons/pdt8/8d.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h3>
					<h5 style="margin-top: ">₹1,69,999.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt8close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>45.7MP FX-Format BSI CMOS Sensor EXPEED 6 Image Processing Engine UHD 4K30 Video; N-Log & 10-Bit HDMI Out 493-Point Phase-Detect AF System</li>
					<li>Two Years Nikon India Warranty</li>
					
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Inc</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>1591</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2018</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>13.46 x 6.86 x 10.16 cm; 585.13 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>1591</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>USB Type C, Bluetooth 4.0, 802.11 ac/b/g/n</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>GPS</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Camera Body & Accessories</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>1 x</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>Unknown</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>45.7 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>45.7 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Aperture	‎</td>
						<td>2.0</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>9 fps</td>
					</tr>
					<tr>
						<td>Total Usb Ports	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi, HDMI</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen, Dial, Buttons</td>
					</tr>
					<tr>
						<td>Material	‎</td>
						<td>Plastic</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>DSLR, Compact, Mirrorless</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon Inc</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>585 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt8">

					<div id="pdt2" class="simipdt firstsiminpdt8">
						<img id="imgs" src="images/nikon/img/2a.png">
						<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>
					
					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt8"></div>
						<div class="auto-btn2siminpdt8"></div>
						<div class="auto-btn3siminpdt8"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt8" class="manual-btnsimi"></label>
						<label for="radio2siminpdt8" class="manual-btnsimi"></label>
						<label for="radio3siminpdt8" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="nikonpdt9view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/nikon/pdt9/9a.png" id="nikonpdt9img">
					<img src="images/nikon/pdt9/9b.png">
					<img src="images/nikon/pdt9/9c.png">
					<img src="images/nikon/pdt9/9d.png">
					<img src="images/nikon/pdt9/9e.png">
					<img src="images/nikon/pdt9/9f.png">
					<img src="images/nikon/pdt9/9g.png">
				</div>
				<div id="imglist">
					<button onclick="nikonpdt9a1()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9a.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a2()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9b.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a3()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9c.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a4()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9d.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a5()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9e.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a6()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9f.png" id="imgslist">
					</button>
					<button onclick="nikonpdt9a7()" id="listbtn">
						<img src="images/nikon/icons/pdt9/9g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Nikon Z6 FX-Format Mirrorless Camera Body with 24-70mm Lens + Mount Adapter FTZ (w/ 24-70mm)</h3>
					<h5 style="margin-top: ">₹1,59,400.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="nikonpdt9close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Nikon Z6 FX-Format Mirrorless Camera Body with 24-70mm Lens + Mount Adapter FTZ (w/ 24-70mm)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>Single frame, low-speed continuous, high-speed continuous, high-speed continuous (extended), self-timer</li>
					<li>Electronically-controlled vertical-travel focal-plane mechanical shutter; electronic front-curtain shutter; electronic shutter</li>
					<li>Automatically switches between monitor and viewfinder displays</li>
					<li>Up to 9 fps Low-speed continuous: 1 to 5 fps High-speed continuous: 5.5 fps (14-bit NEF/RAW: 5 fps) High-speed continuous (extended): 9 fps (14-bit NEF/RAW: 8 fps)</li>
					<li>Auto; programmed auto with flexible program (P); shutter-priority auto (S); aperture-priority auto (A); manual (M); user settings (U1, U2, U3),, Can be selected from Auto, Extra high, High, Normal, Low, or Off</li>
									
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon, Nikon India Pvt Ltd</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>1598</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>NIkon Z6-II</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2018</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>13.46 x 6.86 x 10.16 cm; 585.13 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>1598</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>USB Type C, Bluetooth 4.0, 3.5mm Audio, Headphone, 802.11 ac/b/g/n, Mini HDMI</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Time lapse</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Camera Body & Lens</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3.2 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>2 x</td>
					</tr>
					<tr>
						<td>Digital Zoom	‎</td>
						<td>24.5</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>Unknown</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24.5 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4024 Pixels</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>1/30 Seconds</td>
					</tr>
					<tr>
						<td>Min Aperture	‎</td>
						<td>22 f</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Battery Average Life	‎</td>
						<td>1 Days</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>12 fps</td>
					</tr>
					<tr>
						<td>Total Usb Ports	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Connector Type	‎</td>
						<td>Bluetooth, Wi-Fi, HDMI</td>
					</tr>
					<tr>
						<td>Device interface - primary	‎</td>
						<td>Touchscreen, Dial, Buttons</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>Mirrorless</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Mirror</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Remote Control Included?	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Nikon</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>585 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1siminpdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2siminpdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3siminpdt9">

					<div id="pdt3" class="simipdt firstsiminpdt9">
						<img id="imgs" src="images/nikon/img/3a.png">
						<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/nikon/img/4a.png">
						<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/nikon/img/5a.png">
						<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/nikon/img/6a.png">
						<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/nikon/img/7a.png">
						<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="nikonpdt7open()">
						</div>
					</div>

					<div id="npdtview">
						<a href="#" id="npdtviewlink">Shop Nikon Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1siminpdt9"></div>
						<div class="auto-btn2siminpdt9"></div>
						<div class="auto-btn3siminpdt9"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1siminpdt9" class="manual-btnsimi"></label>
						<label for="radio2siminpdt9" class="manual-btnsimi"></label>
						<label for="radio3siminpdt9" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>



	<div id="sonypdt1view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt1/1a.png" id="sonypdt1img">
					<img src="images/sony/pdt1/1b.png">
					<img src="images/sony/pdt1/1c.png">
					<img src="images/sony/pdt1/1d.png">
					<img src="images/sony/pdt1/1e.png">
					<img src="images/sony/pdt1/1f.png">
					<img src="images/sony/pdt1/1g.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt1a1()" id="listbtn">
						<img src="images/sony/icons/pdt1/1a.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a2()" id="listbtn">
						<img src="images/sony/icons/pdt1/1b.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a3()" id="listbtn">
						<img src="images/sony/icons/pdt1/1c.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a4()" id="listbtn">
						<img src="images/sony/icons/pdt1/1d.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a5()" id="listbtn">
						<img src="images/sony/icons/pdt1/1e.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a6()" id="listbtn">
						<img src="images/sony/icons/pdt1/1f.png" id="imgslist">
					</button>
					<button onclick="sonypdt1a7()" id="listbtn">
						<img src="images/sony/icons/pdt1/1g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h3>
					<h5 style="margin-top: ">₹1,49,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt1close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>Designed as per the latest market trends</li>
					<li>Scores high in terms of functionality</li>
					<li>This product will be an excellent pick for you</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>				
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>ILCE7M3/B</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2018</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>12.7 x 9.84 x 7.62 cm; 652.04 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>ILCE7M3/B</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>AV Port</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Orientation sensor</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Supported Image Type	‎</td>
						<td>RAW</td>
					</tr>
					<tr>
						<td>Has Image Stabilization	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>>1 x</td>
					</tr>
					<tr>
						<td>Aspect Ratio	‎</td>
						<td>16:9</td>
					</tr>
					<tr>
						<td>Max Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Max Vertical Resolution	‎</td>
						<td>4000 Pixels</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>10 fps</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>Mirrorless</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Mirror</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Includes External Memory	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>China</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>652 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				


				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simispdt1">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt1">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt1">

					<div id="pdt4" class="simipdt firstsimispdt1">
						<img id="imgs" src="images/sony/img/4a.png">
						<h4 id="pdtname">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,29,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/sony/img/6a.png">
						<h4 id="pdtname">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Real-time Eye AF, 4K Vlogging Camera, Tiltable LCD)</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,09,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/sony/img/8a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD, Low Light Camera) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,45,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt8open()">
						</div>
					</div>

					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt1"></div>
						<div class="auto-btn2simispdt1"></div>
						<div class="auto-btn3simispdt1"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt1" class="manual-btnsimi"></label>
						<label for="radio2simispdt1" class="manual-btnsimi"></label>
						<label for="radio3simispdt1" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt2view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt2/2a.png" id="sonypdt2img">
					<img src="images/sony/pdt2/2b.png">
					<img src="images/sony/pdt2/2c.png">
					<img src="images/sony/pdt2/2d.png">
					<img src="images/sony/pdt2/2e.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt2a1()" id="listbtn">
						<img src="images/sony/icons/pdt2/2a.png" id="imgslist">
					</button>
					<button onclick="sonypdt2a2()" id="listbtn">
						<img src="images/sony/icons/pdt2/2b.png" id="imgslist">
					</button>
					<button onclick="sonypdt2a3()" id="listbtn">
						<img src="images/sony/icons/pdt2/2c.png" id="imgslist">
					</button>
					<button onclick="sonypdt2a4()" id="listbtn">
						<img src="images/sony/icons/pdt2/2d.png" id="imgslist">
					</button>
					<button onclick="sonypdt2a5()" id="listbtn">
						<img src="images/sony/icons/pdt2/2e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h3>
					<h5 style="margin-top: ">₹48,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt2close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>20.1 MP (effective) 1.0-type Exmor R CMOS sensor</li>
					<li>BIONZ X engine for superb detail and noise reduction</li>
					<li>ZEISS Vario-Sonnar T* 24-70 mm lens with F1.8-2.8 aperture</li>
					<li>Built-in OLED Tru-Finder electronic viewfinder (EVF)</li>
					<li>Up to 10fps continuous shooting without blackout</li>
					<li>Warranty Details: 2 Years</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Batteries ‏ </td>
						<td>1 Lithium Metal batteries required. (included)</td>
					</tr>
					<tr>
						<td>Is Discontinued By Manufacturer ‏ </td>
						<td>No</td>
					</tr>
					<tr>
						<td>Product Dimensions ‏ </td>
						<td>10.21 x 4.09 x 5.79 cm; 290.3 Grams</td>
					</tr>
					<tr>
						<td>Manufacturer ‏ </td>
						<td>Sony Imaging Products & Solutions Inc.</td>
					</tr>
					<tr>
						<td>ASIN ‏ </td>
						<td>B00K7O2DJU</td>
					</tr>
					<tr>
						<td>Item model number ‏ </td>
						<td>DSCRX100M3/B</td>
					</tr>
					<tr>
						<td>Country of Origin ‏ </td>
						<td>China</td>
					</tr>
					<tr>
						<td>Manufacturer ‏ </td>
						<td>Sony Imaging Products & Solutions Inc., Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Item Weight ‏ </td>
						<td>290 g</td>
					</tr>
					<tr>
						<td>Item Dimensions LxWxH ‏ </td>
						<td>10.2 x 4.1 x 5.8 Centimeters</td>
					</tr>
					<tr>
						<td>Net Quantity ‏ </td>
						<td>1 Unit</td>
					</tr>
					<tr>
						<td>Included Components ‏ </td>
						<td>1 U (Including-Rechargeable Battery, AC Adaptor, Wrist Wrap, Micro USB Cable, User Manual, - 1 U each)</td>
					</tr>
					<tr>
						<td>Generic Name ‏ </td>
						<td>Cybershot DSC-RX100M3</td>
					</tr>
				</table>	

				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>

				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt2" checked="checked">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt2">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt2">

					<div id="pdt5" class="simipdt firstsimispdt2">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/sony/img/6a.png">
						<h4 id="pdtname">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Real-time Eye AF, 4K Vlogging Camera, Tiltable LCD)</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,09,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/sony/img/8a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD, Low Light Camera) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,45,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt8open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/sony/img/9a.png">
						<h4 id="pdtname">Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹67,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt9open()">
						</div>
					</div>
					
					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt2"></div>
						<div class="auto-btn2simispdt2"></div>
						<div class="auto-btn3simispdt2"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt2" class="manual-btnsimi"></label>
						<label for="radio2simispdt2" class="manual-btnsimi"></label>
						<label for="radio3simispdt2" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt3view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt3/3a.png" id="sonypdt3img">
					<img src="images/sony/pdt3/3b.png">
					<img src="images/sony/pdt3/3c.png">
					<img src="images/sony/pdt3/3d.png">
					<img src="images/sony/pdt3/3e.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt3a1()" id="listbtn">
						<img src="images/sony/icons/pdt3/3a.png" id="imgslist">
					</button>
					<button onclick="sonypdt3a2()" id="listbtn">
						<img src="images/sony/icons/pdt3/3b.png" id="imgslist">
					</button>
					<button onclick="sonypdt3a3()" id="listbtn">
						<img src="images/sony/icons/pdt3/3c.png" id="imgslist">
					</button>
					<button onclick="sonypdt3a4()" id="listbtn">
						<img src="images/sony/icons/pdt3/3d.png" id="imgslist">
					</button>
					<button onclick="sonypdt3a5()" id="listbtn">
						<img src="images/sony/icons/pdt3/3e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body (4K Vlogging Camera, Low Light Camera) + SanDisk 128GB Extreme Pro SDXC UHS-I Card - C10, U3, V30, 4K UHD, SD Card</h3>
					<h5 style="margin-top: ">₹1,48,959.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt3close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body (4K Vlogging Camera, Low Light Camera) + SanDisk 128GB Extreme Pro SDXC UHS-I Card - C10, U3, V30, 4K UHD, SD Card</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>Product 1: Standard ISO range from 100 to 51200</li>
					<li>Product 1: 15-stop dynamic range at low-sensitivity settings</li>
					<li>Product 1: 14-bit RAW Output for natural gradations</li>
					<li>Product 1: 5-axis optical in-body image stabilization</li>
					<li>Product 2: Make sure this fits by entering your model number.</li>
					<li>Product 2: Shot speeds up to 60MB/s*, transfer speeds up to 150MB/s* and other factors. 1Mb=1, 000, 000 bytes. X = 150Kb/sec.</li>
					<li>Product 2: Perfect for shooting 4K UHD video) and sequential burst mode photography</li>
					<li>Product 2: Capture uninterrupted video with UHS speed Class 3 (U3) and video Speed Class 30 (v30)(2)</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					
					<tr>
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>ILCE-7M3</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>ILCE-7M3</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>ILCE-7M3</td>
					</tr>
					<tr>
						<td>Memory Storage Capacity	‎</td>
						<td>128 GB</td>
					</tr>
					<tr>
						<td>Flash Memory Type	‎</td>
						<td>SDXC, SD Card</td>
					</tr>
					<tr>
						<td>Hardware Interface	‎</td>
						<td>SDXC, Secure Digital Card</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>24.2</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>693 point focal plane phase detection AF and 425 point contrast AF detection</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>AC Adaptor AC-UUE12 Accessory shoe cap Body cap Eyepiece cup Micro USB cable Rechargeable Battery NP-FZ100 Shoulder strap</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>2.9 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Has Image Stabilization</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Optical Sensor Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed</td>
							<td>‎1/8000</td>
					</tr>
						<tr>
						<td>Min Shutter Speed</td>
							<td>‎30Sec</td>
					</tr>
					<tr>	
						<td>Battery Average Life	‎</td>
						<td>2 Hours</td>
					</tr>
					<tr>
						<td>Batteries Included</td>
							<td>‎Yes</td>
					</tr>
						<tr>
						<td>Batteries Required</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed</td>
							<td>‎10 fps</td>
					</tr>
						<tr>
						<td>Form Factor</td>
							<td>‎Mirrorless</td>
					</tr>
					<tr>	
						<td>Lens Type	‎</td>
						<td>Wide Angle</td>
					</tr>
					<tr>
						<td>Viewfinder Type</td>
							<td>‎Electronic</td>
					</tr>
					<tr>	
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simispdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt3">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt3">

					<div id="pdt1" class="simipdt firstsimispdt3">
						<img id="imgs" src="images/sony/img/1a.png">
						<h4 id="pdtname">Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,49,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt7open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/sony/img/8a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD, Low Light Camera) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,45,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt8open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/sony/img/9a.png">
						<h4 id="pdtname">Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹67,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt9open()">
						</div>
					</div>

					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt3"></div>
						<div class="auto-btn2simispdt3"></div>
						<div class="auto-btn3simispdt3"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt3" class="manual-btnsimi"></label>
						<label for="radio2simispdt3" class="manual-btnsimi"></label>
						<label for="radio3simispdt3" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt4view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt4/4a.png" id="sonypdt4img">
					<img src="images/sony/pdt4/4b.png">
					<img src="images/sony/pdt4/4c.png">
					<img src="images/sony/pdt4/4d.png">
					<img src="images/sony/pdt4/4e.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt4a1()" id="listbtn">
						<img src="images/sony/icons/pdt4/4a.png" id="imgslist">
					</button>
					<button onclick="sonypdt4a2()" id="listbtn">
						<img src="images/sony/icons/pdt4/4b.png" id="imgslist">
					</button>
					<button onclick="sonypdt4a3()" id="listbtn">
						<img src="images/sony/icons/pdt4/4c.png" id="imgslist">
					</button>
					<button onclick="sonypdt4a4()" id="listbtn">
						<img src="images/sony/icons/pdt4/4d.png" id="imgslist">
					</button>
					<button onclick="sonypdt4a5()" id="listbtn">
						<img src="images/sony/icons/pdt4/4e.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h3>
					<h5 style="margin-top: ">₹1,29,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt4close()"></i>	
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>World's Fastest AF acquisition speed of 0.03 sec. Optical image stabilisation technology developed by Sony is valuable for handheld still and movie shooting, especially in low light or at the ultra-telephoto end of the zoom range up to 600 mm</li>
					<li>315 phase-detection AF points covering Approx. 65% of the frame</li>
					<li>ZEISS Vario-Sonnar T* 24-600mm3 f.2.4-F4 ultra-zoom Lens</li>
					<li>20.1MP 1" back Illuminated Exmor RS stacked CMOS sensor w/ DRAM</li>
					<li>24 Fps4 continuous shooting up to 249 Frames5 with AF/AE tracking</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Model</td>
							<td>‎DSCRX10M4</td>
					</tr>	
					<tr>	
						<td>Model Name	‎</td>
						<td>Sony Cyber‑Shot RX10 IV</td>
					</tr>
					<tr>
						<td>Model Year</td>
							<td>‎2017</td>
					</tr>	
					<tr>	
						<td>Product Dimensions</td>
							<td>‎13.26 x 9.4 x 12.75 cm; 1.05 Kilograms</td>
					</tr>	
					<tr>	
						<td>Batteries</td>
							<td>‎1 Lithium ion batteries required. (included)</td>
					</tr>	
					<tr>	
						<td>Item model number</td>
							<td>‎DSCRX10M4</td>
					</tr>	
					<tr>	
						<td>Flash Memory Installed Size	‎</td>
						<td>128</td>
					</tr>
					<tr>
						<td>Flash Memory Type</td>
							<td>‎SDXC;Micro SD;Memory Stick</td>
					</tr>	
					<tr>	
						<td>Included Memory Card Size</td>
							<td>‎128 GB</td>
					</tr>	
					<tr>	
						<td>Flash	‎</td>
						<td>Internal</td>
					</tr>
					<tr>
						<td>Hardware Interface</td>
							<td>‎AV Port</td>
					</tr>	
					<tr>	
						<td>Compatible Devices	‎</td>
						<td>BC-QM1/BC-TRW/NP-FW50/HVL-F20M/HVL-F32M/HVL-F43M/HVL-F45RM/HVL-F60M/HVL-F60RM/HVL-LE1/HVL-LEIR1/ECM-AW4/ECM-CG60/ECM-GZ1M/ECM-W1M/ECM-XYST1M/XLR-K1M/XLR-K2M/RM-SPR1/RM-VPR1/VCT-MP1/VCT-R640/VCT-VPR1/ALC-F72S/VF-72CPAM/VF-72MPAM/LCS-U21/LCS-U30/ADP-MAA/AC-PW20</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Image-stabilization</td>
					</tr>
					<tr>
						<td>Mounting Hardware</td>
						<td>‎Rechargeable Battery Pack NP-FW50, AC AdaptorAC-UUD12, Micro USB cable, Instruction Manuel, Shoulder Strap, Lens Cap, Eyepiece Cup, Lens Hood, Shoe Cap</td>
					</tr>	
					<tr>	
						<td>Number Of Items</td>
							<td>‎1</td>
					</tr>	
					<tr>	
						<td>Compiler</td>
							<td>‎SONY</td>
					</tr>	
					<tr>	
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>7.5 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Image Aspect Ratio	‎</td>
						<td>Unknown_aspect_ratio</td>
					</tr>
					<tr>
						<td>Has Image Stabilization</td>
							<td>‎Yes</td>
					</tr>	
					<tr>	
						<td>Optical Zoom</td>
							<td>‎25 x</td>
					</tr>	
					<tr>	
						<td>Aspect Ratio</td>
							<td>‎Unknown</td>
					</tr>	
					<tr>	
						<td>Resolution</td>
							<td>‎1,440,000</td>
					</tr>	
					<tr>	
						<td>Max Resolution	‎</td>
						<td>20.1 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution</td>
							<td>‎20 MP</td>
					</tr>	
					<tr>	
						<td>Max Vertical Resolution</td>
							<td>‎3648 Pixels</td>
					</tr>	
					<tr>	
						<td>Min Aperture</td>
							<td>‎25</td>
					</tr>	
					<tr>	
						<td>Min Focal Length	‎</td>
						<td>18</td>
					</tr>
					<tr>
						<td>Microphone Technology</td>
							<td>‎Stereo</td>
					</tr>	
					<tr>	
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Power Source	‎</td>
						<td>DC7.2 V (supplied battery)/DC5.0 V (supplied AC adapter)</td>
					</tr>
					<tr>
						<td>Battery Description	‎Sony</td>
 						<td>NP-FW50</td>
					</tr> 
					<tr> 
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required</td>
							<td>‎Yes</td>
					</tr>	
					<tr>	
						<td>Battery Cell Composition</td>
							<td>‎Lithium Ion</td>
					</tr>	
					<tr>	
						<td>Adapter</td>
							<td>‎SONY</td>
					</tr>	
					<tr>	
						<td>Continuous Shooting Speed	‎</td>
						<td>24 fps</td>
					</tr>
					<tr>
						<td>Connector Type</td>
							<td>‎USB, HDMI, NFC</td>
					</tr>	
					<tr>	
						<td>Reader</td>
							<td>‎SONY</td>
					</tr>	
					<tr>	
						<td>Supported Standards</td>
						<td>‎JPEG (DCF Ver. 2.0, Exif Ver. 2.31, MPF Baseline compliant), RAW (Sony ARW 2.3 format); XAVC S; AVCHD format Ver. 2.0 compatible</td>
					</tr>	
					<tr>	
						<td>Lens Type</td>
							<td>‎Telephoto</td>
					</tr>	
					<tr>	
						<td>Marimba	‎</td>
						<td>SONY</td>
					</tr>
					<tr>
						<td>Memory Card Slot	‎</td>
						<td>Memory Stick Duo9; Memory Stick PRO Duo9; Memory Stick PRO Duo (High Speed)9; Memory Stick PROHG Duo9; Memory Stick Micro109; Memory Stick Micro (Mark2)109; SD Memory Card9; SDHC Memory Card (UHS-I)9; SDXC Memory Card (UHS-I)9; microSD Memory Card109; microSDHC Memory Card109; microSDXC Memory Card109</td>
					</tr>
					<tr>
						<td>Metering Description	‎</td>
						<td>Spot</td>
					</tr>
					<tr>
						<td>Recorder	‎</td>
						<td>SONY</td>
					</tr>
					<tr>
						<td>Transcriber</td>
							<td>‎SONY</td>
					</tr>	
					<tr>	
						<td>Viewfinder Type	‎</td>
						<td>Electronic</td>
					</tr>
					<tr>
						<td>Contains Liquid Contents	‎</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery</td>
							<td>‎Yes</td>
					</tr>	
					<tr>	
						<td>Has Self Timer</td>
							<td>‎Yes</td>
					</tr>	
					<tr>	
						<td>Includes External Memory</td>
							<td>‎No</td>
					</tr>	
					<tr>	
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Item Weight</td>
						<td>‎1 kg 50 g</td>
					</tr>	


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>	
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" checked="checked" class="abc" id="radio1simispdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt4">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt4">

					<div id="pdt2" class="simipdt firstsimispdt4">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/sony/img/6a.png">
						<h4 id="pdtname">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Real-time Eye AF, 4K Vlogging Camera, Tiltable LCD)</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,09,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt7open()">
						</div>
					</div>
					
					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt4"></div>
						<div class="auto-btn2simispdt4"></div>
						<div class="auto-btn3simispdt4"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt4" class="manual-btnsimi"></label>
						<label for="radio2simispdt4" class="manual-btnsimi"></label>
						<label for="radio3simispdt4" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt5view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt5/5a.png" id="sonypdt5img">
					<img src="images/sony/pdt5/5b.png">
					<img src="images/sony/pdt5/5c.png">
					<img src="images/sony/pdt5/5d.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt5a1()" id="listbtn">
						<img src="images/sony/icons/pdt5/5a.png" id="imgslist">
					</button>
					<button onclick="sonypdt5a2()" id="listbtn">
						<img src="images/sony/icons/pdt5/5b.png" id="imgslist">
					</button>
					<button onclick="sonypdt5a3()" id="listbtn">
						<img src="images/sony/icons/pdt5/5c.png" id="imgslist">
					</button>
					<button onclick="sonypdt5a4()" id="listbtn">
						<img src="images/sony/icons/pdt5/5d.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h3>
					<h5 style="margin-top: ">₹59,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt5close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>20.1 MP stacked back illuminated 1" Exmor RS CMOS sensor / DRAM, Large aperture 24-70mm 1 F1.8-2.8 ZEISS Vario-Sonnar T lens</li>
					<li>Directional 3-capsule inbuilt-mic with wind screen</li>
					<li>Vari-angle LCD screen, for selfie shooting with confidence</li>
					<li>Make your reviews stand out with product showcase setting</li>
					<li>4K Movie recording with Video EYE AF and real time tracking</li>
					<li>One-push Bokeh switch</li>
					<li>Time-lapse adds cinematic expression to the passage of time</li>
					<li>Send videos to your smartphone anywhere with Imaging Edge Mobile</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc., Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Model	‎</td>
						<td>ZV-1</td>
					</tr>
					<tr>
						<td>Model Name	‎</td>
						<td>ZV-1</td>
					</tr>
					<tr>
						<td>Model Year	‎</td>
						<td>2020</td>
					</tr>
					<tr>
						<td>Product Dimensions</td>
						<td>4.4 x 6 x 10.5 cm; 294 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number</td>
							<td>‎ZV-1</td>
					</tr>
					<tr>	
						<td>Special Features	‎</td>
						<td>Time-lapse</td>
					</tr>
					<tr>
						<td>Mounting Hardware</td>
						<td>‎1 unit ZV1 Camera, 1 unit Rechargeable Battery Pack (NP-BX1), 1 unit Micro USB cable, 1 unit Wind Screen, 1 unit Wind Screen Adaptor, 1 unit SD Card (SF-64UX2) and 1 unit Instruction Manual.</td>
					</tr>
					<tr>	
						<td>Number Of Items	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Display Technology	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Standing screen display size	‎</td>
						<td>7.5 Centimetres</td>
					</tr>
					<tr>
						<td>Display Type</td>
							<td>‎LCD</td>
					</tr>
						<tr>
						<td>Has Image Stabilization</td>
							<td>‎Yes</td>
					</tr>
						<tr>
						<td>Optical Zoom</td>
							<td>‎2.7 x</td>
					</tr>
					<tr>	
						<td>Max Resolution	‎</td>
						<td>20.1 MP</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution	‎</td>
						<td>20.1 MP</td>
					</tr>
					<tr>
						<td>Min Focal Length	‎</td>
						<td>24 Millimeters</td>
					</tr>
					<tr>
						<td>Audio Input</td>
						<td>‎Microphone</td>
					</tr>
					<tr>
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Batteries Included</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Batteries Required</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Connector Type</td>
							<td>‎Bluetooth</td>
					</tr>
						<tr>
						<td>Form Factor</td>
							<td>‎Compact</td>
					</tr>
					<tr>	
						<td>Flash Modes Description	</td>
						<td>Auto;Flash On;Slow;Synchro;Rear Sync;Flash Off</td>
					</tr>
					<tr>
						<td>Lens Type	‎</td>
						<td>Zoom</td>
					</tr>
					<tr>
						<td>Includes Rechargable Battery</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc.</td>
					</tr>
					<tr>
						<td>Country of Origin	‎</td>
						<td>China</td>
					</tr>
					<tr>
						<td>Item Weight</td>
							<td>‎294 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt5">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt5">

					<div id="pdt2" class="simipdt firstsimispdt5">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt7open()">
						</div>
					</div>
					<div id="pdt8" class="simipdt">
						<img id="imgs" src="images/sony/img/8a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD, Low Light Camera) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,45,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt8open()">
						</div>
					</div>
					<div id="pdt9" class="simipdt">
						<img id="imgs" src="images/sony/img/9a.png">
						<h4 id="pdtname">Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹67,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt9open()">
						</div>
					</div>
					
					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt5"></div>
						<div class="auto-btn2simispdt5"></div>
						<div class="auto-btn3simispdt5"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt5" class="manual-btnsimi"></label>
						<label for="radio2simispdt5" class="manual-btnsimi"></label>
						<label for="radio3simispdt5" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt6view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt6/6a.png" id="sonypdt6img">
					<img src="images/sony/pdt6/6b.png">
					<img src="images/sony/pdt6/6c.png">
					<img src="images/sony/pdt6/6d.png">
					<img src="images/sony/pdt6/6e.png">
					<img src="images/sony/pdt6/6f.png">
					<img src="images/sony/pdt6/6g.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt6a1()" id="listbtn">
						<img src="images/sony/icons/pdt6/6a.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a2()" id="listbtn">
						<img src="images/sony/icons/pdt6/6b.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a3()" id="listbtn">
						<img src="images/sony/icons/pdt6/6c.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a4()" id="listbtn">
						<img src="images/sony/icons/pdt6/6d.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a5()" id="listbtn">
						<img src="images/sony/icons/pdt6/6e.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a6()" id="listbtn">
						<img src="images/sony/icons/pdt6/6f.png" id="imgslist">
					</button>
					<button onclick="sonypdt6a7()" id="listbtn">
						<img src="images/sony/icons/pdt6/6g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Fastest Auto Focus, Real-time Eye AF, Real-time Tracking, 4K Vlogging Camera, Tiltable LCD)</h3>
					<h5 style="margin-top: ">₹1,09,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt6close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Fastest Auto Focus, Real-time Eye AF, Real-time Tracking, 4K Vlogging Camera, Tiltable LCD)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>5 Axis Optical Image stabilisation</li>
					<li>Real time eye AF for still / Video and Animal Eye AF</li>
					<li>Real time tracking</li>
					<li>World fastest 0.02 Sec AF speed with 425 phase detection and contrast points</li>
					<li>24.2MP, EXMOR CMOS sensor with outstanding light sensitivity</li>
					<li>True-to-life 4K HDR (HLG) movie recording</li>
					<li>High-capacity Z battery supports long-duration shooting</li>
					<li>11 FPS continuous shooting with AF/AE, ISO sensitivity up to 102400</li>
					<li>180 degree tilt able touch LCD screen</li>
					<li>Country of Origin: China</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc., Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Model</td>
						<td>‎ILCE-6600/B IN5</td>
					</tr>
						<tr>
						<td>Model Name</td>
							<td>‎APSC</td>
					</tr>
					<tr>	
						<td>Product Dimensions	‎</td>
						<td>12 x 6.9 x 6.7 cm; 503 Grams</td>
					</tr>
					<tr>
						<td>Batteries</td>
						<td>‎1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>	
						<td>Item model number	‎</td>
						<td>ILCE-6600/B IN5</td>
					</tr>
					<tr>
						<td>Included Memory Card Size	‎</td>
						<td>16 GB</td>
					</tr>
					<tr>
						<td>Flash</td>
							<td>‎External</td>
					</tr>
					<tr>
						<td>Resolution</td>
						<td>‎24.2</td>
					</tr>
					<tr>	
						<td>Special Features	‎</td>
						<td>Live View</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>1 Unit(Including Power Cord, Rechargable Battery (NP-F), AAC AdaZ100), Accy shoe cap, Eye Piece cup, AC Adaptor (AC-UUE12), Shoulder Strap, Micro USB Cable-1U each)</td>
					</tr>
					<tr>
						<td>Number Of Items</td>
						<td>‎1</td>
					</tr>
					<tr>	
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Display Type</td>
							<td>‎LCD</td>
					</tr>
					<tr>	
						<td>Image Stabilization	‎</td>
						<td>Optical</td>
					</tr>
					<tr>
						<td>Has Image Stabilization</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Optical Zoom	‎</td>
						<td>24</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution</td>
							<td>‎24.2 MP</td>
					</tr>
					<tr>	
						<td>Max Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Min Shutter Speed	‎</td>
						<td>30 Seconds</td>
					</tr>
					<tr>
						<td>Batteries Included</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed</td>
							<td>‎11 fps</td>
					</tr>
						<tr>
						<td>Form Factor</td>
							<td>‎Mirrorless</td>
					</tr>
					<tr>	
						<td>Flash Modes Description	‎</td>
						<td>Flash off, Automatic</td>
					</tr>
					<tr>
						<td>Mounting Type	‎</td>
						<td>E-Mount</td>
					</tr>
					<tr>
						<td>Viewfinder Type</td>
							<td>‎Electronic</td>
					</tr>
					<tr>	
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc.</td>
					</tr>
					<tr>
						<td>Country of Origin</td>
							<td>‎China</td>
					</tr>
					<tr>	
						<td>Imported By	‎</td>
						<td>Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Item Weight</td>
							<td>‎503 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt6">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt6">

					<div id="pdt1" class="simipdt firstsimispdt6">
						<img id="imgs" src="images/sony/img/1a.png">
						<h4 id="pdtname">Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,49,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/sony/img/4a.png">
						<h4 id="pdtname">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,29,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt5open()">
						</div>
					</div>

					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt6"></div>
						<div class="auto-btn2simispdt6"></div>
						<div class="auto-btn3simispdt6"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt6" class="manual-btnsimi"></label>
						<label for="radio2simispdt6" class="manual-btnsimi"></label>
						<label for="radio3simispdt6" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt7view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt7/7a.png" id="sonypdt7img">
					<img src="images/sony/pdt7/7b.png">
					<img src="images/sony/pdt7/7c.png">
					<img src="images/sony/pdt7/7d.png">
					<img src="images/sony/pdt7/7e.png">
					<img src="images/sony/pdt7/7f.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt7a1()" id="listbtn">
						<img src="images/sony/icons/pdt7/7a.png" id="imgslist">
					</button>
					<button onclick="sonypdt7a2()" id="listbtn">
						<img src="images/sony/icons/pdt7/7b.png" id="imgslist">
					</button>
					<button onclick="sonypdt7a3()" id="listbtn">
						<img src="images/sony/icons/pdt7/7c.png" id="imgslist">
					</button>
					<button onclick="sonypdt7a4()" id="listbtn">
						<img src="images/sony/icons/pdt7/7d.png" id="imgslist">
					</button>
					<button onclick="sonypdt7a5()" id="listbtn">
						<img src="images/sony/icons/pdt7/7e.png" id="imgslist">
					</button>
					<button onclick="sonypdt7a6()" id="listbtn">
						<img src="images/sony/icons/pdt7/7f.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Real time Animal Eye AF, Tiltable LCD) - Black</h3>
					<h5 style="margin-top: ">₹2,86,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt7close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Real time Animal Eye AF, Tiltable LCD) - Black</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
					<li>61.0 MP 35 mm full-frame Exmor R CMOS sensor and BIONZ X image processing engine</li>
					<li>Standard ISO 100–32000 range</li>
					<li>Fast Hybrid AF with 567-point focal-plane phase-detection AF and 425-point contrast-detection AF</li>
					<li>High-speed continuous shooting of up to 10FPS27 with AF/AE tracking</li>
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>				
						<td>Batteries ‏ </td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Product Dimensions ‏ </td>
						<td>13.03 x 9.86 x 7.95 cm; 422 Grams</td>
					</tr>
					<tr>
						<td>Manufacturer ‏ </td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Item model number ‏ </td>
						<td>ILCE7RM4/B</td>
					</tr>
					<tr>
						<td>Country of Origin ‏ </td>
						<td>Thailand</td>
					</tr>
					<tr>
						<td>Manufacturer ‏ </td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Item Weight ‏ </td>
						<td>422 g</td>
					</tr>
					<tr>
						<td>Item Dimensions LxWxH ‏ </td>
						<td>13 x 9.9 x 8 Centimeters</td>
					</tr>
					<tr>
						<td>Included Components ‏</td>
 						<td>Power cord Rechargeable Battery NP-FZ100 Cable Protector Battery Charger BC-QZ1 Shoulder strap Body cap Accessory shoe cap Eyepiece cup USB Type-CTM cable</td>
					</tr>
					<tr> 
						<td>Generic Name ‏ </td>
						<td>Mirrorless camera</td>
					</tr>
				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt7">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt7">

					<div id="pdt1" class="simipdt firstsimispdt7">
						<img id="imgs" src="images/sony/img/1a.png">
						<h4 id="pdtname">Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,49,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/sony/img/4a.png">
						<h4 id="pdtname">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,29,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt5open()">
						</div>
					</div>					

					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
							
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt7"></div>
						<div class="auto-btn2simispdt7"></div>
						<div class="auto-btn3simispdt7"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt7" class="manual-btnsimi"></label>
						<label for="radio2simispdt7" class="manual-btnsimi"></label>
						<label for="radio3simispdt7" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt8view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt8/8a.png" id="sonypdt8img">
					<img src="images/sony/pdt8/8b.png">
					<img src="images/sony/pdt8/8c.png">
					<img src="images/sony/pdt8/8d.png">
					<img src="images/sony/pdt8/8e.png">
					<img src="images/sony/pdt8/8f.png">
					<img src="images/sony/pdt8/8g.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt8a1()" id="listbtn">
						<img src="images/sony/icons/pdt8/8a.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a2()" id="listbtn">
						<img src="images/sony/icons/pdt8/8b.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a3()" id="listbtn">
						<img src="images/sony/icons/pdt8/8c.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a4()" id="listbtn">
						<img src="images/sony/icons/pdt8/8d.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a5()" id="listbtn">
						<img src="images/sony/icons/pdt8/8e.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a6()" id="listbtn">
						<img src="images/sony/icons/pdt8/8f.png" id="imgslist">
					</button>
					<button onclick="sonypdt8a7()" id="listbtn">
						<img src="images/sony/icons/pdt8/8g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, 4K Vlogging Camera, Tiltable LCD, Low Light Camera) - Black</h3>
					<h5 style="margin-top: ">₹1,45,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt8close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, 4K Vlogging Camera, Tiltable LCD, Low Light Camera) - Black</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>Standard ISO range from 100 to 51200</li>
					<li>15-stop dynamic range at low-sensitivity settings</li>
					<li>14-bit RAW Output for natural gradations</li>
					<li>5-axis optical in-body image stabilization</li>
					<li>4D FOCUS – Wide, Fast, Steadfast, AF performance inherited from α9</li>
					<li>Tenacious AF/AE tracking during continuous shooting at up to 10 fps and up to 8fps in live view mode with mechanical or silent shutter</li>
					<li>4K HDR with high resolution, wide dynamic range, and a wide colour gamut approaches reality</li>
					<li>Outstanding reliability and features for smooth, confident shooting in a compact body</li>
					<li>Fast AF/AE tracking for continuous shooting at up to 10 fps</li>
					<li>Full pixel readout without binning for high-resolution 4K movies</li>
					<li>Country of Origin: China</li>
					
				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>
				<table border="2px">
					<tr>					
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Model</td>
							<td>‎ILCE-7M3</td>
					</tr>
					<tr>	
						<td>Model Name	‎</td>
						<td>ILCE-7M3</td>
					</tr>
					<tr>
						<td>Product Dimensions	‎</td>
						<td>6.3 x 12.6 x 9.6 cm; 565 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium Metal batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number</td>
							<td>‎ILCE-7M3</td>
					</tr>
					<tr>	
						<td>Resolution</td>
							<td>‎24.2</td>
					</tr>
					<tr>	
						<td>Special Features	‎</td>
						<td>693 point focal plane phase detection AF and 425 point contrast AF detection</td>
					</tr>
					<tr>
						<td>Mounting Hardware</td>
							<td>‎AC Adaptor AC-UUE12 Accessory shoe cap Body cap Eyepiece cup Micro USB cable Rechargeable Battery NP-FZ100 Shoulder strap</td>
					</tr>
					<tr>	
						<td>Number Of Items	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Standing screen </td>
						<td>display size	‎2.9 Inches</td>
					</tr>
					<tr>
						<td>Display Type	‎</td>
						<td>LCD</td>
					</tr>
					<tr>
						<td>Has Image Stabilization</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Optical Sensor Resolution	‎</td>
						<td>24.2 MP</td>
					</tr>
					<tr>
						<td>Max Shutter Speed	‎</td>
						<td>1/8000</td>
					</tr>
					<tr>
						<td>Min Shutter Speed</td>
							<td>‎30Sec</td>
					</tr>
					<tr>	
						<td>Video Capture Resolution	‎</td>
						<td>2160p</td>
					</tr>
					<tr>
						<td>Battery Average Life	‎</td>
						<td>2 Hours</td>
					</tr>
					<tr>
						<td>Batteries Included</td>
							<td>‎Yes</td>
					</tr>
					<tr>	
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Continuous Shooting Speed	‎</td>
						<td>10 fps</td>
					</tr>
					<tr>
						<td>Form Factor</td>
							<td>‎Mirrorless</td>
					</tr>
					<tr>	
						<td>Lens Type</td>
							<td>‎Wide Angle</td>
					</tr>
					<tr>	
						<td>Viewfinder Type</td>
							<td>‎Electronic</td>
					</tr>
					<tr>	
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Country of Origin</td>
							<td>‎China</td>
					</tr>
					<tr>	
						<td>Item Weight</td>
							<td>‎565 g</td>
					</tr>


				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt8">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt8">

					<div id="pdt3" class="simipdt firstsimispdt8">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/sony/img/4a.png">
						<h4 id="pdtname">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,29,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt4open()">
						</div>
					</div>
					<div id="pdt5" class="simipdt">
						<img id="imgs" src="images/sony/img/5a.png">
						<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt5open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/sony/img/6a.png">
						<h4 id="pdtname">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Real-time Eye AF, 4K Vlogging Camera, Tiltable LCD)</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹1,09,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt6open()">
						</div>
					</div>
					<div id="pdt7" class="simipdt">
						<img id="imgs" src="images/sony/img/7a.png">
						<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt7open()">
						</div>
					</div>
					
					<div id="spdtview">
						<a href="#" id="spdtviewlink">Shop Sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt8"></div>
						<div class="auto-btn2simispdt8"></div>
						<div class="auto-btn3simispdt8"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt8" class="manual-btnsimi"></label>
						<label for="radio2simispdt8" class="manual-btnsimi"></label>
						<label for="radio3simispdt8" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="sonypdt9view">
		<div id="view">
			<div id="divleft">
				<div id="div1">
					<img src="images/sony/pdt9/9a.png" id="sonypdt9img">
					<img src="images/sony/pdt9/9b.png">
					<img src="images/sony/pdt9/9c.png">
					<img src="images/sony/pdt9/9d.png">
					<img src="images/sony/pdt9/9e.png">
					<img src="images/sony/pdt9/9f.png">
					<img src="images/sony/pdt9/9g.png">
				</div>
				<div id="imglist">
					<button onclick="sonypdt9a1()" id="listbtn">
						<img src="images/sony/icons/pdt9/9a.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a2()" id="listbtn">
						<img src="images/sony/icons/pdt9/9b.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a3()" id="listbtn">
						<img src="images/sony/icons/pdt9/9c.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a4()" id="listbtn">
						<img src="images/sony/icons/pdt9/9d.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a5()" id="listbtn">
						<img src="images/sony/icons/pdt9/9e.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a6()" id="listbtn">
						<img src="images/sony/icons/pdt9/9f.png" id="imgslist">
					</button>
					<button onclick="sonypdt9a7()" id="listbtn">
						<img src="images/sony/icons/pdt9/9g.png" id="imgslist">
					</button>
				</div>
				<div id="details">
					<h3>Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h3>
					<h5 style="margin-top: ">₹67,990.00</h5>
				</div>
				<div id="addandwish">
					<input class="form-control" id="pdtview" type="button" value="Add to Wishlist">
					<input class="form-control" id="pdtadd" type="button" value="Add to Cart">
				</div>
			</div>
			<div id="divright">
				<i class="bi bi-x-lg" onclick="sonypdt9close()"></i>
				<h3 style="margin-top: 60px; margin-left: 15px; width: 850px;">Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h3>
				<h5 style="margin-left: 15px;">About this Item -</h5>
				<ul style="margin-left: 10px; width: 860px;">
				
					<li>Exmor RS 1.0 type stacked CMOS sensor with DRAM chip and approx. 20.1 effective megapixels</li>
					<li>Advanced BIONZ X image processing engine with front end LSI</li>
					<li>ZEISS Vario-Sonnar T F1.8-2.8 large-aperture lens and optimized image processing system</li>
					<li>Fast Hybrid AF when shooting movies</li>
					<li>315-point focal-plane phase-detection AF sensor gives wide coverage area</li>
					<li>Silent and vibration-free shooting</li>
					<li>XGA OLED Tru-Finder with 100% frame coverage</li>
					<li>Country of Origin: China</li>

				</ul>
				<h5 style="margin-left: 15px;">Technical Details -</h5>				
				<table border="2px">
					<tr>
						<td>Brand	‎</td>
						<td>Sony</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc., Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Model</td>
							<td>‎DSC-RX100M5A</td>
					</tr>	
					<tr>	
						<td>Model Name</td>
							<td>‎Premium Compact</td>
					</tr>	
					<tr>	
						<td>Product Dimensions	‎</td>
						<td>10.1 x 4.1 x 5.8 cm; 272 Grams</td>
					</tr>
					<tr>
						<td>Batteries	‎</td>
						<td>1 Lithium ion batteries required. (included)</td>
					</tr>
					<tr>
						<td>Item model number	‎</td>
						<td>DSC-RX100M5A</td>
					</tr>
					<tr>
						<td>Flash	‎</td>
						<td>Built-in</td>
					</tr>
					<tr>
						<td>Resolution	‎</td>
						<td>20.1</td>
					</tr>
					<tr>
						<td>Special Features	‎</td>
						<td>Time-lapse</td>
					</tr>
					<tr>
						<td>Mounting Hardware	‎</td>
						<td>Battery(NP-BX1)</td>
					</tr>
					<tr>
						<td>Number Of Items	‎</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Display Technology</td>
							<td>‎LCD</td>
					</tr>	
					<tr>	
						<td>Standing screen display size	‎</td>
						<td>3 Inches</td>
					</tr>
					<tr>
						<td>Optical Zoom	‎</td>
						<td>2.9 x</td>
					</tr>
					<tr>
						<td>Optical Sensor Resolution</td>
							<td>‎20.1 MP</td>
					</tr>	
					<tr>	
						<td>Max Shutter Speed	‎</td>
						<td>1/32000</td>
					</tr>
					<tr>
						<td>Batteries Included	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Batteries Required	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Battery Cell Composition	‎</td>
						<td>Lithium Ion</td>
					</tr>
					<tr>
						<td>Form Factor	‎</td>
						<td>Compact</td>
					</tr>
					<tr>
						<td>Flash Modes Description	‎</td>
						<td>Auto / Flash On / Slow Synchro / Rear Sync / Flash Off</td>
					</tr>
					<tr>
						<td>Viewfinder Type</td>
							<td>‎Hybrid</td>
					</tr>	
					<tr>	
						<td>Has Auto Focus	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Has Self Timer	‎</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Manufacturer	‎</td>
						<td>Sony Imaging Products & Solutions Inc.</td>
					</tr>
					<tr>
						<td>Country of Origin</td>
							<td>‎China</td>
					</tr>	
					<tr>	
						<td>Imported By	‎</td>
						<td>Sony Imaging Products & Solutions Inc., 1-7-1 Konan, Minato-KU, Tokyo 108-0075, Japan</td>
					</tr>
					<tr>
						<td>Item Weight	‎</td>
						<td>272 g</td>
					</tr>

				</table>
				<h5 style="margin-top: 10px; margin-left: 15px">Similar Products -</h5>
				<div id="similarpdt">

					<input type="radio" name="radio-btnsimi" class="abc" id="radio1simispdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio2simispdt9">
					<input type="radio" name="radio-btnsimi" class="abc"  id="radio3simispdt9">

					<div id="pdt1" class="simipdt firstsimispdt9">
						<img id="imgs" src="images/sony/img/1a.png">
						<h4 id="pdtname">sony EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
						</div>
					</div>
					<div id="pdt2" class="simipdt">
						<img id="imgs" src="images/sony/img/2a.png">
						<h4 id="pdtname">sony EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
						</div>
					</div>
					<div id="pdt3" class="simipdt">
						<img id="imgs" src="images/sony/img/3a.png">
						<h4 id="pdtname">sony EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
						<div id="pdtdt2">
							<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt3open()">
						</div>
					</div>
					<div id="pdt4" class="simipdt">
						<img id="imgs" src="images/sony/img/4a.png">
						<h4 id="pdtname">sony EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
						<div id="pdtdt1">
							<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
							<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt4open()">
						</div>
					</div>
					<div id="pdt6" class="simipdt">
						<img id="imgs" src="images/sony/img/6a.png">
						<h4 id="pdtname">sony EOS 6D Mark II 26.2MP Digital SLR Camera with sony EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
						<div id="pdtdt3">
							<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
							<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt6open()">
						</div>
					</div>
					<div id="cpdtview">
						<a href="#" id="cpdtviewlink">Shop sony Products</a>
					</div>
					
					<div class="navigation-autosimi">
						<div class="auto-btn1simispdt9"></div>
						<div class="auto-btn2simispdt9"></div>
						<div class="auto-btn3simispdt9"></div>
					</div>

					<div class="navigation-manualsimi">
						<label for="radio1simispdt9" class="manual-btnsimi"></label>
						<label for="radio2simispdt9" class="manual-btnsimi"></label>
						<label for="radio3simispdt9" class="manual-btnsimi"></label>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- PDT VIEW END -->




	<div id="products">
		<div id="canonpdts">
			<h3 id="txt3">Canon Products</h3>
			<div id="pdtlist">
				<input type="radio" name="radio-btnpdtlist" class="abc"  id="radio1pdtlist" checked="checked">
				<input type="radio" name="radio-btnpdtlist" class="abc" id="radio2pdtlist">
				<div class="navigation-autopdtlist">
					<div class="auto-btn1pdtlist"></div>
					<div class="auto-btn2pdtlist"></div>
				</div>
				<div class="navigation-manualpdtlist">
					<label for="radio1pdtlist" class="manual-btnpdtlist"></label>
					<label for="radio2pdtlist" class="manual-btnpdtlist"></label>
				</div>


				<div id="pdt1" class="canonpdt1 firstpdtlist">
					<img id="imgs" src="images/canon/img/1a.png">
					<h4 id="pdtname">Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II lens</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹30,999.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt1open()">
					</div>
				</div>
				<div id="pdt2" class="hidden-overflow">
					<img id="imgs" src="images/canon/img/2a.png">
					<h4 id="pdtname">Canon EOS 200D II 24.1MP Digital SLR Camera + EF-S 18-55mm f4 is STM Lens (Black)</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹51,499.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt2open()">
					</div>
				</div>
				<div id="pdt3">
					<img id="imgs" src="images/canon/img/3a.png">
					<h4 id="pdtname">Canon EOS 80D 24.2MP Digital SLR Camera (Black) + EF-S 18-55mm STM Lens Kit + Memory card</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹83,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt3open()">
					</div>
				</div>
				<div id="pdt4">
					<img id="imgs" src="images/canon/img/4a.png">
					<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera Body</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹1,15,000.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt4open()">
					</div>
				</div>
				<div id="pdt5">
					<img id="imgs" src="images/canon/img/5a.png">
					<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with EF24-105 mm f/4L is II USM Lens</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹1,71,872.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt5open()">
					</div>
				</div>
				<div id="pdt6">
					<img id="imgs" src="images/canon/img/6a.png">
					<h4 id="pdtname">Canon EOS 6D Mark II 26.2MP Digital SLR Camera with Canon EF24-105 mm f/4L is II USM Lens and Sigma 35mm F/1.4 DG HSM Art Lens</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹2,32,540.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="canonpdt6open()">
					</div>
				</div>
				<div id="pdt7">
					<img id="imgs" src="images/canon/img/7a.png">
					<h4 id="pdtname">Canon Full Frame Mirrorless EOS R5 Mirrorless Camera Body  (Black)</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹3,39,995.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt7open()">
					</div>
				</div>
				<div id="pdt8">
					<img id="imgs" src="images/canon/img/8a.png">
					<h4 id="pdtname">Canon EOS M6 Mark II 32.5MP + EF-M 15-45mm f/3.5-6.3 is STM Lens</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹75,250.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt8open()">
					</div>
				</div>
				<div id="pdt9">
					<img id="imgs" src="images/canon/img/9a.png">
					<h4 id="pdtname">Canon EOS M50 24.1MP Mirrorless Camera (Black) with EF-M 15-45 is STM Lens</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹80,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="canonpdt9open()">
					</div>
				</div>
				<div id="cpdtview">
					<a href="#" id="cpdtviewlink">Shop Canon Products</a>
				</div>
			</div>
		</div>
		<div id="nikonpdts">
			<h3 id="txt4">Nikon Products</h3>
			<div id="pdtlist">
				<input type="radio" name="radio-btnnpdtlist" class="abc"  id="radio1npdtlist" checked="checked">
				<input type="radio" name="radio-btnnpdtlist" class="abc" id="radio2npdtlist">
				<div class="navigation-autonpdtlist">
					<div class="auto-btn1npdtlist"></div>
					<div class="auto-btn2npdtlist"></div>
				</div>
				<div class="navigation-manualnpdtlist">
					<label for="radio1npdtlist" class="manual-btnnpdtlist"></label>
					<label for="radio2npdtlist" class="manual-btnnpdtlist"></label>
				</div>


				<div id="pdt1" class="firstnpdtlist">
					<img id="imgs" src="images/nikon/img/1a.png">
					<h4 id="pdtname">Nikon D5600 with AF-P 18-55 mm + AF-P 70-300 mm VR Kit</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹66,700.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt1open()">
					</div>
				</div>
				<div id="pdt2">
					<img id="imgs" src="images/nikon/img/2a.png">
					<h4 id="pdtname">Nikon D7500 Camera (Black) with AF-S VR Nikkor 18-105mm VR Lens Kit, 16GB Class 10 SD Card and Carry Case</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹1,15,450.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt2open()">
					</div>
				</div>
				<div id="pdt3">
					<img id="imgs" src="images/nikon/img/3a.png">
					<h4 id="pdtname">Nikon D780 DSLR Body with 24-120mm VR Lens</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹1,74,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt3open()">
					</div>
				</div>
				<div id="pdt4">
					<img id="imgs" src="images/nikon/img/4a.png">
					<h4 id="pdtname">Nikon D850 45.7 MP Camera with 1 X Optical Zoom</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹2,14,999.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt4open()">
					</div>
				</div>
				<div id="pdt5">
					<img id="imgs" src="images/nikon/img/5a.png">
					<h4 id="pdtname">Nikon D500 20.9MP Digital SLR Camera (Black) with AF-S DX 16-80 f/2.8-4E ED VR Lens</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt5open()">
					</div>
				</div>
				<div id="pdt6">
					<img id="imgs" src="images/nikon/img/6a.png">
					<h4 id="pdtname">Nikon Digital Camera Z 5 Kit with NIKKOR Z 24-200mm f/4-6.3 Lens</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹1,43,399.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt6open()">
					</div>
				</div>
				<div id="pdt7">
					<img id="imgs" src="images/nikon/img/7a.png">
					<h4 id="pdtname">Nikon Z50 Mirroless Camera Body with NIKKOR Z DX 16-50mm f/3.5-6.3 VR & NIKKOR Z DX 50-250mm f/4.5-6.3 VR Lens</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹91,459.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="nikonpdt7open()">
					</div>
				</div>
				<div id="pdt8">
					<img id="imgs" src="images/nikon/img/8a.png">
					<h4 id="pdtname">Nikon Z 7 Mirrorless Digital Camera (Body Only) Kit with Charger, Battery, Cables, Neck Strap</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹1,69,999.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt8open()">
					</div>
				</div>
				<div id="pdt9">
					<img id="imgs" src="images/nikon/img/9a.png">
					<h4 id="pdtname">Nikon Z6 FX-Format Mirrorless Camera Body with 24-70mm Lens + Mount Adapter FTZ (w/ 24-70mm)</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹1,59,499.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="nikonpdt9open()">
					</div>
				</div>
				<div id="npdtview">
					<a href="#" id="cpdtviewlink">Shop Nikon Products</a>
				</div>
			</div>
		</div>
		<div id="sonypdts">
			<h3 id="txt5">Sony Products</h3>
			<div id="pdtlist">
				<input type="radio" name="radio-btnspdtlist" class="abc"  id="radio1spdtlist" checked="checked">
				<input type="radio" name="radio-btnspdtlist" class="abc" id="radio2spdtlist">
				<div class="navigation-autospdtlist">
					<div class="auto-btn1spdtlist"></div>
					<div class="auto-btn2spdtlist"></div>
				</div>
				<div class="navigation-manualspdtlist">
					<label for="radio1spdtlist" class="manual-btnspdtlist"></label>
					<label for="radio2spdtlist" class="manual-btnspdtlist"></label>
				</div>


				<div id="pdt1" class="firstspdtlist">
					<img id="imgs" src="images/sony/img/1a.png">
					<h4 id="pdtname">Sony a7 III Full-Frame Mirrorless Interchangeable-Lens Camera (Body)</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹1,49,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt1open()">
					</div>
				</div>
				<div id="pdt2">
					<img id="imgs" src="images/sony/img/2a.png">
					<h4 id="pdtname">Sony RX100 III Premium Compact Camera with 1.0-Type Exmor CMOS Sensor (DSC-RX100M3)</h4>
					<div id="pdtdt2">
						<p id="pdtprice" style="margin-top: ">₹48,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt2open()">
					</div>
				</div>
				<div id="pdt3">
					<img id="imgs" src="images/sony/img/3a.png">
					<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Digital SLR Camera Body + SanDisk 128GB Extreme Pro SDXC UHS-I SD Card</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹1,48,959.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt3open()">
					</div>
				</div>
				<div id="pdt4">
					<img id="imgs" src="images/sony/img/4a.png">
					<h4 id="pdtname">Sony RX10 IV with 0.03 second auto-focus & 25x optical zoom</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹1,29,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt4open()">
					</div>
				</div>
				<div id="pdt5">
					<img id="imgs" src="images/sony/img/5a.png">
					<h4 id="pdtname">Sony Digital Vlog Camera ZV-1 Only (Compact, Video Eye AF, Flip Screen, in-Built Microphone, 4K Vlogging Camera and Content Creation) – Black</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹59,990.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt5open()">
					</div>
				</div>
				<div id="pdt6">
					<img id="imgs" src="images/sony/img/6a.png">
					<h4 id="pdtname">Sony Alpha ILCE-6600 24.2 MP Mirrorless Digital SLR Camera Body only (APS-C Sensor, Real-time Eye AF, 4K Vlogging Camera, Tiltable LCD)</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹1,09,990.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt6open()">
					</div>
				</div>
				<div id="pdt7">
					<img id="imgs" src="images/sony/img/7a.png">
					<h4 id="pdtname">Sony Alpha ILCE-7RM4 Full-Frame 61.0MP Mirrorless Digital SLR Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD) - Black</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹2,86,990.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt7open()">
					</div>
				</div>
				<div id="pdt8">
					<img id="imgs" src="images/sony/img/8a.png">
					<h4 id="pdtname">Sony Alpha ILCE-7M3 Full-Frame 24.2MP Mirrorless Camera Body (4K Full Frame, Real-Time Eye Auto Focus, Tiltable LCD, Low Light Camera) - Black</h4>
					<div id="pdtdt3">
						<p id="pdtprice" style="margin-top: ">₹1,45,990.00</p>
						<input class="form-control" id="pdtpreview1" type="button" value="View More" onclick="sonypdt8open()">
					</div>
				</div>
				<div id="pdt9">
					<img id="imgs" src="images/sony/img/9a.png">
					<h4 id="pdtname">Sony Premium Compact DSC-RX100M5A Advanced Digital 4K Camera (Black)</h4>
					<div id="pdtdt1">
						<p id="pdtprice" style="margin-top: ">₹67,990.00</p>
						<input class="form-control" id="pdtpreview" type="button" value="View More" onclick="sonypdt9open()">
					</div>
				</div>
				<div id="spdtview">
					<a href="#" id="spdtviewlink">Shop Sony Products</a>
				</div>			
			</div>
		</div>
	</div>
	<div id="endbar">
		<h4 id="txt7">End Bar</h4>
	</div>
</div>
</body>

<script src="styles.js"></script>

</html>