<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'stephenindia_dba');
define('DB_PASSWORD', 'Exodus7$');
define('DB_NAME', 'webdev');
 
/* Attempt to connect to the database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
