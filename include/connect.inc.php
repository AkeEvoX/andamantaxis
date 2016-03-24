<?php


	$host = "localhost";
	$port = "3306";

	$username = "root";
	$password = "P@ssw0rd";
	$dbname = "andaman4_reserv";

	/*
	$username = "andaman4_reserv";
	$password = "8FS4zbXl";
	$dbname = "andaman4_reserv";
	*/
	$conn = new mysqli;
	$conn->connect($host,$username,$password,$dbname,$port);
	$conn->set_charset("utf8");
	
	$conn1 = new mysqli;
	$conn1->connect($host,$username,$password,$dbname,$port);
	$conn1->set_charset("utf8");
	
	$conn2 = new mysqli;
	$conn2->connect($host,$username,$password,$dbname,$port);
	$conn2->set_charset("utf8");
	
	$conn3 = new mysqli;
	$conn3->connect($host,$username,$password,$dbname,$port);
	$conn3->set_charset("utf8");
	
	$username = "";
	$password = "";
?>
<?php session_start() ?>