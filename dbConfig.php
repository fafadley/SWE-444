<?php 
// Include configuration file 
require_once 'DB-CONFG.php'; 
 
// Create database connection 
$db = new mysqli(DBHOST, DBUSER,DBPWD, DBNAME); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}