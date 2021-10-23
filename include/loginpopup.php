<div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="float:left;padding-bottom:20px">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="modal-header1">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i> <span class="login-title">
                    Customer Login
                </span>
                </div>
     
                    <div class="col-lg-12 login-form">
                          <form id="loginform1" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="email" class="form-control" name="username" value="" placeholder="username or email" required>                                        
                                    </div>
                                <input type="hidden" id="subpackage_id" name="subpackage_id"> 
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" >
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" id="btn-login" class="btn btn-success" value="Login" name="login"/>
                                  
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
  if(isset($_POST['login']))
  { 
	  try {
    $_SESSION['subpackage_id']=$_POST['subpackage_id'];
echo "<script >alert(". $_SESSION['subpackage_id'].")</script>"; 
    $email=$_POST['username'];
    $password=sha1($_POST['password']);
     $sql ="SELECT * FROM customerdata WHERE email=? and password=?";
	 
	 
    $query= $conn -> prepare($sql);
    $query-> bindParam(1, $email, PDO::PARAM_STR);
    $query-> bindParam(2, $password, PDO::PARAM_STR);
	
    $query-> execute();
   // $results=$query->fetchAll(PDO::FETCH_OBJ);
   $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount() > 0)
  {
	 //echo "<h1>test</h1>";
//print_r($results);
     $_SESSION['client_id']=$query->rowCount();
	 $_SESSION['customer_id']=$results['Id'];
	 
	 echo  $_SESSION['customer_name']=$results['firstname']." ".$results['lastname']; 
	  //echo "<script >alert(". $_SESSION['customer_id'].")</script>"; 
 echo "<script > document.location = 'customer/checkoutcart.php'; </script>";
  } 
  else
  {
    echo "<script>alert('Invalid Customer Details');</script>";
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