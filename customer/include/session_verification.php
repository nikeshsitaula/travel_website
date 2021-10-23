<?php
ob_start();
session_start();
include('include/connection.php');

$id=$_SESSION['client_id'];

//echo "<script>alert(". $id.")</script>"; 
if($id<=0)
{
echo "<script>alert('Invalid Customer Details');</script>";
header('Location:../index.php'); 
}
ob_end_flush();
?>