
<?php
$host="us-cdbr-east-04.cleardb.com";
$uname='b8a7f0a7c058da';
$pass='b0154a64';
$dbname='heroku_d955542c77e89d6';
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}
?>
