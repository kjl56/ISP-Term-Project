<?php
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'isp_ys96');
 
/* Attempt to connect to MySQL database */
//$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//$mysqli = new mysqli('localhost', 'root', '', 'isp_ys96');
$mysqli = mysqli_connect("database-2.cstibm4pl4qd.us-east-2.rds.amazonaws.com","admin","adminpassword","database_2",3306);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>