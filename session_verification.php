<?php
ob_start();
session_start();
include('include/connection.php');

$id=$_SESSION['id'];
$sql ="SELECT * FROM package where id=?";
    $query= $conn -> prepare($sql);
	$query->bindParam(1,$id,PDO::PARAM_STR);
    $query-> execute();
	if ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	    $id_session=$row['id'];

							 }
if(empty($id_session))
{
header('Location:index.php'); 
}
ob_end_flush();
?>