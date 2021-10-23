<?php
ob_start();
include('include/header.php');
include('include/sidebar.php');
include('include/connection.php');
//include('include/session_verification.php');

?>


   <!--main content start-->
    <section id="main-content">
	
	                     
	
      <section class="wrapper">
        <!--overview start-->
         <div class="row">
          <div class="col-lg-12">
	
		  
            <section class="panel">
              <header class="panel-heading">
                Final Cart Checkout
              </header>
              <div class="panel-body">
			  <form action="final-cart.php" method="post">	
                <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th>ID</th>
	<th >
Customer ID
</th><th >
Customer Name
</th>	
<th >
Package ID
</th>
<th >
Sub-Package ID
</th>
<th >
Sub-Package Name
</th>
<th >
Package Amount
</th>
<th >
Booking From
</th>
<th >
Booking To
</th>
            </tr>
        </thead>
 
       
        <tbody>
	
		<?php
		try {
			
		$array =  explode(',', $_SESSION['subpackage_id']);
		$total=0;
		foreach ($array as $id) 
		{
	$sql ="SELECT * FROM sub_package where id=?";
    $query= $conn -> prepare($sql);
	$query->bindParam(1,$id,PDO::PARAM_STR);
    $query-> execute();
	if ($row = $query->fetch(PDO::FETCH_ASSOC))
{
		?>
			<tr>
           <td></td>
   <td><?php echo $_SESSION['customer_id'];?></td>
      <td><?php echo $_SESSION['customer_name'];?></td>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['package_id']; ?></td>
<td><?php echo $row['subpackage_name']; ?></td>
<td>$<?php echo $row['price']; ?></td>
 <?php $total+=$row['price']; ?>
 <td><?php 
 
 echo $_POST['b1'.$row['id']]; ?></td>

<td><?php 
 echo $_POST['b2'.$row['id']]; ?></td>			</tr>
	<?php
	$sql2="INSERT INTO `package_booking` (`cid`, `cname`, `pid`, `sub_pid`, `sub_pname`, `amount`, `bfrom`, `bto`) VALUES (?,?,?,?,?,?,?,?)";
		$query2 = $conn->prepare($sql2);
		// Binding Post Values
		$query2->bindParam(1,$_SESSION['customer_id'],PDO::PARAM_STR);
		$query2->bindParam(2,$_SESSION['customer_name'],PDO::PARAM_STR);
		$query2->bindParam(3,$row['id'],PDO::PARAM_STR);
		$query2->bindParam(4,$row['package_id'],PDO::PARAM_STR);
		$query2->bindParam(5,$row['subpackage_name'],PDO::PARAM_STR);
		$query2->bindParam(6,$row['price'],PDO::PARAM_STR);
		$query2->bindParam(7,$_POST['b1'.$row['id']],PDO::PARAM_STR);
		$query2->bindParam(8,$_POST['b2'.$row['id']],PDO::PARAM_STR);
		$query2->execute();
		$lastInsertId = $conn->lastInsertId();	
	
		}
		}
		} 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
			?>
			</tbody>
			
			 <tfoot>
            <tr>
			<th></th>
			<th colspan="3">
<strong>Final Cart Total</strong>
</th>
<th colspan="3">
<strong>$<?php echo $total; $_SESSION['checkout']=$total;?></strong>
<input type="hidden" name="amount" id="amount" value="<?php echo $total; ?>">
</th>
<th colspan="2" align="right">

</th> 
            </tr>
        </tfoot>
 
			
    </table>
	<div id="paypal-button" style="float:right;"></div>
	
	</form>
              </div>
            </section>
          </div>
        </div>
       
        <!-- statics end -->



      </section>
      
        
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->


  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
	
	

	
	
	
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
 
	
	
	
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
  
 
  
  var table = $('#example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table

  
  $('#example tbody').on( 'click', 'tr', function () {
   
  //  alert(table.row( this ).data()[0]);

} );
});
</script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
var test =$("#amount").val();
//alert(test);
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'Aa__kFfguZO_Bh_MilO7v2W7QcQLj-RRjm7VWvVilolnW7qRjSPWIbkfh9pYaz1fsM2YyGO_eA5JHuHU',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
		
	  return actions.payment.create({
	

        transactions: [{
          amount: {
            total: test,
            currency: 'AUD'
          }
        }],
		redirect_urls:
        {
          return_url: 'http://localhost/travel_website/customer/execute-payment-detail.php',
		}
		
	  
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
    //  window.alert('Thank you for your purchase!');
		return actions.redirect();
      });
    }
  }, '#paypal-button');

</script>
</body>

</html>
 
 