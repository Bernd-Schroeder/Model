<?php
// Connection Variables to the mysqli database
$dbhost  = "db623243840.db.1and1.com";
$dbuser  = "dbo623243840";
$dbpass  = "1234test1234";
$dbtable = "db623243840";
$dberror1 = "Could not connect to the database!";
$dberror2 = "Could not find selected table!";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbtable);
if ($mysqli->connect_error) 
{ die('Connect Error: ' . $mysqli->connect_error); }
?>