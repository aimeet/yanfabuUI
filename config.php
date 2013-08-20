<?php
########## MySql details #############
$username = "root"; //mysql username
$password = "123123"; //mysql password
$hostname = "127.0.0.1"; //hostname
$databasename = 'newPage'; //databasename
//connect to database

$connecDB = mysql_connect($hostname, $username, $password)or die('could not connect to database');
$db = mysql_select_db($databasename,$connecDB);
mysql_query("set names utf8");

?>