<?php 
session_start(); 
if ($_SESSION['admin'] != 'yes') 
die("<font size=\"+5\">Error !!!! Pls <a href=\"https://www.andamantaxis.com/admin3/login.php\">Login</a></font>"); 
mysql_connect("localhost", "andaman4_package", "pVim53Y3f4") or die(mysql_error()); 
mysql_select_db("andaman4_package"); 
?>
