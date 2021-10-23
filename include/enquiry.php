<div class="modal fade in" id="myEnquiryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="float:left;padding-bottom:20px">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="modal-header1">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i> <span class="login-title">
                  Make an Enquiry
                </span>
                </div>
     
                    <div class="col-lg-12 login-form">
                          <form id="loginform1" class="form-horizontal" role="form" method="post">
                                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="enquiry" type="text" class="form-control" name="enquiry" value="" placeholder="Enquiry for Package" required>                                        
                                    </div>   
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="fullname" type="text" class="form-control" name="fullname" value="" placeholder="Full Name" required>                                        
                                    </div>
                                
                          <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="mobile" type="text" class="form-control" name="mobile" value="" placeholder="Mobile Number" required>                                        
                                    </div>
									 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-email" type="email" class="form-control" name="email" value="" placeholder="Email" required>                                        
                                    </div>
                                    
						<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="departure" type="text" class="form-control" name="departure" value="" placeholder="Departure From" required>                                        
                                    </div>
                               <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<textarea id="message" name="message" class="form-control" placeholder="Your Message"></textarea>
                                                                          
                                    </div> 
                            


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" id="btn-login" class="btn btn-success" value="Submit" name="enquiry"/>
                                  
                                    </div>
                                </div>


                            </form>   
                    </div>
               
			</div>
				</div>
		  </div>

		</div>
	  </div>

<?php
include('include/connection.php');
  if(isset($_POST['enquiry']))
  {
	  try {
    
    $enquiry=$_POST['enquiry'];
 $fullname=$_POST['fullname'];
  $mobile=$_POST['mobile'];
   $email=$_POST['email'];
    $departure=$_POST['departure'];
	 $message=$_POST['message'];
     $sql="INSERT INTO enquiry(enquiry_for,full_name,mobile,email,departure_from,message) VALUES(?,?,?,?,?,?)";
		$query = $conn->prepare($sql);
		// Binding Post Values
		$query->bindParam(1,$enquiry,PDO::PARAM_STR);
		$query->bindParam(2,$fullname,PDO::PARAM_STR);
		$query->bindParam(3,$mobile,PDO::PARAM_STR);
		$query->bindParam(4,$email,PDO::PARAM_STR);
		$query->bindParam(5,$departure,PDO::PARAM_STR);
		$query->bindParam(6,$message,PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $conn->lastInsertId();
		if($lastInsertId)
		{
			echo '<script> alert("Thanks for Submitting Enquiry");</script>';
		
		}
		else
		{
			echo '<script> alert("Please Correct details, try again!");</script>';

		}
  } 
  catch(PDOException $er) 
  {
  echo "Connection failed: " . $er->getMessage();
}
}
?>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>
  $(document).ready(function($) {
        
				$("#loginform1").validate({
                rules: {
                    username: "required",                    
                    password: {
                        required: true,
                        minlength: 8
                    }
                 
                },
                messages: {
                    username: "Please enter Username",                   
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    }
                },
                 
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
    });
	</script>