<?php ob_start();
include('include/header.php');
include('include/sidebar.php');
include('include/connection.php');
include('include/session_verification.php');
?>
   <!--main content start-->
    <section id="main-content">
	
	                     
	
      <section class="wrapper">
        <!--overview start-->
         <div class="row">
          <div class="col-lg-12">
	<?php
                       if(isset($_GET['pid']))
					   {
						 try {
							 $id=$_GET['pid'];
							 
	$sql2="DELETE FROM enquiry WHERE id=?"; 
		$query2 = $conn->prepare($sql2);
		$query2->bindParam(1,$id,PDO::PARAM_STR);
		$query2->execute();
		if($query2->rowCount())
		{
			echo '<script>
                                alert("Enquiry Detail Deleted Successfully.");
                              var windowlocation = window.location.href.split("?")[0];
                               window.location.href =windowlocation;
                                </script>';
		}
		else
		{
			echo '<script>
                                alert("Problem occur in deleting Enquiry Detail.");
                              var windowlocation = window.location.href.split("?")[0];
                               window.location.href =windowlocation;
                                </script>';
		}
}

							 
							  catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
					   }
                           ?>
		  
            <section class="panel">
              <header class="panel-heading">
                View Enquiries
              </header>
              <div class="panel-body">
                <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>




			<th>Enquiry ID</th>
                <th>enquiry_for</th>
               

				<th>full_name</th>
				<th>
mobile</th>
				<th>email</th>
<th>departure_from</th>
<th>message</th>
				<th>Action</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
			
			<th>Enquiry ID</th>
                <th>enquiry_for</th>
               

				<th>full_name</th>
				<th>
mobile</th>
				<th>email</th>
<th>departure_from</th>
<th>message</th>
				<th>Action</th>
            </tr>
        </tfoot>
 
        <tbody>
            <?php
			try {
     $sql ="SELECT * FROM enquiry";
    $query= $conn -> prepare($sql);
    $query-> execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	?>
                                              <tr>
											  <td><?php echo $row['id']; ?></td>
                                          	  <td><?php echo $row['enquiry_for']; ?></td>    
                                               
												<td><?php echo $row['full_name']; ?></td>
                          
												<td><?php echo $row['mobile']; ?></td>        
												<td><?php echo $row['email']; ?></td>                              
							        <td><?php echo $row['departure_from']; ?></td>	
												<td><?php echo $row['message']; ?></td>					 
               <td>
												   <div class="btn-group">
												  
                        <a class="btn btn-danger white" onclick="return confirm('Are you sure you want to delete this enquiry detail?');" href="viewenquiries.php?pid=<?php echo $row['id'] ?>">Delete</a>
						</div>
						</td>                                   
                                              </tr>
                                                
                    <?php
                                           }   
                                      
									  } 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
 ?>                           
			 </tbody>
    </table>
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
</body>

</html>
 
 