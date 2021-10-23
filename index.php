<?php ob_start();
include('include/header.php');
include('include/connection.php');
 ?><!---script---->
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
		<script src="js/jquery.bxslider.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.bxslider').bxSlider({
						 auto: true,
 						 autoControls: true,
						 minSlides: 4,
						 maxSlides: 4,
						 slideWidth:450,
						 slideMargin: 10
					});
				});
			</script>
			
			
		<!---//script---->
		<!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider" style="height: 550px; !important">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img style="filter: brightness(50%);" src="images/slide-bg4.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">Travel Packages</h4>
		                        <!-- /Text title -->
		                        <!-- Text description -->
		                        <p class="description descriptionn">Welcome to Travel Package Website</p>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">
		                        	<ul>
		                        		
		                        		<li><a class="minfo" href="packages.php">More info </a></li>
		                        		<div class="clear"> </div>
		                        	</ul>
		                        </div>
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/slide-bg.jpg" style="filter: brightness(50%);"  alt=""/>
		                <div class="slide_content">
		                     <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">Travel is to live</h4>
		                        <!-- /Text title -->
		                        <!-- Text description -->
		                        <p class="description descriptionn">You Don't Need Magic to Disappear. All you need is a destination.</p>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">
		                        	<ul>
		                        		
		                        		<li><a class="minfo" href="packages.php">More info </a></li>
		                        		<div class="clear"> </div>
		                        	</ul>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>
		<!----start-find-place---->
		<div class="find-place">
			<div class="wrap">
				<div class="p-h">
					<span>FIND YOUR</span>
					<label>HOLIDAYS</label>
				</div>
				<!---strat-date-piker---->
				  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				<!---/End-date-piker---->
				<div class="p-ww">
					<form action="packages2.php" method="post">
						<span> Where</span>
						
						<input class="dest" type="text" name="dest" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
					<!--	<span> When</span>
						<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
						--><input type="submit" name="search" value="Search" />
					</form>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-find-place---->
		<!----start-offers---->
		<div class="offers">
			<div class="offers-head">
				<h3>Special Offers</h3>
				<p>Best packages where people love to stay!</p>
			</div>
			<!-- start content_slider -->
			<!-- FlexSlider -->
			 <!-- jQuery -->
			  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			  <!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        animationLoop: true,
			        itemWidth:250,
			        itemMargin: 5,
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			<!-- Place somewhere in the <body> of your page -->
				 <section class="slider">
		        <div class="flexslider carousel">
		          <ul class="slides">
				  
				   <?php
			try {
     $sql ="SELECT * FROM offers";
    $query= $conn -> prepare($sql);
    $query-> execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	?>
		            <li onclick="location.href='packages.php';">
		  	    	    <img src="admin/<?php echo $row['img_path']; ?>" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#"><?php echo $row['name']; ?></a></h4>
			  	    	    	 	<span><?php echo $row['facility_highlight']; ?></span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
						
						 <?php
                                           }   
                                      
									  } 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
 ?>                           
		  	    		
		          </ul>
		        </div>
		      </section>
              <!-- //End content_slider -->
		</div>
		<!----//End-offers---->
		
		
		<div class="offers" style="background-color:#7471711f;">
		<?php
			try {
     $sql ="SELECT * FROM advertisement";
    $query= $conn -> prepare($sql);
    $query-> execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	?>
			<div class="offers-head">
			
				  <img src="admin/<?php echo $row['img_path']; ?>" />
				
			</div>
			 <?php
                                           }   
                                      
									  } 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
 ?>                           
			
			<!-- start content_slider -->
			<!-- FlexSlider -->
			 <!-- jQuery -->
			  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			  <!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        animationLoop: true,
			        itemWidth:250,
			        itemMargin: 5,
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			<!-- advertise page -->
				 <section class="slider" >
		        <div class="flexslider carousel">
		         
		        </div>
		      </section>
              <!-- //End advertise  -->
		</div>
		
		
		
		
		
		<!---start-holiday-types---->
			<div class="holiday-types">
				<div class="wrap">
					<div class="holiday-type-head">
						<h3>Holidays Type</h3>
						<span>get explore your dream to travel the world!</span>
					</div>
					<div class="holiday-type-grids">
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon1"> </span>
							<a href="#">Cruise</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon2"> </span>
							<a href="#">City Breaks</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon3"> </span>
							<a href="#">Honeymoon</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon4"> </span>
							<a href="#">Adventure</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon5"> </span>
							<a href="#">Safari</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='packages.php';">
							<span class="icon6"> </span>
							<a href="#">Beach</a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				</div>
		<!---//End-holiday-types---->
		<!----//End-images-slider---->
		<!----start-clients---->
		<div class="clients">
			<div class="client-head">
				<h3>Happy Clients</h3>
				<span>what customer say about us and why love our services!</span>
			</div>
			<div class="client-grids">
				<ul class="bxslider">
				  <li>
				  	<p>It was a wonderful experience for us. All your arrangements were up to the mark.
					All hotels and transportation arrangements were excellent.Thank you very much for all your arrangements.</p>
				  	<a href="#">Denial Mwale</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>We were so pleased with our Kedarnath trip that you organised. Thank you very much for all your arrangements. It was a wonderful experience for us.
					Looking forward to other trips around next month.</p>
				  	<a href="#">Rihanna </a>
				  	<span>United Kingdom</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Thank you very much for all your assistance for my safe trip to Kedarnath. Thank you very much for all your arrangements.Your driver Mahesh was excellent. Will contact you again for my future trips.</p>
				  	<a href="#">P Annadorai</a>
				  	<span>Singapore</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>We had a great trip in India for 6 days and my family. Thank you very much for all your arrangements. and I we can say that we have received a great service from your team.</p>
				  	<a href="#">Tarsem</a>
				  	<span>Cambodia </span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>We have just got back from our long holiday around India.
Just wanted to say how much we enjoyed our trip' how we felt so looked after and how well our driver Uday took us around.</p>
				  	<a href="#">Vishaka</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				</ul>
			</div>
		</div>
		<!----//End-clients---->
		<?php ob_start();
include('include/footer.php');
 ?>