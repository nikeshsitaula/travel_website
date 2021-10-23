<?php
ob_start();
session_start();
include('include/connection.php');

$id=$_SESSION['admin_id'];
if($id<=0)
{
header('Location:../index.php'); 
}
ob_end_flush();
?>