<?php ob_start();
include('include/header.php');
include('include/sidebar.php');
include('include/session_verification.php');
include('include/connection.php');
?>
   <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
         <div class="row">
          <div class="col-lg-12">
		  

                      <?php
	if(isset($_POST['update']))
	{
	//Post Values
	try {
		$pid=$_POST['pid'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$cemail=$_POST['cemail']; 
		$sql2="UPDATE `customerdata` SET `firstname` = ?, `lastname` = ?, `email` = ? WHERE `customerdata`.`Id` = ?"; 
		$query2 = $conn->prepare($sql2);
		$query2->bindParam(1,$fname,PDO::PARAM_STR);
		$query2->bindParam(2,$lname,PDO::PARAM_STR);
		$query2->bindParam(3,$cemail,PDO::PARAM_STR);
		$query2->bindParam(4,$pid,PDO::PARAM_STR);
		$query2->execute();
		if($query2->rowCount())
		{
			echo '<script> alert("Customer details has been Updated");</script>';
		header('Refresh:5;url=managecustomer.php');
		}
		else
		{
			echo '<script> alert("Please Correct details, try again!");</script>';

		}		
				}
		 catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
	}
	?>

        
		  
            <section class="panel">
              <header class="panel-heading">
                Update Customer Details
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="" enctype="multipart/form-data">
<?php
 if(isset($_GET['cid']))
					   {
						 try {
	$id=$_GET['cid'];  
	$sql ="SELECT * FROM customerdata where id=?";
    $query= $conn -> prepare($sql);
	$query->bindParam(1,$id,PDO::PARAM_STR);
    $query-> execute();
	if ($row = $query->fetch(PDO::FETCH_ASSOC))
{
                           ?>							 

				   <div class="form-group ">
                      <label for="pid" class="control-label col-lg-2">Customer ID <span class="required">*</span></label>
                      <div class="col-lg-10">
					  

                        <input class=" form-control" id="pid" value="<?php echo $row['Id']; ?>" name="pid" type="text" required readonly/>
                      </div>
                    </div>
					
					
					<div class="form-group ">
                      <label for="fname" class="control-label col-lg-2">First Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fname" name="fname" value="<?php echo $row['firstname']; ?>" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="lname" class="control-label col-lg-2">Last Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="lname" name="lname" value="<?php echo $row['lastname']; ?>" type="text" required/>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Email<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="cemail" name="cemail" value="<?php echo $row['email']; ?>" type="email" required/>
                      </div>
                    </div>
					
					
					
					<?php
					 }
						 }					 catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
					   }
					   
					   ?>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" style="background-color: #0064d2 !important;color: #FFF;" name="update" type="submit" >Update</button>
               
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
       
        <!-- statics end -->



      </section>
     
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
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
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
   
    alert(table.row( this ).data()[0]);

} );
});
</script>
</body>

</html>
 
 