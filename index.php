<?php
$hostname = "eu-cdbr-west-01.cleardb.com";
$username = "bad13880008aba";
$password = "9eb011d6";
$database = "heroku_282a2a9df7ad6a4";

$connect_DB = mysql_connect($hostname, $username, $password);
if (!$connect_DB) { 
    exit; 
}

mysql_select_db($database);
postDB();
mysql_close($connect_DB);

function postDB()
{
	$query = "INSERT INTO alarm (alarm_time, is_shock, is_motion, is_volume, message) values ("+
  "current_timestamp(), true, false, false, false, 'Shock sensor was triggered!'"+")";
	$result = mysql_query($query);
}
?>