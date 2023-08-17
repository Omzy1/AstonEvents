<?php
$dbhost = 'localhost'; 
$dbuser = 'u-200117764';
$dbpass = 'GttTDWjPnNMJdvU';
$dbname = 'u_200117764_db';

try{
$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex){
  echo "Sorry, a database error occurred.";
echo "Error details: " . $ex->getMessage();
exit;
}
?>