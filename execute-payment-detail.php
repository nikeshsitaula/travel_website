<?php 
include('include/header.php');
include('include/connection.php');
?>
	<script>
window.alert('Thank you for Purchasing ');
</script>		
<?php
if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){ 
    // Get transaction information from URL 
echo    $item_number = $_GET['item_number'];  
   echo $txn_id = $_GET['tx']; 
   echo $payment_gross = $_GET['amt']; 
   echo $currency_code = $_GET['cc']; 
   echo $payment_status = $_GET['st']; 
     
    // Get packages info from the database 
    $productResult = $db->query("SELECT * FROM packages WHERE id = ".$item_number); 
    $productRow = $productResult->fetch_assoc(); 
     
    // Check if transaction data exists with the same TXN ID. 
    $prevPaymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'"); 
 
    if($prevPaymentResult->num_rows > 0){ 
        $paymentRow = $prevPaymentResult->fetch_assoc(); 
        $payment_id = $paymentRow['payment_id']; 
        $payment_gross = $paymentRow['payment_gross']; 
        $payment_status = $paymentRow['payment_status']; 
    }else{ 
        // Insert tansaction data into the database 
        $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')"); 
        $payment_id = $db->insert_id; 
    } 
} 
?>
