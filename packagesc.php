<?php include('include/header.php'); ?>
	<div class="criuses">
			<div class="criuses-head">
				<div class="wrap">
					<h3>Travel Packages</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>PACKAGE</label>
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
			</div>
				<!----//End-find-place---->
				<!---start-criuse-grids----->
				<div class="criuse-main">
					<div class="wrap">
						<div class="criuse-head1">
							<h3>Available Packages</h3>
						</div>
						<div class="criuse-grids">
							<div class="criuse-grid">
								<div class="criuse-grid-head">
									<div class="criuse-img">
										<div class="criuse-pic">
											<img src="images/s1.jpg" title="criuse-name" />
										</div>
										<div class="criuse-pic-info">
												<div class="criuse-pic-info-top">
													<div class="criuse-pic-info-top-weather">
														<p>33<label>o</label><i>c</i><span> </span></p>
													</div>
													<div class="criuse-pic-info-top-place-name">
														<h2><label>Australia</label><span>City Break</span></h2>
													</div>
												</div>
												<div class="criuse-pic-info-price">
													<p><span>Starting Form</span> <h4>250 $</h4></p>
												</div>
										</div>
									</div>
									<div class="criuse-info">
										<div class="criuse-info-left">
											<ul>
												<li><a class="c-hotel" href="#"><span> </span>6 Nights VIp/Luurious hotel </a></li>
												<li><a class="c-air" href="#"><span> </span> Return Air Ticket</a></li>
												<li><a class="c-fast" href="#"><span> </span> Complimentry beark fast</a></li>
												<li><a class="c-car" href="#"><span> </span> Car for All transfers</a></li>
												<div class="clear"> </div>
											</ul>
										</div>
										<div class="criuse-info-right">
											<ul>
												<li><a class="c-face" href="#"><span> </span> </a></li>
												<li><a class="c-twit" href="#"><span> </span> </a></li>
												<li><a class="c-tub" href="#"><span> </span> </a></li>
												<li><a class="c-pin" href="#"><span> </span> </a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>
								</div>
								<div class="criuse-grid-info">
									<h1><a href="#">City Break</a></h1>
										<a class="btn" href="subpackages.php">Details</a>
								</div>
							</div>
							<div class="criuse-grid">
								<div class="criuse-grid-head">
									<div class="criuse-img">
										<div class="criuse-pic">
											<img src="images/s2.jpg" title="criuse-name" />
										</div>
										<div class="criuse-pic-info">
												<div class="criuse-pic-info-top">
													<div class="criuse-pic-info-top-weather">
														<p>33<label>o</label><i>c</i><span> </span></p>
													</div>
													<div class="criuse-pic-info-top-place-name">
														<h2><label>Canada</label><span>Adventure</span></h2>
													</div>
												</div>
												<div class="criuse-pic-info-price">
													<p><span>Starting Form</span> <h4>250 $</h4></p>
												</div>
										</div>
									</div>
									<div class="criuse-info">
										<div class="criuse-info-left">
											<ul>
												<li><a class="c-hotel" href="#"><span> </span>6 Nights VIp/Luurious hotel </a></li>
												<li><a class="c-air" href="#"><span> </span> Return Air Ticket</a></li>
												<li><a class="c-fast" href="#"><span> </span> Complimentry beark fast</a></li>
												<li><a class="c-car" href="#"><span> </span> Car for All transfers</a></li>
												<div class="clear"> </div>
											</ul>
										</div>
										<div class="criuse-info-right">
											<ul>
												<li><a class="c-face" href="#"><span> </span> </a></li>
												<li><a class="c-twit" href="#"><span> </span> </a></li>
												<li><a class="c-tub" href="#"><span> </span> </a></li>
												<li><a class="c-pin" href="#"><span> </span> </a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>
								</div>
								<div class="criuse-grid-info">
									<h1><a href="#">Adventure</a></h1>
									<a class="btn" href="subpackages.php">Details</a>
								</div>
							</div>
							</div>
						
					</div>
				</div>
				<!---//End-criuse-grids----->
			</div>
	
<?php include('include/footer.php'); ?>