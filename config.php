<?php
define('DB_SERVER', 'db1.cs.uakron.edu:3306');
define('DB_USERNAME', 'ys96');
define('DB_PASSWORD', 'eithei2D');
define('DB_NAME', 'ISP_ys96');
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

include 'ChromePhp.php';
ChromePhp::log('This is just a log message');
ChromePhp::warn("This is a warning message " ) ;
ChromePhp::error("This is an error message" ) ;
ChromePhp::log($_SERVER);
 
foreach ($_SERVER as $key => $value) {
    ChromePhp::log($key, $value);
}

?>