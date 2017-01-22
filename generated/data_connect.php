<?php
// Connection Variables to the mysqli database
$dbhost  = "localhost";
$dbuser  = "db_user";
$dbpass  = "3Vz!to23";
$dbtable = "3appy_sql";
$dberror1 = "Could not connect to the database!";
$dberror2 = "Could not find selected table!";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbtable);
if ($mysqli->connect_error) 
{ die('Connect Error: ' . $mysqli->connect_error); }
?>