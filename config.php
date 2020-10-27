<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql2.freemysqlhosting.net');
define('DB_USERNAME', 'sql2373022');
define('DB_PASSWORD', 'yZ6!pR4!');
define('DB_NAME', 'sql2373022');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>