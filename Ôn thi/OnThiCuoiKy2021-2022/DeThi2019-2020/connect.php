<?php
// Define
$hp_hostname = 'localhost';
$hp_username = 'root';
$hp_password = '';
$hp_database = 'db_php_quanlythuexe';

// conn
$conn = new mysqli($hp_hostname, $hp_username, $hp_password, $hp_database);
if ($conn->errno !== 0) {
    die("Error: Could not connect to the database. An error " . $conn->error . " ocurred.");
}
// UTF-8
$conn->set_charset('utf8');