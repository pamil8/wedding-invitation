<?php
$name=$_REQUEST['name']; 
?><!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Wedding Invitation</title>
        <meta name="description" content="Wedding Invitation" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="../favicon.png"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51788358-2', 'auto');
  ga('send', 'pageview');

</script>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar 
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/BigVideoSlideshow/">
                    <strong>&laquo; Previous Demo: </strong>Fullscreen Video Slideshow with BigVideo.js
                </a>
                <span class="right">
                	<a href="http://www.flickr.com/photos/hisgett/369087090/sizes/m/in/photostream/">Restaurant image by ahisgett</a>
                    <a href="http://tympanus.net/codrops/?p=11029">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
            </div> /  -->
			
			<header>
			
				<!--<h1></h1>
				<h2>
					A responsive folded flyer-like restaurant menu with some 3D, featuring recipes from Michael Natkin from <a href="http://herbivoracious.com/">herbivoracious.com</a>
					<span class="demo-note">Your current viewport size shows the simplified version</span>
				</h2>-->
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<span class="no-cssanimations">CSS animations are not supported in your browser</span>
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">

									<div class="rm-logo"></div>
									<h2>Wedding Invitation</h2>
									<h3 style="font-size:18px;"><?php echo $name; ?></h3>

									<a href="#" class="rm-button-open">View Invitation</a>
									<div class="rm-info">
										<p><img src="images/knot.png"><br/>
										<strong style="font-size: 17px;">Shristi weds Saurav</strong><br>
										24th November 2014<br>
										Hotel Sun Park Inn<br>
										GMS Road, Dehradun<br>
										<strong>Phone</strong> +91 8126649693<br>
										<!--<strong>Fax</strong> 626.992.1020--></p>
									</div>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
									<h4>Shri Ganeshay Namah</h4>
									<dl>
										<dt>Mr. Devendra Dutt Badhani and Mrs. Asha Badhani</dt>
										<dd> request your gracious presence on the auspicious occasion of the wedding of their daughter</dd>

										<dt><a href="#" class="rm-viewdetails" data-thumb="images/shristi.jpg">Shristi</a></dt>
										<dd>(Bride)</dd>
										<dt>WEDS</dt>
										<dd></dd>
										<dt><a href="#" class="rm-viewdetails" data-thumb="images/saurav.jpg">Saurav</a></dt>
										<dd>(Groom)</dd>

										<dd>son of</dd>
										<dt>Mr. Rajendra Parsad Gairola and Mrs. Jaya Gairola</dt>
										
									</dl>

									<!--<h4>Salads &amp; More</h4>
									<dl>
										<dt>Green Delight</dt>
										<dd>Watercress, frisee and avocado salad</dd>

										<dt><a href="http://herbivoracious.com/2010/02/thai-tofu-salad-recipe.html" class="rm-viewdetails" data-thumb="images/13.jpg">Gourmet Yam Taohu</a></dt>
										<dd>Thai tofu salad yam taohu</dd>

										<dt>Panini Deluxe</dt>
										<dd>Buffalo mozzarella basil panini</dd>
									</dl>-->
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
									<h4>Schedule</h4>
									<dl>
										<dt>Sunday 23rd November</dt>
										<dd></dd>

										<dt>Sangeet</dt>
										<dd>at 3:00 pm</dd>

										<dt>Mehandi</dt>
										<dd>at 6:00 pm</dd>

										<dt>Monday 24th November</dt>
										<dd></dd>

										<dt>Haldi Hath</dt>
										<dd>at 10:00 am</dd>
																													
										
										
										<dt>Barat Arrival</dt>
										<dd>at 8:00 pm</dd>
										
										<dt>Dinner</dt>
										<dd>at 8:30 pm</dd>
<dt>Wedding Ceremony</dt>
										<dd>at 10:00 pm</dd>
									</dl>
									<h4>Venue</h4>
									<dl>
										<dt>Hotel Sun Park Inn</dt>
										<dd>ITBP Road, Near Petrol Pump, Gen Mahadeo Singh Rd, Niranjanpur, Dehradun</dd>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Close</span>
								<div class="rm-content">
									<h4>With Best Complements from</h4>
									<dl>
										<dt><a href="#" class="rm-viewdetails" data-thumb="images/devendra.JPG">Mr. Devendra Dutt Badhani</a></dt>
										<dd>(Father)</dd>
										
										<dt><a href="#" class="rm-viewdetails" data-thumb="images/6.jpg">Mr. Narendra Dutt Badhani</a></dt>
										<dd>(Chacha ji)</dd>
										
										<dt><a href="#" class="rm-viewdetails" data-thumb="images/shray.jpg">Shray Badhani</a></dt>
										<dd>(Brother)</dd>
										
										<dt><a href="#" class="rm-viewdetails" data-thumb="images/karmi.jpg">Karam Badhani</a></dt>
										<dd>(Brother)</dd>
										
										<!--<dt><a href="http://herbivoracious.com/2008/08/blueberry-napol.html" class="rm-viewdetails" data-thumb="images/7.jpg">Blueberry Napoleon</a></dt>
										<dd>Blueberry Napoleon with crème fraîche and raspberry powder</dd>
										
										<dt><a href="http://herbivoracious.com/2008/09/rings-of-saturn.html" class="rm-viewdetails" data-thumb="images/2.jpg">Rings of Saturn</a></dt>
										<dd>Saturn peach on challah french toast</dd>
										
										<dt><a href="http://herbivoracious.com/2008/04/recipe-atayef.html" class="rm-viewdetails" data-thumb="images/9.jpg">Classic Atayef</a></dt>
										<dd>Syrian ricotta-filled dessert pancakes</dd>-->
									</dl>
									<div class="rm-order">
										<p><strong>"We cordially invite you to the wedding reception to be held on 24th November at Hotel Sun Park Inn from 6 pm onwards. We would be grateful with your blessings and your kind presence at the celebration.”</strong><br/><strong>+91 8126649693, +91 9997469269. </strong></p>
									</div>-->
								</div><!-- /rm-content -->
<div class="rm-overlay"></div>
<div>Created by <dt><b>Pamil Gurung</b></dt>
								<dd style="margin: 0 0 0 0px;"><center><a href="https://www.facebook.com/pamil8" target="_blank"><img src="./images/fb.jpg" height="20"></a>&nbsp;<a href="https://www.linkedin.com/pub/pamil-gurung/56/395/654"><img src="./images/link.png" height="20"></a></center></dd></div>
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
		</script>
    </body>
</html>