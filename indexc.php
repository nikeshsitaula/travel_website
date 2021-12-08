<?php ob_start();
include('include/header.php');
include('include/connection.php');
session_start();
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
		                    <img src="images/slider-bg.jpeg" alt=""/>
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
		                        		<li><a class="mapbtn" href="#">Show on the map </a></li>
		                        		<li><a class="minfo" href="#">More info </a></li>
		                        		<div class="clear"> </div>
		                        	</ul>
		                        </div>
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/slider-bg.jpeg" alt=""/>
		                <div class="slide_content">
		                     <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">To travel is to live</h4>
		                        <!-- /Text title -->
		                        <!-- Text description -->
		                        <p class="description descriptionn">You Don't Need Magic to Disappear. All you need is a destination.</p>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">
		                        	<ul>
		                        		<li><a class="mapbtn" href="#">Show on the map </a></li>
		                        		<li><a class="minfo" href="#">More info </a></li>
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
					<label>HOLYDAYS</label>
				</div>
				<!---strat-date-piker---->
				  <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				<!---/End-date-piker---->
				<div class="p-ww">
					<form>
						<span> Where</span>
						<input class="dest" type="text" value="Distination" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
						<span> When</span>
						<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
						<input type="submit" value="Search" />
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
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
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
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		             <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    	 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		          </ul>
		        </div>
		      </section>
              <!-- //End content_slider -->
		</div>
		<!----//End-offers---->
		
		
		<div class="offers" style="background-color:#7471711f;">
			<div class="offers-head">
				<h3>Advertise Here</h3>
				
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
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon1"> </span>
							<a href="#">Cruise</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon2"> </span>
							<a href="#">City Breaks</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon3"> </span>
							<a href="#">Honeymoon</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon4"> </span>
							<a href="#">Adventure</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon5"> </span>
							<a href="#">Safari</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
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
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
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