<?php
/**
 * These are the database login details
 */  
$url = parse_url(getenv("mysql://b56ffe7f8b28aa:9115eb8a@us-cdbr-iron-east-02.cleardb.net/heroku_edd3784193355c6?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>