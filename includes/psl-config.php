<?php

$dbHost=mysql_connect("us-cdbr-iron-east-02.cleardb.net", "b56ffe7f8b28aa", "9115eb8a"); 
or die("Can't connect: " . mysql_error());
// mysql_select_db("heroku_edd3784193355c6", $dbHost);
// or die("Can't find database: " . mysql_error());

// $output = mysql_query("SELECT 
//                        id 
//                        FROM test", $dbHost);
//     or die("Bad query: " . mysql_error());

// print "<select name='state'>";

//   while ($row = mysql_fetch_assoc($output)) 
//   {
//    print "<option value='{$row['s_abbreviation']}'>{$row['s_abbreviation']}</option>"; 
//   }
  
// print "</select>";
// mysql_free_result($output);
// mysql_close($dbHost);

/**
 * These are the database login details
 */  
// $url = parse_url(getenv("mysql://b56ffe7f8b28aa:9115eb8a@us-cdbr-iron-east-02.cleardb.net/heroku_edd3784193355c6?reconnect=true"));

// $server = $url["us-cdbr-iron-east-02.cleardb.net"];
// $username = $url["b56ffe7f8b28aa"];
// $password = $url["9115eb8a"];
// $db = substr($url["path"], 1);

// $conn = new mysqli($server, $username, $password, $db);

// if ($conn->connect_error){

//     die("Connection failed: " . $conn->connect_error);
// }
// //echo "Connected successfully";
// }
?>