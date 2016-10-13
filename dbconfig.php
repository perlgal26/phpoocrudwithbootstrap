<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "password";
$DB_name = "dbpdo";



try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	// set the PDO error mode to exception
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
}
catch(PDOException $e)
{
	//print $e->getMessage();
	echo "Connection failed: " . $e->getMessage();
}

include_once 'class.crud.php';

$crud = new crud($DB_con);


/*
in case you get the error : SQLSTATE[HY000] [2002] No such file or directory
do this steps:
mkdir /var/mysql
ln -s /tmp/mysql.sock /var/mysql/mysql.sock
*/
?>
