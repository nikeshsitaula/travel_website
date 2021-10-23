<?php include('include/header.php'); ?>
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>Subpackages</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>HOLYDAYS</label>
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
			</div>
				
		
		
			
			
			
			
			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>Sub packages</h3>
					</div>
					<div class="destination-places-grids">
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d7.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d3.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d6.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d5.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
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
			<!---loading-more-script--->
			<!---//loading-more-script--->
		</div>
		
<?php include('include/footer.php'); ?>