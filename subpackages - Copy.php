<?php include('include/header.php');
include('include/connection.php');
 ?>
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

					 <?php
 if(isset($_GET['pid']))
					   {
			try {
				$id=$_GET['pid']; 
     $sql ="SELECT * FROM sub_package where package_id=?";
    $query= $conn -> prepare($sql);
	$query->bindParam(1,$id,PDO::PARAM_STR);
    $query-> execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	?>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="admin/<?php echo $row['img_path']; ?>" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> <?php echo $row['highlights']; ?> </a></li>
									
									<div class="clear"> </div>
								</ul>
								
								
								
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#"><?php echo $row['subpackage_name']; ?></a></li>
									<li><a class="d-price" href="#">$<?php echo $row['price']; ?></a></li>
									<li><a href="#0" class="btn-buy js-cd-add-to-cart btn btn-primary btn-lg btn-block" data-bid="<?php echo $row['id']; ?>" data-mname="<?php echo $row['subpackage_name']; ?>" data-price="<?php echo $row['price']; ?>" style="margin-left:25px;background-image: linear-gradient(to right,#2C3E50,#1DD2AF); cursor: pointer;">Add to Cart</a>
				</li>
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
					   }
 ?>                           
						
							<div class="clear"> </div>
					</div>
				</div>
			</div>
		
			<!---loading-more-script--->
			<!---//loading-more-script--->
		</div>
		<div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
		Cart
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<div class="cd-cart__footer">
				<a href="#" data-toggle="modal" data-target="#myModal2" class="cd-cart__checkout">
          <em >Checkout - $<span id="checkp">0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</div>
		</div>
	</div> <!-- .cd-cart__content -->
</div>

<script src="cart/assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="cart/assets/js/main.js"></script> 
<?php include('include/footer.php'); ?>