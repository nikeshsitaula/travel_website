<?php

if(isset($_POST['submit1']))

{

	if(isset($_POST['uname']) && isset($_POST['upass']))

	{

		$u_name=mysqli_real_escape_string($connect, $_POST['uname']);

		$u_pass=mysqli_real_escape_string($connect, md5($_POST['upass']));

		$query="select * from admin where user_name='$u_name' and password='$u_pass'";

		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result)>0)

		{

		    while($row=mysqli_fetch_array($result))

            {

                print_r($row);

                

                echo '<script> alert("Please Correct and Password.....!!!!");</script>';

			 session_start();

            $_SESSION['controlar'] = $row['user_name'];

			$_SESSION['password']=$row['password'];

			header('location:admin/index.php');

            }  

		    

		}

			else

				{

				echo '<script> alert("Please Correct UserName and Password.....!!!!");</script>';

					/*session_start();

					$_SESSION['controlar'] ='';

					$_SESSION['password']='';*/

				
				}

	}

}

	ob_flush();

	?>