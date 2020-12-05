<?php
//INTIALIZE
//env = developement,testing,production
$load = array('USE_DB' => false,'env' => 'developement');

if ($load['USE_DB'] == true) {
	$database = array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'database',
	);
	$mysql = mysqli_connect($database['host'],$database['username'],$database['password'],$database['database']);
}
