<?php
	$db = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'web'
	);

	$links = mysqli_connect($db['server'], $db['username'], $db['password'], $db['database']);
	// error_reporting(0);
	// $host = "localhost";
	// $user = "root";
	// $password = "";
	// $database = "web";
	// $links = mysql_connect($host, $user, $password);
	// mysqli_select_db($links, $database);
	// mysqli_set_charset($links, "utf8");

	if(!$links) {
		die('ket noi không thnah cong'. mysqli_connect_error($links));
	}
	// echo "thanh cong";
?>