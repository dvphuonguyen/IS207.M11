<?php
	// Define
	$hp_hostname = 'localhost';
	$hp_username = 'root';
	$hp_password = '';
	$hp_database = 'db_php_quanlythuvien';

	// Connect
	$connect = new mysqli($hp_hostname, $hp_username, $hp_password, $hp_database);
	if($connect->errno !== 0) {
		die("Error: Could not connect to the database. An error ".$connect->error." ocurred.");
	}
	// UTF-8
	$connect->set_charset('utf8');
