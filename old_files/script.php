<?php
define('DB_NAME', 'vote');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// if (!$link) {
// 	die('Could not Connect: ' . mysqli_error());
// }

// the below line only comes to play if you want to change the default database name, because the connect function contains the databse name parameter already.
// $db_selected = mysqli_select_db(DB_NAME, $link);

// if (!$db_selected){
// 	die('Can\'t use ' .DB_NAME . ': ' . mysqli_error());
// }


// $sql = "INSERT INTO demo (femi, sunday, emeka, tobi, info) VALUES ('$value', '$value1', 'value3', 'value4')";

// if (!mysql_query($sql)){
// 	die('Error: ' . mysql_error());
// }


// mysql_close();
// ?>