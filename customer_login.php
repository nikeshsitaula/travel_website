<?php include('include/header.php'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Customer Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform1" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="email" class="form-control" name="username" value="" placeholder="username or email" required>                                        
                                    </div>
                                
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
<?php include('include/footer.php'); ?>

<?php
include('include/connection.php');
  if(isset($_POST['login']))
  {
	  try {
    
    $email=$_POST['username'];
    $password=sha1($_POST['password']);
     $sql ="SELECT * FROM customerdata WHERE email=? and password=?";
    $query= $conn -> prepare($sql);
    $query-> bindParam(1, $email, PDO::PARAM_STR);
    $query-> bindParam(2, $password, PDO::PARAM_STR);
    $query-> execute();
    //$results=$query->fetchAll(PDO::FETCH_OBJ);
	$results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount() > 0)
  {
	  $_SESSION['customer_id']=$results['Id'];
    $_SESSION['client_id']=$query->rowCount();
	$_SESSION['customer_name']=$results['firstname']." ".$results['lastname'];
    echo "<script > document.location = 'customer/index.php'; </script>";
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