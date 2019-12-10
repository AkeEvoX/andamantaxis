<?php


	/*
	$host = "127.0.0.1";
	$username = "andaman4_reserv";
	$password = "8FS4zbXl321";
	$dbname = "andaman4_reserv";
	*/
	$port = "3306";

	$host = 'andamantaxis.com';
	$username='andaman4_remote';
	$password= 'kCcjcWOfw';
	$dbname = 'andaman4_dev';



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