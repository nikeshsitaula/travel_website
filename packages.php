<?php include('include/header.php'); 
include('include/connection.php');

?>
<!---images-hover-effects--->
		<link rel="stylesheet" href="css/zalki_hover_img.css" type="text/css" media="screen">
		<script src="js/jquery.zalki_hover_img.min-0.2.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.main_box').ZalkiHoverImg(
				);
				});
		</script>

		<!---//images-hover-effects--->
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>Travel Packages</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
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
							<form>
								<span> Where</span>
								<input class="dest" id="myInput" type="text" Placeholder="Destination">
							<!--	<span> When</span>
								<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
								--><input type="submit"  value="Search" />
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
						<h3>Available Packages</h3>
					</div>
					<div class="destination-places-grids" id="catdiv">
						
						<?php
			try {
     $sql ="SELECT * FROM package";
    $query= $conn -> prepare($sql);
    $query-> execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	?>
						<div class="destination-places-grid last-d-grid" onclick="location.href='subpackages.php?pid=<?php echo $row['id'] ?>';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="admin/<?php echo $row['img_path']; ?>" title="place-name" />
								<a href="subpackages.php?pid=<?php echo $row['id'] ?>" class="popup"> </a>
								
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> <?php echo $row['facility_highlight']; ?></a></li>
									
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#"><?php echo $row['package_name']; ?></a></li>
								<!--<li><a class="d-place" href="#">	<?php echo $row['package_desc']; ?></a></li>
									--><li><a class="d-price" href="#">Starting Price $<?php echo $row['start_from']; ?></a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<?php
                                           }   
                                      
									  } 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
 ?>         
						<div class="clear"> </div>
					</div>
				</div>
			</div>
		
			<!---loading-more-script--->
			<!---//loading-more-script--->
		</div>
	
<script>
$(document).ready(function(){
  $("#myInput").on("click", function() {
    var value = $(this).val().toLowerCase();
	//alert(value);
    $("#catdiv div.destination-places-grid").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

	
<?php include('include/footer.php'); ?>