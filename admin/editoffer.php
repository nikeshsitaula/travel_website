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
		$pname=$_POST['pname'];
		$facilities=$_POST['facilities']; 
		if(isset($_FILES['pimage']))
	{
		$name=strtolower($_FILES['pimage']['name']);
		$tmp_name=$_FILES['pimage']['tmp_name'];
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		$compare=array('gif','jpeg','jpg','png');
		if(isset($name))
		{
			if(!empty($name))
			{
				if(in_array($ext,$compare))
				{
					$location='upload/';
					if(file_exists($location.$name))
					{
						$l=3;
						$c='abcdefghijklmnopqrstuvwxyz';
						$name='';
						for($i=0;$i<=$l;$i++)
						{
							$name.=$c[rand(0,strlen($c))];
							}
							$name=$name.'.'.$ext;
					}
					if(move_uploaded_file($tmp_name,$location.$name))
					{
						$loc_file=$location.$name;
						$sql="UPDATE `offers` SET `name` = ?, `img_path` = ?, `facility_highlight` = ? WHERE `offers`.`id` = ?"; 
		$query = $conn->prepare($sql);
		$query->bindParam(1,$pname,PDO::PARAM_STR);
		$query->bindParam(2,$loc_file,PDO::PARAM_STR);
		$query->bindParam(3,$facilities,PDO::PARAM_STR);
		$query->bindParam(4,$pid,PDO::PARAM_STR);
		$query->execute();
		if($query->rowCount())
		{
			echo '<script> alert("Special Offer details has been Updated");</script>';
			header('Refresh:5;url=manageoffers.php');
		
		}
		else
		{
			echo '<script> alert("Please Correct details, try again!");</script>';

		}			}
		}
				else
				{
					echo '<div class="alert alert-danger">Enter a valid image';
				}
			}
			else
				{
		$sql2="UPDATE `offers` SET `name` = ?,`facility_highlight` = ? WHERE `offers`.`id` = ?"; 
		$query2 = $conn->prepare($sql2);
		$query2->bindParam(1,$pname,PDO::PARAM_STR);
		$query2->bindParam(2,$facilities,PDO::PARAM_STR);
		$query2->bindParam(3,$pid,PDO::PARAM_STR);
		$query2->execute();
		if($query2->rowCount())
		{
			echo '<script> alert("Special Offer details has been Updated");</script>';
		header('Refresh:5;url=manageoffers.php');
		}
		else
		{
			echo '<script> alert("Please Correct details, try again!");</script>';

		}		
				}
		}
	}
		
		} catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
	}
	?>

        
		  
            <section class="panel">
              <header class="panel-heading">
                Update Special Offer
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="" enctype="multipart/form-data">
<?php
 if(isset($_GET['pid']))
					   {
						 try {
	$id=$_GET['pid'];  
	$sql ="SELECT * FROM offers where id=?";
    $query= $conn -> prepare($sql);
	$query->bindParam(1,$id,PDO::PARAM_STR);
    $query-> execute();
	if ($row = $query->fetch(PDO::FETCH_ASSOC))
{
                           ?>							 

				   <div class="form-group ">
                      <label for="pid" class="control-label col-lg-2">offer ID <span class="required">*</span></label>
                      <div class="col-lg-10">
					  

                        <input class=" form-control" id="pid" value="<?php echo $row['id']; ?>" name="pid" type="text" required readonly/>
                      </div>
                    </div>
					
					
					<div class="form-group ">
                      <label for="pname" class="control-label col-lg-2">Offer Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="pname" name="pname" value="<?php echo $row['name']; ?>" type="text" required/>
                      </div>
                    </div>
                 
					
					
					
					 <div class="form-group ">
                      <label for="pimage" class="control-label col-lg-2">Offer Image<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="pimage" name="pimage" type="file" />
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="facilities" class="control-label col-lg-2">Facilities<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="facilities" value="<?php echo $row['facility_highlight']; ?>" name="facilities" type="text" required/>
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
 
 