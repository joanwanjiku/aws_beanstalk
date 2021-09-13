<?php 
	// $con=mysqli_connect("aa14bpxfikgbsn4.c5hd6ydzohf5.eu-west-3.rds.amazonaws.com
	// ","admin","cafescript","ebdb");
	// $dbhost = $_SERVER['RDS_HOSTNAME'];
	// $dbport = $_SERVER['RDS_PORT'];
	// $dbname = $_SERVER['RDS_DB_NAME'];
	// $charset = 'utf8' ;
	$link = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(!$link)
	{
		echo "Connection is not Successfully";
	}
?>