
<?php include('include/header.php');
include('include/connection.php');  ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="signupbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Customer Sign Up</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform1" class="form-horizontal" method="post" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control required" name="email"  placeholder="Email Address" required/>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="firstname" placeholder="First Name" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="lastname" placeholder="Last Name" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control required" name="passwd" placeholder="Password" required/>
                                    </div>
                                </div>
                                    
                                
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input id="btn-signup" onclick="validate();" name="signup" type="submit" class="btn btn-info" Value="Sign Up">                          
                                    </div>
                                </div>
                            
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    


<?php
	if(isset($_POST['signup']))
	{
	//Post Values
	try {
		$email=$_POST['email'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$passwd=sha1($_POST['passwd']);
		$ret="SELECT * FROM customerdata where email=?";
		$queryt = $conn -> prepare($ret);
		$queryt->bindParam(1,$email,PDO::PARAM_STR);
		$queryt -> execute();
		$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
		if($queryt -> rowCount() == 0)
		{
		// Query for Insertion
		$sql="INSERT INTO customerdata(firstname,lastname,email,password) VALUES(?,?,?,?)";
		$query = $conn->prepare($sql);
		// Binding Post Values
		$query->bindParam(1,$firstname,PDO::PARAM_STR);
		$query->bindParam(2,$lastname,PDO::PARAM_STR);
		$query->bindParam(3,$email,PDO::PARAM_STR);
		$query->bindParam(4,$passwd,PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $conn->lastInsertId();
		if($lastInsertId)
		{
			echo '<script> alert("Customer has been Registered");</script>';
		
		}
		else
		{
			echo '<script> alert("Please Correct details, try again!");</script>';

		}
		}
		 else
		{
			echo '<script> alert("Email-id already exist. Please try again");</script>';
		
		}
		} catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
	}
	?>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script>
  $(document).ready(function($) {
        
				$("#signupform1").validate({
                rules: {
                    email: "required",                    
                    passwd: {
                        required: true,
                        minlength: 8
                    }
                 
                },
                messages: {
                    username: "Please enter Username",                   
                    passwd: {
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