<?php 

$host = "10.60.175.69";
$port = "5432";
$dbname = "myevidence";
$user = "myevidence";
$password = "WTRB3Ilap8X6Nde";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($connection_string);


// if($dbconn){
//     echo "Connected to ". pg_host($dbconn); 
// }else{
//     echo "Error in connecting to database.";
// }

echo "<br />";