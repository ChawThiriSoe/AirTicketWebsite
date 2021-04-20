<?php
// connection data (server_address,database,name,password)
$hostdb='localhost';
$namedb='airticket';
$userdb='root';
$passdb='';

try{
	// connect and create the PDO object
	
	$db=new PDO("mysql:host=$hostdb;dbname=$namedb",$userdb,$passdb);
}
catch (PDOException $e){
	echo $e->getMessage();
}
?>