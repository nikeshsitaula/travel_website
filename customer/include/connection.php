
<?php
$host="localhost";
$uname='root';
$pass='';
$dbname='travel_website';
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
?>
