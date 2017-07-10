<?php
define('DB_NAME', 'vote');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not Connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die('Can\'t use ' .DB_NAME . ': ' . mysql_error());
}

$value = $_POST['femi'];
$value1 = $_POST['sunday'];
$value2 = $_POST['emeka'];
$value3 = $_POST['tobi'];
$value4 = $_POST['info'];

$sql = "INSERT INTO demo (femi, sunday, emeka, tobi, info) VALUES ('$value', '$value1', 'value3', 'value4')";

if (!mysql_query($sql)){
	die('Error: ' . mysql_error());
}


mysql_close();
?>