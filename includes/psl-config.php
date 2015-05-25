<?php

/**
 * These are the database login details
 */  
$url = parse_url(getenv("mysql://b56ffe7f8b28aa:9115eb8a@us-cdbr-iron-east-02.cleardb.net/heroku_edd3784193355c6?reconnect=true"));

//Global Variables to be imported into php files
define("HOST", $url["host"]); 
define("USER", $url["user"]); 
define("PASSWORD", $url["pass"]); 
define("DATABASE", substr($url["path"], 1)); 
// define("CAN_REGISTER", "any"); 
// define("DEFAULT_ROLE", "member"); 
// define("SECURE", FALSE); 

//construct db connection object
$dbConn = new mysqli(HOST, USER, PASSWORD, DATABASE);

?>

