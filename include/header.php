<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Travel Website</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<!---smoth-scrlling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrlling---->
		<!--Start of Tawk.to Script-->
			<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/6140112025797d7a89fecfc8/1ffh45qb0';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
			</script>
			<!--End of Tawk.to Script-->
	
		<!---webfonts---->
		<script>
$(document).ready(function() {

  $(window).scroll(function () { 

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 99) {
      $('#nav_bar').addClass('navbar-fixed-top');
    }

    if ($(window).scrollTop() < 100) {
      $('#nav_bar').removeClass('navbar-fixed-top');
    }
  });
});
</script>
		
	<style>
	.navbar-fixed-top {
  position: fixed;
  top: 0;
  width: 100%;
  z-index:1;
  background:#fff;
}
</style>	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		
		<link rel="stylesheet" href="cart/assets/css/style.css" />
		<!---//calender-style---->
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
			<div class="top-header" id="header">
				<div class="wrap">
				<div class="top-header-left">
					<ul>
							<li><a href="admin_login.php"><span> </span> Admin Login</a></li>
						<li><a href="customer_login.php"><span> </span> Customer Login</a></li>
						<li><p><span> </span>Not a Member ? </p>&nbsp;<a class="reg" href="register.php"> Register</a></li>
						<li><p class="contact-info">Call Us Now :123-456-4567</p></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a class="fa fa-facebook" target="_blank" href="https://www.facebook.com/"><span> </span></a></li>
						<li><a class="fa fa-google"  target="_blank" href="https://www.gmail.com/"><span> </span></a></li>
						<li><a class="fa fa-instagram" target="_blank" href="https://www.instagram.com/"><span> </span></a></li>
						<!--<li><a class="pin" href="#"><span> </span></a></li>
						--><div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!----//End-top-header----->
			<!---start-header---->
			<div class="header" id="nav_bar">
				<div class="wrap">
				<!--- start-logo---->
				<div class="logo">
					<a style="color:#2BD5B4!important;font-size:23px;font-weight: bold;" href="index.php">Travel Packages</a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
						<ul class="flexy-menu thick orange">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="">Destinations</a>
								
							</li>
							<li><a href="packages.php">Packages</a></li>
							
							<li><a href="#">Holidays</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/modernizr.custom.js"></script>
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
			<!---//End-header---->
		</div>
			<!----start-top-nav-script---->
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<!--<script type="text/javascript">$(document).ready(function(){
			$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});
			</script>-->
		<!----//End-top-nav-script---->